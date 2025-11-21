<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUMDes - Badan Usaha Milik Desa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
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
                        'gradient': 'gradient 3s ease infinite',
                        'typewriter': 'typewriter 2s steps(20) 1s 1 normal both',
                        'blink': 'blink 1s steps(2) infinite',
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
                        },
                        gradient: {
                            '0%, 100%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                        },
                        typewriter: {
                            from: { width: '0' },
                            to: { width: '100%' },
                        },
                        blink: {
                            '0%': { 'border-right-color': 'transparent' },
                            '50%': { 'border-right-color': '#d4af37' },
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

         /* Efek Shadow Khusus untuk Card Direktur */
    .card-glow {
        position: relative;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .card-glow::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 1rem;
        background: linear-gradient(135deg,
            rgba(26, 77, 30, 0.1) 0%,
            rgba(255, 152, 0, 0.05) 50%,
            rgba(212, 175, 55, 0.08) 100%);
        opacity: 0;
        transition: opacity 0.5s ease;
        z-index: -1;
    }

    .card-glow:hover::before {
        opacity: 1;
    }

    .card-glow:hover {
        box-shadow:
            0 25px 50px -12px rgba(26, 77, 30, 0.25),
            0 0 0 1px rgba(26, 77, 30, 0.1),
            0 10px 30px rgba(255, 152, 0, 0.15);
    }

    /* Efek Hover untuk Gambar */
    .image-hover-glow {
        position: relative;
        overflow: hidden;
    }

    .image-hover-glow::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg,
            rgba(26, 77, 30, 0.2) 0%,
            transparent 50%);
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .card-glow:hover .image-hover-glow::after {
        opacity: 0.6;
    }

    /* Efek Border Glow */
    .card-glow::after {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        border-radius: 1.125rem;
        background: linear-gradient(45deg,
            transparent,
            rgba(26, 77, 30, 0.1),
            rgba(255, 152, 0, 0.1),
            rgba(212, 175, 55, 0.1),
            transparent);
        opacity: 0;
        transition: opacity 0.5s ease;
        z-index: -1;
    }

    .card-glow:hover::after {
        opacity: 1;
    }

    /* Animasi Pulse Ring */
    .card-glow {
        animation: gentle-pulse 4s ease-in-out infinite;
    }

    @keyframes gentle-pulse {
        0%, 100% {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        50% {
            box-shadow: 0 15px 40px rgba(26, 77, 30, 0.12);
        }
    }
        :root {
            --primary: #1a4d1e;
            --primary-light: #2e7d32;
            --primary-dark: #0d3b0f;
            --secondary: #FF9800;
            --secondary-light: #ffb74d;
            --accent: #8d6e63;
            --light: #f8f9fa;
            --gold: #d4af37;
            --cream: #f5f1e6;
            --nature-light: #f9f7f2;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            overflow-x: hidden;
            background-color: var(--nature-light);
        }

        .section-padding {
            padding: 6rem 0;
        }

        .hero-bg {
            background:
                linear-gradient(135deg, rgba(148, 168, 148, 0.7) 0%, rgba(120, 150, 121, 0.75) 100%),
                url('https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80');
            background-size: cover;
            background-position: center 30%;
            background-attachment: fixed;
            position: relative;
            filter: brightness(0.95);
            contrast(1.05);
        }

        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(26, 77, 30, 0.15) 0%, rgba(13, 59, 15, 0.1) 100%);
            backdrop-filter: blur(0.5px);
            opacity: 0.4;
        }

        .nature-section {
            background-color: var(--nature-light);
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%238d6e63' fill-opacity='0.03' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
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
            transform: translateY(-12px) scale(1.02);
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
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .scroll-down {
            transform: translate3d(0, -100%, 0);
        }

        .scroll-up {
            transform: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(26, 77, 30, 0.3);
            position: relative;
            overflow: hidden;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
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
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-light) 100%);
            color: white;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 152, 0, 0.3);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 152, 0, 0.4);
        }

        .btn-outline {
            border: 2px solid var(--primary);
            color: var(--primary);
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            background: transparent;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .btn-outline:hover {
            background: var(--primary);
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
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 2px;
        }

        .gold-accent {
            color: var(--gold);
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
            background: linear-gradient(90deg, var(--primary), var(--secondary));
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
            color: var(--cream);
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
            fill: var(--nature-light);
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

        /* New Modern Elements */
        .gradient-text {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .typewriter {
            overflow: hidden;
            border-right: 2px solid var(--gold);
            white-space: nowrap;
            margin: 0 auto;
            animation: typewriter 2s steps(20) 1s 1 normal both, blink 1s steps(2) infinite;
        }

        .progress-bar {
            height: 6px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 3px;
            overflow: hidden;
            position: relative;
        }

        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transform: translateX(-100%);
            animation: progress 2s ease-in-out infinite;
        }

        @keyframes progress {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .flip-card {
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 16px;
            overflow: hidden;
        }

        .flip-card-back {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            transform: rotateY(180deg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .counter {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            transition: all 0.5s ease;
        }

        .counter.animate {
            animation: countUp 2s ease-out;
        }

        @keyframes countUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 80%;
            height: 100vh;
            background: white;
            z-index: 2000;
            transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            display: flex;
            flex-direction: column;
        }

        .mobile-menu.active {
            right: 0;
        }

        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1500;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .nav-link {
            position: relative;
            overflow: hidden;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--primary);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .nav-link.active::after,
        .nav-link:hover::after {
            transform: translateX(0);
        }

        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            z-index: 1001;
            transition: width 0.2s ease;
        }

        /* Perbaikan untuk tombol WhatsApp */
        .btn-whatsapp {
            background: #25D366;
            color: white;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            text-decoration: none;
            position: relative;
            z-index: 10;
        }

        .btn-whatsapp:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
            background: #20bd5c;
            color: white;
        }

        /* Perbaikan untuk card dokumentasi agar tombol bisa diklik */
        .document-item {
            position: relative;
            z-index: 1;
        }

        .document-item .btn-primary {
            position: relative;
            z-index: 10;
        }

        /* Pastikan card-hover tidak menutupi tombol */
        .card-hover {
            position: relative;
        }

        .card-hover::before {
            z-index: 1;
        }

        .card-hover > *:not(::before) {
            position: relative;
            z-index: 2;
        }

        /* Style untuk struktur organisasi yang dioptimasi */
        .structure-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-align: center;
            position: relative;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .structure-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .structure-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        .structure-img-container {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 1.5rem;
            border: 5px solid white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .structure-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .structure-card:hover .structure-img-container img {
            transform: scale(1.1);
        }

        .structure-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }

        .structure-card .position {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--secondary);
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
            padding-bottom: 0.5rem;
        }

        .structure-card .position::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 2px;
            background: var(--secondary);
        }

        .structure-card .description {
            color: #666;
            line-height: 1.6;
            text-align: center;
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

            .btn-primary, .btn-secondary, .btn-outline, .btn-whatsapp {
                padding: 0.75rem 1.5rem;
                font-size: 0.9rem;
            }

            .structure-card {
                padding: 2rem;
            }

            .structure-img-container {
                width: 140px;
                height: 140px;
            }
        }
    </style>
