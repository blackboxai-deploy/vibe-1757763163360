<?php
// Start session and include required files
session_start();
require_once 'config/database.php';
require_once 'includes/db_connection.php';

// Redirect if already logged in
if (isset($_SESSION['user_id'])) {
    header('Location: /dashboard.php');
    exit;
}

// Page meta information
$page_title = 'Üye Ol';
$page_description = 'LoveConnect\'e katıl ve gerçek aşkını bul. Ücretsiz kayıt ol, profil oluştur ve eşleşmeye başla.';

// Include header
require_once 'includes/header.php';
?>

<div class="min-h-screen bg-gradient-to-br from-pink-50 via-rose-50 to-pink-100 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Aşk Yolculuğun <span class="bg-gradient-to-r from-pink-600 to-rose-600 bg-clip-text text-transparent">Başlasın!</span>
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Milyonlarca kişi arasından sana uygun eşi bulmak için detaylı profilini oluştur
            </p>
        </div>

        <!-- Registration Form -->
        <div class="glass-card rounded-3xl p-8 love-shadow max-w-3xl mx-auto">
            <form id="registration-form" class="space-y-6">
                
                <!-- Step 1: Basic Info -->
                <div class="step-content" data-step="1">
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-900 mb-2">Temel Bilgiler</h2>
                        <p class="text-gray-600">Seni daha iyi tanımamız için temel bilgilerini paylaş</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Ad *</label>
                            <input type="text" name="first_name" required
                                   class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                                   placeholder="Adın">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Soyad *</label>
                            <input type="text" name="last_name" required
                                   class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                                   placeholder="Soyadın">
                        </div>
                        
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kullanıcı Adı *</label>
                            <input type="text" name="username" required
                                   class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                                   placeholder="Benzersiz kullanıcı adın">
                            <p class="mt-1 text-sm text-gray-500">Bu isimle profilinde görüneceksin</p>
                        </div>
                        
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">E-posta *</label>
                            <input type="email" name="email" required
                                   class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                                   placeholder="ornek@email.com">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Şifre *</label>
                            <input type="password" name="password" required
                                   class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                                   placeholder="En az 8 karakter">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Şifre Tekrar *</label>
                            <input type="password" name="password_confirm" required
                                   class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                                   placeholder="Şifreni tekrar gir">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Doğum Tarihi *</label>
                            <input type="date" name="birth_date" required
                                   class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Telefon</label>
                            <input type="tel" name="phone"
                                   class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                                   placeholder="+90 555 123 45 67">
                        </div>
                    </div>
                </div>

                <!-- Step 2: Gender & Preferences -->
                <div class="step-content hidden" data-step="2">
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-900 mb-2">Cinsiyet ve Tercihler</h2>
                        <p class="text-gray-600">Kim olduğun ve kimleri arıyorsun?</p>
                    </div>
                    
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-4">Cinsiyetin *</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <label class="flex items-center p-4 border-2 border-pink-200 rounded-xl cursor-pointer hover:border-pink-300 transition-colors gender-option">
                                    <input type="radio" name="gender" value="female" required class="sr-only">
                                    <div class="w-6 h-6 bg-pink-500 rounded-full mr-3 flex items-center justify-center">
                                        <div class="w-3 h-3 bg-white rounded-full hidden check"></div>
                                    </div>
                                    <span class="font-medium">Kadın</span>
                                </label>
                                
                                <label class="flex items-center p-4 border-2 border-pink-200 rounded-xl cursor-pointer hover:border-pink-300 transition-colors gender-option">
                                    <input type="radio" name="gender" value="male" required class="sr-only">
                                    <div class="w-6 h-6 bg-blue-500 rounded-full mr-3 flex items-center justify-center">
                                        <div class="w-3 h-3 bg-white rounded-full hidden check"></div>
                                    </div>
                                    <span class="font-medium">Erkek</span>
                                </label>
                                
                                <label class="flex items-center p-4 border-2 border-pink-200 rounded-xl cursor-pointer hover:border-pink-300 transition-colors gender-option">
                                    <input type="radio" name="gender" value="other" required class="sr-only">
                                    <div class="w-6 h-6 bg-purple-500 rounded-full mr-3 flex items-center justify-center">
                                        <div class="w-3 h-3 bg-white rounded-full hidden check"></div>
                                    </div>
                                    <span class="font-medium">Diğer</span>
                                </label>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-4">Kimleri Arıyorsun? *</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <label class="flex items-center p-4 border-2 border-pink-200 rounded-xl cursor-pointer hover:border-pink-300 transition-colors looking-option">
                                    <input type="radio" name="looking_for" value="male" required class="sr-only">
                                    <div class="w-6 h-6 bg-blue-500 rounded-full mr-3 flex items-center justify-center">
                                        <div class="w-3 h-3 bg-white rounded-full hidden check"></div>
                                    </div>
                                    <span class="font-medium">Erkek</span>
                                </label>
                                
                                <label class="flex items-center p-4 border-2 border-pink-200 rounded-xl cursor-pointer hover:border-pink-300 transition-colors looking-option">
                                    <input type="radio" name="looking_for" value="female" required class="sr-only">
                                    <div class="w-6 h-6 bg-pink-500 rounded-full mr-3 flex items-center justify-center">
                                        <div class="w-3 h-3 bg-white rounded-full hidden check"></div>
                                    </div>
                                    <span class="font-medium">Kadın</span>
                                </label>
                                
                                <label class="flex items-center p-4 border-2 border-pink-200 rounded-xl cursor-pointer hover:border-pink-300 transition-colors looking-option">
                                    <input type="radio" name="looking_for" value="both" required class="sr-only">
                                    <div class="w-6 h-6 bg-gradient-to-r from-pink-500 to-blue-500 rounded-full mr-3 flex items-center justify-center">
                                        <div class="w-3 h-3 bg-white rounded-full hidden check"></div>
                                    </div>
                                    <span class="font-medium">Her İkisi</span>
                                </label>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Şehir</label>
                            <input type="text" name="location"
                                   class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                                   placeholder="İstanbul">
                        </div>
                    </div>
                </div>

                <!-- Step 3: Profile Details -->
                <div class="step-content hidden" data-step="3">
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-900 mb-2">Profil Detayları</h2>
                        <p class="text-gray-600">Kendini tanıt ve öne çık!</p>
                    </div>
                    
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Biyografi</label>
                            <textarea name="bio" rows="4"
                                      class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200 resize-none"
                                      placeholder="Kendini kısaca tanıt... İlgi alanların, hobiler, hayallerinle ilgili..."></textarea>
                            <p class="mt-1 text-sm text-gray-500">500 karaktere kadar</p>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Boy (cm)</label>
                                <input type="number" name="height" min="120" max="250"
                                       class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                                       placeholder="170">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Eğitim Durumu</label>
                                <select name="education"
                                        class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200">
                                    <option value="">Seçiniz</option>
                                    <option value="high_school">Lise</option>
                                    <option value="associate">Ön Lisans</option>
                                    <option value="bachelor">Lisans</option>
                                    <option value="master">Yüksek Lisans</option>
                                    <option value="doctorate">Doktora</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Meslek</label>
                                <input type="text" name="occupation"
                                       class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                                       placeholder="Mühendis, Öğretmen, vb.">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">İlişki Türü</label>
                                <select name="relationship_type"
                                        class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200">
                                    <option value="serious">Ciddi İlişki</option>
                                    <option value="casual">Günlük Tanışma</option>
                                    <option value="friendship">Arkadaşlık</option>
                                    <option value="hookup">Eğlence</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Lifestyle -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">İçki İçme</label>
                                <select name="drinking"
                                        class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200">
                                    <option value="never">Hiç İçmem</option>
                                    <option value="sometimes">Bazen İçerim</option>
                                    <option value="regularly">Düzenli İçerim</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Sigara İçme</label>
                                <select name="smoking"
                                        class="w-full px-4 py-3 border border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200">
                                    <option value="never">Hiç İçmem</option>
                                    <option value="sometimes">Bazen İçerim</option>
                                    <option value="regularly">Düzenli İçerim</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Interests -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-4">İlgi Alanları</label>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                <?php 
                                $interests = [
                                    'sports' => 'Spor',
                                    'music' => 'Müzik', 
                                    'movies' => 'Sinema',
                                    'books' => 'Kitap',
                                    'travel' => 'Seyahat',
                                    'food' => 'Yemek',
                                    'art' => 'Sanat',
                                    'photography' => 'Fotoğrafçılık',
                                    'gaming' => 'Oyun',
                                    'nature' => 'Doğa',
                                    'technology' => 'Teknoloji',
                                    'fashion' => 'Moda'
                                ];
                                
                                foreach ($interests as $key => $value): ?>
                                    <label class="flex items-center p-3 border border-pink-200 rounded-lg cursor-pointer hover:border-pink-300 transition-colors interest-option">
                                        <input type="checkbox" name="interests[]" value="<?php echo $key; ?>" class="sr-only">
                                        <div class="w-5 h-5 border-2 border-pink-300 rounded mr-2 flex items-center justify-center check-box">
                                            <svg class="w-3 h-3 text-pink-500 hidden check-mark" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm"><?php echo $value; ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 4: Photos -->
                <div class="step-content hidden" data-step="4">
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-900 mb-2">Fotoğraf Yükle</h2>
                        <p class="text-gray-600">En az 2 fotoğraf yükle ki insanlar seni daha iyi tanısın</p>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4" id="photo-grid">
                            <!-- Photo upload slots will be generated by JavaScript -->
                        </div>
                        
                        <div class="bg-pink-50 border border-pink-200 rounded-xl p-4">
                            <h4 class="font-medium text-pink-800 mb-2">Fotoğraf İpuçları:</h4>
                            <ul class="text-sm text-pink-700 space-y-1">
                                <li>• Yüzün net görünen fotoğraflar kullan</li>
                                <li>• Güler yüzlü ve doğal fotoğraflar tercih et</li>
                                <li>• Farklı açılardan çekilmiş fotoğraflar ekle</li>
                                <li>• Grup fotoğraflarından kaçın</li>
                                <li>• En sevdiğin fotoğrafı ana fotoğraf yap</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Step Navigation -->
                <div class="flex justify-between pt-8 border-t border-pink-200">
                    <button type="button" id="prev-step" 
                            class="px-6 py-3 border border-pink-300 text-pink-600 rounded-xl font-medium hover:bg-pink-50 transition-colors duration-200 hidden">
                        Önceki
                    </button>
                    
                    <div class="flex space-x-2">
                        <div class="step-indicator active" data-step="1"></div>
                        <div class="step-indicator" data-step="2"></div>
                        <div class="step-indicator" data-step="3"></div>
                        <div class="step-indicator" data-step="4"></div>
                    </div>
                    
                    <button type="button" id="next-step" 
                            class="px-6 py-3 bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white rounded-xl font-medium transition-all duration-200 love-shadow">
                        Sonraki
                    </button>
                    
                    <button type="submit" id="submit-btn"
                            class="px-6 py-3 bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white rounded-xl font-medium transition-all duration-200 love-shadow hidden">
                        Kayıt Ol
                    </button>
                </div>

                <!-- Terms & Privacy -->
                <div class="pt-4 text-center">
                    <label class="flex items-center justify-center space-x-2">
                        <input type="checkbox" name="terms_accepted" required
                               class="w-4 h-4 text-pink-600 border-pink-300 rounded focus:ring-pink-500">
                        <span class="text-sm text-gray-600">
                            <a href="/terms.php" class="text-pink-600 hover:text-pink-700">Kullanım Şartları</a> ve 
                            <a href="/privacy.php" class="text-pink-600 hover:text-pink-700">Gizlilik Politikası</a>'nı kabul ediyorum
                        </span>
                    </label>
                </div>
            </form>
        </div>
        
        <!-- Login Link -->
        <div class="text-center mt-8">
            <p class="text-gray-600">
                Zaten hesabın var mı? 
                <a href="/login.php" class="text-pink-600 hover:text-pink-700 font-medium">Giriş Yap</a>
            </p>
        </div>
        
        <!-- Social Login -->
        <div class="max-w-md mx-auto mt-8">
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-gradient-to-br from-pink-50 via-rose-50 to-pink-100 text-gray-500">Veya</span>
                </div>
            </div>
            
            <div class="mt-6 space-y-3">
                <button class="w-full flex items-center justify-center px-4 py-3 border border-gray-300 rounded-xl text-gray-700 bg-white hover:bg-gray-50 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    Google ile Kayıt Ol
                </button>
                
                <button class="w-full flex items-center justify-center px-4 py-3 border border-gray-300 rounded-xl text-gray-700 bg-white hover:bg-gray-50 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-3 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    Facebook ile Kayıt Ol
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Registration JavaScript -->
<script>
let currentStep = 1;
const totalSteps = 4;

