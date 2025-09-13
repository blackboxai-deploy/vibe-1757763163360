    </main>
    
    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-pink-500/20 to-rose-500/20"></div>
            <svg class="absolute top-0 right-0 w-64 h-64 transform translate-x-32 -translate-y-16" viewBox="0 0 100 100" fill="none">
                <circle cx="50" cy="50" r="40" fill="url(#footerGradient)" />
                <defs>
                    <linearGradient id="footerGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#ff69b4;stop-opacity:0.3" />
                        <stop offset="100%" style="stop-color:#c026d3;stop-opacity:0.1" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Brand Column -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-pink-500 to-rose-600 rounded-xl flex items-center justify-center love-shadow">
                            <svg class="w-7 h-7 text-white heart-pulse" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold bg-gradient-to-r from-pink-400 to-rose-400 bg-clip-text text-transparent">
                                <?php echo SITE_NAME; ?>
                            </h3>
                            <p class="text-gray-400 text-sm"><?php echo SITE_DESCRIPTION; ?></p>
                        </div>
                    </div>
                    
                    <p class="text-gray-300 mb-6 leading-relaxed max-w-md">
                        Gerçek aşkı bulmanın en modern yolu. Akıllı eşleşme algoritması, güvenli sohbet ortamı ve samimi bir topluluk ile hayalindeki kişiyle tanışmaya hazır mısın?
                    </p>
                    
                    <!-- Social Media Links -->
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-pink-600 hover:bg-pink-700 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 love-shadow">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-pink-600 hover:bg-pink-700 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 love-shadow">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-pink-600 hover:bg-pink-700 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 love-shadow">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.719-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.222.083.343-.09.383-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-pink-600 hover:bg-pink-700 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 love-shadow">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-6 text-pink-400">Hızlı Erişim</h4>
                    <ul class="space-y-3">
                        <li><a href="/discover.php" class="text-gray-300 hover:text-pink-400 transition-colors duration-200 flex items-center group">
                            <span class="w-2 h-2 bg-pink-400 rounded-full mr-3 group-hover:scale-125 transition-transform duration-200"></span>
                            Keşfet
                        </a></li>
                        <li><a href="/matches.php" class="text-gray-300 hover:text-pink-400 transition-colors duration-200 flex items-center group">
                            <span class="w-2 h-2 bg-pink-400 rounded-full mr-3 group-hover:scale-125 transition-transform duration-200"></span>
                            Eşleşmelerim
                        </a></li>
                        <li><a href="/chat.php" class="text-gray-300 hover:text-pink-400 transition-colors duration-200 flex items-center group">
                            <span class="w-2 h-2 bg-pink-400 rounded-full mr-3 group-hover:scale-125 transition-transform duration-200"></span>
                            Mesajlar
                        </a></li>
                        <li><a href="/premium.php" class="text-gray-300 hover:text-pink-400 transition-colors duration-200 flex items-center group">
                            <span class="w-2 h-2 bg-gradient-to-r from-yellow-400 to-pink-400 rounded-full mr-3 group-hover:scale-125 transition-transform duration-200"></span>
                            Premium
                        </a></li>
                        <li><a href="/events.php" class="text-gray-300 hover:text-pink-400 transition-colors duration-200 flex items-center group">
                            <span class="w-2 h-2 bg-pink-400 rounded-full mr-3 group-hover:scale-125 transition-transform duration-200"></span>
                            Etkinlikler
                        </a></li>
                    </ul>
                </div>
                
                <!-- Support & Legal -->
                <div>
                    <h4 class="text-lg font-semibold mb-6 text-pink-400">Destek & Yasal</h4>
                    <ul class="space-y-3">
                        <li><a href="/help.php" class="text-gray-300 hover:text-pink-400 transition-colors duration-200 flex items-center group">
                            <span class="w-2 h-2 bg-pink-400 rounded-full mr-3 group-hover:scale-125 transition-transform duration-200"></span>
                            Yardım Merkezi
                        </a></li>
                        <li><a href="/safety.php" class="text-gray-300 hover:text-pink-400 transition-colors duration-200 flex items-center group">
                            <span class="w-2 h-2 bg-pink-400 rounded-full mr-3 group-hover:scale-125 transition-transform duration-200"></span>
                            Güvenlik
                        </a></li>
                        <li><a href="/privacy.php" class="text-gray-300 hover:text-pink-400 transition-colors duration-200 flex items-center group">
                            <span class="w-2 h-2 bg-pink-400 rounded-full mr-3 group-hover:scale-125 transition-transform duration-200"></span>
                            Gizlilik Politikası
                        </a></li>
                        <li><a href="/terms.php" class="text-gray-300 hover:text-pink-400 transition-colors duration-200 flex items-center group">
                            <span class="w-2 h-2 bg-pink-400 rounded-full mr-3 group-hover:scale-125 transition-transform duration-200"></span>
                            Kullanım Şartları
                        </a></li>
                        <li><a href="/contact.php" class="text-gray-300 hover:text-pink-400 transition-colors duration-200 flex items-center group">
                            <span class="w-2 h-2 bg-pink-400 rounded-full mr-3 group-hover:scale-125 transition-transform duration-200"></span>
                            İletişim
                        </a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Newsletter Subscription -->
            <div class="mt-12 pt-8 border-t border-gray-700">
                <div class="max-w-md mx-auto text-center lg:text-left lg:mx-0">
                    <h4 class="text-lg font-semibold mb-4 text-pink-400">💌 Aşk Habercisi</h4>
                    <p class="text-gray-300 mb-4">En yeni özellikler, dating ipuçları ve özel fırsatlar için bültenimize katıl!</p>
                    
                    <form class="flex flex-col sm:flex-row gap-3" id="newsletter-form">
                        <div class="flex-1">
                            <input type="email" 
                                   placeholder="E-posta adresin" 
                                   required
                                   class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200">
                        </div>
                        <button type="submit" 
                                class="px-6 py-3 bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white font-medium rounded-lg transition-all duration-200 love-shadow hover:scale-105 whitespace-nowrap">
                            Katıl 💕
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Stats -->
            <div class="mt-12 pt-8 border-t border-gray-700">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                    <div class="space-y-2">
                        <div class="text-2xl font-bold text-pink-400" id="total-users">1,245,678</div>
                        <div class="text-sm text-gray-400">Mutlu Üye</div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-2xl font-bold text-rose-400" id="total-matches">892,341</div>
                        <div class="text-sm text-gray-400">Eşleşme</div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-2xl font-bold text-purple-400" id="total-messages">15,678,234</div>
                        <div class="text-sm text-gray-400">Mesaj</div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-2xl font-bold text-yellow-400" id="success-stories">23,456</div>
                        <div class="text-sm text-gray-400">Aşk Hikayesi</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Bar -->
        <div class="bg-gray-900/50 backdrop-blur-sm border-t border-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <div class="text-gray-400 text-sm">
                        © <?php echo date('Y'); ?> <span class="font-semibold text-pink-400"><?php echo SITE_NAME; ?></span>. Tüm hakları saklıdır. ❤️ ile Türkiye'de yapıldı.
                    </div>
                    
                    <div class="flex items-center space-x-6">
                        <div class="flex items-center space-x-2 text-sm text-gray-400">
                            <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                            <span>Sistem Aktif</span>
                        </div>
                        
                        <div class="text-sm text-gray-400">
                            v2.1.0
                        </div>
                        
                        <!-- Language Selector -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center space-x-1 text-sm text-gray-400 hover:text-pink-400 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 0a9 9 0 019-9m-9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                                <span>TR</span>
                            </button>
                            
                            <div x-show="open" @click.away="open = false" class="absolute bottom-full right-0 mb-2 w-32 glass-card rounded-lg shadow-xl py-2">
                                <a href="?lang=tr" class="block px-3 py-2 text-sm text-gray-700 hover:bg-pink-50 hover:text-pink-600 flex items-center">
                                    🇹🇷 Türkçe
                                </a>
                                <a href="?lang=en" class="block px-3 py-2 text-sm text-gray-700 hover:bg-pink-50 hover:text-pink-600 flex items-center">
                                    🇺🇸 English
                                </a>
                                <a href="?lang=de" class="block px-3 py-2 text-sm text-gray-700 hover:bg-pink-50 hover:text-pink-600 flex items-center">
                                    🇩🇪 Deutsch
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Back to Top Button -->
    <button id="back-to-top" 
            class="fixed bottom-8 right-8 w-12 h-12 bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 invisible love-shadow z-50">
        <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
        </svg>
    </button>
    
    <!-- Loading Overlay -->
    <div id="loading-overlay" class="fixed inset-0 bg-gradient-to-br from-pink-900/90 to-rose-900/90 backdrop-blur-sm z-50 hidden">
        <div class="flex items-center justify-center h-full">
            <div class="text-center">
                <div class="w-16 h-16 border-4 border-pink-300 border-t-pink-600 rounded-full animate-spin mb-4 mx-auto"></div>
                <p class="text-white font-medium">Yükleniyor...</p>
            </div>
        </div>
    </div>
    
    <!-- Global JavaScript -->
    <script>
        // Back to top functionality
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.add('opacity-0', 'invisible');
                backToTopButton.classList.remove('opacity-100', 'visible');
            }
        });
        
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
        // Newsletter form
        document.getElementById('newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            // AJAX request would go here
            Swal.fire({
                icon: 'success',
                title: 'Teşekkürler! 💕',
                text: 'Bültenimize başarıyla kaydoldun!',
                confirmButtonColor: '#ff69b4'
            });
            
            this.reset();
        });
        
        // Counter animation
        function animateCounters() {
            const counters = document.querySelectorAll('[id^="total-"], [id^="success-"]');
            
            counters.forEach(counter => {
                const target = parseInt(counter.textContent.replace(/,/g, ''));
                const increment = target / 200;
                let current = 0;
                
                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        counter.textContent = Math.floor(current).toLocaleString();
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target.toLocaleString();
                    }
                };
                
                updateCounter();
            });
        }
        
        // Trigger counter animation when footer is visible
        const footer = document.querySelector('footer');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        });
        
        if (footer) {
            observer.observe(footer);
        }
        
        // Global loading functions
        window.showLoading = function() {
            document.getElementById('loading-overlay').classList.remove('hidden');
        };
        
        window.hideLoading = function() {
            document.getElementById('loading-overlay').classList.add('hidden');
        };
        
        // Global AJAX error handler
        $(document).ajaxError(function(event, xhr, settings, thrownError) {
            hideLoading();
            
            let errorMessage = 'Bir hata oluştu. Lütfen tekrar deneyin.';
            
            if (xhr.responseJSON && xhr.responseJSON.message) {
                errorMessage = xhr.responseJSON.message;
            }
            
            Swal.fire({
                icon: 'error',
                title: 'Hata!',
                text: errorMessage,
                confirmButtonColor: '#ff69b4'
            });
        });
        
        // PWA Installation
        let deferredPrompt;
        
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;
            
            // Show install banner
            const installBanner = document.createElement('div');
            installBanner.innerHTML = `
                <div class="fixed top-20 left-4 right-4 bg-gradient-to-r from-pink-500 to-rose-500 text-white p-4 rounded-lg shadow-lg z-40 md:left-auto md:right-4 md:w-80">
                    <div class="flex items-center justify-between">
                        <div class="flex-1">
                            <p class="font-medium">Uygulamayı İndir</p>
                            <p class="text-sm opacity-90">Telefona yükle, daha hızlı erişim!</p>
                        </div>
                        <div class="flex space-x-2 ml-4">
                            <button onclick="installPWA()" class="bg-white text-pink-600 px-3 py-1 rounded font-medium text-sm">Yükle</button>
                            <button onclick="this.closest('div').remove()" class="text-white/70 hover:text-white">×</button>
                        </div>
                    </div>
                </div>
            `;
            
            document.body.appendChild(installBanner);
            
            // Auto hide after 10 seconds
            setTimeout(() => {
                if (installBanner.parentNode) {
                    installBanner.remove();
                }
            }, 10000);
        });
        
        window.installPWA = function() {
            if (deferredPrompt) {
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then((choiceResult) => {
                    deferredPrompt = null;
                });
            }
        };
    </script>
    
    <!-- Service Worker Registration -->
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/sw.js')
                    .then(function(registration) {
                        console.log('SW registered: ', registration);
                    })
                    .catch(function(registrationError) {
                        console.log('SW registration failed: ', registrationError);
                    });
            });
        }
    </script>
    
    <?php if (isset($additional_footer_content)) echo $additional_footer_content; ?>
</body>
</html>