<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - BUMDes Juron</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Premium Admin Login Styles */
        .admin-login-gradient {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            position: relative;
            overflow: hidden;
        }

        .admin-login-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 80%, rgba(16, 185, 129, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 40% 40%, rgba(139, 92, 246, 0.05) 0%, transparent 50%);
            animation: admin-float 6s ease-in-out infinite;
        }

        .admin-login-glass {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .admin-login-glass-light {
            background: rgba(30, 41, 59, 0.6);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .admin-text-gradient {
            background: linear-gradient(135deg, #10b981, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .admin-floating {
            animation: admin-float 6s ease-in-out infinite;
        }

        @keyframes admin-float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .admin-input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .admin-input {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            background: rgba(30, 41, 59, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .admin-input:focus {
            outline: none;
            border-color: rgba(16, 185, 129, 0.5);
            background: rgba(30, 41, 59, 0.6);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
        }

        .admin-input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .admin-input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.6);
            transition: color 0.3s ease;
        }

        .admin-input:focus + .admin-input-icon {
            color: #10b981;
        }

        .admin-btn-glow {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .admin-btn-glow::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: rotate(45deg);
            transition: all 0.5s ease;
            opacity: 0;
        }

        .admin-btn-glow:hover::before {
            opacity: 1;
            animation: admin-glow 0.5s ease;
        }

        @keyframes admin-glow {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .admin-error-shake {
            animation: admin-shake 0.5s ease-in-out;
        }

        @keyframes admin-shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        .admin-pulse-dot {
            width: 8px;
            height: 8px;
            background: #10b981;
            border-radius: 50%;
            animation: admin-pulse 2s infinite;
        }

        @keyframes admin-pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.2); opacity: 0.7; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body class="font-poppins bg-gradient-to-br from-village-green-50 to-village-cream-50 min-h-screen flex items-center justify-center p-4 overflow-hidden">
    <!-- Premium Loading Overlay -->
    <div id="loading-overlay" class="fixed inset-0 bg-gradient-to-br from-village-green-50 to-village-cream-50 z-50 flex items-center justify-center">
        <div class="text-center">
            <div class="w-20 h-20 border-4 border-village-green-600 border-t-transparent rounded-full animate-spin mx-auto mb-4"></div>
            <p class="text-village-green-700 text-lg font-semibold">Memuat Login...</p>
            <div class="flex space-x-2 mt-4 justify-center">
                <div class="w-2 h-2 bg-village-green-600 rounded-full animate-bounce"></div>
                <div class="w-2 h-2 bg-village-cream-600 rounded-full animate-bounce delay-100"></div>
                <div class="w-2 h-2 bg-village-green-500 rounded-full animate-bounce delay-200"></div>
            </div>
        </div>
    </div>

    <!-- Modern Animated Background Elements (Sesuai Home) -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-20 h-20 bg-village-green-200 rounded-full opacity-20 animate-bounce"></div>
        <div class="absolute bottom-32 right-16 w-16 h-16 bg-village-cream-400 rounded-full opacity-30 animate-bounce delay-1000"></div>
        <div class="absolute top-1/3 right-20 w-12 h-12 bg-village-green-300 rounded-full opacity-25 animate-pulse"></div>

        <!-- Additional floating elements -->
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-village-green-200/30 to-village-cream-300/30 rounded-full animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-village-cream-200/30 to-village-green-300/30 rounded-full animate-pulse delay-2000"></div>
    </div>

    <!-- Modern Login Container -->
    <div class="bg-white/90 backdrop-blur-sm rounded-3xl village-shadow-lg village-border-gradient border-2 village-hover-lift village-transition w-full max-w-md relative z-10">
        <!-- Modern Header -->
        <div class="text-center p-8 border-b border-village-green-100">
            <div class="w-24 h-24 bg-gradient-to-br from-village-green-100 to-village-cream-100 rounded-2xl mx-auto mb-6 flex items-center justify-center village-shadow-md">
                <i class="fas fa-building text-4xl text-village-green-700"></i>
            </div>
            <h2 class="text-3xl font-bold text-gray-800 mb-2 village-text-shadow">Admin Login</h2>
            <p class="text-gray-600">Masuk ke sistem manajemen BUMDes</p>
            <div class="w-16 h-1 bg-gradient-to-r from-village-green-500 to-village-cream-500 mx-auto mt-4 rounded-full"></div>

            <!-- Status Indicator -->
            <div class="mt-4 flex items-center justify-center space-x-2">
                <div class="admin-pulse-dot"></div>
                <span class="text-emerald-400 text-sm font-medium">Sistem Siap</span>
            </div>
        </div>

        <!-- Login Form -->
            <div class="p-8">
                @if($errors->any())
                    <div class="admin-error-shake mb-6 bg-red-500/20 backdrop-blur-lg border border-red-500/30 text-red-100 px-4 py-3 rounded-xl text-sm">
                        <div class="flex items-center">
                            <i class="fas fa-exclamation-triangle text-red-400 mr-2"></i>
                            <span>{{ $errors->first() }}</span>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.login') }}" class="p-8 space-y-6">
                    @csrf

                    <!-- Modern Email Input -->
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" name="email" id="email" required
                                   value="{{ old('email') }}"
                                   class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-village-green-500 focus:border-village-green-500 transition-all duration-200 bg-gray-50 focus:bg-white village-transition"
                                   placeholder="Masukkan email anda">
                        </div>
                    </div>

                    <!-- Modern Password Input -->
                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" name="password" id="password" required
                                   class="w-full pl-10 pr-12 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-village-green-500 focus:border-village-green-500 transition-all duration-200 bg-gray-50 focus:bg-white village-transition"
                                   placeholder="Masukkan password anda">
                            <button type="button" id="toggle-password"
                                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 text-village-green-600 border-gray-300 rounded focus:ring-village-green-500">
                        <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                    </label>
                    <a href="#" class="text-sm text-village-green-600 hover:text-village-green-700 transition-colors">Lupa password?</a>
                </div>

                <!-- Modern Login Button -->
                <button type="submit"
                        class="w-full py-3 bg-gradient-to-r from-village-green-600 to-green-700 text-white font-semibold rounded-xl hover:from-village-green-700 hover:to-green-800 focus:ring-4 focus:ring-village-green-500/50 focus:outline-none transition-all duration-200 transform hover:scale-[1.02] active:scale-98 village-shadow-lg village-hover-lift">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Masuk
                </button>
            </form>

            <!-- Modern Footer -->
            <div class="text-center mt-8 space-y-3">
                <div class="flex items-center justify-center space-x-2">
                    <i class="fas fa-leaf text-village-green-600"></i>
                    <span class="text-sm font-semibold text-gray-700 village-text-shadow">BUMDes Juron</span>
                    <span class="text-xs text-gray-500">•</span>
                    <span class="text-xs text-gray-600">Aman & Terpercaya</span>
                </div>
                <p class="text-xs text-gray-500 max-w-xs mx-auto">Dikelola oleh tim profesional untuk kesejahteraan masyarakat desa</p>
            </div>
        </div>

        <!-- Premium Footer -->
        <div class="admin-login-glass-light text-center py-6 px-8 rounded-b-3xl space-y-2">
            <div class="flex items-center justify-center space-x-2">
                <i class="fas fa-leaf text-emerald-400"></i>
                <span class="text-gradient-premium font-semibold">BUMDes Juron</span>
            </div>
            <p class="text-white/60 text-sm">
                &copy; {{ date('Y') }} - Meningkatkan Perekonomian Desa
            </p>
            <div class="flex justify-center space-x-2 text-xs text-white/40">
                <span><i class="fas fa-shield-alt"></i> Aman</span>
                <span>•</span>
                <span><i class="fas fa-lock"></i> Terpercaya</span>
            </div>
        </div>
    </div>

    <!-- Modern JavaScript -->
    <script>
        // Hide loading overlay when page loads
        window.addEventListener('load', function() {
            setTimeout(function() {
                const loadingOverlay = document.getElementById('loading-overlay');
                if (loadingOverlay) {
                    loadingOverlay.style.opacity = '0';
                    setTimeout(function() {
                        loadingOverlay.style.display = 'none';
                    }, 500);
                }
            }, 1000);
        });

        // Modern Password Toggle
        document.getElementById('toggle-password').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = this.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        });

        // Modern Form Validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (!email || !password) {
                e.preventDefault();

                // Modern shake animation
                const form = this;
                form.style.animation = 'none';
                form.offsetHeight; // Trigger reflow
                form.style.animation = 'shake 0.5s ease-in-out';

                // Focus on empty field
                if (!email) {
                    document.getElementById('email').focus();
                } else {
                    document.getElementById('password').focus();
                }
            }
        });

        // Modern Shake Animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
                20%, 40%, 60%, 80% { transform: translateX(5px); }
            }
        `;
        document.head.appendChild(style);

        // Modern Input Focus Effects
        document.querySelectorAll('input[type="email"], input[type="password"]').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-2px)';
                this.parentElement.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.2)';
            });

            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
                this.parentElement.style.boxShadow = 'none';
            });
        });

        // Modern Form Submit Animation
        document.querySelector('form').addEventListener('submit', function(e) {
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;

            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Memproses...';
            submitButton.disabled = true;

            // Re-enable after 3 seconds (for demo purposes)
            setTimeout(() => {
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }, 3000);
        });

        // Modern Floating Animation for Background Elements
        function createFloatingElement() {
            const element = document.createElement('div');
            const colors = ['from-emerald-500/10', 'from-blue-500/10', 'from-purple-500/10'];
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            const randomSize = Math.random() * 40 + 20;
            const randomLeft = Math.random() * 100;
            const randomDelay = Math.random() * 6;

            element.className = `absolute bg-gradient-to-br ${randomColor} to-transparent rounded-full admin-floating`;
            element.style.width = randomSize + 'px';
            element.style.height = randomSize + 'px';
            element.style.left = randomLeft + '%';
            element.style.top = '-50px';
            element.style.animationDelay = randomDelay + 's';
            element.style.animationDuration = (Math.random() * 4 + 4) + 's';

            document.body.appendChild(element);

            // Remove element after animation
            setTimeout(() => {
                element.remove();
            }, 8000);
        }

        // Create floating elements periodically
        setInterval(createFloatingElement, 3000);

        // Console welcome message
        console.log('%c🌾 BUMDes Juron Modern Admin Dashboard', 'color: #10b981; font-size: 16px; font-weight: bold;');
        console.log('%cSelamat datang di sistem administrasi modern!', 'color: #64748b; font-size: 12px;');
    </script>
</body>
</html>
