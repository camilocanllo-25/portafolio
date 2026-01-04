<!DOCTYPE html>
<html lang="es" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camilo Llorente Vásquez | Desarrollador Full Stack</title>
    <meta name="description" content="Desarrollador Full Stack especializado en Laravel, sistemas de automatización, domotica y desarrollo web. 6 años de experiencia creando soluciones innovadoras.">
    <meta name="keywords" content="desarrollador, full stack, laravel, php, javascript, react, automatización, domotica, codesign, santa maria, itagui">
    <meta name="author" content="Camilo Llorente Vásquez">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://camilollorente.codesign.com.co/">
    <meta property="og:title" content="Camilo Llorente Vásquez | Desarrollador Full Stack">
    <meta property="og:description" content="Desarrollador Full Stack especializado en Laravel, sistemas de automatización, domotica y desarrollo web. 6 años de experiencia creando soluciones innovadoras.">
    <meta property="og:image" content="http://camilollorente.codesign.com.co/assets/images/og-image.jpg">
    <meta property="og:locale" content="es_CO">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://camilollorente.codesign.com.co/">
    <meta property="twitter:title" content="Camilo Llorente Vásquez | Desarrollador Full Stack">
    <meta property="twitter:description" content="Desarrollador Full Stack especializado en Laravel, sistemas de automatización, domotica y desarrollo web. 6 años de experiencia creando soluciones innovadoras.">
    <meta property="twitter:image" content="http://camilollorente.codesign.com.co/assets/images/og-image.jpg">
    
    <!-- LinkedIn -->
    <meta property="linkedin:owner" content="camilo-andres-llorente-vasquez-41930a193">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="http://camilollorente.codesign.com.co/">
    
    <!-- Alternate languages -->
    <link rel="alternate" hreflang="es" href="http://camilollorente.codesign.com.co/">
    <link rel="alternate" hreflang="en" href="http://camilollorente.codesign.com.co/">
    <link rel="alternate" hreflang="ru" href="http://camilollorente.codesign.com.co/">
    
    <!-- Schema.org structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Camilo Llorente Vásquez",
        "jobTitle": "Desarrollador Full Stack",
        "description": "Desarrollador Full Stack especializado en Laravel, sistemas de automatización, domotica y desarrollo web",
        "url": "http://camilollorente.codesign.com.co/",
        "email": "camilollorente@codesign.com.co",
        "telephone": "+573002112728",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Santa María, Itagüí",
            "addressRegion": "Antioquia",
            "addressCountry": "Colombia"
        },
        "alumniOf": "Universidad de Antioquia",
        "worksFor": {
            "@type": "Organization",
            "name": "Codesign",
            "url": "https://codesign.com.co"
        },
        "sameAs": [
            "https://www.linkedin.com/in/camilo-andres-llorente-vasquez-41930a193/",
            "https://codesign.com.co"
        ],
        "knowsAbout": [
            "Laravel",
            "PHP",
            "JavaScript",
            "React",
            "Vue.js",
            "Node.js",
            "Python",
            "Java",
            "Arduino",
            "IoT",
            "Automatización",
            "Domótica",
            "Azure",
            "MySQL",
            "PostgreSQL"
        ]
    }
    </script>
    
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/camilo-profile.jpeg') }}">
    
    <!-- CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container">
            <div class="nav-circle">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resume">Currículum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portafolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Servicios</a>
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
    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>&copy; 2025 Camilo Llorente Vásquez. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6">
                    <div class="footer-social">
                        <a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/camilo-andres-llorente-vasquez-41930a193/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    
    @stack('scripts')
</body>
</html>