// Step indicators
const stepIndicators = document.querySelectorAll('.step-indicator');
const stepContents = document.querySelectorAll('.step-content');
const nextBtn = document.getElementById('next-step');
const prevBtn = document.getElementById('prev-step');
const submitBtn = document.getElementById('submit-btn');

// Initialize step indicators
stepIndicators.forEach(indicator => {
    const step = parseInt(indicator.dataset.step);
    indicator.className = `step-indicator w-3 h-3 rounded-full transition-all duration-200 ${step === 1 ? 'bg-pink-500' : 'bg-gray-300'}`;
});

// Step navigation functions
function showStep(step) {
    stepContents.forEach(content => {
        content.classList.add('hidden');
        if (parseInt(content.dataset.step) === step) {
            content.classList.remove('hidden');
        }
    });
    
    stepIndicators.forEach(indicator => {
        const indicatorStep = parseInt(indicator.dataset.step);
        if (indicatorStep <= step) {
            indicator.className = 'step-indicator w-3 h-3 rounded-full bg-pink-500 transition-all duration-200';
        } else {
            indicator.className = 'step-indicator w-3 h-3 rounded-full bg-gray-300 transition-all duration-200';
        }
    });
    
    // Show/hide navigation buttons
    if (step === 1) {
        prevBtn.classList.add('hidden');
    } else {
        prevBtn.classList.remove('hidden');
    }
    
    if (step === totalSteps) {
        nextBtn.classList.add('hidden');
        submitBtn.classList.remove('hidden');
    } else {
        nextBtn.classList.remove('hidden');
        submitBtn.classList.add('hidden');
    }
}

