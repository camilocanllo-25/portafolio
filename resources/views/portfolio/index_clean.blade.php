@extends('portfolio.layout')

@section('content')
<!-- Enhanced Hero Section with Particles and Animations -->
<section id="home" class="hero-section">
    <div id="particles-js"></div>
    
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="1000">
                <div class="hero-content">
                    <span class="greeting">{{ $data['translations']['greeting'] }}</span>
                    <h1 class="hero-title">
                        <span class="highlight-text">{{ $data['translations']['name'] }}</span>
                        <br>
                        <span class="typed-text"></span>
                    </h1>
                    
                    <!-- Enhanced Hero Info Grid -->
                    <div class="hero-info">
                        <div class="info-item">
                            <i class="fas fa-birthday-cake"></i>
                            <span>{{ $data['translations']['info']['age'] }}</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>{{ $data['translations']['info']['location'] }}</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <span>{{ $data['translations']['info']['email'] }}</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <span>{{ $data['translations']['info']['phone'] }}</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-briefcase"></i>
                            <span>{{ $data['translations']['info']['experience'] }}</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-building"></i>
                            <span>{{ $data['translations']['info']['company'] }}</span>
                        </div>
                    </div>
                    
                    <p class="hero-description">
                        {{ $data['translations']['hero_description'] }}
                    </p>
                    
                    <div class="hero-buttons">
                        <a href="{{ asset('assets/cv/camilo-cv.pdf') }}" class="btn btn-primary" download>
                            <i class="fas fa-download me-2"></i>
                            {{ $data['translations']['buttons']['download_cv'] }}
                        </a>
                        <a href="#contact" class="btn btn-outline-primary">
                            <i class="fas fa-envelope me-2"></i>
                            {{ $data['translations']['buttons']['contact'] }}
                        </a>
                    </div>
                    
                    <!-- Enhanced Social Links -->
                    <div class="social-links">
                        <a href="{{ $data['translations']['social_links']['github'] }}" class="social-link" target="_blank" rel="noopener">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="{{ $data['translations']['social_links']['linkedin'] }}" class="social-link" target="_blank" rel="noopener">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="{{ $data['translations']['social_links']['twitter'] }}" class="social-link" target="_blank" rel="noopener">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="{{ $data['translations']['social_links']['instagram'] }}" class="social-link" target="_blank" rel="noopener">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="{{ $data['translations']['social_links']['behance'] }}" class="social-link" target="_blank" rel="noopener">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="{{ $data['translations']['social_links']['dribbble'] }}" class="social-link" target="_blank" rel="noopener">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                <div class="hero-image">
                    <div class="image-wrapper">
                        <img src="{{ asset('assets/images/camilo-profile-placeholder.svg') }}" alt="{{ $data['translations']['name'] }}" class="profile-image">
                        
                        <!-- Floating Technology Icons -->
                        <div class="floating-elements">
                            <div class="floating-icon" title="Laravel">
                                <i class="fab fa-laravel"></i>
                            </div>
                            <div class="floating-icon" title="Vue.js">
                                <i class="fab fa-vuejs"></i>
                            </div>
                            <div class="floating-icon" title="React">
                                <i class="fab fa-react"></i>
                            </div>
                            <div class="floating-icon" title="JavaScript">
                                <i class="fab fa-js"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Enhanced Scroll Indicator -->
        <div class="scroll-indicator">
            <div class="scroll-line"></div>
            <span class="scroll-text">Scroll Down</span>
        </div>
    </div>
</section>

