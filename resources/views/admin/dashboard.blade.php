@extends('layouts.admin')

@section('title', 'Dashboard Admin - BUMDes Juron')

@section('content')
<!-- Modern Dashboard Styles -->
<style>
    .village-shadow-lg {
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .village-border-gradient {
        border: 1px solid rgba(34, 197, 94, 0.2);
    }
    .village-hover-lift {
        transition: all 0.3s ease;
    }
    .village-hover-lift:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.15);
    }
    .village-text-shadow {
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .village-counter {
        font-size: 2.5rem;
        font-weight: 700;
        color: #166534;
    }
    .village-card {
        background: white;
        border-radius: 1rem;
        transition: all 0.3s ease;
    }
    .village-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.1);
    }
    .village-icon-bg {
        background: linear-gradient(135deg, #22c55e, #16a34a);
    }
    .village-icon-bg-blue {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
    }
    .village-icon-bg-amber {
        background: linear-gradient(135deg, #f59e0b, #d97706);
    }
    .village-icon-bg-purple {
        background: linear-gradient(135deg, #a855f7, #7c3aed);
    }
</style>

<!-- Modern Dashboard Container -->
<div class="min-h-screen bg-gradient-to-br from-village-green-50 via-village-cream-50 to-white">
    <!-- Modern Welcome Section -->
    <div class="px-6 pt-8 pb-6">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-8 mb-8 village-shadow-lg village-border-gradient village-hover-lift">
                <div class="flex items-center justify-between flex-wrap gap-6">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800 village-text-shadow mb-1" id="welcome-text">
                            Selamat Datang di Dashboard Admin
                        </h1>
                        <p class="text-gray-600">Kelola BUMDes Juron dengan mudah dan efisien</p>
                        <div class="flex items-center space-x-2 mt-2">
                            <div class="w-2 h-2 bg-village-green-500 rounded-full animate-pulse"></div>
                            <span class="text-village-green-600 text-sm font-medium">Sistem Aktif</span>
                        </div>
                    </div>
                    <div class="text-right bg-village-green-50 rounded-xl p-4">
                        <div class="text-village-green-700 text-sm font-medium mb-1">Hari ini</div>
                        <div class="text-2xl font-bold text-village-green-800" id="current-time"></div>
                        <div class="text-village-green-600 text-sm" id="current-date"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
        <!-- Unit Usaha Card -->
        <div class="village-card village-shadow-lg rounded-2xl p-6 village-border-gradient village-hover-lift">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 village-icon-bg rounded-xl flex items-center justify-center">
                    <i class="fas fa-store text-white text-lg"></i>
                </div>
                <div class="text-right">
                        <div class="village-counter" id="unitCount" data-target="{{ $unitsCount }}">0</div>
                        <div class="text-gray-500 text-sm">Unit</div>
                    </div>
            </div>
            <h3 class="text-gray-800 font-semibold text-lg mb-2">Unit Usaha</h3>
            <div class="flex items-center text-sm">
                <span class="text-village-green-600 font-medium">{{ $unitsCount }} Aktif</span>
                <span class="text-gray-400 ml-2">• {{ $unitsCount }} Total</span>
            </div>
            <div class="mt-3 bg-gray-200 rounded-full h-2">
                <div class="bg-gradient-to-r from-village-green-500 to-green-600 h-2 rounded-full transition-all duration-1000" style="width: 100%"></div>
            </div>
        </div>

        <!-- Pengurus Card -->
        <div class="village-card village-shadow-lg rounded-2xl p-6 village-border-gradient village-hover-lift">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 village-icon-bg rounded-xl flex items-center justify-center">
                    <i class="fas fa-users text-white text-lg"></i>
                </div>
                <div class="text-right">
                        <div class="village-counter" id="pengurusCount" data-target="{{ $positionsCount }}">0</div>
                        <div class="text-gray-500 text-sm">Pengurus</div>
                    </div>
            </div>
            <h3 class="text-gray-800 font-semibold text-lg mb-2">Pengurus</h3>
            <div class="flex items-center text-sm">
                <span class="text-village-green-600 font-medium">{{ $positionsCount }} Aktif</span>
                <span class="text-gray-400 ml-2">• {{ $positionsCount }} Total</span>
            </div>
            <div class="mt-3 bg-gray-200 rounded-full h-2">
                <div class="bg-gradient-to-r from-village-green-500 to-green-600 h-2 rounded-full transition-all duration-1000" style="width: 100%"></div>
            </div>
        </div>

        <!-- Dokumen Card -->
        <div class="village-card village-shadow-lg rounded-2xl p-6 village-border-gradient village-hover-lift">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 village-icon-bg-amber rounded-xl flex items-center justify-center">
                    <i class="fas fa-file-alt text-white text-lg"></i>
                </div>
                <div class="text-right">
                        <div class="village-counter" id="dokumenCount" data-target="{{ $documentsCount }}">0</div>
                        <div class="text-gray-500 text-sm">Dokumen</div>
                    </div>
            </div>
            <h3 class="text-gray-800 font-semibold text-lg mb-2">Dokumen</h3>
            <div class="flex items-center text-sm">
                <span class="text-village-green-600 font-medium">{{ $documentsCount }} Tersedia</span>
                <span class="text-gray-400 ml-2">• {{ $documentsCount }} Total</span>
            </div>
            <div class="mt-3 bg-gray-200 rounded-full h-2">
                <div class="bg-gradient-to-r from-amber-500 to-amber-600 h-2 rounded-full transition-all duration-1000" style="width: 100%"></div>
            </div>
        </div>

        <!-- Galeri Card -->
        <div class="village-card village-shadow-lg rounded-2xl p-6 village-border-gradient village-hover-lift">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 village-icon-bg-purple rounded-xl flex items-center justify-center">
                    <i class="fas fa-images text-white text-lg"></i>
                </div>
                <div class="text-right">
                        <div class="village-counter" id="galeriCount" data-target="{{ $galeriCount }}">0</div>
                        <div class="text-gray-500 text-sm">Foto</div>
                    </div>
            </div>
            <h3 class="text-gray-800 font-semibold text-lg mb-2">Galeri</h3>
            <div class="flex items-center text-sm">
                <span class="text-village-green-600 font-medium">{{ $galeriCount }} Foto</span>
                <span class="text-gray-400 ml-2">• {{ $galeriCount }} Total</span>
            </div>
            <div class="mt-3 bg-gray-200 rounded-full h-2">
                <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-2 rounded-full transition-all duration-1000" style="width: 100%"></div>
            </div>
        </div>
    </div>
    
    <!-- Modern Recent Activity & Quick Actions -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Recent Activity -->
            <div class="lg:col-span-2">
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-6 village-shadow-lg village-border-gradient village-hover-lift">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-bold text-gray-800 flex items-center village-text-shadow">
                            <i class="fas fa-history text-village-green-600 mr-3"></i>
                            Aktivitas Terbaru
                        </h2>
                        <button class="text-village-green-600 hover:text-village-green-700 text-sm font-medium transition-colors">
                            Lihat Semua →
                        </button>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-200 cursor-pointer village-hover-lift">
                            <div class="w-10 h-10 village-icon-bg rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-plus text-white text-sm"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-800 font-medium">Unit usaha baru ditambahkan</p>
                                <p class="text-gray-500 text-sm">Toko Kelontong Juron - 2 jam yang lalu</p>
                            </div>
                            <span class="text-gray-400 text-xs">2h</span>
                        </div>
                        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-200 cursor-pointer village-hover-lift">
                            <div class="w-10 h-10 village-icon-bg-blue rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-edit text-white text-sm"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-800 font-medium">Data pengurus diperbarui</p>
                                <p class="text-gray-500 text-sm">Bapak Suryanto - 5 jam yang lalu</p>
                            </div>
                            <span class="text-gray-400 text-xs">5h</span>
                        </div>
                        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-200 cursor-pointer village-hover-lift">
                            <div class="w-10 h-10 village-icon-bg-amber rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-file text-white text-sm"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-800 font-medium">Dokumen baru diunggah</p>
                                <p class="text-gray-500 text-sm">Laporan Keuangan Q1 2024 - 1 hari yang lalu</p>
                            </div>
                            <span class="text-gray-400 text-xs">1d</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div>
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-6 village-shadow-lg village-border-gradient village-hover-lift">
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center village-text-shadow">
                        <i class="fas fa-bolt text-village-green-600 mr-3"></i>
                        Aksi Cepat
                    </h2>
                    <div class="space-y-3">
                        <button onclick="window.location.href='{{ route('admin.units.create') }}'" class="w-full text-left p-4 bg-village-green-50 rounded-xl hover:bg-village-green-100 transition-all duration-200 border border-village-green-200 hover:border-village-green-300 group village-hover-lift">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 village-icon-bg rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                                    <i class="fas fa-plus text-white"></i>
                                </div>
                                <div>
                                    <p class="text-gray-800 font-medium">Tambah Unit Usaha</p>
                                    <p class="text-gray-600 text-sm">Buat unit usaha baru</p>
                                </div>
                            </div>
                        </button>
                        <button onclick="window.location.href='{{ route('admin.organization') }}'" class="w-full text-left p-4 bg-blue-50 rounded-xl hover:bg-blue-100 transition-all duration-200 border border-blue-200 hover:border-blue-300 group village-hover-lift">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 village-icon-bg-blue rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                                    <i class="fas fa-user-plus text-white"></i>
                                </div>
                                <div>
                                    <p class="text-gray-800 font-medium">Tambah Pengurus</p>
                                    <p class="text-gray-600 text-sm">Daftarkan pengurus baru</p>
                                </div>
                            </div>
                        </button>
                        <button onclick="window.location.href='{{ route('admin.documents') }}'" class="w-full text-left p-4 bg-amber-50 rounded-xl hover:bg-amber-100 transition-all duration-200 border border-amber-200 hover:border-amber-300 group village-hover-lift">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 village-icon-bg-amber rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                                    <i class="fas fa-upload text-white"></i>
                                </div>
                                <div>
                                    <p class="text-gray-800 font-medium">Unggah Dokumen</p>
                                    <p class="text-gray-600 text-sm">Upload dokumen baru</p>
                                </div>
                            </div>
                        </button>
                        <button onclick="window.location.href='{{ route('admin.units') }}'" class="w-full text-left p-4 bg-purple-50 rounded-xl hover:bg-purple-100 transition-all duration-200 border border-purple-200 hover:border-purple-300 group village-hover-lift">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 village-icon-bg-purple rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                                    <i class="fas fa-camera text-white"></i>
                                </div>
                                <div>
                                    <p class="text-gray-800 font-medium">Tambah Foto</p>
                                    <p class="text-gray-600 text-sm">Upload foto ke galeri</p>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>

@section('scripts')
<script>
    // Modern Counter Animation
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = target.toLocaleString();
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(start).toLocaleString();
            }
        }, 16);
    }

    // Animate counters on page load
    window.addEventListener('load', () => {
        setTimeout(() => {
            const unitCount = document.getElementById('unitCount');
            const pengurusCount = document.getElementById('pengurusCount');
            const dokumenCount = document.getElementById('dokumenCount');
            const galeriCount = document.getElementById('galeriCount');
            
            if (unitCount) animateCounter(unitCount, parseInt(unitCount.dataset.target) || 0);
            if (pengurusCount) animateCounter(pengurusCount, parseInt(pengurusCount.dataset.target) || 0);
            if (dokumenCount) animateCounter(dokumenCount, parseInt(dokumenCount.dataset.target) || 0);
            if (galeriCount) animateCounter(galeriCount, parseInt(galeriCount.dataset.target) || 0);
        }, 500);
    });

    // Current Date Display
    function updateDateTime() {
        const now = new Date();
        const options = { 
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit'
        };
        document.getElementById('currentDateTime').textContent = now.toLocaleDateString('id-ID', options);
    }
    
    updateDateTime();
    setInterval(updateDateTime, 60000);

    // Modern Hover Effects
    document.querySelectorAll('.village-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-4px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Modern Ripple Effect for Buttons
    document.querySelectorAll('button').forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(34, 197, 94, 0.3);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s linear;
                pointer-events: none;
            `;
            
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 600);
        });
    });

    // Scroll Animation
    function revealOnScroll() {
        const elements = document.querySelectorAll('.village-card');
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    }

    // Initialize scroll animation
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();

    // Modern Typing Effect for Welcome Message
    function typeWriter(element, text, speed = 50) {
        let i = 0;
        element.innerHTML = '';
        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }
        type();
    }

    // Apply typing effect
    window.addEventListener('load', () => {
        const welcomeElement = document.querySelector('.village-text-shadow');
        if (welcomeElement) {
            const originalText = welcomeElement.textContent;
            setTimeout(() => typeWriter(welcomeElement, originalText, 30), 1000);
        }
    });

    // Modern CSS Animation Keyframes
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
        
        .village-card {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.4s ease;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fadeInUp 0.6s ease-out;
        }
    `;
    document.head.appendChild(style);

    // Initialize animations
    setTimeout(() => {
        document.querySelectorAll('.village-card').forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
            card.classList.add('animate-fade-in');
        });
    }, 100);
</script>
@endsection
@endsection