</head>
<body class="bg-nature-light">
    <!-- Scroll Progress Bar -->
    <div class="scroll-progress"></div>

    <!-- Floating Background Shapes -->
    <div class="floating-shape shape-1"></div>
    <div class="floating-shape shape-2"></div>
    <div class="floating-shape shape-3"></div>

    <!-- Mobile Menu Overlay -->
    <div class="menu-overlay" id="menuOverlay"></div>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="flex justify-between items-center mb-8">
            <div class="flex items-center">
                <img src="{{ asset('images/LogoBumdes.png') }}" alt="Logo BUMDes" class="h-10 w-10 rounded-full object-cover mr-3">
                <span class="text-lg font-bold text-primary">BUMDes <span class="gold-accent">Gemah Ripah</span></span>
            </div>
            <button id="closeMenu" class="text-gray-700">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <div class="flex flex-col space-y-6">
            <a href="#home" class="text-gray-700 hover:text-primary font-medium transition-colors text-lg py-2 nav-link active">Beranda</a>
            <a href="#struktur" class="text-gray-700 hover:text-primary font-medium transition-colors text-lg py-2 nav-link">Struktur Organisasi</a>
            <a href="#direktur" class="text-gray-700 hover:text-primary font-medium transition-colors text-lg py-2 nav-link">Direktur</a>
            <a href="#usaha" class="text-gray-700 hover:text-primary font-medium transition-colors text-lg py-2 nav-link">Unit Usaha</a>
            <a href="#dokumentasi" class="text-gray-700 hover:text-primary font-medium transition-colors text-lg py-2 nav-link">Dokumentasi</a>
        </div>

        <div class="mt-auto pt-8 border-t border-gray-200">
            <div class="flex space-x-4 justify-center">
                <a href="#" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav id="navbar" class="sticky-nav scroll-up py-4 transition-all duration-300">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('images/LogoBumdes.png') }}" alt="Logo BUMDes" class="h-12 w-12 rounded-full object-contain mr-3">
                <span class="text-xl font-bold text-primary">BUMDes <span class="gold-accent">Gemah Ripah</span></span>
            </div>

            <div class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-700 hover:text-primary font-medium transition-colors nav-link">Beranda</a>
                <a href="#struktur" class="text-gray-700 hover:text-primary font-medium transition-colors nav-link">Struktur Organisasi</a>
                <a href="#direktur" class="text-gray-700 hover:text-primary font-medium transition-colors nav-link">Direktur</a>
                <a href="#usaha" class="text-gray-700 hover:text-primary font-medium transition-colors nav-link">Unit Usaha</a>
                <a href="#dokumentasi" class="text-gray-700 hover:text-primary font-medium transition-colors nav-link">Dokumentasi</a>
            </div>

            <button id="openMenu" class="md:hidden text-gray-700">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-bg min-h-screen flex items-center justify-center text-white section-padding relative overflow-hidden">
        <!-- Animated Background Elements -->

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="animate-bounceIn">
                <img src="{{ asset('images/LogoBumdes.png') }}" alt="Logo BUMDes" class="h-40 w-40 object-contain mx-auto mb-8">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 font-heading">BUMDes <span class="gold-accent">Gemah Ripah</span></h1>
                <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed">Membangun Ekonomi Desa Melalui <span class="font-semibold gold-accent">Inovasi</span> dan <span class="font-semibold gold-accent">Kolaborasi</span></p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#struktur" class="btn-secondary inline-flex items-center justify-center">
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

    <!-- Struktur Organisasi Section -->
    <section id="struktur" class="nature-section section-padding">
        <div class="container mx-auto px-4 mt-20">
            <div class="text-center mb-16 animate-fadeIn">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4 section-title">Struktur Organisasi</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">Struktur organisasi BUMDes Gemah Ripah yang terdiri dari berbagai posisi penting untuk mengelola usaha desa secara profesional.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Penasehat -->
                <div class="structure-card animate-slideInLeft">
                    <div class="structure-img-container">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Penasehat BUMDes">
                    </div>
                    <h3>Sarbini Sigit Budiyanto, S.E.</h3>
                    <p class="position">Penasehat</p>
                    <p class="description">Memberikan arahan, kebijakan umum, serta dukungan strategis untuk pengembangan BUMDes.</p>
                </div>

                <!-- Pengawas -->
                <div class="structure-card animate-slideInUp delay-100">
                    <div class="structure-img-container">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" alt="Pengawas BUMDes">
                    </div>
                    <h3>Danu Susilo</h3>
                    <p class="position">Pengawas</p>
                    <p class="description">Melakukan pengawasan terhadap kinerja, tata kelola, dan pelaksanaan kegiatan usaha BUMDes.</p>
                </div>

                <!-- Direktur -->
                <div class="structure-card animate-slideInUp delay-200">
                    <div class="structure-img-container">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=761&q=80" alt="Direktur BUMDes">
                    </div>
                    <h3>Anik Rubiyah</h3>
                    <p class="position">Direktur</p>
                    <p class="description">Mengelola operasional BUMDes, memimpin pengembangan usaha, dan memastikan pelaksanaan program berjalan efektif.</p>
                </div>

                <!-- Bendahara -->
                <div class="structure-card animate-slideInRight">
                    <div class="structure-img-container">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Bendahara BUMDes">
                    </div>
                    <h3>Sumarno</h3>
                    <p class="position">Bendahara</p>
                    <p class="description">Mengelola keuangan BUMDes secara transparan, akuntabel, dan sesuai prosedur.</p>
                </div>
            </div>
        </div>
    </section>

  <!-- Direktur BUMDes Section -->
