<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - BUMDes Juron</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            --accent-gradient: linear-gradient(135deg, #10b981, #3b82f6, #8b5cf6);
            --glass-bg: rgba(15, 23, 42, 0.8);
            --glass-border: rgba(255, 255, 255, 0.1);
            --glass-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--primary-gradient);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Premium Background Effects */
        .premium-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .premium-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 80%, rgba(16, 185, 129, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(59, 130, 246, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(139, 92, 246, 0.1) 0%, transparent 50%);
            animation: float 8s ease-in-out infinite;
        }

        .floating-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float-particle 15s infinite linear;
        }

        /* Premium Login Container */
        .premium-login-container {
            width: 100%;
            max-width: 440px;
            margin: 20px;
            position: relative;
        }

        .premium-glass {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            box-shadow: var(--glass-shadow);
            border-radius: 24px;
            overflow: hidden;
            position: relative;
        }

        .premium-glass::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(59, 130, 246, 0.1), rgba(139, 92, 246, 0.1));
            opacity: 0.2;
            z-index: -1;
        }

        /* Header Section */
        .login-header {
            padding: 40px 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .logo-container {
            width: 90px;
            height: 90px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.2), rgba(59, 130, 246, 0.2));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .logo-container::before {
            content: '';
            position: absolute;
            inset: 1px;
            background: rgba(15, 23, 42, 0.8);
            border-radius: 19px;
        }

        .logo-container i {
            font-size: 2.5rem;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            z-index: 1;
        }

        .logo-img {
            width: 56px;
            height: 56px;
            object-fit: contain;
            position: relative;
            z-index: 1;
        }

        .title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 8px;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.7);
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .status-indicator {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 20px;
        }

        .pulse-dot {
            width: 8px;
            height: 8px;
            background: #10b981;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        .status-text {
            color: #10b981;
            font-size: 0.875rem;
            font-weight: 500;
        }

        /* Form Section */
        .login-form {
            padding: 0 40px 30px;
        }

        .form-group {
            margin-bottom: 24px;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.875rem;
            font-weight: 500;
        }

        .input-container {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 16px 16px 16px 48px;
            background: rgba(30, 41, 59, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: rgba(16, 185, 129, 0.5);
            background: rgba(30, 41, 59, 0.6);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.6);
            transition: color 0.3s ease;
        }

        .form-input:focus + .input-icon {
            color: #10b981;
        }

        .toggle-password {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: rgba(255, 255, 255, 0.6);
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .toggle-password:hover {
            color: rgba(255, 255, 255, 0.9);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .checkbox {
            width: 18px;
            height: 18px;
            accent-color: #10b981;
            cursor: pointer;
        }

        .checkbox-label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.875rem;
            cursor: pointer;
        }

        .forgot-password {
            color: rgba(16, 185, 129, 0.8);
            font-size: 0.875rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #10b981;
        }

        .submit-btn {
            width: 100%;
            padding: 16px;
            background: var(--accent-gradient);
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .submit-btn:hover::before {
            left: 100%;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .submit-btn i {
            margin-right: 8px;
        }

        /* Footer Section */
        .login-footer {
            padding: 24px 40px;
            background: rgba(30, 41, 59, 0.6);
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-bottom: 8px;
        }

        .brand i {
            color: #10b981;
        }

        .brand-text {
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 600;
        }

        .copyright {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.875rem;
            margin-bottom: 8px;
        }

        .security-info {
            display: flex;
            justify-content: center;
            gap: 16px;
            color: rgba(255, 255, 255, 0.4);
            font-size: 0.75rem;
        }

        .security-item {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        /* Error Message */
        .error-message {
            background: rgba(239, 68, 68, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: rgba(255, 255, 255, 0.9);
            padding: 12px 16px;
            border-radius: 12px;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 8px;
            animation: shake 0.5s ease-in-out;
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(1deg); }
        }

        @keyframes float-particle {
            0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.2); opacity: 0.7; }
            100% { transform: scale(1); opacity: 1; }
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }

        /* Loading Overlay */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--primary-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }

        .loading-content {
            text-align: center;
        }

        .loading-spinner {
            width: 60px;
            height: 60px;
            border: 4px solid rgba(16, 185, 129, 0.3);
            border-top: 4px solid #10b981;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 16px;
        }

        .loading-text {
            color: white;
            font-size: 1.125rem;
            margin-bottom: 16px;
        }

        .loading-dots {
            display: flex;
            justify-content: center;
            gap: 4px;
        }

        .loading-dot {
            width: 8px;
            height: 8px;
            background: #10b981;
            border-radius: 50%;
            animation: bounce 1.4s infinite ease-in-out;
        }

        .loading-dot:nth-child(1) { animation-delay: -0.32s; }
        .loading-dot:nth-child(2) { animation-delay: -0.16s; }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes bounce {
            0%, 80%, 100% { transform: scale(0); }
            40% { transform: scale(1); }
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .premium-login-container {
                margin: 10px;
            }

            .login-header, .login-form, .login-footer {
                padding: 30px 24px;
            }

            .title {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>
    <!-- Premium Background -->
    <div class="premium-bg"></div>
    <div class="floating-particles" id="particles-container"></div>

    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loading-overlay">
        <div class="loading-content">
            <div class="loading-spinner"></div>
            <p class="loading-text">Memuat Login...</p>
            <div class="loading-dots">
                <div class="loading-dot"></div>
                <div class="loading-dot"></div>
                <div class="loading-dot"></div>
            </div>
        </div>
    </div>

    <!-- Premium Login Container -->
    <div class="premium-login-container">
        <div class="premium-glass">
            <!-- Header Section -->
            <div class="login-header">
                <div class="logo-container">
                    <img src="{{ asset('images/LogoBumdes.png') }}" alt="Logo BUMDes" class="logo-img">
                </div>
                <h1 class="title">Admin Login</h1>
                <p class="subtitle">Masuk ke sistem manajemen BUMDes</p>

                <div class="status-indicator">

                </div>
            </div>

            <!-- Form Section -->
            <div class="login-form">
                <!-- Error Message (if any) -->
                <div class="error-message" id="error-message" style="display: none;">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span id="error-text"></span>
                </div>

                <form method="POST" action="{{ route('admin.login') }}" id="login-form">
                    @csrf

                    <!-- Email Input -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-container">
                            <input type="email" name="email" id="email" class="form-input" placeholder="Masukkan email anda" required value="{{ old('email') }}">
                            <i class="fas fa-envelope input-icon"></i>
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-container">
                            <input type="password" name="password" id="password" class="form-input" placeholder="Masukkan password anda" required>
                            <i class="fas fa-lock input-icon"></i>
                            <button type="button" class="toggle-password" id="toggle-password">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>



                    <!-- Submit Button -->
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-sign-in-alt"></i>
                        Masuk
                    </button>
                </form>
            </div>

            <!-- Footer Section -->
            <div class="login-footer">
                <div class="brand">
                    <i class="fas fa-leaf"></i>
                    <span class="brand-text">BUMDes Juron</span>
                </div>
                <p class="copyright">&copy; {{ date('Y') }} - Meningkatkan Perekonomian Desa</p>
                <div class="security-info">
                    <div class="security-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Aman</span>
                    </div>
                    <div class="security-item">
                        <i class="fas fa-lock"></i>
                        <span>Terpercaya</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
            }, 1500);
        });

        // Password toggle functionality
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

        // Form validation
        document.getElementById('login-form').addEventListener('submit', function(e) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('error-message');
            const errorText = document.getElementById('error-text');

            // Hide error message initially
            errorMessage.style.display = 'none';

            if (!email || !password) {
                e.preventDefault();

                // Show error message
                errorText.textContent = 'Harap isi semua field yang diperlukan.';
                errorMessage.style.display = 'flex';

                // Add shake animation to form
                this.style.animation = 'none';
                this.offsetHeight; // Trigger reflow
                this.style.animation = 'shake 0.5s ease-in-out';

                // Focus on empty field
                if (!email) {
                    document.getElementById('email').focus();
                } else {
                    document.getElementById('password').focus();
                }
            }
        });

        // Create floating particles
        function createParticles() {
            const container = document.getElementById('particles-container');
            const particleCount = 20;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');

                // Random properties
                const size = Math.random() * 6 + 2;
                const left = Math.random() * 100;
                const animationDuration = Math.random() * 20 + 10;
                const animationDelay = Math.random() * 5;
                const opacity = Math.random() * 0.4 + 0.1;

                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${left}%`;
                particle.style.animationDuration = `${animationDuration}s`;
                particle.style.animationDelay = `${animationDelay}s`;
                particle.style.opacity = opacity;

                container.appendChild(particle);
            }
        }

        // Initialize particles
        createParticles();

        // Input focus effects
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-2px)';
            });

            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });

        // Form submit animation
        document.getElementById('login-form').addEventListener('submit', function(e) {
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;

            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';
            submitButton.disabled = true;

            // Re-enable after 3 seconds (for demo purposes)
            setTimeout(() => {
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }, 3000);
        });

        // Console welcome message
        console.log('%c🌾 BUMDes Juron Premium Admin Dashboard', 'color: #10b981; font-size: 16px; font-weight: bold;');
        console.log('%cSelamat datang di sistem administrasi premium!', 'color: #64748b; font-size: 12px;');
    </script>
</body>
</html>
