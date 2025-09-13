<?php
// Start session and include required files
session_start();
require_once 'config/database.php';
require_once 'includes/db_connection.php';

// Page meta information
$page_title = 'Ana Sayfa';
$page_description = 'Türkiye\'nin en popüler dating ve sosyal ağ platformu. Gerçek aşkı bul, yeni insanlarla tanış, anlamlı ilişkiler kur.';

// Include header
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-pink-50 via-rose-50 to-pink-100 min-h-screen flex items-center">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Floating Hearts -->
        <div class="absolute top-20 left-10 w-8 h-8 text-pink-300 animate-float">
            <svg fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="absolute top-40 right-20 w-6 h-6 text-rose-300 animate-float" style="animation-delay: 2s;">
            <svg fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="absolute bottom-40 left-20 w-10 h-10 text-pink-200 animate-float" style="animation-delay: 4s;">
            <svg fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
            </svg>
        </div>
        
        <!-- Gradient Orbs -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-pink-200 to-rose-300 rounded-full opacity-20 -translate-y-48 translate-x-48"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-rose-200 to-pink-300 rounded-full opacity-25 translate-y-40 -translate-x-40"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Content -->
            <div class="text-center lg:text-left space-y-8 animate-fadeIn">
                <div class="space-y-4">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight">
                        <span class="bg-gradient-to-r from-pink-600 via-rose-500 to-pink-600 bg-clip-text text-transparent">
                            Gerçek Aşkı
                        </span>
                        <br>
                        <span class="text-gray-900">Bulmanın Zamanı!</span>
                    </h1>
                    
                    <p class="text-xl text-gray-600 leading-relaxed max-w-2xl">
                        Akıllı eşleşme algoritması ile seni anlayan birini bul. Milyonlarca kişi arasından 
                        <span class="font-semibold text-pink-600">tam uyumlu</span> eşini keşfet!
                    </p>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="/register.php" class="group bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 love-shadow hover:scale-105 flex items-center justify-center space-x-2">
                        <span>Hemen Başla</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    
                    <a href="#features" class="group border-2 border-pink-300 hover:border-pink-400 text-pink-600 hover:text-pink-700 px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 hover:bg-pink-50 flex items-center justify-center space-x-2">
                        <span>Nasıl Çalışır?</span>
                        <svg class="w-5 h-5 group-hover:translate-y-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </a>
                </div>
                
                <!-- Social Proof -->
                <div class="pt-8 border-t border-pink-100">
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-8">
                        <div class="flex items-center space-x-4">
                            <div class="flex -space-x-2">
                                <img src="https://placehold.co/40x40?text=Happy+User+Profile+Picture" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
                                <img src="https://placehold.co/40x40?text=Smiling+Woman+Dating+Profile" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
                                <img src="https://placehold.co/40x40?text=Handsome+Man+Dating+Avatar" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
                                <img src="https://placehold.co/40x40?text=Beautiful+Girl+Profile+Photo" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
                            </div>
                            <div class="text-left">
                                <div class="text-sm font-semibold text-gray-900">1.2M+ Mutlu Üye</div>
                                <div class="text-xs text-gray-600">Bu hafta 25,847 yeni eşleşme</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-1">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-600 ml-2">4.8/5 (48,392 değerlendirme)</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Hero Image -->
            <div class="relative animate-fadeIn" style="animation-delay: 0.3s;">
                <div class="relative">
                    <!-- Main Hero Image -->
                    <div class="relative z-10">
                        <img src="https://placehold.co/600x700?text=Romantic+Couple+Happy+Together+Dating+Love+Modern+Lifestyle" 
                             alt="Mutlu çift, dating app, aşk, romantik" 
                             class="w-full h-auto rounded-3xl love-shadow">
                    </div>
                    
                    <!-- Floating Cards -->
                    <div class="absolute -top-6 -left-6 glass-card rounded-2xl p-4 animate-float z-20">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Eşleştin! 💕</div>
                                <div class="text-sm text-gray-600">Ahmet ile %95 uyum</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute -bottom-6 -right-6 glass-card rounded-2xl p-4 animate-float z-20" style="animation-delay: 2s;">
                        <div class="flex items-center space-x-3">
                            <img src="https://placehold.co/48x48?text=New+Message+Profile+Avatar" alt="Message" class="w-12 h-12 rounded-full">
                            <div>
                                <div class="font-semibold text-gray-900">Yeni Mesaj</div>
                                <div class="text-sm text-gray-600">Merhaba! Nasılsın? 😊</div>
                            </div>
                            <div class="w-3 h-3 bg-pink-500 rounded-full animate-pulse"></div>
                        </div>
                    </div>
                    
                    <div class="absolute top-1/2 -left-12 transform -translate-y-1/2 glass-card rounded-2xl p-4 animate-float z-20" style="animation-delay: 4s;">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-pink-600">127</div>
                            <div class="text-sm text-gray-600">Beğeni</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Neden <span class="bg-gradient-to-r from-pink-600 to-rose-600 bg-clip-text text-transparent"><?php echo SITE_NAME; ?></span>?
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Modern teknoloji ile geleneksel aşk arayışını birleştiren benzersiz özelliklerimiz
            </p>
        </div>
        
        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Smart Matching -->
            <div class="group text-center p-8 rounded-3xl bg-gradient-to-br from-pink-50 to-rose-50 hover:from-pink-100 hover:to-rose-100 transition-all duration-300 love-shadow hover:scale-105">
                <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-rose-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Akıllı Eşleşme</h3>
                <p class="text-gray-600 leading-relaxed">
                    AI destekli algoritma ile kişilik analizi yaparak %95'e varan uyumluluk oranı ile eşleşmeler bulur.
                </p>
            </div>
            
            <!-- Real-time Chat -->
            <div class="group text-center p-8 rounded-3xl bg-gradient-to-br from-pink-50 to-rose-50 hover:from-pink-100 hover:to-rose-100 transition-all duration-300 love-shadow hover:scale-105">
                <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-rose-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Gerçek Zamanlı Sohbet</h3>
                <p class="text-gray-600 leading-relaxed">
                    Hızlı ve güvenli mesajlaşma sistemi ile anında iletişim kurun. Emoji, fotoğraf, ses mesajı desteği.
                </p>
            </div>
            
            <!-- Video Profiles -->
            <div class="group text-center p-8 rounded-3xl bg-gradient-to-br from-pink-50 to-rose-50 hover:from-pink-100 hover:to-rose-100 transition-all duration-300 love-shadow hover:scale-105">
                <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-rose-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Video Profiller</h3>
                <p class="text-gray-600 leading-relaxed">
                    Kişiliğinizi video ile tanıtın. Gerçek sizi göstermenin en etkili yolu ile öne çıkın.
                </p>
            </div>
            
            <!-- Safety First -->
            <div class="group text-center p-8 rounded-3xl bg-gradient-to-br from-pink-50 to-rose-50 hover:from-pink-100 hover:to-rose-100 transition-all duration-300 love-shadow hover:scale-105">
                <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-rose-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Güvenlik Önceliği</h3>
                <p class="text-gray-600 leading-relaxed">
                    Kimlik doğrulama, fotoğraf kontrolü ve 7/24 moderasyon ile güvenli bir ortam sağlıyoruz.
                </p>
            </div>
            
            <!-- Location Based -->
            <div class="group text-center p-8 rounded-3xl bg-gradient-to-br from-pink-50 to-rose-50 hover:from-pink-100 hover:to-rose-100 transition-all duration-300 love-shadow hover:scale-105">
                <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-rose-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Konum Tabanlı</h3>
                <p class="text-gray-600 leading-relaxed">
                    Yakınlarınızdaki kişilerle tanışın. Mesafe ayarları ile aradığınız yakınlıkta eşleşmeler bulun.
                </p>
            </div>
            
            <!-- Premium Features -->
            <div class="group text-center p-8 rounded-3xl bg-gradient-to-br from-yellow-50 to-pink-50 hover:from-yellow-100 hover:to-pink-100 transition-all duration-300 love-shadow hover:scale-105 relative overflow-hidden">
                <!-- Premium Badge -->
                <div class="absolute top-4 right-4 bg-gradient-to-r from-yellow-400 to-pink-400 text-white px-2 py-1 rounded-full text-xs font-semibold">
                    PREMIUM
                </div>
                
                <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Premium Özellikler</h3>
                <p class="text-gray-600 leading-relaxed">
                    Sınırsız beğeni, süper like, kim beni beğendi ve daha fazlası ile öne çıkın.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-20 bg-gradient-to-br from-pink-50 via-rose-50 to-pink-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Nasıl Çalışır?
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Sadece 3 basit adımda aşkınızla tanışın
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="text-center relative">
                <div class="relative z-10">
                    <div class="w-20 h-20 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full flex items-center justify-center mx-auto mb-6 love-shadow">
                        <span class="text-2xl font-bold text-white">1</span>
                    </div>
                    <div class="glass-card rounded-2xl p-8 space-y-4">
                        <img src="https://placehold.co/300x200?text=Create+Profile+Dating+Registration+Form" 
                             alt="Profil oluştur" 
                             class="w-full h-48 object-cover rounded-xl">
                        <h3 class="text-xl font-semibold text-gray-900">Profilini Oluştur</h3>
                        <p class="text-gray-600">
                            En iyi fotoğraflarını ekle, kendini tanıt ve ilgi alanlarını paylaş. İlk izlenim çok önemli!
                        </p>
                    </div>
                </div>
                
                <!-- Arrow -->
                <div class="hidden md:block absolute top-10 right-0 transform translate-x-1/2 z-0">
                    <svg class="w-24 h-12 text-pink-300" fill="currentColor" viewBox="0 0 100 50">
                        <path d="M0 25 Q50 0 80 25 Q50 50 0 25" stroke="currentColor" stroke-width="2" fill="none"/>
                        <polygon points="75,20 85,25 75,30" fill="currentColor"/>
                    </svg>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div class="text-center relative">
                <div class="relative z-10">
                    <div class="w-20 h-20 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full flex items-center justify-center mx-auto mb-6 love-shadow">
                        <span class="text-2xl font-bold text-white">2</span>
                    </div>
                    <div class="glass-card rounded-2xl p-8 space-y-4">
                        <img src="https://placehold.co/300x200?text=Discover+Swipe+Match+Dating+Cards" 
                             alt="Keşfet ve eşleş" 
                             class="w-full h-48 object-cover rounded-xl">
                        <h3 class="text-xl font-semibold text-gray-900">Keşfet & Eşleş</h3>
                        <p class="text-gray-600">
                            Akıllı algoritma sayesinde sana uygun kişileri keşfet. Beğen, süper like at veya geç.
                        </p>
                    </div>
                </div>
                
                <!-- Arrow -->
                <div class="hidden md:block absolute top-10 right-0 transform translate-x-1/2 z-0">
                    <svg class="w-24 h-12 text-pink-300" fill="currentColor" viewBox="0 0 100 50">
                        <path d="M0 25 Q50 0 80 25 Q50 50 0 25" stroke="currentColor" stroke-width="2" fill="none"/>
                        <polygon points="75,20 85,25 75,30" fill="currentColor"/>
                    </svg>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full flex items-center justify-center mx-auto mb-6 love-shadow">
                    <span class="text-2xl font-bold text-white">3</span>
                </div>
                <div class="glass-card rounded-2xl p-8 space-y-4">
                    <img src="https://placehold.co/300x200?text=Chat+Message+Love+Communication" 
                         alt="Sohbet et ve tanış" 
                         class="w-full h-48 object-cover rounded-xl">
                    <h3 class="text-xl font-semibold text-gray-900">Sohbet Et & Tanış</h3>
                    <p class="text-gray-600">
                        Eşleştiğin kişilerle sohbet et, tanış ve gerçek hayatta buluşma planları yap.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Başarı Hikayeleri
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Gerçek çiftlerin <?php echo SITE_NAME; ?> sayesinde yaşadığı aşk hikayeleri
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Story 1 -->
            <div class="glass-card rounded-3xl p-8 space-y-6 hover:scale-105 transition-transform duration-300">
                <div class="flex items-center space-x-4">
                    <img src="https://placehold.co/60x60?text=Happy+Couple+Success+Story+Profile" alt="Ayşe & Mehmet" class="w-15 h-15 rounded-full">
                    <div>
                        <h4 class="font-semibold text-gray-900">Ayşe & Mehmet</h4>
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <blockquote class="text-gray-600 italic leading-relaxed">
                    "6 ay önce eşleştik ve şimdi nişanlıyız! Algoritma gerçekten çok başarılı, ortak ilgi alanlarımız çok fazlaydı. Teşekkürler <?php echo SITE_NAME; ?>! 💕"
                </blockquote>
                <div class="flex items-center space-x-2 text-sm text-gray-500">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>İstanbul</span>
                    <span>•</span>
                    <span>6 ay önce</span>
                </div>
            </div>
            
            <!-- Story 2 -->
            <div class="glass-card rounded-3xl p-8 space-y-6 hover:scale-105 transition-transform duration-300">
                <div class="flex items-center space-x-4">
                    <img src="https://placehold.co/60x60?text=Love+Story+Dating+Success+Couple" alt="Zeynep & Can" class="w-15 h-15 rounded-full">
                    <div>
                        <h4 class="font-semibold text-gray-900">Zeynep & Can</h4>
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <blockquote class="text-gray-600 italic leading-relaxed">
                    "Uzun mesafe ilişkisiydi ama değdi! Şimdi aynı şehirde yaşıyoruz ve çok mutluyuz. Video profil özelliği çok faydalıydı. ❤️"
                </blockquote>
                <div class="flex items-center space-x-2 text-sm text-gray-500">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Ankara</span>
                    <span>•</span>
                    <span>1 yıl önce</span>
                </div>
            </div>
            
            <!-- Story 3 -->
            <div class="glass-card rounded-3xl p-8 space-y-6 hover:scale-105 transition-transform duration-300">
                <div class="flex items-center space-x-4">
                    <img src="https://placehold.co/60x60?text=Romance+Dating+Match+Success+Story" alt="Elif & Burak" class="w-15 h-15 rounded-full">
                    <div>
                        <h4 class="font-semibold text-gray-900">Elif & Burak</h4>
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <blockquote class="text-gray-600 italic leading-relaxed">
                    "İlk buluşmamız çok güzeldi! Mesajlaştığımız kadar gerçekte de uyumluyduk. 3 aydır birlikte ve çok mutluyuz. 🥰"
                </blockquote>
                <div class="flex items-center space-x-2 text-sm text-gray-500">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>İzmir</span>
                    <span>•</span>
                    <span>3 ay önce</span>
                </div>
            </div>
        </div>
        
        <!-- More Stories Button -->
        <div class="text-center mt-12">
            <a href="/success-stories.php" class="inline-flex items-center space-x-2 text-pink-600 hover:text-pink-700 font-medium text-lg group">
                <span>Daha Fazla Hikaye Oku</span>
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-pink-500 via-rose-500 to-pink-600 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-pink-600/20 to-transparent"></div>
        <svg class="absolute bottom-0 right-0 w-64 h-64 text-white/10" fill="currentColor" viewBox="0 0 100 100">
            <path d="M50 10 L90 90 L10 90 Z"/>
        </svg>
        <div class="absolute top-10 right-10 w-20 h-20 border-4 border-white/20 rounded-full animate-pulse"></div>
        <div class="absolute bottom-20 left-10 w-16 h-16 border-4 border-white/20 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="space-y-8">
            <div class="space-y-4">
                <h2 class="text-4xl sm:text-5xl font-bold text-white">
                    Aşkın Seni Bekliyor!
                </h2>
                <p class="text-xl text-pink-100 max-w-2xl mx-auto leading-relaxed">
                    Milyonlarca kişi arasından sana özel eşleşmeleri keşfet. Bugün kaydol, yarın aşkınla tanış!
                </p>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="/register.php" class="group bg-white hover:bg-gray-50 text-pink-600 px-10 py-4 rounded-full font-bold text-lg transition-all duration-300 love-shadow hover:scale-105 flex items-center space-x-3">
                    <span>Ücretsiz Başla</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                
                <div class="flex items-center space-x-4 text-pink-100">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Tamamen Ücretsiz</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Gizli Bilgi Yok</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Anında Aktif</span>
                    </div>
                </div>
            </div>
            
            <!-- App Download -->
            <div class="pt-8">
                <p class="text-pink-200 mb-4">Mobil uygulamayı da indir!</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="inline-flex items-center space-x-2 bg-black hover:bg-gray-900 text-white px-6 py-3 rounded-lg transition-colors duration-200">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.24 2.31-.93 3.57-.84 1.51.12 2.65.72 3.4 1.8-3.12 1.87-2.38 5.98.48 7.13-.57 1.5-1.31 2.99-2.54 4.09l.01-.01zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.29 2.58-2.34 4.5-3.74 4.25z"/>
                        </svg>
                        <div class="text-left">
                            <div class="text-xs">Download on the</div>
                            <div class="text-sm font-semibold">App Store</div>
                        </div>
                    </a>
                    
                    <a href="#" class="inline-flex items-center space-x-2 bg-black hover:bg-gray-900 text-white px-6 py-3 rounded-lg transition-colors duration-200">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.53,12.9 20.18,13.18L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z"/>
                        </svg>
                        <div class="text-left">
                            <div class="text-xs">Get it on</div>
                            <div class="text-sm font-semibold">Google Play</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>