<section id="direktur" class="nature-section section-padding">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 -mt-4 animate-fadeIn">
            <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4 section-title">Direktur BUMDes</h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg">Menghadirkan profil direktur BUMDes Gemah Ripah yang berpengalaman dan berdedikasi untuk memajukan perekonomian desa.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden max-w-5xl mx-auto animate-slideInUp hover:shadow-2xl hover:shadow-primary/20 transition-all duration-500 ease-out transform hover:-translate-y-2 card-glow">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-2/5 relative">
                    <div class="image-hover-glow h-full overflow-hidden">
                        <img src="{{ asset('images/BuAnik.jpg') }}" alt="Direktur BUMDes" class="w-full h-full object-cover transition-transform duration-700 ease-out hover:scale-105">
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <h3 class="text-2xl font-bold drop-shadow-lg">Anik Rubiyah</h3>
                        <p class="text-secondary-light drop-shadow-md">Direktur BUMDes Gemah Ripah</p>
                    </div>
                </div>
                <div class="md:w-3/5 p-8 md:p-12">
                    <div class="mb-6">
                        <h3 class="text-3xl font-bold text-primary mb-4 font-heading">Visi & Misi</h3>
                        <p class="text-gray-600 mb-6 text-lg leading-relaxed transition-colors duration-300 hover:text-gray-800">Sebagai Direktur BUMDes Gemah Ripah, saya memiliki visi untuk membangun BUMDes yang profesional, mandiri, dan mampu menjadi penggerak utama perekonomian Desa Juron. Visi tersebut saya wujudkan melalui komitmen untuk mengembangkan unit usaha desa secara berkelanjutan, mengoptimalkan potensi lokal, serta memperkuat tata kelola yang transparan dan akuntabel. Saya juga berfokus pada peningkatan partisipasi masyarakat dalam kegiatan ekonomi desa dan pengembangan kapasitas para pengelola agar BUMDes Gemah Ripah dapat memberikan manfaat nyata bagi kesejahteraan bersama.</p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="https://wa.me/6287736343790" target="_blank" class="btn-whatsapp hover:shadow-lg hover:shadow-green-500/30 transition-all duration-300 transform hover:scale-105">
                            <i class="fab fa-whatsapp mr-2 text-xl"></i> Hubungi WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Unit Usaha Section -->
    <section id="usaha" class="nature-section section-padding">
        <div class="container mx-auto px-4 -mt-4">
            <div class="text-center mb-16 animate-fadeIn">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4 section-title">Unit Usaha BUMDes</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">Berbagai unit usaha yang dikelola BUMDes Gemah Ripah untuk meningkatkan perekonomian masyarakat desa.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Internet Desa -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInLeft">
                    <div class="h-80 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Internet Desa" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-primary text-white py-1 px-3 rounded-full text-sm font-medium">
                            Teknologi
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-primary">Internet Desa</h3>
                        </div>
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
                            <a href="https://wa.me/6281234567891" target="_blank" class="btn-whatsapp">
                                <i class="fab fa-whatsapp mr-2"></i> Hubungi WhatsApp
                            </a>
                            <span class="text-lg font-bold text-secondary">Rp 150.000/bulan</span>
                        </div>
                    </div>
                </div>

                <!-- Persewaan Tendangan + Sound System -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInRight">
                    <div class="h-80 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Persewaan Kajang + Sound System" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-accent text-white py-1 px-3 rounded-full text-sm font-medium">
                            Event
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-primary">Persewaan Kajang + Sound System</h3>
                        </div>
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
                            <a href="https://wa.me/6281234567892" target="_blank" class="btn-whatsapp">
                                <i class="fab fa-whatsapp mr-2"></i> Hubungi WhatsApp
                            </a>
                            <span class="text-lg font-bold text-secondary">Mulai Rp 500.000</span>
                        </div>
                    </div>
                </div>

                <!-- Wisata + Pemancingan -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInLeft">
                    <div class="h-80 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Wisata + Pemancingan" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-green-500 text-white py-1 px-3 rounded-full text-sm font-medium">
                            Wisata
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-primary">Wisata + Pemancingan</h3>
                        </div>
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
                            <a href="https://wa.me/6281234567893" target="_blank" class="btn-whatsapp">
                                <i class="fab fa-whatsapp mr-2"></i> Hubungi WhatsApp
                            </a>
                            <span class="text-lg font-bold text-secondary">Rp 25.000/orang</span>
                        </div>
                    </div>
                </div>

                <!-- Ketahanan Pangan -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInRight">
                    <div class="h-80 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1621351183012-e2f9972dd9bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Ketahanan Pangan" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-yellow-600 text-white py-1 px-3 rounded-full text-sm font-medium">
                            Pertanian
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-primary">Ketahanan Pangan</h3>
                        </div>
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
                            <a href="https://wa.me/6281234567894" target="_blank" class="btn-whatsapp">
                                <i class="fab fa-whatsapp mr-2"></i> Hubungi WhatsApp
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
        <div class="container mx-auto px-4 -mt-12">
            <div class="text-center mb-16 animate-fadeIn">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4 section-title">Dokumentasi Jenis Usaha</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">Galeri dokumentasi dari berbagai unit usaha BUMDes Gemah Ripah yang telah berjalan dengan sukses.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Internet Desa 1 -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInUp document-item" data-category="internet">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Pemasangan Tower Internet" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-primary text-white py-1 px-3 rounded-full text-sm font-medium">
                            Internet Desa
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-500 text-sm">15 Jan 2025</span>
                            <span class="text-gray-500 text-sm"><i class="fas fa-image mr-1"></i> 12 Foto</span>
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-3">Pemasangan Tower Internet</h3>
                        <p class="text-gray-600 mb-6">Proses pemasangan tower internet untuk menjangkau seluruh wilayah desa dengan koneksi stabil dan cepat.</p>
                        <div class="flex items-center">
                            <a href="document-detail.html?album=1" class="btn-primary inline-flex items-center text-sm py-2 px-4">
                                <i class="fas fa-eye mr-2"></i> Lihat Album
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Persewaan Kajang 1 -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInUp delay-100 document-item" data-category="persewaan">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80" alt="Acara Pernikahan Desa" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-accent text-white py-1 px-3 rounded-full text-sm font-medium">
                            Persewaan Kajang
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-500 text-sm">22 Feb 2025</span>
                            <span class="text-gray-500 text-sm"><i class="fas fa-image mr-1"></i> 8 Foto</span>
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-3">Acara Pernikahan Desa</h3>
                        <p class="text-gray-600 mb-6">Penyewaan tenda kajang dan sound system untuk acara pernikahan warga desa yang meriah dan sukses.</p>
                        <div class="flex items-center">
                            <a href="document-detail.html?album=2" class="btn-primary inline-flex items-center text-sm py-2 px-4">
                                <i class="fas fa-eye mr-2"></i> Lihat Album
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sound System -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInUp delay-200 document-item" data-category="persewaan">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Peralatan Sound System" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-accent text-white py-1 px-3 rounded-full text-sm font-medium">
                            Persewaan Kajang
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-500 text-sm">10 Mar 2025</span>
                            <span class="text-gray-500 text-sm"><i class="fas fa-image mr-1"></i> 6 Foto</span>
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-3">Peralatan Sound System</h3>
                        <p class="text-gray-600 mb-6">Peralatan sound system lengkap untuk berbagai acara desa dan hajatan dengan kualitas terbaik.</p>
                        <div class="flex items-center">
                            <a href="document-detail.html?album=3" class="btn-primary inline-flex items-center text-sm py-2 px-4">
                                <i class="fas fa-eye mr-2"></i> Lihat Album
                            </a>
                        </div>
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
                        <img src="{{ asset('images/LogoBumdes.png') }}" alt="Logo BUMDes" class="h-12 w-12 rounded-full object-contain mr-3">
                        <span class="text-xl font-bold">BUMDes <span class="text-secondary-light">Gemah Ripah</span></span>
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
                            <span>info@bumdesgemahripah.id</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-clock mr-3 text-secondary"></i>
                            <span>Senin - Jumat: 08.00 - 17.00</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-primary-light pt-8 text-center text-primary-light">
                <p>&copy; 2025 BUMDes Gemah Ripah. All rights reserved.</p>
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

        // Mobile Menu Functionality
        const openMenuBtn = document.getElementById('openMenu');
        const closeMenuBtn = document.getElementById('closeMenu');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuOverlay = document.getElementById('menuOverlay');

        openMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            menuOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        closeMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        menuOverlay.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        // Scroll Progress Bar
        const scrollProgress = document.querySelector('.scroll-progress');

        window.addEventListener('scroll', () => {
            const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (window.scrollY / windowHeight) * 100;
            scrollProgress.style.width = `${scrolled}%`;
        });

        // Active Navigation Link
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;

                if (scrollY >= (sectionTop - 150)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Counter Animation
        const counters = document.querySelectorAll('.counter');

        const startCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / 200;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(() => startCounter(counter), 10);
            } else {
                counter.innerText = target;
            }
        };

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => {
            counterObserver.observe(counter);
        });

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
