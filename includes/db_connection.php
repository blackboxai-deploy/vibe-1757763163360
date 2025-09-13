<?php
require_once 'config/database.php';

class Database {
    private static $instance = null;
    private $connection;
    
    private function __construct() {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
            
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_PERSISTENT => true,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . DB_CHARSET
            ];
            
            $this->connection = new PDO($dsn, DB_USER, DB_PASS, $options);
            
        } catch (PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            die("Database connection failed. Please try again later.");
        }
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->connection;
    }
    
    // Prevent cloning of the instance
    private function __clone() {}
    
    // Prevent unserialization of the instance
    public function __wakeup() {
        throw new Exception("Cannot unserialize singleton");
    }
    
    // Execute query with parameters
    public function query($sql, $params = []) {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            error_log("Query failed: " . $e->getMessage() . " | SQL: " . $sql);
            throw new Exception("Database query failed");
        }
    }
    
    // Fetch single row
    public function fetch($sql, $params = []) {
        $stmt = $this->query($sql, $params);
        return $stmt->fetch();
    }
    
    // Fetch all rows
    public function fetchAll($sql, $params = []) {
        $stmt = $this->query($sql, $params);
        return $stmt->fetchAll();
    }
    
    // Get last insert ID
    public function lastInsertId() {
        return $this->connection->lastInsertId();
    }
    
    // Begin transaction
    public function beginTransaction() {
        return $this->connection->beginTransaction();
    }
    
    // Commit transaction
    public function commit() {
        return $this->connection->commit();
    }
    
    // Rollback transaction
    public function rollback() {
        return $this->connection->rollback();
    }
    
    // Escape string for SQL
    public function escape($string) {
        return $this->connection->quote($string);
    }
    
    // Check if table exists
    public function tableExists($table) {
        try {
            $sql = "SELECT 1 FROM `$table` LIMIT 1";
            $this->query($sql);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    // Create tables if they don't exist
    public function createTables() {
        $tables = [
            "users" => "
                CREATE TABLE IF NOT EXISTS `users` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `username` varchar(50) UNIQUE NOT NULL,
                    `email` varchar(100) UNIQUE NOT NULL,
                    `password_hash` varchar(255) NOT NULL,
                    `first_name` varchar(50) NOT NULL,
                    `last_name` varchar(50) NOT NULL,
                    `phone` varchar(20),
                    `birth_date` date,
                    `gender` enum('male','female','other') NOT NULL,
                    `looking_for` enum('male','female','both') NOT NULL,
                    `location` varchar(100),
                    `latitude` decimal(10, 8),
                    `longitude` decimal(11, 8),
                    `profile_image` varchar(255),
                    `is_verified` tinyint(1) DEFAULT 0,
                    `is_premium` tinyint(1) DEFAULT 0,
                    `premium_expires` datetime NULL,
                    `is_bot` tinyint(1) DEFAULT 0,
                    `last_seen` datetime,
                    `is_online` tinyint(1) DEFAULT 0,
                    `status` enum('active','suspended','deleted') DEFAULT 'active',
                    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
                    `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    PRIMARY KEY (`id`),
                    INDEX `idx_location` (`latitude`, `longitude`),
                    INDEX `idx_gender_looking` (`gender`, `looking_for`),
                    INDEX `idx_status` (`status`),
                    INDEX `idx_is_bot` (`is_bot`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
            ",
            
            "user_profiles" => "
                CREATE TABLE IF NOT EXISTS `user_profiles` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `user_id` int(11) NOT NULL,
                    `bio` text,
                    `height` int(3),
                    `education` varchar(100),
                    `occupation` varchar(100),
                    `relationship_type` enum('serious','casual','friendship','hookup') DEFAULT 'serious',
                    `drinking` enum('never','sometimes','regularly') DEFAULT 'sometimes',
                    `smoking` enum('never','sometimes','regularly') DEFAULT 'never',
                    `interests` json,
                    `languages` json,
                    `personality_traits` json,
                    `instagram_url` varchar(255),
                    `facebook_url` varchar(255),
                    `spotify_url` varchar(255),
                    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
                    `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    PRIMARY KEY (`id`),
                    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
                    UNIQUE KEY `unique_user_profile` (`user_id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
            ",
            
            "user_photos" => "
                CREATE TABLE IF NOT EXISTS `user_photos` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `user_id` int(11) NOT NULL,
                    `photo_url` varchar(255) NOT NULL,
                    `is_primary` tinyint(1) DEFAULT 0,
                    `order_index` int(2) DEFAULT 0,
                    `is_verified` tinyint(1) DEFAULT 0,
                    `uploaded_at` timestamp DEFAULT CURRENT_TIMESTAMP,
                    PRIMARY KEY (`id`),
                    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
                    INDEX `idx_user_primary` (`user_id`, `is_primary`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
            ",
            
            "matches" => "
                CREATE TABLE IF NOT EXISTS `matches` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `user1_id` int(11) NOT NULL,
                    `user2_id` int(11) NOT NULL,
                    `matched_at` timestamp DEFAULT CURRENT_TIMESTAMP,
                    `is_active` tinyint(1) DEFAULT 1,
                    PRIMARY KEY (`id`),
                    FOREIGN KEY (`user1_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
                    FOREIGN KEY (`user2_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
                    UNIQUE KEY `unique_match` (`user1_id`, `user2_id`),
                    INDEX `idx_user_matches` (`user1_id`, `is_active`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
            ",
            
            "likes" => "
                CREATE TABLE IF NOT EXISTS `likes` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `liker_id` int(11) NOT NULL,
                    `liked_id` int(11) NOT NULL,
                    `is_super_like` tinyint(1) DEFAULT 0,
                    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
                    PRIMARY KEY (`id`),
                    FOREIGN KEY (`liker_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
                    FOREIGN KEY (`liked_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
                    UNIQUE KEY `unique_like` (`liker_id`, `liked_id`),
                    INDEX `idx_liked_user` (`liked_id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
            ",
            
            "messages" => "
                CREATE TABLE IF NOT EXISTS `messages` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `sender_id` int(11) NOT NULL,
                    `receiver_id` int(11) NOT NULL,
                    `message` text,
                    `message_type` enum('text','image','audio','video','gif') DEFAULT 'text',
                    `media_url` varchar(255),
                    `is_read` tinyint(1) DEFAULT 0,
                    `sent_at` timestamp DEFAULT CURRENT_TIMESTAMP,
                    `read_at` timestamp NULL,
                    PRIMARY KEY (`id`),
                    FOREIGN KEY (`sender_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
                    FOREIGN KEY (`receiver_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
                    INDEX `idx_conversation` (`sender_id`, `receiver_id`),
                    INDEX `idx_unread` (`receiver_id`, `is_read`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
            ",
            
            "posts" => "
                CREATE TABLE IF NOT EXISTS `posts` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `user_id` int(11) NOT NULL,
                    `content` text,
                    `media_url` varchar(255),
                    `media_type` enum('image','video') NULL,
                    `privacy` enum('public','friends','private') DEFAULT 'public',
                    `likes_count` int(11) DEFAULT 0,
                    `comments_count` int(11) DEFAULT 0,
                    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
                    `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    PRIMARY KEY (`id`),
                    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
                    INDEX `idx_user_posts` (`user_id`, `privacy`),
                    INDEX `idx_created_at` (`created_at`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
            ",
            
            "bot_activities" => "
                CREATE TABLE IF NOT EXISTS `bot_activities` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `bot_id` int(11) NOT NULL,
                    `activity_type` enum('like','visit','message','post','online') NOT NULL,
                    `target_user_id` int(11),
                    `activity_data` json,
                    `scheduled_at` datetime,
                    `executed_at` datetime,
                    `status` enum('pending','executed','failed') DEFAULT 'pending',
                    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
                    PRIMARY KEY (`id`),
                    FOREIGN KEY (`bot_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
                    FOREIGN KEY (`target_user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
                    INDEX `idx_bot_schedule` (`bot_id`, `scheduled_at`, `status`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
            "
        ];
        
        foreach ($tables as $tableName => $sql) {
            try {
                $this->query($sql);
                echo "Table '$tableName' created successfully.<br>";
            } catch (Exception $e) {
                error_log("Failed to create table '$tableName': " . $e->getMessage());
                echo "Failed to create table '$tableName'.<br>";
            }
        }
    }
}

// Initialize database connection
$db = Database::getInstance();
?>