// Next step
nextBtn.addEventListener('click', function() {
    if (validateStep(currentStep)) {
        currentStep++;
        if (currentStep > totalSteps) currentStep = totalSteps;
        showStep(currentStep);
    }
});

// Previous step
prevBtn.addEventListener('click', function() {
    currentStep--;
    if (currentStep < 1) currentStep = 1;
    showStep(currentStep);
});

// Validate current step
function validateStep(step) {
    const currentStepElement = document.querySelector(`[data-step="${step}"]`);
    const requiredFields = currentStepElement.querySelectorAll('input[required], select[required]');
    
    let isValid = true;
    requiredFields.forEach(field => {
        if (!field.value && field.type !== 'radio' && field.type !== 'checkbox') {
            field.classList.add('border-red-500');
            isValid = false;
        } else {
            field.classList.remove('border-red-500');
        }
        
        // Special validation for radio groups
        if (field.type === 'radio') {
            const radioGroup = document.querySelectorAll(`input[name="${field.name}"]`);
            const hasSelection = Array.from(radioGroup).some(radio => radio.checked);
            if (!hasSelection) {
                radioGroup.forEach(radio => {
                    radio.closest('.gender-option, .looking-option')?.classList.add('border-red-500');
                });
                isValid = false;
            } else {
                radioGroup.forEach(radio => {
                    radio.closest('.gender-option, .looking-option')?.classList.remove('border-red-500');
                });
            }
        }
    });
    
    if (!isValid) {
        Swal.fire({
            icon: 'warning',
            title: 'Eksik Bilgi!',
            text: 'Lütfen zorunlu alanları doldurun.',
            confirmButtonColor: '#ff69b4'
        });
    }
    
    return isValid;
}

