<!DOCTYPE html>
<html lang="{{ $locale ?? 'es' }}" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Camilo Llorente Vásquez | Desarrollador Full Stack')</title>
    <meta name="description" content="@yield('description', 'Desarrollador Full Stack especializado en Laravel, JavaScript, y sistemas de automatización.')">
    <meta name="keywords" content="desarrollador, full stack, laravel, php, javascript, react, automatización, domotica, codesign, santa maria, itagui">
    <meta name="author" content="Camilo Llorente Vásquez">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Camilo Llorente Vásquez | Desarrollador Full Stack')">
    <meta property="og:description" content="@yield('description', 'Desarrollador Full Stack especializado en Laravel, JavaScript, y sistemas de automatización.')">
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">
    <meta property="og:locale" content="{{ str_replace('-', '_', app()->getLocale()) }}">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'Camilo Llorente Vásquez | Desarrollador Full Stack')">
    <meta property="twitter:description" content="@yield('description', 'Desarrollador Full Stack especializado en Laravel, JavaScript, y sistemas de automatización.')">
    <meta property="twitter:image" content="{{ asset('assets/images/og-image.jpg') }}">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/perfil_foto.png') }}">
    
    <!-- CSS Files -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Additional CSS -->
    @stack('styles')
</head>
<body>
    <!-- Preloader -->
    <div id="preloader" class="preloader">
        <div class="preloader-content">
            <div class="profile-loader">
                <div class="profile-image-loader">
                    <img src="{{ asset('assets/images/perfil_foto.png') }}" alt="Camilo Llorente" class="loader-image">
                    <div class="loader-ring"></div>
                    <div class="loader-ring-2"></div>
                </div>
                <div class="loader-text">
                    <h3>Camilo Llorente</h3>
                    <p class="typing-loader"></p>
                    <div class="loading-dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="loader-progress">
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>
                <span class="progress-text">0%</span>
            </div>
        </div>
    </div>

    <!-- Language Selector -->
    <div class="language-selector">
        <div class="dropdown">
            <button class="btn btn-link dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown">
                <i class="fas fa-globe"></i> 
                <span id="currentLang">{{ strtoupper($locale ?? 'ES') }}</span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                <li><a class="dropdown-item" href="/?lang=es">🇪🇸 Español</a></li>
                <li><a class="dropdown-item" href="/?lang=en">🇺🇸 English</a></li>
                <li><a class="dropdown-item" href="/?lang=ru">🇷🇺 Русский</a></li>
            </ul>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container">
            <div class="nav-circle">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portafolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="close-btn">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>&copy; {{ date('Y') }} Camilo Llorente Vásquez. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6">
                    <div class="footer-social">
                        <a href="https://github.com/camilollorente" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/camilo-andres-llorente-vasquez-41930a193/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://twitter.com/camilollorente" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com/camilollorente" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Typed.js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    
    <!-- Scripts -->
    @stack('scripts')
    
    <!-- Global JS Configuration -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });
        
        // Preloader
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            if (preloader) {
                preloader.style.opacity = '0';
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 500);
            }
        });
        
        // Back to top button
        const backToTopButton = document.getElementById('backToTop');
        if (backToTopButton) {
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 100) {
                    backToTopButton.style.display = 'block';
                } else {
                    backToTopButton.style.display = 'none';
                }
            });
            
            backToTopButton.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
    </script>
</body>
</html>
