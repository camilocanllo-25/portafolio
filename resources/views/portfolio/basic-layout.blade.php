<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camilo Llorente Vásquez | Desarrollador de Software</title>
    
    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/camilo-profile.jpeg') }}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        body { 
            background: #0a0a0a !important; 
            color: #fff !important; 
            font-family: 'Inter', sans-serif !important; 
            padding-top: 90px !important; /* Padding más grande para navbar */
            margin: 0 !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            width: 100% !important;
            overflow-x: hidden !important;
        }
        
        .container {
            max-width: 1320px !important;
            width: 100% !important;
            margin-left: auto !important;
            margin-right: auto !important;
            position: relative !important;
        }
        
        .btn-primary { background: #ff3333; border-color: #ff3333; }
        .btn-primary:hover { background: #e62e2e; border-color: #e62e2e; }
        
        /* Navigation Styles - INDESTRUCTIBLE */
        .navbar {
            background: rgba(26, 26, 26, 0.98) !important;
            backdrop-filter: blur(10px) !important;
            border-bottom: 1px solid rgba(255, 51, 51, 0.1) !important;
            padding: 1rem 0 !important;
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            z-index: 99998 !important;
            width: 100% !important;
            transform: none !important;
            transition: none !important;
            height: auto !important;
            min-height: 70px !important;
        }
        .navbar-brand {
            color: #ff3333 !important;
            font-weight: 700 !important;
            font-size: 1.5rem !important;
            position: relative !important;
            z-index: 99998 !important;
        }
        .nav-link {
            color: #fff !important;
            font-weight: 500 !important;
            margin: 0 0.5rem !important;
            transition: all 0.3s ease !important;
            position: relative !important;
            z-index: 99998 !important;
        }
        .nav-link:hover, .nav-link.active {
            color: #ff3333 !important;
            transform: translateY(-2px);
        }
        
        /* Navbar Toggle Button - VISIBLE SIEMPRE */
        .navbar-toggler {
            border: 2px solid #ff3333 !important;
            border-radius: 4px !important;
            padding: 4px 8px !important;
            z-index: 99999 !important;
            position: relative !important;
            background: rgba(26, 26, 26, 0.9) !important;
        }
        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 51, 51, 0.25) !important;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 51, 51, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
        
        /* Responsive Navigation */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: rgba(26, 26, 26, 0.98);
                border-radius: 8px;
                margin-top: 1rem;
                padding: 1rem;
                border: 1px solid rgba(255, 51, 51, 0.2);
            }
            .nav-link {
                margin: 0.5rem 0;
                padding: 0.5rem 1rem;
                border-radius: 4px;
                text-align: center;
            }
            .nav-link:hover {
                background: rgba(255, 51, 51, 0.1);
                transform: none;
            }
            .navbar-brand {
                font-size: 1.3rem;
            }
        }
        
        @media (max-width: 576px) {
            .navbar {
                padding: 0.5rem 0;
            }
            .navbar-brand {
                font-size: 1.2rem;
            }
        }
        
        /* Language Selector - MÁXIMA PRIORIDAD */
        .language-selector {
            position: fixed !important;
            top: 15px !important;
            right: 15px !important;
            z-index: 99999 !important;
            background: rgba(26, 26, 26, 0.95) !important;
            padding: 5px !important;
            border-radius: 8px !important;
            border: 1px solid rgba(255, 51, 51, 0.3) !important;
        }
        .language-selector .btn {
            background: rgba(255, 51, 51, 0.1) !important;
            border: 1px solid rgba(255, 51, 51, 0.3) !important;
            color: #ff3333 !important;
            border-radius: 25px !important;
            padding: 5px 10px !important;
            font-size: 0.9rem !important;
        }
        .language-selector .dropdown-menu {
            background: rgba(26, 26, 26, 0.98) !important;
            border: 1px solid rgba(255, 51, 51, 0.3) !important;
            z-index: 99999 !important;
        }
        
        /* Responsive Language Selector - SIEMPRE VISIBLE */
        @media (max-width: 991px) {
            .language-selector {
                top: 10px !important;
                right: 80px !important; 
                z-index: 99999 !important;
            }
            .language-selector .btn {
                padding: 4px 8px !important;
                font-size: 0.8rem !important;
                min-width: 50px !important;
            }
            .navbar-collapse {
                background: rgba(26, 26, 26, 0.98) !important;
                border-radius: 8px !important;
                margin-top: 1rem !important;
                padding: 1rem !important;
                border: 1px solid rgba(255, 51, 51, 0.2) !important;
                z-index: 99997 !important;
            }
        }
        
        @media (max-width: 576px) {
            .language-selector {
                top: 8px !important;
                right: 75px !important;
                z-index: 99999 !important;
            }
            .language-selector .btn {
                padding: 3px 6px !important;
                font-size: 0.75rem !important;
                min-width: 45px !important;
            }
        }
        
        /* Hero Image with Floating Icons */
        .hero-image {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image-wrapper {
            position: relative;
            width: 450px;
            height: 450px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .profile-image {
            width: 400px;
            height: 400px;
            border-radius: 50%;
            border: 4px solid #ff3333;
            object-fit: cover;
            z-index: 1;
        }
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            animation: rotate 20s linear infinite;
            z-index: 10;
        }
        .floating-icon {
            position: absolute;
            width: 80px;
            height: 80px;
            background: rgba(255, 51, 51, 0.15);
            border: 3px solid #ff3333;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: #ff3333;
            animation: counter-rotate 20s linear infinite;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            z-index: 15;
            box-shadow: 0 5px 20px rgba(255, 51, 51, 0.3);
        }
        .floating-icon:hover {
            background: rgba(255, 51, 51, 0.3);
            transform: scale(1.2);
            box-shadow: 0 8px 30px rgba(255, 51, 51, 0.6);
            z-index: 20;
        }
        .floating-icon:nth-child(1) {
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .floating-icon:nth-child(2) {
            top: 15%;
            right: -10px;
        }
        .floating-icon:nth-child(3) {
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .floating-icon:nth-child(4) {
            top: 15%;
            left: -10px;
        }
        .floating-icon:nth-child(5) {
            top: 70%;
            right: 15px;
        }
        .floating-icon:nth-child(6) {
            top: 70%;
            left: 15px;
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        @keyframes counter-rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(-360deg); }
        }
        
        /* Hero Content */
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }
        
        /* Typed Text Animation - SIN OVERFLOW */
        .typed-container {
            height: 60px !important;
            width: 100% !important;
            max-width: 100% !important;
            display: block !important;
            margin: 10px 0 !important;
            overflow: hidden !important;
            position: static !important;
            z-index: 1 !important;
            box-sizing: border-box !important;
        }
        
        .typed-container .highlight-text {
            color: #ff3333 !important;
            font-size: 2.5rem !important;
            font-weight: 700 !important;
            line-height: 1.2 !important;
            display: block !important;
            width: 100% !important;
            max-width: 100% !important;
            overflow: hidden !important;
            text-overflow: ellipsis !important;
            white-space: nowrap !important;
            box-sizing: border-box !important;
        }
        
        #typed-text {
            font-weight: 700 !important;
            white-space: nowrap !important;
            display: inline-block !important;
            max-width: 100% !important;
            overflow: hidden !important;
            text-overflow: ellipsis !important;
            box-sizing: border-box !important;
        }
        
        .highlight-text {
            color: #ff3333;
        }
        .greeting {
            font-size: 1.2rem;
            color: #b8b8b8;
            margin-bottom: 1rem;
        }
        .hero-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin: 2rem 0;
        }
        .info-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #b8b8b8;
        }
        .info-item i {
            color: #ff3333;
            width: 20px;
        }
        .info-item a {
            color: #b8b8b8;
            text-decoration: none;
        }
        .info-item a:hover {
            color: #ff3333;
        }
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: rgba(255, 51, 51, 0.1);
            border: 1px solid rgba(255, 51, 51, 0.3);
            border-radius: 50%;
            color: #ff3333;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .social-link:hover {
            background: #ff3333;
            color: #fff;
            transform: translateY(-3px);
        }
        
        /* Sections */
        .section-header {
            margin-bottom: 4rem;
        }
        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 1rem;
        }
        .section-header p {
            font-size: 1.1rem;
            color: #b8b8b8;
        }
        
        /* Services Section */
        .services-section {
            padding: 100px 0;
            background: #1a1a1a;
        }
        .service-card {
            background: rgba(255, 51, 51, 0.05);
            border: 1px solid rgba(255, 51, 51, 0.2);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }
        .service-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 51, 51, 0.1);
            border-color: #ff3333;
            box-shadow: 0 10px 30px rgba(255, 51, 51, 0.2);
        }
        .service-icon {
            font-size: 3rem;
            color: #ff3333;
            margin-bottom: 1.5rem;
        }
        .service-card h4 {
            color: #fff;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        .service-card p {
            color: #b8b8b8;
            line-height: 1.6;
        }
        
        /* Portfolio Section */
        .portfolio-section {
            padding: 100px 0;
            background: #0a0a0a;
        }
        .portfolio-card {
            background: rgba(255, 51, 51, 0.05);
            border: 1px solid rgba(255, 51, 51, 0.2);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
        }
        .portfolio-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(255, 51, 51, 0.2);
        }
        .portfolio-image {
            position: relative;
            overflow: hidden;
            height: 250px;
        }
        .portfolio-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
        }
        .portfolio-card:hover .portfolio-image img {
            transform: scale(1.1);
        }
        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 51, 51, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }
        .portfolio-card:hover .portfolio-overlay {
            opacity: 1;
        }
        .portfolio-info {
            text-align: center;
            color: white;
        }
        .portfolio-content {
            padding: 1.5rem;
        }
        .portfolio-content h5 {
            color: #fff;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        .portfolio-tech {
            color: #ff3333;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            font-weight: 500;
        }
        .portfolio-content p {
            color: #b8b8b8;
            line-height: 1.6;
        }
        
        /* Demo Project Highlights */
        .portfolio-card:has(.demo-badge) {
            border: 2px solid #ff3333;
            box-shadow: 0 0 20px rgba(255, 51, 51, 0.3);
            transform: scale(1.02);
            transition: all 0.3s ease;
        }
        .portfolio-card:has(.demo-badge):hover {
            box-shadow: 0 0 30px rgba(255, 51, 51, 0.5);
            transform: scale(1.05);
        }
        .demo-badge {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .demo-credentials {
            animation: fadeInUp 0.5s ease;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        code {
            background: #ff3333;
            color: white;
            padding: 2px 6px;
            border-radius: 4px;
            font-weight: bold;
        }
        
        /* Contact Section */
        .contact-section {
            padding: 100px 0;
            background: #1a1a1a;
        }
        .contact-item {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 51, 51, 0.05);
            border: 1px solid rgba(255, 51, 51, 0.2);
            border-radius: 15px;
            transition: all 0.3s ease;
            height: 100%;
        }
        .contact-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 51, 51, 0.1);
            box-shadow: 0 10px 30px rgba(255, 51, 51, 0.2);
        }
        .contact-icon {
            font-size: 2.5rem;
            color: #ff3333;
            margin-bottom: 1rem;
        }
        .contact-content h5 {
            color: #fff;
            margin-bottom: 0.5rem;
        }
        .contact-content p {
            color: #b8b8b8;
            margin-bottom: 1rem;
        }
        
        /* Footer */
        .footer {
            background: #0a0a0a;
            border-top: 1px solid rgba(255, 51, 51, 0.1);
            padding: 2rem 0;
        }
        .footer-social a {
            color: #b8b8b8;
            font-size: 1.5rem;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
        }
        .footer-social a:hover {
            color: #ff3333;
            transform: translateY(-2px);
        }
        
        /* Loading Animation Styles */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 50%, #0a0a0a 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 1;
            transition: opacity 0.8s ease-out;
            overflow: hidden;
            padding: 20px;
            box-sizing: border-box;
        }
        .loading-screen.fade-out {
            opacity: 0;
            pointer-events: none;
        }
        .loading-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .particle {
            position: absolute;
            background: #ff3333;
            border-radius: 50%;
            animation: float 6s infinite linear;
            opacity: 0.1;
        }
        @keyframes float {
            0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10% { opacity: 0.1; }
            90% { opacity: 0.1; }
            100% { transform: translateY(-10vh) rotate(360deg); opacity: 0; }
        }
        .loading-content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 90%;
            width: 100%;
        }
        .loading-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid #ff3333;
            object-fit: cover;
            animation: loadingPulse 2s ease-in-out infinite;
            margin-bottom: 30px;
            box-shadow: 0 0 30px rgba(255, 51, 51, 0.5);
        }
        .loading-spinner {
            width: 180px;
            height: 180px;
            border: 3px solid rgba(255, 51, 51, 0.2);
            border-top: 3px solid #ff3333;
            border-radius: 50%;
            position: absolute;
            animation: loadingSpin 1.5s linear infinite;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .loading-text {
            color: #fff;
            font-size: 1.2rem;
            font-weight: 600;
            margin-top: 20px;
            animation: loadingText 2s ease-in-out infinite;
            text-align: center;
            white-space: nowrap;
        }
        .loading-subtitle {
            color: #ff3333;
            font-size: 0.9rem;
            margin-top: 10px;
            opacity: 0.8;
            text-align: center;
        }
        .loading-progress {
            width: 200px;
            height: 4px;
            background: rgba(255, 51, 51, 0.2);
            border-radius: 2px;
            margin-top: 20px;
            overflow: hidden;
            max-width: 80%;
        }
        .loading-progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #ff3333, #ff6666);
            border-radius: 2px;
            animation: loadingProgress 3s ease-in-out infinite;
        }
        @keyframes loadingProgress {
            0% { width: 0%; }
            50% { width: 70%; }
            100% { width: 100%; }
        }
        @keyframes loadingPulse {
            0%, 100% { transform: scale(1); box-shadow: 0 0 30px rgba(255, 51, 51, 0.5); }
            50% { transform: scale(1.1); box-shadow: 0 0 50px rgba(255, 51, 51, 0.8); }
        }
        @keyframes loadingSpin {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }
        @keyframes loadingText {
            0%, 100% { opacity: 0.7; transform: translateY(0); }
            50% { opacity: 1; transform: translateY(-5px); }
        }
        
        /* Loading Responsive */
        @media (max-width: 768px) {
            .loading-image {
                width: 120px;
                height: 120px;
                margin-bottom: 20px;
            }
            .loading-spinner {
                width: 150px;
                height: 150px;
            }
            .loading-text {
                font-size: 1rem;
                margin-top: 15px;
            }
            .loading-subtitle {
                font-size: 0.8rem;
            }
            .loading-progress {
                width: 150px;
                margin-top: 15px;
            }
        }
        
        @media (max-width: 576px) {
            .loading-image {
                width: 100px;
                height: 100px;
                margin-bottom: 15px;
            }
            .loading-spinner {
                width: 130px;
                height: 130px;
            }
            .loading-text {
                font-size: 0.9rem;
                margin-top: 10px;
                white-space: normal;
                max-width: 250px;
            }
            .loading-subtitle {
                font-size: 0.7rem;
            }
            .loading-progress {
                width: 120px;
                margin-top: 10px;
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-title { font-size: 2.5rem; }
            .typed-container {
                height: 50px;
            }
            .typed-container .highlight-text {
                font-size: 2rem;
            }
            .image-wrapper { width: 350px; height: 350px; }
            .profile-image { width: 300px; height: 300px; }
            .floating-icon { width: 65px; height: 65px; font-size: 26px; }
            .hero-info { grid-template-columns: 1fr; }
        }
        @media (max-width: 576px) {
            .hero-title { font-size: 2rem; }
            .typed-container {
                height: 40px;
            }
            .typed-container .highlight-text {
                font-size: 1.5rem;
            }
            .image-wrapper { width: 300px; height: 300px; }
            .profile-image { width: 250px; height: 250px; }
            .floating-icon { width: 55px; height: 55px; font-size: 22px; }
        }
    </style>
</head>
<body>
    <!-- Language Selector -->
    <div class="language-selector">
        <div class="dropdown">
            <button class="btn btn-link dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown">
                <i class="fas fa-globe"></i> <span id="currentLang">ES</span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                <li><a class="dropdown-item" href="#" onclick="switchLanguage('es')">🇪🇸 Español</a></li>
                <li><a class="dropdown-item" href="#" onclick="switchLanguage('en')">🇺🇸 English</a></li>
                <li><a class="dropdown-item" href="#" onclick="switchLanguage('ru')">🇷🇺 Русский</a></li>
            </ul>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Camilo Llorente</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home" data-translate="nav-home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" data-translate="nav-services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience" data-translate="nav-experience">Experiencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education" data-translate="nav-education">Educación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio" data-translate="nav-portfolio">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" data-translate="nav-contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Loading Screen -->
    <div id="loadingScreen" class="loading-screen">
        <div class="loading-particles" id="particles"></div>
        <div class="loading-content">
            <div style="position: relative;">
                <div class="loading-spinner"></div>
                <img src="{{ asset('assets/images/camilo.jpg') }}" alt="Camilo Llorente" class="loading-image">
            </div>
            <div class="loading-text" data-translate="loading-text">Cargando Portfolio</div>
            <div class="loading-subtitle">Camilo Llorente Vásquez</div>
            <div class="loading-progress">
                <div class="loading-progress-bar"></div>
            </div>
        </div>
    </div>

    @yield('content')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        // Translation system
        const translations = {
            es: {
                // Navegación
                'nav-home': 'Inicio',
                'nav-services': 'Servicios',
                'nav-portfolio': 'Portafolio',
                'nav-contact': 'Contacto',
                
                // Loading Screen
                'loading-text': 'Cargando Portfolio',
                
                // Hero Section
                'greeting': '¡Hola a todos!',
                'intro': 'Soy',
                'role': 'Desarrollador Full Stack',
                'hero-title': 'Camilo Andrés Llorente Vásquez',
                'hero-subtitle': 'Desarrollador Full Stack',
                'hero-description': 'Desarrollador Full Stack especializado en Laravel, PHP, JavaScript y sistemas de automatización. Creador de soluciones tecnológicas innovadoras.',
                'hero-contact': 'Contáctame',
                'hero-portfolio': 'Ver Portafolio',
                'description': 'Soy un Desarrollador de Software especializado en crear proyectos interactivos que incluyen aplicaciones web, sistemas de automatización y sitios web creativos. Paso la mayor parte del tiempo programando proyectos excepcionales o estudiando nuevas tecnologías para mejorar mi stack de desarrollo. Desarrollo diseños atractivos que cobran vida usando transiciones y animaciones, utilizando las tecnologías más sofisticadas disponibles.',
                'typed': ['Desarrollador Full Stack', 'Desarrollador de Software', 'Especialista en Automatización'],
                
                // Servicios
                'services-title': 'Lo que hago',
                'service1-title': 'Desarrollo Web',
                'service1-desc': 'Creación de aplicaciones web modernas con Laravel, PHP, JavaScript y tecnologías frontend como React y Vue.js.',
                'service2-title': 'Aplicaciones Móviles',
                'service2-desc': 'Desarrollo de aplicaciones móviles nativas e híbridas para Android e iOS utilizando tecnologías modernas.',
                'service3-title': 'Sistemas de Automatización',
                'service3-desc': 'Desarrollo de sistemas domóticos, automatización del hogar, integración con Arduino y microcontroladores para proyectos IoT.',
                'service4-title': 'Sistemas de Seguridad',
                'service4-desc': 'Instalación y configuración de sistemas de seguridad, cámaras de vigilancia, alarmas y control de acceso.',
                'service5-title': 'Soluciones en la Nube',
                'service5-desc': 'Implementación de soluciones Azure, servicios web escalables y arquitecturas cloud-native para empresas.',
                'service6-title': 'Diseño UX/UI',
                'service6-desc': 'Diseño de interfaces de usuario modernas y experiencias digitales utilizando la suite Adobe, Bootstrap y tecnologías de frontend.',
                
                // Portfolio
                'portfolio-title': 'Mis Proyectos',
                'portfolio-subtitle': 'Algunos de mis trabajos más destacados',
                'project1-title': 'Sistema POS Codesign Ventas',
                'project1-desc': 'Sistema punto de venta completo para todo tipo de negocios',
                'project1-name': 'Codesign Ventas - Sistema POS',
                'project1-full-desc': 'Sistema completo de punto de venta para almacenes, tiendas, restaurantes y todo tipo de negocios. Incluye gestión de inventario, facturación, reportes y múltiples funcionalidades.',
                'project1-demo': '🚀 DEMO DISPONIBLE',
                'project1-demo-text': 'Prueba el sistema completo:',
                'project2-title': 'AdminISP - Gestión ISP',
                'project2-desc': 'Sistema completo para proveedores de internet y telecomunicaciones',
                'project2-name': 'AdminISP - Sistema de Gestión',
                'project2-full-desc': 'Plataforma completa para ISPs con gestión de clientes, servicios, cortes automáticos, integración con equipos de red, WhatsApp Business API y facturación.',
                'project2-demo': '🚀 DEMO DISPONIBLE',
                'project2-demo-text': 'Explora todas las funcionalidades:',
                'project3-title': 'Codesign - Sitio Corporativo',
                'project3-desc': 'Sitio web corporativo de mi empresa de desarrollo',
                'project3-name': 'Codesign - Sitio Corporativo',
                'project3-full-desc': 'Sitio web corporativo de mi empresa de desarrollo de software con diseño moderno y responsive.',
                'project4-title': 'Sistema Domótico Inteligente',
                'project4-desc': 'Automatización del hogar con Arduino y sensores IoT',
                'project4-name': 'Sistema Domótico Arduino',
                'project4-full-desc': 'Sistema de automatización del hogar con control de iluminación, temperatura, seguridad y monitoreo remoto vía app móvil.',
                
                // Contacto
                'contact-title': 'Contáctame',
                'contact-subtitle': '¿Tienes un proyecto en mente? ¡Hablemos!',
                'contact-whatsapp': 'WhatsApp',
                'contact-send-message': 'Enviar Mensaje',
                'contact-email': 'Email',
                'contact-send-email': 'Enviar Email',
                'contact-linkedin': 'LinkedIn',
                'contact-view-profile': 'Ver Perfil',
                'contact-location': 'Ubicación',
                'contact-address': 'Santa María, Itagüí<br>Colombia',
                
                // Experience Section
                'experience-title': 'Mi Experiencia',
                'experience-subtitle': 'Trayectoria profesional y proyectos destacados',
                'exp1-title': 'Desarrollador / Redes Informáticas - Freelancer',
                'exp1-desc': 'Trabajando de manera independiente, he creado diversas aplicaciones y sitios web para gestión, inventarios, software de ventas, entre otros, para diversas empresas. Especializado en desarrollo full-stack y soluciones tecnológicas personalizadas.',
                'exp2-title': 'Desarrollador Full Stack',
                'exp2-desc': 'Desarrollo de aplicaciones empresariales usando React y .NET Core. Aplicación de patrones DDD (Domain-Driven Design) para arquitectura de software, diseño de agregados y separación de responsabilidades. Creación de APIs REST, gestión de bases de datos y desarrollo de interfaces de usuario modernas.',
                'exp3-title': 'Técnico Profesional',
                'exp3-desc': 'Encargado de las redes, mantenimiento técnico y gestión del software de la empresa. Administración de infraestructura de red, soporte técnico especializado y optimización de sistemas operativos.',
                
                // Education Section
                'education-title': 'Educación y Formación',
                'education-subtitle': 'Mi trayectoria académica y certificaciones',
                'edu1-course': 'Redes e Informática, Administración/Administrador de sistemas, redes y comunicaciones LAN/WAN',
                'edu1-desc': 'Formación especializada en administración de redes, sistemas informáticos y comunicaciones empresariales.',
                'edu2-course': 'Técnico en programación de software',
                'edu2-desc': 'Formación técnica en desarrollo de software, programación y metodologías de desarrollo.',
                'edu3-course': 'Técnico Diseño de redes y telecomunicaciones',
                'edu3-desc': 'Especialización en diseño e implementación de redes de telecomunicaciones.',
                
                // Skills Section
                'skills-title': 'Habilidades Técnicas',
                'skills-subtitle': 'Tecnologías y herramientas que domino',
                'skill1-title': 'Software',
                'skill2-title': 'Técnico de Mantenimiento',
                'skill3-title': 'Desarrollador de Software',
                'skill4-title': 'Redes y Telecomunicaciones',
                
                // Services Section
                'services-subtitle': 'Servicios profesionales que ofrezco',
                'service1-title': 'Desarrollo Web Full Stack',
                'service1-desc': 'Desarrollo de aplicaciones web completas con Laravel, JavaScript, React y tecnologías modernas. Especializado en sistemas POS y gestión empresarial.',
                'service2-title': 'Aplicaciones Móviles',
                'service2-desc': 'Desarrollo de apps nativas para Android e iOS, así como aplicaciones híbridas. Experiencia en Java, JavaScript y frameworks modernos.',
                'service3-title': 'Sistemas de Automatización',
                'service3-desc': 'Desarrollo de sistemas domóticos, automatización del hogar, integración con Arduino y microcontroladores para proyectos IoT.',
                'service4-title': 'Sistemas de Seguridad',
                'service4-desc': 'Instalación y configuración de sistemas de seguridad, cámaras de vigilancia, alarmas y control de acceso.',
                'service5-title': 'Soluciones en la Nube',
                'service5-desc': 'Implementación de soluciones Azure, servicios web escalables y arquitecturas cloud-native para empresas.',
                'service6-title': 'Diseño UX/UI',
                'service6-desc': 'Diseño de interfaces de usuario modernas y experiencias digitales utilizando la suite Adobe, Bootstrap y tecnologías de frontend.',
                
                // Botones y acciones
                'download-cv': 'Ver CV',
                'contact-me': 'Contáctame'
            },
            en: {
                // Navigation
                'nav-home': 'Home',
                'nav-services': 'Services',
                'nav-portfolio': 'Portfolio',
                'nav-contact': 'Contact',
                
                // Loading Screen
                'loading-text': 'Loading Portfolio',
                
                // Hero Section
                'greeting': 'Hello everyone!',
                'intro': 'I am',
                'role': 'Founder of Codesign',
                'hero-title': 'Camilo Andrés Llorente Vásquez',
                'hero-subtitle': 'Founder of Code Sign',
                'hero-description': 'Full Stack Developer specialized in Laravel, PHP, JavaScript and automation systems. Creator of innovative technological solutions.',
                'hero-contact': 'Contact Me',
                'hero-portfolio': 'View Portfolio',
                'description': 'I am a Software Developer specialized in creating interactive projects that include web applications, automation systems and creative websites. I spend most of my time programming exceptional projects or studying new technologies to improve my development stack. I develop attractive designs that come to life using transitions and animations, utilizing the most sophisticated technologies available.',
                'typed': ['Full Stack Developer', 'Software Developer', 'Automation Specialist'],
                
                // Services
                'services-title': 'What I do',
                'service1-title': 'Web Development',
                'service1-desc': 'Creating modern web applications with Laravel, PHP, JavaScript and frontend technologies like React and Vue.js.',
                'service2-title': 'Mobile Applications',
                'service2-desc': 'Development of native and hybrid mobile applications for Android and iOS using modern technologies.',
                'service3-title': 'Automation Systems',
                'service3-desc': 'Development of home automation systems, home automation, integration with Arduino and microcontrollers for IoT projects.',
                'service4-title': 'Security Systems',
                'service4-desc': 'Installation and configuration of security systems, surveillance cameras, alarms and access control.',
                'service5-title': 'Cloud Solutions',
                'service5-desc': 'Implementation of Azure solutions, scalable web services and cloud-native architectures for enterprises.',
                'service6-title': 'UX/UI Design',
                'service6-desc': 'Design of modern user interfaces and digital experiences using Adobe suite, Bootstrap and frontend technologies.',
                
                // Portfolio
                'portfolio-title': 'My Projects',
                'portfolio-subtitle': 'Some of my most outstanding work',
                'project1-title': 'Codesign Sales POS System',
                'project1-desc': 'Complete point of sale system for all types of businesses',
                'project1-name': 'Codesign Sales - POS System',
                'project1-full-desc': 'Complete point of sale system for stores, shops, restaurants and all types of businesses. Includes inventory management, billing, reports and multiple functionalities.',
                'project1-demo': '🚀 DEMO AVAILABLE',
                'project1-demo-text': 'Try the complete system:',
                'project2-title': 'AdminISP - ISP Management',
                'project2-desc': 'Complete system for internet and telecommunications providers',
                'project2-name': 'AdminISP - Management System',
                'project2-full-desc': 'Complete platform for ISPs with customer management, services, automatic cuts, network equipment integration, WhatsApp Business API and billing.',
                'project2-demo': '🚀 DEMO AVAILABLE',
                'project2-demo-text': 'Explore all functionalities:',
                'project3-title': 'Codesign - Corporate Website',
                'project3-desc': 'Corporate website of my development company',
                'project3-name': 'Codesign - Corporate Website',
                'project3-full-desc': 'Corporate website of my software development company with modern and responsive design.',
                'project4-title': 'Smart Home Automation System',
                'project4-desc': 'Home automation with Arduino and IoT sensors',
                'project4-name': 'Arduino Home Automation System',
                'project4-full-desc': 'Home automation system with lighting control, temperature, security and remote monitoring via mobile app.',
                
                // Contact
                'contact-title': 'Contact Me',
                'contact-subtitle': 'Do you have a project in mind? Let\'s talk!',
                'contact-whatsapp': 'WhatsApp',
                'contact-send-message': 'Send Message',
                'contact-email': 'Email',
                'contact-send-email': 'Send Email',
                'contact-linkedin': 'LinkedIn',
                'contact-view-profile': 'View Profile',
                'contact-location': 'Location',
                'contact-address': 'Santa María, Itagüí<br>Colombia',
                
                // Experience Section
                'experience-title': 'My Experience',
                'experience-subtitle': 'Professional career and featured projects',
                'exp1-title': 'Developer / Computer Networks - Freelancer',
                'exp1-desc': 'Working independently, I have created various applications and websites for management, inventories, sales software, among others, for various companies. Specialized in full-stack development and custom technological solutions.',
                'exp2-title': 'Full Stack Developer',
                'exp2-desc': 'Development of enterprise applications using React and .NET Core. Application of DDD (Domain-Driven Design) patterns for software architecture, aggregate design and separation of responsibilities. Creation of REST APIs, database management and modern user interface development.',
                'exp3-title': 'Professional Technician',
                'exp3-desc': 'In charge of networks, technical maintenance and company software management. Network infrastructure administration, specialized technical support and operating system optimization.',
                
                // Education Section
                'education-title': 'Education and Training',
                'education-subtitle': 'My academic background and certifications',
                'edu1-course': 'Networks and Computer Science, Administration/Administrator of systems, networks and LAN/WAN communications',
                'edu1-desc': 'Specialized training in network administration, computer systems and business communications.',
                'edu2-course': 'Software Programming Technician',
                'edu2-desc': 'Technical training in software development, programming and development methodologies.',
                'edu3-course': 'Network and Telecommunications Design Technician',
                'edu3-desc': 'Specialization in design and implementation of telecommunications networks.',
                
                // Skills Section
                'skills-title': 'Technical Skills',
                'skills-subtitle': 'Technologies and tools I master',
                'skill1-title': 'Software',
                'skill2-title': 'Maintenance Technician',
                'skill3-title': 'Software Developer',
                'skill4-title': 'Networks and Telecommunications',
                
                // Services Section
                'services-subtitle': 'Professional services I offer',
                'service1-title': 'Full Stack Web Development',
                'service1-desc': 'Development of complete web applications with Laravel, JavaScript, React and modern technologies. Specialized in POS systems and business management.',
                'service2-title': 'Mobile Applications',
                'service2-desc': 'Development of native apps for Android and iOS, as well as hybrid applications. Experience in Java, JavaScript and modern frameworks.',
                'service3-title': 'Automation Systems',
                'service3-desc': 'Development of home automation systems, home automation, integration with Arduino and microcontrollers for IoT projects.',
                'service4-title': 'Security Systems',
                'service4-desc': 'Installation and configuration of security systems, surveillance cameras, alarms and access control.',
                'service5-title': 'Cloud Solutions',
                'service5-desc': 'Implementation of Azure solutions, scalable web services and cloud-native architectures for companies.',
                'service6-title': 'UX/UI Design',
                'service6-desc': 'Modern user interface design and digital experiences using Adobe suite, Bootstrap and frontend technologies.',
                
                // Buttons and actions
                'download-cv': 'View CV',
                'contact-me': 'Contact Me'
            },
            ru: {
                // Навигация
                'nav-home': 'Главная',
                'nav-services': 'Услуги',
                'nav-portfolio': 'Портфолио',
                'nav-contact': 'Контакты',
                
                // Loading Screen
                'loading-text': 'Загружается портфолио',
                
                // Hero Section
                'greeting': 'Привет всем!',
                'intro': 'Я',
                'role': 'Основатель Codesign',
                'hero-title': 'Камило Андрес Льоренте Васкес',
                'hero-subtitle': 'Основатель Code Sign',
                'hero-description': 'Full Stack разработчик, специализирующийся на Laravel, PHP, JavaScript и системах автоматизации. Создатель инновационных технологических решений.',
                'hero-contact': 'Связаться со мной',
                'hero-portfolio': 'Посмотреть портфолио',
                'description': 'Я разработчик программного обеспечения, специализирующийся на создании интерактивных проектов, включающих веб-приложения, системы автоматизации и креативные веб-сайты. Большую часть времени я провожу, программируя исключительные проекты или изучая новые технологии для улучшения моего стека разработки. Я разрабатываю привлекательные дизайны, которые оживают с помощью переходов и анимаций, используя самые сложные доступные технологии.',
                'typed': ['Full Stack разработчик', 'Разработчик ПО', 'Специалист по автоматизации'],
                
                // Услуги
                'services-title': 'Что я делаю',
                'service1-title': 'Веб-разработка',
                'service1-desc': 'Создание современных веб-приложений с Laravel, PHP, JavaScript и фронтенд-технологиями, такими как React и Vue.js.',
                'service2-title': 'Мобильные приложения',
                'service2-desc': 'Разработка нативных и гибридных мобильных приложений для Android и iOS с использованием современных технологий.',
                'service3-title': 'Системы автоматизации',
                'service3-desc': 'Разработка систем домашней автоматизации, интеграция с Arduino и микроконтроллерами для IoT проектов.',
                'service4-title': 'Системы безопасности',
                'service4-desc': 'Установка и настройка систем безопасности, камер видеонаблюдения, сигнализации и контроля доступа.',
                'service5-title': 'Облачные решения',
                'service5-desc': 'Внедрение решений Azure, масштабируемых веб-сервисов и облачных архитектур для предприятий.',
                'service6-title': 'UX/UI Дизайн',
                'service6-desc': 'Дизайн современных пользовательских интерфейсов и цифрового опыта с использованием Adobe suite, Bootstrap и фронтенд-технологий.',
                
                // Портфолио
                'portfolio-title': 'Мои проекты',
                'portfolio-subtitle': 'Некоторые из моих выдающихся работ',
                'project1-title': 'POS система Codesign Sales',
                'project1-desc': 'Полная система торговых точек для всех типов бизнеса',
                'project1-name': 'Codesign Sales - POS система',
                'project1-full-desc': 'Полная система торговых точек для магазинов, лавок, ресторанов и всех типов бизнеса. Включает управление запасами, выставление счетов, отчеты и множественные функциональности.',
                'project1-demo': '🚀 ДЕМО ДОСТУПНО',
                'project1-demo-text': 'Попробуйте полную систему:',
                'project2-title': 'AdminISP - Управление ISP',
                'project2-desc': 'Полная система для интернет и телекоммуникационных провайдеров',
                'project2-name': 'AdminISP - Система управления',
                'project2-full-desc': 'Полная платформа для ISP с управлением клиентами, услугами, автоматическими отключениями, интеграцией сетевого оборудования, WhatsApp Business API и выставлением счетов.',
                'project2-demo': '🚀 ДЕМО ДОСТУПНО',
                'project2-demo-text': 'Исследуйте все функциональности:',
                'project3-title': 'Codesign - Корпоративный сайт',
                'project3-desc': 'Корпоративный сайт моей компании разработки',
                'project3-name': 'Codesign - Корпоративный сайт',
                'project3-full-desc': 'Корпоративный сайт моей компании разработки программного обеспечения с современным и адаптивным дизайном.',
                'project4-title': 'Умная система домашней автоматизации',
                'project4-desc': 'Домашняя автоматизация с Arduino и IoT сенсорами',
                'project4-name': 'Arduino система домашней автоматизации',
                'project4-full-desc': 'Система домашней автоматизации с управлением освещением, температурой, безопасностью и удаленным мониторингом через мобильное приложение.',
                
                // Контакты
                'contact-title': 'Связаться со мной',
                'contact-subtitle': 'У вас есть проект в голове? Давайте поговорим!',
                'contact-whatsapp': 'WhatsApp',
                'contact-send-message': 'Отправить сообщение',
                'contact-email': 'Email',
                'contact-send-email': 'Отправить Email',
                'contact-linkedin': 'LinkedIn',
                'contact-view-profile': 'Посмотреть профиль',
                'contact-location': 'Местоположение',
                'contact-address': 'Санта Мария, Итагуи<br>Колумбия',
                
                // Experience Section
                'experience-title': 'Мой опыт',
                'experience-subtitle': 'Профессиональная карьера и избранные проекты',
                'exp1-title': 'Разработчик / Компьютерные сети - Фрилансер',
                'exp1-desc': 'Работая самостоятельно, я создал различные приложения и веб-сайты для управления, инвентаризации, программного обеспечения продаж и многого другого для различных компаний. Специализируюсь на full-stack разработке и индивидуальных технологических решениях.',
                'exp2-title': 'Full Stack разработчик',
                'exp2-desc': 'Разработка корпоративных приложений с использованием React и .NET Core. Применение паттернов DDD (Domain-Driven Design) для архитектуры программного обеспечения, проектирование агрегатов и разделение ответственности. Создание REST API, управление базами данных и разработка современных пользовательских интерфейсов.',
                'exp3-title': 'Профессиональный техник',
                'exp3-desc': 'Отвечал за сети, техническое обслуживание и управление программным обеспечением компании. Администрирование сетевой инфраструктуры, специализированная техническая поддержка и оптимизация операционных систем.',
                
                // Education Section
                'education-title': 'Образование и обучение',
                'education-subtitle': 'Моя академическая подготовка и сертификации',
                'edu1-course': 'Сети и информатика, Администрирование/Администратор систем, сетей и коммуникаций LAN/WAN',
                'edu1-desc': 'Специализированное обучение по администрированию сетей, компьютерных систем и бизнес-коммуникаций.',
                'edu2-course': 'Техник по программированию программного обеспечения',
                'edu2-desc': 'Техническое обучение разработке программного обеспечения, программированию и методологиям разработки.',
                'edu3-course': 'Техник по проектированию сетей и телекоммуникаций',
                'edu3-desc': 'Специализация в проектировании и внедрении телекоммуникационных сетей.',
                
                // Skills Section
                'skills-title': 'Технические навыки',
                'skills-subtitle': 'Технологии и инструменты, которыми я владею',
                'skill1-title': 'Программное обеспечение',
                'skill2-title': 'Техник по обслуживанию',
                'skill3-title': 'Разработчик программного обеспечения',
                'skill4-title': 'Сети и телекоммуникации',
                
                // Services Section
                'services-subtitle': 'Профессиональные услуги, которые я предлагаю',
                'service1-title': 'Full Stack веб-разработка',
                'service1-desc': 'Разработка полных веб-приложений с Laravel, JavaScript, React и современными технологиями. Специализируюсь на POS-системах и корпоративном управлении.',
                'service2-title': 'Мобильные приложения',
                'service2-desc': 'Разработка нативных приложений для Android и iOS, а также гибридных приложений. Опыт работы с Java, JavaScript и современными фреймворками.',
                'service3-title': 'Системы автоматизации',
                'service3-desc': 'Разработка систем домашней автоматизации, умный дом, интеграция с Arduino и микроконтроллерами для IoT проектов.',
                'service4-title': 'Системы безопасности',
                'service4-desc': 'Установка и настройка систем безопасности, камер видеонаблюдения, сигнализации и контроля доступа.',
                'service5-title': 'Облачные решения',
                'service5-desc': 'Внедрение решений Azure, масштабируемых веб-сервисов и облачных архитектур для компаний.',
                'service6-title': 'UX/UI дизайн',
                'service6-desc': 'Дизайн современных пользовательских интерфейсов и цифрового опыта с использованием Adobe suite, Bootstrap и frontend технологий.',
                
                // Buttons and actions
                'download-cv': 'Посмотреть резюме',
                'contact-me': 'Связаться со мной'
            }
        };

        let currentLang = 'es';
        let typedInstance = null;

        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
        
        function initTyped() {
            if (typedInstance) {
                typedInstance.destroy();
            }
            typedInstance = new Typed('.typed-text', {
                strings: translations[currentLang]['typed'],
                typeSpeed: 50, 
                backSpeed: 30, 
                backDelay: 2000, 
                loop: true
            });
        }
        
        function switchLanguage(lang) {
            currentLang = lang;
            document.getElementById('currentLang').textContent = lang.toUpperCase();
            
            // Update all translatable elements
            document.querySelectorAll('[data-translate]').forEach(element => {
                const key = element.getAttribute('data-translate');
                if (translations[lang][key]) {
                    // Check if translation contains HTML (like <br>)
                    if (translations[lang][key].includes('<br>')) {
                        element.innerHTML = translations[lang][key];
                    } else {
                        element.textContent = translations[lang][key];
                    }
                }
            });
            
            // Restart typed animation with new language
            initTyped();
            
            // Update page title
            const titles = {
                es: 'Camilo Llorente Vásquez | Desarrollador de Software',
                en: 'Camilo Llorente Vásquez | Software Developer', 
                ru: 'Камило Льоренте Васкес | Разработчик ПО'
            };
            document.title = titles[lang];
        }
        
        // Auto-fill demo credentials
        function setupDemoAutoFill() {
            // Add click event listeners to demo buttons
            document.querySelectorAll('a[href*="demo=true"]').forEach(button => {
                button.addEventListener('click', function(e) {
                    const url = this.getAttribute('href');
                    const urlParams = new URLSearchParams(url.split('?')[1]);
                    const email = urlParams.get('email');
                    const password = urlParams.get('password');
                    
                    // Store credentials in localStorage for auto-fill
                    if (email && password) {
                        localStorage.setItem('demo_email', email);
                        localStorage.setItem('demo_password', password);
                        localStorage.setItem('demo_mode', 'true');
                    }
                });
            });
        }
        
        // Copy demo credentials and show notification
        function copyDemoCredentials(email, password) {
            // Copy email to clipboard
            navigator.clipboard.writeText(email).then(() => {
                showDemoNotification(email, password);
            }).catch(() => {
                // Fallback for older browsers
                showDemoNotification(email, password);
            });
        }
        
        function showDemoNotification(email, password) {
            // Create notification
            const notification = document.createElement('div');
            notification.innerHTML = `
                <div style="
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background: rgba(0, 0, 0, 0.95);
                    color: white;
                    padding: 25px;
                    border-radius: 15px;
                    border: 2px solid #ff3333;
                    text-align: center;
                    z-index: 10000;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
                    max-width: 400px;
                    width: 90%;
                ">
                    <h4 style="color: #ff3333; margin-bottom: 15px;">🚀 Credenciales de Demo</h4>
                    <p style="margin: 10px 0;"><strong>Email:</strong> <code style="background: #ff3333; padding: 3px 8px; border-radius: 4px;">${email}</code></p>
                    <p style="margin: 10px 0;"><strong>Contraseña:</strong> <code style="background: #ff3333; padding: 3px 8px; border-radius: 4px;">${password}</code></p>
                    <p style="font-size: 0.9rem; color: #ccc; margin-top: 15px;">
                        📋 Email copiado al portapapeles<br>
                        ✨ Use estas credenciales para acceder al demo
                    </p>
                    <button onclick="this.parentElement.parentElement.remove()" style="
                        background: #ff3333;
                        border: none;
                        color: white;
                        padding: 8px 15px;
                        border-radius: 5px;
                        margin-top: 15px;
                        cursor: pointer;
                    ">Cerrar</button>
                </div>
            `;
            
            document.body.appendChild(notification);
            
            // Auto-remove after 8 seconds
            setTimeout(() => {
                if (notification.parentElement) {
                    notification.remove();
                }
            }, 8000);
        }
        
        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            if (!particlesContainer) return;
            
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                // Random size between 2px and 6px
                const size = Math.random() * 4 + 2;
                particle.style.width = size + 'px';
                particle.style.height = size + 'px';
                
                // Random horizontal position
                particle.style.left = Math.random() * 100 + '%';
                
                // Random animation delay
                particle.style.animationDelay = Math.random() * 6 + 's';
                
                // Random animation duration
                particle.style.animationDuration = (Math.random() * 3 + 4) + 's';
                
                particlesContainer.appendChild(particle);
            }
        }
        
        // Loading Screen Management
        let loadingTexts = {
            es: ['Cargando Portfolio', 'Preparando contenido', 'Casi listo'],
            en: ['Loading Portfolio', 'Preparing content', 'Almost ready'],
            ru: ['Загружается портфолио', 'Подготовка контента', 'Почти готово']
        };
        
        let currentTextIndex = 0;
        let loadingInterval;
        
        function updateLoadingText() {
            const loadingTextElement = document.querySelector('.loading-text');
            const currentLang = localStorage.getItem('selectedLanguage') || 'es';
            const texts = loadingTexts[currentLang];
            
            if (loadingTextElement && texts) {
                loadingTextElement.textContent = texts[currentTextIndex];
                currentTextIndex = (currentTextIndex + 1) % texts.length;
            }
        }
        
        // Start loading animation immediately
        createParticles();
        
        // Start loading text animation
        document.addEventListener('DOMContentLoaded', function() {
            updateLoadingText();
            loadingInterval = setInterval(updateLoadingText, 1000);
        });
        
        window.addEventListener('load', function() {
            // Clear the text animation interval
            if (loadingInterval) {
                clearInterval(loadingInterval);
            }
            
            // Hide loading screen after page is fully loaded
            setTimeout(() => {
                const loadingScreen = document.getElementById('loadingScreen');
                if (loadingScreen) {
                    loadingScreen.classList.add('fade-out');
                    setTimeout(() => {
                        loadingScreen.style.display = 'none';
                    }, 800);
                }
            }, 1200); // Show loading for at least 1.2 seconds
        });
        
        // Preload critical images
        function preloadImages() {
            const images = [
                '{{ asset("assets/images/camilo.jpg") }}',
                '{{ asset("assets/images/ventas-codesign.jpg") }}',
                '{{ asset("assets/images/adminisp-codesign.jpg") }}',
                '{{ asset("assets/images/codesign-web.jpg") }}',
                '{{ asset("assets/images/automation-project.jpg") }}'
            ];
            
            images.forEach(src => {
                const img = new Image();
                img.src = src;
            });
        }
        
        // Call preload function immediately
        preloadImages();
        
        // Call setup function when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // The typed text animation is now handled in main.js
        });
        
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(10, 10, 10, 0.95)';
            } else {
                navbar.style.background = 'rgba(26, 26, 26, 0.95)';
            }
        });
    </script>
    
    <!-- Translation and Main JavaScript Files -->
    <script src="{{ asset('assets/js/translations.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
