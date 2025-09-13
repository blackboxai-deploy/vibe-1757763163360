<!DOCTYPE html>
<html lang="tr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME . ' - ' . SITE_DESCRIPTION; ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : SITE_DESCRIPTION; ?>">
    <meta name="keywords" content="dating, sosyal ağ, eşleşme, chat, arkadaşlık, flört, buluşma">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : SITE_DESCRIPTION; ?>">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/og-image.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">
    <meta property="twitter:title" content="<?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?>">
    <meta property="twitter:description" content="<?php echo isset($page_description) ? $page_description : SITE_DESCRIPTION; ?>">
    <meta property="twitter:image" content="<?php echo SITE_URL; ?>/assets/images/og-image.jpg">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/site.webmanifest">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#fef7ff',
                            100: '#fdf2ff', 
                            200: '#fce5ff',
                            300: '#f9c8ff',
                            400: '#f49bff',
                            500: '#ed68ff',
                            600: '#de3df0',
                            700: '#c026d3',
                            800: '#a21caf',
                            900: '#86198f',
                        },
                        pink: {
                            50: '#fff0f5',
                            100: '#ffe4ec',
                            200: '#ffb6c1', 
                            300: '#ff69b4',
                            400: '#ff1493',
                            500: '#e91e63',
                            600: '#c2185b',
                            700: '#ad1457',
                            800: '#880e4f',
                            900: '#560027',
                        },
                        rose: {
                            50: '#fff1f2',
                            100: '#ffe4e6',
                            200: '#fecdd3',
                            300: '#fda4af',
                            400: '#fb7185',
                            500: '#f43f5e',
                            600: '#e11d48',
                            700: '#be123c',
                            800: '#9f1239',
                            900: '#881337',
                        }
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'ui-sans-serif', 'system-ui'],
                        'inter': ['Inter', 'ui-sans-serif', 'system-ui'],
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                        'gradient-conic': 'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
                        'pink-gradient': 'linear-gradient(135deg, #fff0f5 0%, #ffb6c1 50%, #ff69b4 100%)',
                        'rose-gradient': 'linear-gradient(135deg, #fff1f2 0%, #fecdd3 50%, #fb7185 100%)',
                        'love-gradient': 'linear-gradient(135deg, #fef7ff 0%, #f9c8ff 25%, #ed68ff 50%, #c026d3 75%, #86198f 100%)',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s ease-in-out infinite',
                        'bounce-slow': 'bounce 2s infinite',
                        'fadeIn': 'fadeIn 0.5s ease-in-out',
                        'slideIn': 'slideIn 0.3s ease-out',
                        'heartbeat': 'heartbeat 1.5s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideIn: {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(0)' },
                        },
                        heartbeat: {
                            '0%': { transform: 'scale(1)' },
                            '14%': { transform: 'scale(1.1)' },
                            '28%': { transform: 'scale(1)' },
                            '42%': { transform: 'scale(1.1)' },
                            '70%': { transform: 'scale(1)' },
                        }
                    },
                    backdropBlur: {
                        xs: '2px',
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <style>
        .glass-morphism {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 182, 193, 0.2);
        }
        
        .love-shadow {
            box-shadow: 0 10px 40px rgba(255, 105, 180, 0.3);
        }
        
        .heart-pulse {
            animation: heartbeat 1.5s ease-in-out infinite;
        }
        
        .swipe-card {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        
        .swipe-card:hover {
            transform: translateY(-5px);
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #fef7ff;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #ff69b4, #c026d3);
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #ff1493, #a21caf);
        }
    </style>
    
    <!-- AJAX and JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- PWA Manifest -->
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#ff69b4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="<?php echo SITE_NAME; ?>">
    
    <!-- Preload Critical Resources -->
    <link rel="preload" href="/assets/images/hero-bg.jpg" as="image">
    <link rel="dns-prefetch" href="//api.openai.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    
    <?php if (isset($additional_head_content)) echo $additional_head_content; ?>
</head>
<body class="h-full bg-gradient-to-br from-pink-50 via-rose-50 to-pink-100 font-sans">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-morphism shadow-lg transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <a href="/" class="flex items-center space-x-2 group">
                        <div class="w-10 h-10 bg-gradient-to-r from-pink-400 to-rose-500 rounded-xl flex items-center justify-center love-shadow group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white heart-pulse" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-bold bg-gradient-to-r from-pink-600 to-rose-600 bg-clip-text text-transparent">
                            <?php echo SITE_NAME; ?>
                        </span>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Authenticated Navigation -->
                        <a href="/dashboard.php" class="text-gray-700 hover:text-pink-600 font-medium transition-colors duration-200">Ana Sayfa</a>
                        <a href="/discover.php" class="text-gray-700 hover:text-pink-600 font-medium transition-colors duration-200">Keşfet</a>
                        <a href="/matches.php" class="text-gray-700 hover:text-pink-600 font-medium transition-colors duration-200">Eşleşmeler</a>
                        <a href="/chat.php" class="text-gray-700 hover:text-pink-600 font-medium transition-colors duration-200 relative">
                            Mesajlar
                            <span class="absolute -top-2 -right-2 bg-pink-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center" id="message-count">3</span>
                        </a>
                        
                        <!-- Profile Dropdown -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center space-x-2 text-gray-700 hover:text-pink-600 focus:outline-none">
                                <img src="<?php echo $_SESSION['profile_image'] ?? 'https://placehold.co/40x40?text=User+Avatar+Profile+Picture'; ?>" 
                                     alt="Profile" 
                                     class="w-8 h-8 rounded-full border-2 border-pink-300">
                                <span class="font-medium"><?php echo $_SESSION['first_name'] ?? 'User'; ?></span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            
                            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 glass-card rounded-lg shadow-xl py-2 z-50">
                                <a href="/profile.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-pink-600 transition-colors">Profilim</a>
                                <a href="/settings.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-pink-600 transition-colors">Ayarlar</a>
                                <?php if ($_SESSION['is_premium']): ?>
                                    <a href="/premium.php" class="block px-4 py-2 text-pink-600 font-medium hover:bg-pink-50 transition-colors">Premium</a>
                                <?php else: ?>
                                    <a href="/premium.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-pink-600 transition-colors">Premium'a Geç</a>
                                <?php endif; ?>
                                <hr class="my-2 border-pink-100">
                                <a href="/logout.php" class="block px-4 py-2 text-red-600 hover:bg-red-50 transition-colors">Çıkış Yap</a>
                            </div>
                        </div>
                        
                    <?php else: ?>
                        <!-- Guest Navigation -->
                        <a href="/login.php" class="text-gray-700 hover:text-pink-600 font-medium transition-colors duration-200">Giriş Yap</a>
                        <a href="/register.php" class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-6 py-2 rounded-full font-medium transition-all duration-200 love-shadow hover:scale-105">
                            Üye Ol
                        </a>
                    <?php endif; ?>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button type="button" class="text-gray-700 hover:text-pink-600 focus:outline-none" id="mobile-menu-button">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 glass-card mx-4 rounded-lg mt-2">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="/dashboard.php" class="block px-3 py-2 text-gray-700 hover:text-pink-600 font-medium">Ana Sayfa</a>
                    <a href="/discover.php" class="block px-3 py-2 text-gray-700 hover:text-pink-600 font-medium">Keşfet</a>
                    <a href="/matches.php" class="block px-3 py-2 text-gray-700 hover:text-pink-600 font-medium">Eşleşmeler</a>
                    <a href="/chat.php" class="block px-3 py-2 text-gray-700 hover:text-pink-600 font-medium">Mesajlar</a>
                    <a href="/profile.php" class="block px-3 py-2 text-gray-700 hover:text-pink-600 font-medium">Profilim</a>
                    <a href="/settings.php" class="block px-3 py-2 text-gray-700 hover:text-pink-600 font-medium">Ayarlar</a>
                    <a href="/logout.php" class="block px-3 py-2 text-red-600 font-medium">Çıkış Yap</a>
                <?php else: ?>
                    <a href="/login.php" class="block px-3 py-2 text-gray-700 hover:text-pink-600 font-medium">Giriş Yap</a>
                    <a href="/register.php" class="block px-3 py-2 bg-gradient-to-r from-pink-500 to-rose-500 text-white rounded-lg font-medium text-center">Üye Ol</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    
    <!-- Page Content Container -->
    <main class="pt-16 min-h-screen">

    <!-- Alpine.js for dropdown functionality -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Mobile menu toggle script -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('bg-white/90');
                navbar.classList.remove('bg-transparent');
            } else {
                navbar.classList.remove('bg-white/90');
                navbar.classList.add('bg-transparent');
            }
        });
    </script>