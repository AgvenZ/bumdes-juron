<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Usaha - BUMDes Maju Jaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#1a4d1e',
                        'primary-light': '#2e7d32',
                        'primary-dark': '#0d3b0f',
                        'secondary': '#FF9800',
                        'secondary-light': '#ffb74d',
                        'accent': '#8d6e63',
                        'light': '#f8f9fa',
                        'gold': '#d4af37',
                        'cream': '#f5f1e6',
                        'nature-light': '#f9f7f2',
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                        'heading': ['Playfair Display', 'serif'],
                    },
                    animation: {
                        'fadeIn': 'fadeIn 0.8s ease-in-out',
                        'slideInUp': 'slideInUp 0.8s ease-out',
                        'slideInLeft': 'slideInLeft 0.8s ease-out',
                        'slideInRight': 'slideInRight 0.8s ease-out',
                        'bounceIn': 'bounceIn 1s ease-out',
                        'pulse-slow': 'pulse 3s infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'wave': 'wave 8s ease-in-out infinite',
                        'morph': 'morph 10s ease-in-out infinite',
                        'scroll': 'scroll 20s linear infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideInUp: {
                            '0%': { transform: 'translateY(30px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        slideInLeft: {
                            '0%': { transform: 'translateX(-30px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        slideInRight: {
                            '0%': { transform: 'translateX(30px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        bounceIn: {
                            '0%': { transform: 'scale(0.3)', opacity: '0' },
                            '50%': { transform: 'scale(1.05)', opacity: '0.8' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 5px rgba(212, 175, 55, 0.5)' },
                            '100%': { boxShadow: '0 0 20px rgba(212, 175, 55, 0.8)' },
                        },
                        wave: {
                            '0%, 100%': { transform: 'translateY(0) rotate(0deg)' },
                            '50%': { transform: 'translateY(-10px) rotate(2deg)' },
                        },
                        morph: {
                            '0%, 100%': { borderRadius: '60% 40% 30% 70% / 60% 30% 70% 40%' },
                            '50%': { borderRadius: '30% 60% 70% 40% / 50% 60% 30% 60%' },
                        },
                        scroll: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        }
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                        'gradient-conic': 'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
                        'nature-pattern': "url(\"data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%238d6e63' fill-opacity='0.03' fill-rule='evenodd'/%3E%3C/svg%3E\")",
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        .section-padding {
            padding: 6rem 0;
        }

        .hero-bg {
            background: linear-gradient(135deg, rgba(148, 168, 148, 0.75) 0%, rgba(120, 150, 121, 0.85) 100%),
                        url('https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80');
            background-size: cover;
            background-position: center 30%;
            background-attachment: fixed;
            position: relative;
            filter: contrast(1.1) brightness(1.1);
        }

        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(26, 77, 30, 0.2) 0%, rgba(13, 59, 15, 0.1) 100%);
            backdrop-filter: blur(1px);
            opacity: 0.3;
        }

        .nature-section {
            background-color: #f9f7f2;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%238d6e63' fill-opacity='0.03' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .card-hover {
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .card-hover::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, rgba(255, 152, 0, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 1;
        }

        .card-hover:hover::before {
            opacity: 1;
        }

        .card-hover:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        .sticky-nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s ease;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
        }

        .scroll-down {
            transform: translate3d(0, -100%, 0);
        }

        .scroll-up {
            transform: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background: linear-gradient(135deg, #1a4d1e 0%, #2e7d32 100%);
            color: white;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(26, 77, 30, 0.3);
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(26, 77, 30, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #FF9800 0%, #ffb74d 100%);
            color: white;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 152, 0, 0.3);
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 152, 0, 0.4);
        }

        .btn-outline {
            border: 2px solid #1a4d1e;
            color: #1a4d1e;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            background: transparent;
        }

        .btn-outline:hover {
            background: #1a4d1e;
            color: white;
            transform: translateY(-3px);
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #1a4d1e, #FF9800);
            border-radius: 2px;
        }

        .gold-accent {
            color: #d4af37;
        }

        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #1a4d1e, #FF9800);
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .testimonial-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 10px;
            left: 20px;
            font-size: 5rem;
            color: #f5f1e6;
            font-family: 'Playfair Display', serif;
            line-height: 1;
            z-index: 0;
        }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .gradient-overlay {
            background: linear-gradient(135deg, rgba(26, 77, 30, 0.9) 0%, rgba(13, 59, 15, 0.9) 100%);
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(212, 175, 55, 0.1);
            animation: float 8s ease-in-out infinite;
            z-index: 0;
        }

        .shape-1 {
            width: 300px;
            height: 300px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 200px;
            height: 200px;
            bottom: 20%;
            right: 10%;
            animation-delay: 2s;
        }

        .shape-3 {
            width: 150px;
            height: 150px;
            top: 50%;
            left: 80%;
            animation-delay: 4s;
        }

        .logo-glow {
            animation: glow 3s ease-in-out infinite alternate;
        }

        .hero-divider {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .hero-divider svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 80px;
            transform: rotateY(180deg);
        }

        .hero-divider .shape-fill {
            fill: #f9f7f2;
        }

        .animated-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .floating-leaf {
            position: absolute;
            opacity: 0.7;
            animation: wave 15s ease-in-out infinite;
        }

        .leaf-1 {
            top: 10%;
            left: 5%;
            width: 40px;
            animation-delay: 0s;
        }

        .leaf-2 {
            top: 20%;
            right: 10%;
            width: 30px;
            animation-delay: 2s;
        }

        .leaf-3 {
            bottom: 15%;
            left: 15%;
            width: 35px;
            animation-delay: 4s;
        }

        .leaf-4 {
            bottom: 25%;
            right: 5%;
            width: 25px;
            animation-delay: 6s;
        }

        .morphing-shape {
            position: absolute;
            background: rgba(26, 77, 30, 0.05);
            animation: morph 15s ease-in-out infinite;
            z-index: 0;
        }

        .morph-1 {
            width: 200px;
            height: 200px;
            top: 10%;
            right: 5%;
            animation-delay: 0s;
        }

        .morph-2 {
            width: 150px;
            height: 150px;
            bottom: 10%;
            left: 5%;
            animation-delay: 5s;
        }

        .scroll-animation {
            animation: scroll 20s linear infinite;
        }

        .partner-logo {
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .partner-logo:hover {
            filter: grayscale(0%);
            opacity: 1;
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .section-padding {
                padding: 4rem 0;
            }

            .floating-shape, .morphing-shape {
                display: none;
            }

            .hero-divider svg {
                height: 40px;
            }
        }
    </style>
</head>
<body class="bg-nature-light">
    <!-- Floating Background Shapes -->
    <div class="floating-shape shape-1"></div>
    <div class="floating-shape shape-2"></div>
    <div class="floating-shape shape-3"></div>

    <!-- Navbar -->
    <nav id="navbar" class="sticky-nav scroll-down py-4 transition-all duration-300">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center">
                <div class="logo-glow h-12 w-12 rounded-full bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center mr-3">
                    <span class="text-white font-bold text-lg">BD</span>
                </div>
                <span class="text-xl font-bold text-primary">BUMDes <span class="gold-accent">Maju Jaya</span></span>
            </div>

            <div class="hidden md:flex space-x-8">
                <a href="index.html" class="text-gray-700 hover:text-primary font-medium transition-colors relative group">
                    Beranda
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="index.html#sk" class="text-gray-700 hover:text-primary font-medium transition-colors relative group">
                    SK Kemenham
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="index.html#struktur" class="text-gray-700 hover:text-primary font-medium transition-colors relative group">
                    Struktur Organisasi
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="index.html#direktur" class="text-gray-700 hover:text-primary font-medium transition-colors relative group">
                    Direktur
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="units.html" class="text-primary font-medium transition-colors relative group">
                    Unit Usaha
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="documents.html" class="text-gray-700 hover:text-primary font-medium transition-colors relative group">
                    Dokumentasi
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <button class="md:hidden text-gray-700">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </nav>


        <!-- Smooth Wave Divider -->
        <div class="hero-divider">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- Unit Usaha Section -->
    <section id="unit-list" class="nature-section section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fadeIn">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4 section-title">Semua Unit Usaha</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">Berbagai unit usaha yang dikelola BUMDes Maju Jaya untuk meningkatkan perekonomian masyarakat desa.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Internet Desa -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInLeft">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Internet Desa" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-primary text-white py-1 px-3 rounded-full text-sm font-medium">
                            Teknologi
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-primary">Internet Desa</h3>
                            <span class="bg-primary-light text-white text-sm font-medium py-1 px-3 rounded-full">Teknologi</span>
                        </div>
                        <p class="text-gray-600 mb-6">Layanan internet berkecepatan tinggi untuk masyarakat desa dengan harga terjangkau. Menjangkau seluruh wilayah desa dengan koneksi stabil untuk mendukung aktivitas pendidikan, bisnis, dan komunikasi.</p>

                        <div class="mb-6">
                            <h4 class="font-bold text-gray-800 mb-2">Fasilitas:</h4>
                            <ul class="text-gray-600 grid grid-cols-2 gap-1">
                                <li class="flex items-center"><i class="fas fa-wifi text-secondary mr-2"></i> Wi-Fi Area</li>
                                <li class="flex items-center"><i class="fas fa-tachometer-alt text-secondary mr-2"></i> High Speed</li>
                                <li class="flex items-center"><i class="fas fa-headset text-secondary mr-2"></i> Support 24/7</li>
                                <li class="flex items-center"><i class="fas fa-money-bill-wave text-secondary mr-2"></i> Harga Terjangkau</li>
                            </ul>
                        </div>

                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 rounded-full overflow-hidden mr-4 border-2 border-white shadow">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Penanggung Jawab" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-bold text-gray-800">Budi Santoso</p>
                                <p class="text-sm text-gray-600">Penanggung Jawab</p>
                            </div>
                        </div>

                        <div class="flex justify-between items-center">
                            <a href="https://wa.me/6281234567891" target="_blank" class="btn-primary inline-flex items-center text-sm py-2 px-4">
                                <i class="fab fa-whatsapp mr-2"></i> Hubungi
                            </a>
                            <span class="text-lg font-bold text-secondary">Rp 150.000/bulan</span>
                        </div>
                    </div>
                </div>

                <!-- Persewaan Tendangan + Sound System -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInRight">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Persewaan Kajang + Sound System" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-accent text-white py-1 px-3 rounded-full text-sm font-medium">
                            Event
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-primary">Persewaan Kajang + Sound System</h3>
                            <span class="bg-accent text-white text-sm font-medium py-1 px-3 rounded-full">Event</span>
                        </div>
                        <p class="text-gray-600 mb-6">Menyewakan tenda (kajang) dan peralatan sound system untuk acara pernikahan, khitanan, dan acara desa. Dilengkapi dengan peralatan lengkap dan tim profesional untuk mendukung kesuksesan acara Anda.</p>

                        <div class="mb-6">
                            <h4 class="font-bold text-gray-800 mb-2">Paket Tersedia:</h4>
                            <ul class="text-gray-600 grid grid-cols-2 gap-1">
                                <li class="flex items-center"><i class="fas fa-umbrella-beach text-secondary mr-2"></i> Tenda Kecil</li>
                                <li class="flex items-center"><i class="fas fa-home text-secondary mr-2"></i> Tenda Besar</li>
                                <li class="flex items-center"><i class="fas fa-volume-up text-secondary mr-2"></i> Sound System</li>
                                <li class="flex items-center"><i class="fas fa-lightbulb text-secondary mr-2"></i> Penerangan</li>
                            </ul>
                        </div>

                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 rounded-full overflow-hidden mr-4 border-2 border-white shadow">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Penanggung Jawab" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-bold text-gray-800">Joko Prasetyo</p>
                                <p class="text-sm text-gray-600">Penanggung Jawab</p>
                            </div>
                        </div>

                        <div class="flex justify-between items-center">
                            <a href="https://wa.me/6281234567892" target="_blank" class="btn-primary inline-flex items-center text-sm py-2 px-4">
                                <i class="fab fa-whatsapp mr-2"></i> Hubungi
                            </a>
                            <span class="text-lg font-bold text-secondary">Mulai Rp 500.000</span>
                        </div>
                    </div>
                </div>

                <!-- Wisata + Pemancingan -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInLeft">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Wisata + Pemancingan" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-green-500 text-white py-1 px-3 rounded-full text-sm font-medium">
                            Wisata
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-primary">Wisata + Pemancingan</h3>
                            <span class="bg-green-500 text-white text-sm font-medium py-1 px-3 rounded-full">Wisata</span>
                        </div>
                        <p class="text-gray-600 mb-6">Destinasi wisata alam dengan fasilitas pemancingan yang asri dan nyaman untuk keluarga. Menawarkan pengalaman bersantai di alam dengan berbagai jenis ikan yang dapat ditangkap dan dinikmati.</p>

                        <div class="mb-6">
                            <h4 class="font-bold text-gray-800 mb-2">Fasilitas Wisata:</h4>
                            <ul class="text-gray-600 grid grid-cols-2 gap-1">
                                <li class="flex items-center"><i class="fas fa-fish text-secondary mr-2"></i> Kolam Pemancingan</li>
                                <li class="flex items-center"><i class="fas fa-utensils text-secondary mr-2"></i> Warung Makan</li>
                                <li class="flex items-center"><i class="fas fa-campground text-secondary mr-2"></i> Area Camping</li>
                                <li class="flex items-center"><i class="fas fa-swimming-pool text-secondary mr-2"></i> Kolam Renang</li>
                            </ul>
                        </div>

                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 rounded-full overflow-hidden mr-4 border-2 border-white shadow">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Penanggung Jawab" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-bold text-gray-800">Rudi Hermawan</p>
                                <p class="text-sm text-gray-600">Penanggung Jawab</p>
                            </div>
                        </div>

                        <div class="flex justify-between items-center">
                            <a href="https://wa.me/6281234567893" target="_blank" class="btn-primary inline-flex items-center text-sm py-2 px-4">
                                <i class="fab fa-whatsapp mr-2"></i> Hubungi
                            </a>
                            <span class="text-lg font-bold text-secondary">Rp 25.000/orang</span>
                        </div>
                    </div>
                </div>

                <!-- Ketahanan Pangan -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInRight">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1621351183012-e2f9972dd9bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Ketahanan Pangan" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-yellow-600 text-white py-1 px-3 rounded-full text-sm font-medium">
                            Pertanian
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-primary">Ketahanan Pangan</h3>
                            <span class="bg-yellow-600 text-white text-sm font-medium py-1 px-3 rounded-full">Pertanian</span>
                        </div>
                        <p class="text-gray-600 mb-6">Budidaya padi, lombok, dan ayam joper (jowo super) untuk mendukung ketahanan pangan desa. Menggunakan metode pertanian organik dan berkelanjutan untuk menghasilkan produk berkualitas tinggi.</p>

                        <div class="mb-6">
                            <h4 class="font-bold text-gray-800 mb-2">Produk Unggulan:</h4>
                            <ul class="text-gray-600 grid grid-cols-2 gap-1">
                                <li class="flex items-center"><i class="fas fa-seedling text-secondary mr-2"></i> Padi Organik</li>
                                <li class="flex items-center"><i class="fas fa-pepper-hot text-secondary mr-2"></i> Lombok Segar</li>
                                <li class="flex items-center"><i class="fas fa-egg text-secondary mr-2"></i> Ayam Joper</li>
                                <li class="flex items-center"><i class="fas fa-tractor text-secondary mr-2"></i> Pertanian Modern</li>
                            </ul>
                        </div>

                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 rounded-full overflow-hidden mr-4 border-2 border-white shadow">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Penanggung Jawab" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-bold text-gray-800">Sutrisno</p>
                                <p class="text-sm text-gray-600">Penanggung Jawab</p>
                            </div>
                        </div>

                        <div class="flex justify-between items-center">
                            <a href="https://wa.me/6281234567894" target="_blank" class="btn-primary inline-flex items-center text-sm py-2 px-4">
                                <i class="fab fa-whatsapp mr-2"></i> Hubungi
                            </a>
                            <span class="text-lg font-bold text-secondary">Harga Kompetitif</span>
                        </div>
                    </div>
                </div>
            </div>

                 </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center mb-6">
                        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-primary-light to-secondary flex items-center justify-center mr-3">
                            <span class="text-white font-bold text-lg">BD</span>
                        </div>
                        <span class="text-xl font-bold">BUMDes <span class="text-secondary-light">Maju Jaya</span></span>
                    </div>
                    <p class="text-primary-light mb-6">Badan Usaha Milik Desa yang berfokus pada pengembangan ekonomi desa melalui berbagai unit usaha.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-primary-light text-white flex items-center justify-center transition-all hover:bg-secondary hover:scale-110">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-primary-light text-white flex items-center justify-center transition-all hover:bg-secondary hover:scale-110">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-primary-light text-white flex items-center justify-center transition-all hover:bg-secondary hover:scale-110">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-primary-light text-white flex items-center justify-center transition-all hover:bg-secondary hover:scale-110">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-6">Tautan Cepat</h3>
                    <ul class="space-y-3">
                        <li><a href="index.html" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> Beranda
                        </a></li>
                        <li><a href="index.html#sk" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> SK Kemenham
                        </a></li>
                        <li><a href="index.html#struktur" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> Struktur Organisasi
                        </a></li>
                        <li><a href="index.html#direktur" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> Direktur
                        </a></li>
                        <li><a href="units.html" class="text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> Unit Usaha
                        </a></li>
                        <li><a href="documents.html" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> Dokumentasi
                        </a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-6">Unit Usaha</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-wifi text-xs mr-2"></i> Internet Desa
                        </a></li>
                        <li><a href="#" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-umbrella-beach text-xs mr-2"></i> Persewaan Kajang
                        </a></li>
                        <li><a href="#" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-volume-up text-xs mr-2"></i> Sound System
                        </a></li>
                        <li><a href="#" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-fish text-xs mr-2"></i> Wisata Pemancingan
                        </a></li>
                        <li><a href="#" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-seedling text-xs mr-2"></i> Ketahanan Pangan
                        </a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-6">Kontak Kami</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mr-3 mt-1 text-secondary"></i>
                            <span>Jl. Desa Maju No. 123, Kecamatan Sejahtera, Kabupaten Makmur</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-secondary"></i>
                            <span>+62 812-3456-7890</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-secondary"></i>
                            <span>info@bumdesmajujaya.id</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-clock mr-3 text-secondary"></i>
                            <span>Senin - Jumat: 08.00 - 17.00</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-primary-light pt-8 text-center text-primary-light">
                <p>&copy; 2023 BUMDes Maju Jaya. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Sticky Navbar
        const navbar = document.getElementById('navbar');
        let lastScrollY = window.scrollY;

        window.addEventListener('scroll', () => {
            if (lastScrollY < window.scrollY) {
                navbar.classList.add('scroll-down');
                navbar.classList.remove('scroll-up');
            } else {
                navbar.classList.add('scroll-up');
                navbar.classList.remove('scroll-down');
            }

            lastScrollY = window.scrollY;
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.animate-fadeIn, .animate-slideInUp, .animate-slideInLeft, .animate-slideInRight').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            observer.observe(element);
        });

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
