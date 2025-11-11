<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUMDes - Badan Usaha Milik Desa</title>
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
            background: linear-gradient(135deg, rgba(139, 177, 143, 0.85) 0%, rgba(107, 139, 108, 0.9) 100%),
                        url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
        }

        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23d4af37' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
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
                <a href="#home" class="text-gray-700 hover:text-primary font-medium transition-colors relative group">
                    Beranda
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#sk" class="text-gray-700 hover:text-primary font-medium transition-colors relative group">
                    SK Kemenham
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#struktur" class="text-gray-700 hover:text-primary font-medium transition-colors relative group">
                    Struktur Organisasi
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#direktur" class="text-gray-700 hover:text-primary font-medium transition-colors relative group">
                    Direktur
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#usaha" class="text-gray-700 hover:text-primary font-medium transition-colors relative group">
                    Unit Usaha
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#dokumentasi" class="text-gray-700 hover:text-primary font-medium transition-colors relative group">
                    Dokumentasi
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <button class="md:hidden text-gray-700">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-bg min-h-screen flex items-center justify-center text-white section-padding relative overflow-hidden">
        <!-- Animated Background Elements -->


        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="animate-bounceIn">
                <div class="logo-glow h-40 w-40 rounded-full bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center mx-auto mb-8 shadow-2xl">
                    <span class="text-white font-bold text-4xl">BD</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 font-heading">BUMDes <span class="gold-accent">Maju Jaya</span></h1>
                <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed">Membangun Ekonomi Desa Melalui <span class="font-semibold gold-accent">Inovasi</span> dan <span class="font-semibold gold-accent">Kolaborasi</span></p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#sk" class="btn-secondary inline-flex items-center justify-center">
                        <span>Jelajahi Lebih Lanjut</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="#usaha" class="btn-outline border-white text-white hover:bg-white hover:text-primary inline-flex items-center justify-center">
                        <span>Lihat Unit Usaha</span>
                        <i class="fas fa-store ml-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-10">
            <a href="#sk" class="text-white animate-bounce inline-block">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>

        <!-- Smooth Wave Divider -->
        <div class="hero-divider">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>


    <!-- SK Kemenham Section -->
    <section id="sk" class="nature-section section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fadeIn">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4 section-title">SK Kemenham</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">Badan Usaha Milik Desa (BUMDes) Maju Jaya telah terdaftar resmi dengan Surat Keputusan dari Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia.</p>
            </div>

            <div class="bg-white rounded-2xl shadow-xl p-8 max-w-5xl mx-auto animate-slideInUp overflow-hidden relative">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary-light to-primary transform translate-x-16 -translate-y-16 rounded-full opacity-10"></div>
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-2/5 mb-8 md:mb-0 flex justify-center">
                        <div class="bg-gradient-to-br from-primary to-primary-dark text-white rounded-2xl p-8 text-center w-64 h-64 flex flex-col items-center justify-center shadow-lg">
                            <i class="fas fa-file-alt text-6xl mb-6"></i>
                            <p class="font-bold text-xl">SK BUMDes</p>
                            <p class="text-primary-light mt-2">No. 123/AB/XII/2022</p>
                        </div>
                    </div>
                    <div class="md:w-3/5 md:pl-12">
                        <h3 class="text-3xl font-bold text-primary mb-6 font-heading">Surat Keputusan Pendirian BUMDes</h3>
                        <p class="text-gray-600 mb-6 text-lg leading-relaxed">BUMDes Maju Jaya telah resmi didirikan berdasarkan Surat Keputusan Kemenham No. 123/AB/XII/2022 tanggal 15 Desember 2022.</p>
                        <ul class="text-gray-600 mb-8 space-y-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-secondary text-xl mr-3 mt-1"></i>
                                <span>Terdaftar secara resmi di Kemenham</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-secondary text-xl mr-3 mt-1"></i>
                                <span>Memiliki legalitas hukum yang kuat</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-secondary text-xl mr-3 mt-1"></i>
                                <span>Diakui oleh pemerintah daerah</span>
                            </li>
                        </ul>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="btn-primary inline-flex items-center justify-center">
                                <i class="fas fa-download mr-2"></i> Unduh SK
                            </button>
                            <button class="btn-outline inline-flex items-center justify-center">
                                <i class="fas fa-eye mr-2"></i> Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi Section -->
    <section id="struktur" class="nature-section section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fadeIn">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4 section-title">Struktur Organisasi</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">Struktur organisasi BUMDes Maju Jaya yang terdiri dari berbagai posisi penting untuk mengelola usaha desa secara profesional.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Ketua -->
                <div class="bg-white rounded-2xl p-8 text-center card-hover animate-slideInLeft overflow-hidden relative">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-secondary"></div>
                    <div class="w-40 h-40 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-lg">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Ketua BUMDes" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-3">Ketua BUMDes</h3>
                    <p class="text-gray-600 mb-4">Mengawasi seluruh operasional BUMDes dan membuat keputusan strategis.</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center">
                            <i class="fab fa-whatsapp text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center">
                            <i class="fas fa-envelope text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Sekretaris -->
                <div class="bg-white rounded-2xl p-8 text-center card-hover animate-slideInUp delay-100 overflow-hidden relative">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-secondary"></div>
                    <div class="w-40 h-40 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-lg">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" alt="Sekretaris BUMDes" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-3">Sekretaris</h3>
                    <p class="text-gray-600 mb-4">Mengelola administrasi, dokumentasi, dan korespondensi BUMDes.</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center">
                            <i class="fab fa-whatsapp text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center">
                            <i class="fas fa-envelope text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Bendahara -->
                <div class="bg-white rounded-2xl p-8 text-center card-hover animate-slideInUp delay-200 overflow-hidden relative">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-secondary"></div>
                    <div class="w-40 h-40 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-lg">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=761&q=80" alt="Bendahara BUMDes" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-3">Bendahara</h3>
                    <p class="text-gray-600 mb-4">Mengelola keuangan, pembukuan, dan laporan keuangan BUMDes.</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center">
                            <i class="fab fa-whatsapp text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center">
                            <i class="fas fa-envelope text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Manager Unit Usaha -->
                <div class="bg-white rounded-2xl p-8 text-center card-hover animate-slideInRight overflow-hidden relative">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-secondary"></div>
                    <div class="w-40 h-40 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-lg">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Manager Unit Usaha" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-3">Manager Unit Usaha</h3>
                    <p class="text-gray-600 mb-4">Mengkoordinir dan mengawasi semua unit usaha BUMDes.</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center">
                            <i class="fab fa-whatsapp text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center">
                            <i class="fas fa-envelope text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Direktur BUMDes Section -->
    <section id="direktur" class="nature-section section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fadeIn">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4 section-title">Direktur BUMDes</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">Menghadirkan profil direktur BUMDes Maju Jaya yang berpengalaman dan berdedikasi untuk memajukan perekonomian desa.</p>
            </div>

            <div class="bg-white rounded-2xl shadow-xl overflow-hidden max-w-5xl mx-auto animate-slideInUp">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-2/5 relative">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Direktur BUMDes" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-black to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <h3 class="text-2xl font-bold">Ahmad Surya, S.E.</h3>
                            <p class="text-secondary-light">Direktur BUMDes Maju Jaya</p>
                        </div>
                    </div>
                    <div class="md:w-3/5 p-8 md:p-12">
                        <div class="mb-6">
                            <h3 class="text-3xl font-bold text-primary mb-4 font-heading">Visi & Misi</h3>
                            <p class="text-gray-600 mb-6 text-lg leading-relaxed">Sebagai direktur BUMDes Maju Jaya, Ahmad Surya memiliki visi untuk mengembangkan potensi ekonomi desa melalui pengelolaan usaha yang profesional dan berkelanjutan. Dengan latar belakang pendidikan ekonomi dan pengalaman selama 5 tahun di bidang pengembangan usaha desa, beliau berkomitmen untuk membawa BUMDes Maju Jaya menjadi pelopor ekonomi desa di wilayahnya.</p>
                        </div>

                        <div class="flex items-center mb-8 p-4 bg-light rounded-xl">
                            <div class="bg-primary text-white rounded-full p-4 mr-4">
                                <i class="fas fa-phone-alt text-xl"></i>
                            </div>
                            <div>
                                <p class="text-gray-600">Hubungi via WhatsApp</p>
                                <p class="text-primary font-bold text-xl">+62 812-3456-7890</p>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="https://wa.me/6281234567890" target="_blank" class="btn-secondary inline-flex items-center justify-center">
                                <i class="fab fa-whatsapp mr-2 text-xl"></i> Hubungi via WhatsApp
                            </a>
                            <a href="#" class="btn-outline inline-flex items-center justify-center">
                                <i class="fas fa-envelope mr-2"></i> Kirim Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Unit Usaha Section -->
    <section id="usaha" class="nature-section section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fadeIn">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4 section-title">Unit Usaha BUMDes</h2>
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
                        <h3 class="text-2xl font-bold text-primary mb-3">Internet Desa</h3>
                        <p class="text-gray-600 mb-6">Layanan internet berkecepatan tinggi untuk masyarakat desa dengan harga terjangkau. Menjangkau seluruh wilayah desa dengan koneksi stabil untuk mendukung aktivitas pendidikan, bisnis, dan komunikasi.</p>

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
                        <h3 class="text-2xl font-bold text-primary mb-3">Persewaan Kajang + Sound System</h3>
                        <p class="text-gray-600 mb-6">Menyewakan tenda (kajang) dan peralatan sound system untuk acara pernikahan, khitanan, dan acara desa. Dilengkapi dengan peralatan lengkap dan tim profesional untuk mendukung kesuksesan acara Anda.</p>

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
                        <h3 class="text-2xl font-bold text-primary mb-3">Wisata + Pemancingan</h3>
                        <p class="text-gray-600 mb-6">Destinasi wisata alam dengan fasilitas pemancingan yang asri dan nyaman untuk keluarga. Menawarkan pengalaman bersantai di alam dengan berbagai jenis ikan yang dapat ditangkap dan dinikmati.</p>

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
                        <h3 class="text-2xl font-bold text-primary mb-3">Ketahanan Pangan</h3>
                        <p class="text-gray-600 mb-6">Budidaya padi, lombok, dan ayam joper (jowo super) untuk mendukung ketahanan pangan desa. Menggunakan metode pertanian organik dan berkelanjutan untuk menghasilkan produk berkualitas tinggi.</p>

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

            <!-- Button untuk halaman Units -->
            <div class="text-center mt-16 animate-fadeIn">
                <a href="units" class="btn-primary inline-flex items-center text-lg py-3 px-8">
                    <i class="fas fa-arrow-right mr-3"></i>
                    Lihat Semua Unit Usaha
                </a>
            </div>
        </div>
    </section>

    <!-- Dokumentasi Section -->
    <section id="dokumentasi" class="nature-section section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fadeIn">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4 section-title">Dokumentasi Jenis Usaha</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">Galeri dokumentasi dari berbagai unit usaha BUMDes Maju Jaya yang telah berjalan dengan sukses.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Internet Desa -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg card-hover animate-slideInUp">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Internet Desa" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="bg-primary-light text-white text-xs font-medium py-1 px-2 rounded">Internet Desa</span>
                            <span class="text-gray-500 text-sm">15 Jan 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Pemasangan Tower Internet</h3>
                        <p class="text-gray-600 text-sm">Proses pemasangan tower internet untuk menjangkau seluruh wilayah desa dengan koneksi stabil.</p>
                    </div>
                </div>

                <!-- Persewaan Kajang -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg card-hover animate-slideInUp delay-100">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80" alt="Persewaan Kajang" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="bg-accent text-white text-xs font-medium py-1 px-2 rounded">Persewaan</span>
                            <span class="text-gray-500 text-sm">22 Feb 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Acara Pernikahan Desa</h3>
                        <p class="text-gray-600 text-sm">Penyewaan tenda kajang dan sound system untuk acara pernikahan warga desa.</p>
                    </div>
                </div>

                <!-- Sound System -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg card-hover animate-slideInUp delay-200">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Sound System" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="bg-accent text-white text-xs font-medium py-1 px-2 rounded">Persewaan</span>
                            <span class="text-gray-500 text-sm">10 Mar 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Peralatan Sound System</h3>
                        <p class="text-gray-600 text-sm">Peralatan sound system lengkap untuk berbagai acara desa dan hajatan.</p>
                    </div>
                </div>
            </div>

            <!-- Button untuk halaman Documents -->
            <div class="text-center mt-16 animate-fadeIn">
                <a href="documents" class="btn-secondary inline-flex items-center text-lg py-3 px-8">
                    <i class="fas fa-images mr-3"></i>
                    Lihat Semua Dokumentasi
                </a>
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
                        <li><a href="#home" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> Beranda
                        </a></li>
                        <li><a href="#sk" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> SK Kemenham
                        </a></li>
                        <li><a href="#struktur" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> Struktur Organisasi
                        </a></li>
                        <li><a href="#direktur" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> Direktur
                        </a></li>
                        <li><a href="#usaha" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> Unit Usaha
                        </a></li>
                        <li><a href="#dokumentasi" class="text-primary-light hover:text-white transition-colors flex items-center group">
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