<!-- Enhanced Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            @foreach($data['stats'] as $index => $stat)
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="stat-card">
                    <div class="stat-number" data-count="{{ rtrim($stat['number'], '+') }}">{{ $stat['number'] }}</div>
                    <div class="stat-label">{{ $stat['label'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Enhanced Services Section -->
<section id="services" class="services-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">{{ $data['translations']['navigation']['services'] }}</span>
            <h2>Mis Servicios</h2>
            <p>Soluciones digitales completas para transformar tu negocio</p>
        </div>
        
        <div class="row">
            @foreach($data['services'] as $service)
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $service['delay'] }}">
                <div class="service-card">
                    <div class="service-overlay">
                        <div class="service-number">{{ $loop->iteration }}</div>
                    </div>
                    <div class="service-icon">
                        <i class="{{ $service['icon'] }}"></i>
                    </div>
                    <h4>{{ $service['title'] }}</h4>
                    <p>{{ $service['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Enhanced Portfolio Section -->
<section id="portfolio" class="portfolio-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">{{ $data['translations']['portfolio']['section_subtitle'] }}</span>
            <h2>{{ $data['translations']['portfolio']['section_title'] }}</h2>
            <p>{{ $data['translations']['portfolio']['section_description'] }}</p>
        </div>
        
        <div class="row">
            @foreach($data['projects'] as $project)
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $project['delay'] }}">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>{{ $project['title'] }}</h4>
                                <p>{{ $project['description'] }}</p>
                                <div class="mt-3">
                                    <a href="{{ $project['url'] }}" class="btn btn-primary btn-sm me-2" target="_blank">
                                        <i class="fas fa-external-link-alt me-1"></i>
                                        {{ $data['translations']['portfolio']['view_project'] }}
                                    </a>
                                    @if(isset($project['github']))
                                    <a href="{{ $project['github'] }}" class="btn btn-outline-primary btn-sm" target="_blank">
                                        <i class="fab fa-github me-1"></i>
                                        {{ $data['translations']['portfolio']['view_code'] }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h5>{{ $project['title'] }}</h5>
                        <div class="portfolio-tech">{{ $data['translations']['portfolio']['technologies'] }} {{ implode(', ', $project['technologies']) }}</div>
                        <p>{{ $project['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Enhanced Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">{{ $data['translations']['contact']['section_subtitle'] }}</span>
            <h2>{{ $data['translations']['contact']['section_title'] }}</h2>
            <p>{{ $data['translations']['contact']['section_description'] }}</p>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="row">
                    <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h5>Teléfono</h5>
                            <p>{{ $data['personalInfo']['phone'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h5>Email</h5>
                            <p>{{ $data['personalInfo']['email'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h5>Ubicación</h5>
                            <p>{{ $data['personalInfo']['location'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            <h5>LinkedIn</h5>
                            <p><a href="{{ $data['personalInfo']['linkedin'] }}" target="_blank">Ver Perfil</a></p>
                        </div>
                    </div>
                </div>
                
                <!-- Enhanced Contact Form -->
                <div class="contact-form-wrapper mt-5" data-aos="fade-up" data-aos-delay="500">
                    <form id="contact-form" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="{{ $data['translations']['contact']['form_name'] }}" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="{{ $data['translations']['contact']['form_email'] }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="{{ $data['translations']['contact']['form_subject'] }}" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="6" placeholder="{{ $data['translations']['contact']['form_message'] }}" required></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>
                                {{ $data['translations']['contact']['form_send'] }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Back to Top Button -->
<button class="back-to-top" id="backToTop">
    <i class="fas fa-chevron-up"></i>
</button>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    // Typed text animation
    document.addEventListener('DOMContentLoaded', function() {
        const typedStrings = [
            '{{ $data['translations']['typed']['developer'] }}',
            '{{ $data['translations']['typed']['engineer'] }}',
            '{{ $data['translations']['typed']['automation'] }}',
            '{{ $data['translations']['typed']['innovator'] }}'
        ];
        
        if (typeof Typed !== 'undefined') {
            new Typed('.typed-text', {
                strings: typedStrings,
                typeSpeed: 50,
                backSpeed: 30,
                backDelay: 2000,
                loop: true,
                showCursor: true,
                cursorChar: '|'
            });
        }
    });
</script>
@endpush