// Custom radio button styling
document.querySelectorAll('.gender-option, .looking-option').forEach(option => {
    option.addEventListener('click', function() {
        const input = this.querySelector('input[type="radio"]');
        const groupName = input.name;
        
        // Remove active state from all options in the group
        document.querySelectorAll(`input[name="${groupName}"]`).forEach(radio => {
            radio.closest('.gender-option, .looking-option').classList.remove('border-pink-500', 'bg-pink-50');
            radio.closest('.gender-option, .looking-option').querySelector('.check').classList.add('hidden');
        });
        
        // Add active state to selected option
        this.classList.add('border-pink-500', 'bg-pink-50');
        this.querySelector('.check').classList.remove('hidden');
        
        input.checked = true;
    });
});

// Custom checkbox styling for interests
document.querySelectorAll('.interest-option').forEach(option => {
    option.addEventListener('click', function() {
        const input = this.querySelector('input[type="checkbox"]');
        const checkBox = this.querySelector('.check-box');
        const checkMark = this.querySelector('.check-mark');
        
        if (input.checked) {
            input.checked = false;
            this.classList.remove('border-pink-500', 'bg-pink-50');
            checkBox.classList.remove('bg-pink-500', 'border-pink-500');
            checkMark.classList.add('hidden');
        } else {
            input.checked = true;
            this.classList.add('border-pink-500', 'bg-pink-50');
            checkBox.classList.add('bg-pink-500', 'border-pink-500');
            checkMark.classList.remove('hidden');
        }
    });
});

