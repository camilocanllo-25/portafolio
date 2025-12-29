<!DOCTYPE html>
<html lang="{{ $locale }}" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Camilo Llorente Vásquez | Desarrollador Full Stack')</title>
    <meta name="description" content="@yield('description', __('portfolio.meta.description'))">
    <meta name="keywords" content="desarrollador, full stack, laravel, php, javascript, react, automatización, domotica, codesign, santa maria, itagui">
    <meta name="author" content="Camilo Llorente Vásquez">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Camilo Llorente Vásquez | Desarrollador Full Stack')">
    <meta property="og:description" content="@yield('description', __('portfolio.meta.description'))">
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">
    <meta property="og:locale" content="{{ str_replace('-', '_', app()->getLocale()) }}">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'Camilo Llorente Vásquez | Desarrollador Full Stack')">
    <meta property="twitter:description" content="@yield('description', __('portfolio.meta.description'))">
    <meta property="twitter:image" content="{{ asset('assets/images/og-image.jpg') }}">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Alternate languages -->
    <link rel="alternate" hreflang="es" href="{{ route('portfolio.index', ['lang' => 'es']) }}">
    <link rel="alternate" hreflang="en" href="{{ route('portfolio.index', ['lang' => 'en']) }}">
    <link rel="alternate" hreflang="ru" href="{{ route('portfolio.index', ['lang' => 'ru']) }}">
    
    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">
    
    <!-- CSS Files -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Additional CSS -->
    @stack('styles')
</head>
<body>
    <!-- Preloader -->
    <div id="preloader" class="preloader">
        <div class="preloader-content">
            <div class="profile-loader">
                <div class="profile-image-loader">
                    <img src="{{ asset('assets/images/camilo.jpg') }}" alt="Camilo Llorente" class="loader-image">
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
                <span id="currentLang">{{ strtoupper($locale) }}</span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                <li><a class="dropdown-item" href="{{ route('portfolio.lang', 'es') }}">🇪🇸 Español</a></li>
                <li><a class="dropdown-item" href="{{ route('portfolio.lang', 'en') }}">🇺🇸 English</a></li>
                <li><a class="dropdown-item" href="{{ route('portfolio.lang', 'ru') }}">🇷🇺 Русский</a></li>
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
                            <a class="nav-link {{ request()->routeIs('portfolio.index') ? 'active' : '' }}" 
                               href="{{ route('portfolio.index', ['lang' => $locale]) }}">
                               {{ __('portfolio.nav.home') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('portfolio.resume*') ? 'active' : '' }}" 
                               href="{{ route('portfolio.resume.lang', $locale) }}">
                               {{ __('portfolio.nav.resume') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('portfolio.index', ['lang' => $locale]) }}#portfolio">
                                {{ __('portfolio.nav.portfolio') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('portfolio.index', ['lang' => $locale]) }}#services">
                                {{ __('portfolio.nav.services') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('portfolio.index', ['lang' => $locale]) }}#contact">
                                {{ __('portfolio.nav.contact') }}
                            </a>
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
                    <p>&copy; {{ date('Y') }} Camilo Llorente Vásquez. {{ __('portfolio.footer.rights') }}</p>
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

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('portfolio.contact.modal.title') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="contactForm" method="POST" action="{{ route('api.contact') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">{{ __('portfolio.contact.form.name') }}</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">{{ __('portfolio.contact.form.email') }}</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label">{{ __('portfolio.contact.form.subject') }}</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">{{ __('portfolio.contact.form.message') }}</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> {{ __('portfolio.contact.form.send') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @stack('scripts')
    
    <!-- Global JS Configuration -->
    <script>
        window.portfolioConfig = {
            locale: '{{ $locale }}',
            apiToken: '{{ csrf_token() }}',
            routes: {
                contact: '{{ route("api.contact") }}'
            },
            translations: {
                loading: '{{ __("portfolio.loading") }}',
                success: '{{ __("portfolio.success") }}',
                error: '{{ __("portfolio.error") }}'
            }
        };
    </script>
</body>
</html>
