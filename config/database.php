<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'dating_network');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// Site Configuration
define('SITE_URL', 'http://localhost');
define('SITE_NAME', 'LoveConnect');
define('SITE_DESCRIPTION', 'Modern Dating & Social Network Platform');

// Security Configuration
define('JWT_SECRET', 'your-super-secure-jwt-secret-key-2024');
define('ENCRYPTION_KEY', 'your-encryption-key-32-chars-long');
define('CSRF_TOKEN_EXPIRY', 3600); // 1 hour

// File Upload Configuration
define('UPLOAD_PATH', 'uploads/');
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_IMAGE_TYPES', ['jpg', 'jpeg', 'png', 'gif', 'webp']);
define('MAX_PHOTOS_PER_USER', 9);

// API Configuration
define('CHATGPT_API_KEY', 'your-chatgpt-api-key');
define('CHATGPT_API_URL', 'https://api.openai.com/v1/chat/completions');

// Session Configuration
define('SESSION_LIFETIME', 86400); // 24 hours
define('REMEMBER_ME_LIFETIME', 2592000); // 30 days

// Bot Configuration
define('BOT_ACTIVITY_INTERVALS', [
    'morning' => ['08:00', '11:00'],
    'afternoon' => ['13:00', '17:00'],
    'evening' => ['19:00', '23:00']
]);
define('BOT_DAILY_ACTIVITIES', [
    'likes' => [5, 15],
    'visits' => [10, 25],
    'messages' => [3, 8],
    'posts' => [1, 3]
]);

// Premium Configuration
define('PREMIUM_PLANS', [
    'basic' => ['price' => 9.99, 'duration' => 30, 'features' => ['unlimited_likes', 'see_who_liked']],
    'premium' => ['price' => 19.99, 'duration' => 30, 'features' => ['all_basic', 'boost', 'super_likes']],
    'vip' => ['price' => 39.99, 'duration' => 30, 'features' => ['all_premium', 'incognito', 'priority_support']]
]);

// Email Configuration
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'your-email@gmail.com');
define('SMTP_PASSWORD', 'your-app-password');
define('FROM_EMAIL', 'noreply@loveconnect.com');
define('FROM_NAME', 'LoveConnect');

// Social Media API Configuration
define('FACEBOOK_APP_ID', 'your-facebook-app-id');
define('FACEBOOK_APP_SECRET', 'your-facebook-app-secret');
define('GOOGLE_CLIENT_ID', 'your-google-client-id');
define('GOOGLE_CLIENT_SECRET', 'your-google-client-secret');

// Notification Configuration
define('PUSH_NOTIFICATION_KEY', 'your-push-notification-key');
define('FIREBASE_SERVER_KEY', 'your-firebase-server-key');

// Location API
define('GEOLOCATION_API_KEY', 'your-geolocation-api-key');
define('DEFAULT_SEARCH_RADIUS', 50); // km

// Cache Configuration
define('CACHE_ENABLED', true);
define('CACHE_LIFETIME', 3600); // 1 hour
define('REDIS_HOST', 'localhost');
define('REDIS_PORT', 6379);

// Debug Configuration
define('DEBUG_MODE', true);
define('LOG_ERRORS', true);
define('LOG_FILE', 'logs/error.log');

// Timezone
date_default_timezone_set('Europe/Istanbul');

// Error Reporting
if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}
?>