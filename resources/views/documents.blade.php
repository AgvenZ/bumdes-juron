<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentasi - BUMDes Gemah Ripah</title>
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
            background: linear-gradient(135deg, rgba(148, 168, 148, 0.85) 0%, rgba(120, 150, 121, 0.9) 100%),
                        url('https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80');
            background-size: cover;
            background-position: center 30%;
            background-attachment: fixed;
            position: relative;
            filter: contrast(1.5) brightness(0.9);
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
            background-color: var(--nature-light);
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%238d6e63' fill-opacity='0.03' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .card-hover {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    /* Tambahkan ini */
    isolation: isolate;
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
    z-index: 1; /* Tetap z-index: 1 tapi dengan perbaikan struktur */
    pointer-events: none; /* TAMBAHKAN INI - biarkan klik tembus */
}

.card-hover:hover::before {
    opacity: 1;
}

/* TAMBAHKAN CLASS BARU INI */
.document-item {
    position: relative;
}

.document-item .btn-primary {
    position: relative;
    z-index: 10; /* Pastikan tombol di atas overlay */
}

/* Atau alternatif lebih sederhana */
.card-content {
    position: relative;
    z-index: 2;
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

            .btn-primary, .btn-secondary, .btn-outline {
                padding: 0.75rem 1.5rem;
                font-size: 0.9rem;
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
                <div class="logo-glow h-10 w-10 rounded-full bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center mr-3">
                    <span class="text-white font-bold text-sm">BD</span>
                </div>
                <span class="text-lg font-bold text-primary">BUMDes <span class="gold-accent">Gemah Ripah</span></span>
            </div>
            <button id="closeMenu" class="text-gray-700">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <div class="flex flex-col space-y-6">
            <a href="index.html" class="text-gray-700 hover:text-primary font-medium transition-colors text-lg py-2 nav-link">Beranda</a>
            <a href="index.html#sk" class="text-gray-700 hover:text-primary font-medium transition-colors text-lg py-2 nav-link">SK Kemenkumham</a>
            <a href="index.html#struktur" class="text-gray-700 hover:text-primary font-medium transition-colors text-lg py-2 nav-link">Struktur Organisasi</a>
            <a href="index.html#direktur" class="text-gray-700 hover:text-primary font-medium transition-colors text-lg py-2 nav-link">Direktur</a>
            <a href="units.html" class="text-gray-700 hover:text-primary font-medium transition-colors text-lg py-2 nav-link">Unit Usaha</a>
            <a href="documents.html" class="text-primary font-medium transition-colors text-lg py-2 nav-link active">Dokumentasi</a>
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

     <nav id="navbar" class="sticky-nav scroll-down py-4 transition-all duration-300">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('images/LogoBumdes.png') }}" alt="Logo BUMDes" class="h-12 w-12 object-contain mr-3">
                <span class="text-xl font-bold text-primary">BUMDes <span class="gold-accent">Gemah Ripah</span></span>
            </div>

            <div class="hidden md:flex space-x-8">
                <a href="index.html" class="text-gray-700 hover:text-primary font-medium transition-colors nav-link">Beranda</a>
                <a href="index.html#sk" class="text-gray-700 hover:text-primary font-medium transition-colors nav-link">SK Kemenkumham</a>
                <a href="index.html#struktur" class="text-gray-700 hover:text-primary font-medium transition-colors nav-link">Struktur Organisasi</a>
                <a href="index.html#direktur" class="text-gray-700 hover:text-primary font-medium transition-colors nav-link">Direktur</a>
                <a href="units.html" class="text-gray-700 hover:text-primary font-medium transition-colors nav-link">Unit Usaha</a>
                <a href="documents.html" class="text-primary font-medium transition-colors nav-link active">Dokumentasi</a>
            </div>

            <button id="openMenu" class="md:hidden text-gray-700">
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

    <!-- Dokumentasi Section -->
    <section id="document-list" class="nature-section section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 mt-20 animate-fadeIn">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4 section-title">Galeri Dokumentasi</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">Kumpulan dokumentasi dari berbagai kegiatan dan unit usaha BUMDes Gemah Ripah yang telah berjalan dengan sukses.</p>
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

                <!-- Wisata & Pemancingan 1 -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInUp document-item" data-category="wisata">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Wisata Pemancingan" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-green-500 text-white py-1 px-3 rounded-full text-sm font-medium">
                            Wisata & Pemancingan
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-500 text-sm">5 Apr 2025</span>
                            <span class="text-gray-500 text-sm"><i class="fas fa-image mr-1"></i> 15 Foto</span>
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-3">Pembukaan Wisata Pemancingan</h3>
                        <p class="text-gray-600 mb-6">Peresmian dan pembukaan wisata pemancingan desa yang dihadiri oleh masyarakat dan pejabat setempat.</p>
                         <div class="flex items-center">
                            <a href="document-detail.html?album=4" class="btn-primary inline-flex items-center text-sm py-2 px-4">
                                <i class="fas fa-eye mr-2"></i> Lihat Album
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Ketahanan Pangan 1 -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInUp delay-100 document-item" data-category="pangan">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1621351183012-e2f9972dd9bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Panen Padi Organik" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-yellow-600 text-white py-1 px-3 rounded-full text-sm font-medium">
                            Ketahanan Pangan
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-500 text-sm">18 Mei 2025</span>
                            <span class="text-gray-500 text-sm"><i class="fas fa-image mr-1"></i> 10 Foto</span>
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-3">Panen Padi Organik</h3>
                        <p class="text-gray-600 mb-6">Kegiatan panen padi organik hasil budidaya BUMDes yang melibatkan partisipasi masyarakat desa.</p>
                         <div class="flex items-center">
                            <a href="document-detail.html?album=5" class="btn-primary inline-flex items-center text-sm py-2 px-4">
                                <i class="fas fa-eye mr-2"></i> Lihat Album
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kegiatan Desa -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInUp delay-200 document-item" data-category="kegiatan">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1551135049-8a33b5883817?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Rapat Koordinasi BUMDes" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-purple-500 text-white py-1 px-3 rounded-full text-sm font-medium">
                            Kegiatan Desa
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-500 text-sm">2 Jun 2025</span>
                            <span class="text-gray-500 text-sm"><i class="fas fa-image mr-1"></i> 7 Foto</span>
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-3">Rapat Koordinasi BUMDes</h3>
                        <p class="text-gray-600 mb-6">Rapat koordinasi pengurus BUMDes untuk membahas perkembangan unit usaha dan rencana ke depan.</p>
                         <div class="flex items-center">
                            <a href="document-detail.html?album=6" class="btn-primary inline-flex items-center text-sm py-2 px-4">
                                <i class="fas fa-eye mr-2"></i> Lihat Album
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-16 animate-fadeIn">
                <button id="loadMore" class="btn-secondary inline-flex items-center text-lg py-3 px-8">
                    <i class="fas fa-plus mr-3"></i>
                    Muat Lebih Banyak
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
   <footer class="bg-primary text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center mb-6">
                        <img src="{{ asset('images/LogoBumdes.png') }}" alt="Logo BUMDes" class="h-12 w-12 object-contain mr-3">
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
                        <li><a href="index.html" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> Beranda
                        </a></li>
                        <li><a href="index.html#sk" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> SK Kemenkumham
                        </a></li>
                        <li><a href="index.html#struktur" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> Struktur Organisasi
                        </a></li>
                        <li><a href="index.html#direktur" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> Direktur
                        </a></li>
                        <li><a href="units.html" class="text-primary-light hover:text-white transition-colors flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i> Unit Usaha
                        </a></li>
                        <li><a href="documents.html" class="text-white transition-colors flex items-center group">
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
                if (link.getAttribute('href') === `#${current}` || (link.getAttribute('href') === 'documents.html' && current === 'document-list')) {
                    link.classList.add('active');
                }
            });
        });

        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const documentItems = document.querySelectorAll('.document-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.classList.remove('btn-primary');
                    btn.classList.add('btn-outline');
                });

                // Add active class to clicked button
                button.classList.add('active');
                button.classList.remove('btn-outline');
                button.classList.add('btn-primary');

                const filterValue = button.getAttribute('data-filter');

                documentItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Load more functionality
        const loadMoreButton = document.getElementById('loadMore');
        let currentItems = 6;

        loadMoreButton.addEventListener('click', () => {
            // In a real implementation, this would load more items from a server
            // For this demo, we'll just show an alert
            alert('Fitur "Muat Lebih Banyak" akan memuat dokumentasi tambahan dari server.');
        });

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