// Photo upload functionality
function initPhotoUpload() {
    const photoGrid = document.getElementById('photo-grid');
    const maxPhotos = 6;
    
    for (let i = 0; i < maxPhotos; i++) {
        const photoSlot = document.createElement('div');
        photoSlot.className = 'photo-slot aspect-square border-2 border-dashed border-pink-300 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:border-pink-400 transition-colors duration-200 relative overflow-hidden';
        photoSlot.innerHTML = `
            <input type="file" accept="image/*" class="hidden photo-input" data-index="${i}">
            <div class="upload-placeholder text-center">
                <svg class="w-12 h-12 text-pink-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <p class="text-sm text-pink-600 font-medium">${i === 0 ? 'Ana Fotoğraf' : 'Fotoğraf Ekle'}</p>
            </div>
            <img class="hidden w-full h-full object-cover photo-preview" alt="Preview">
            <button type="button" class="hidden absolute top-2 right-2 w-6 h-6 bg-red-500 text-white rounded-full text-xs remove-photo">×</button>
        `;
        
        photoGrid.appendChild(photoSlot);
        
        // Click to upload
        photoSlot.addEventListener('click', function() {
            if (!this.querySelector('.photo-preview').classList.contains('hidden')) return;
            this.querySelector('.photo-input').click();
        });
        
        // File input change
        photoSlot.querySelector('.photo-input').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const slot = photoSlot;
                    const preview = slot.querySelector('.photo-preview');
                    const placeholder = slot.querySelector('.upload-placeholder');
                    const removeBtn = slot.querySelector('.remove-photo');
                    
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                    removeBtn.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        });
        
        // Remove photo
        photoSlot.querySelector('.remove-photo').addEventListener('click', function(e) {
            e.stopPropagation();
            const slot = this.closest('.photo-slot');
            const preview = slot.querySelector('.photo-preview');
            const placeholder = slot.querySelector('.upload-placeholder');
            const input = slot.querySelector('.photo-input');
            
            preview.classList.add('hidden');
            placeholder.classList.remove('hidden');
            this.classList.add('hidden');
            input.value = '';
        });
    }
}

// Initialize photo upload when step 4 is shown
document.addEventListener('DOMContentLoaded', function() {
    initPhotoUpload();
});

// Form submission
document.getElementById('registration-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    if (!validateStep(currentStep)) {
        return;
    }
    
    showLoading();
    
    const formData = new FormData(this);
    
    // Add photo files
    document.querySelectorAll('.photo-input').forEach((input, index) => {
        if (input.files[0]) {
            formData.append(`photo_${index}`, input.files[0]);
            if (index === 0) {
                formData.append('primary_photo', '1');
            }
        }
    });
    
    $.ajax({
        url: '/api/auth/register.php',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            hideLoading();
            
            Swal.fire({
                icon: 'success',
                title: 'Kayıt Başarılı! 🎉',
                text: 'Hoş geldin! Profilin oluşturuldu ve şimdi keşfetmeye başlayabilirsin.',
                confirmButtonColor: '#ff69b4',
                confirmButtonText: 'Keşfetmeye Başla!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/dashboard.php';
                }
            });
        },
        error: function(xhr) {
            hideLoading();
            
            let errorMessage = 'Kayıt sırasında bir hata oluştu.';
            if (xhr.responseJSON && xhr.responseJSON.message) {
                errorMessage = xhr.responseJSON.message;
            }
            
            Swal.fire({
                icon: 'error',
                title: 'Kayıt Başarısız!',
                text: errorMessage,
                confirmButtonColor: '#ff69b4'
            });
        }
    });
});

// Password strength indicator
document.querySelector('input[name="password"]').addEventListener('input', function() {
    const password = this.value;
    let strength = 0;
    
    if (password.length >= 8) strength++;
    if (/[A-Z]/.test(password)) strength++;
    if (/[a-z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[^A-Za-z0-9]/.test(password)) strength++;
    
    let strengthText = '';
    let strengthColor = '';
    
    switch (strength) {
        case 0:
        case 1:
            strengthText = 'Zayıf';
            strengthColor = 'text-red-500';
            break;
        case 2:
        case 3:
            strengthText = 'Orta';
            strengthColor = 'text-yellow-500';
            break;
        case 4:
        case 5:
            strengthText = 'Güçlü';
            strengthColor = 'text-green-500';
            break;
    }
    
    let strengthIndicator = this.parentNode.querySelector('.strength-indicator');
    if (!strengthIndicator && password.length > 0) {
        strengthIndicator = document.createElement('p');
        strengthIndicator.className = `strength-indicator mt-1 text-sm ${strengthColor}`;
        this.parentNode.appendChild(strengthIndicator);
    }
    
    if (strengthIndicator) {
        if (password.length === 0) {
            strengthIndicator.remove();
        } else {
            strengthIndicator.textContent = `Şifre Gücü: ${strengthText}`;
            strengthIndicator.className = `strength-indicator mt-1 text-sm ${strengthColor}`;
        }
    }
});
</script>

<?php require_once 'includes/footer.php'; ?>