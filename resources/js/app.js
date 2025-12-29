import './bootstrap';

// Import CSS and JS libraries
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import 'aos/dist/aos.css';
import AOS from 'aos';
import Typed from 'typed.js';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

// Preloader functionality
class PortfolioPreloader {
    constructor() {
        this.preloader = document.querySelector('.preloader');
        this.progressFill = document.querySelector('.progress-fill');
        this.progressText = document.querySelector('.progress-text');
        this.loaderImage = document.querySelector('.loader-image');
        this.typingLoader = document.querySelector('.typing-loader');
        
        if (this.preloader) {
            this.init();
        }
    }
    
    init() {
        // Ensure minimum loading time for better UX
        const minLoadTime = 3000; // 3 seconds
        const startTime = Date.now();
        
        // Start progress animation
        this.animateProgress();
        
        // Initialize typing animation in preloader
        this.initTypingLoader();
        
        // Wait for both page load and minimum time
        Promise.all([
            new Promise(resolve => {
                if (document.readyState === 'complete') {
                    resolve();
                } else {
                    window.addEventListener('load', resolve);
                }
            }),
            this.simulateLoading()
        ]).then(() => {
            const elapsedTime = Date.now() - startTime;
            const remainingTime = Math.max(0, minLoadTime - elapsedTime);
            
            setTimeout(() => {
                this.hidePreloader();
            }, remainingTime);
        });
    }
    
    animateProgress() {
        if (!this.progressFill || !this.progressText) return;
        
        let progress = 0;
        const progressInterval = setInterval(() => {
            progress += Math.random() * 15; // Random increment for realistic feel
            if (progress > 95) progress = 95; // Stop at 95% until actually loaded
            
            this.progressFill.style.width = progress + '%';
            this.progressText.textContent = Math.round(progress) + '%';
            
            if (progress >= 95) {
                clearInterval(progressInterval);
            }
        }, 200);
    }
    
    initTypingLoader() {
        if (!this.typingLoader) return;
        
        new Typed('.typing-loader', {
            strings: [
                'Iniciando Codesign Portfolio...',
                'Cargando experiencia profesional...',
                'Preparando proyectos increíbles...',
                'Configurando animaciones...',
                '¡Casi listo!'
            ],
            typeSpeed: 50,
            backSpeed: 30,
            backDelay: 800,
            loop: true,
            showCursor: true,
            cursorChar: '|'
        });
    }
    
    simulateLoading() {
        return new Promise(resolve => {
            // Simulate asset loading
            const assets = [
                'fonts', 'images', 'scripts', 'styles', 'animations'
            ];
            
            let loadedAssets = 0;
            
            assets.forEach((asset, index) => {
                setTimeout(() => {
                    loadedAssets++;
                    if (loadedAssets === assets.length) {
                        // Complete progress to 100%
                        if (this.progressFill && this.progressText) {
                            this.progressFill.style.width = '100%';
                            this.progressText.textContent = '100%';
                        }
                        setTimeout(resolve, 500);
                    }
                }, (index + 1) * 400);
            });
        });
    }
    
    hidePreloader() {
        if (!this.preloader) return;
        
        // Add fade out class
        this.preloader.classList.add('fade-out');
        
        // Initialize main portfolio after preloader
        setTimeout(() => {
            this.preloader.style.display = 'none';
            this.initPortfolio();
        }, 500);
    }
    
    initPortfolio() {
        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out-cubic',
            once: true,
            mirror: false,
            offset: 100
        });
        
        // Initialize other portfolio features
        new PortfolioAnimations();
        new PortfolioTyping();
        new PortfolioNavigation();
        new PortfolioParticles();
    }
}

// Portfolio animations class
class PortfolioAnimations {
    constructor() {
        this.initGSAPAnimations();
        this.initCounters();
        this.initFloatingElements();
    }
    
    initGSAPAnimations() {
        // Hero section animations
        gsap.timeline()
            .from('.greeting', { opacity: 0, y: 50, duration: 1, ease: 'power3.out' })
            .from('.hero-title', { opacity: 0, y: 50, duration: 1, ease: 'power3.out' }, '-=0.7')
            .from('.hero-info', { opacity: 0, y: 50, duration: 1, ease: 'power3.out' }, '-=0.7')
            .from('.hero-description', { opacity: 0, y: 50, duration: 1, ease: 'power3.out' }, '-=0.7')
            .from('.hero-buttons', { opacity: 0, y: 50, duration: 1, ease: 'power3.out' }, '-=0.7')
            .from('.social-links', { opacity: 0, y: 50, duration: 1, ease: 'power3.out' }, '-=0.7');
        
        // Image entrance animation
        gsap.from('.profile-image', {
            scale: 0,
            rotation: 180,
            duration: 1.5,
            ease: 'elastic.out(1, 0.5)',
            delay: 0.8
        });
        
        // Stats counter animation with ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);
        
        gsap.utils.toArray('.stat-card').forEach((card, index) => {
            gsap.from(card, {
                y: 100,
                opacity: 0,
                duration: 0.8,
                delay: index * 0.2,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
                }
            });
        });
    }
    
    initCounters() {
        const counters = document.querySelectorAll('.stat-number');
        
        counters.forEach(counter => {
            const target = parseInt(counter.textContent);
            
            ScrollTrigger.create({
                trigger: counter,
                start: 'top 85%',
                onEnter: () => {
                    gsap.from(counter, {
                        textContent: 0,
                        duration: 2,
                        ease: 'power2.out',
                        snap: { textContent: 1 },
                        onUpdate: function() {
                            counter.textContent = Math.ceil(this.targets()[0].textContent);
                        }
                    });
                }
            });
        });
    }
    
    initFloatingElements() {
        // Animate floating icons
        gsap.utils.toArray('.floating-icon').forEach((icon, index) => {
            gsap.to(icon, {
                y: -20,
                duration: 2 + index * 0.5,
                ease: 'power2.inOut',
                yoyo: true,
                repeat: -1
            });
            
            gsap.to(icon, {
                rotation: 360,
                duration: 20 + index * 5,
                ease: 'none',
                repeat: -1
            });
        });
    }
}

// Portfolio typing effects
class PortfolioTyping {
    constructor() {
        this.initMainTyping();
    }
    
    initMainTyping() {
        const typedElement = document.querySelector('.typed-text');
        if (typedElement) {
            new Typed('.typed-text', {
                strings: [
                    'Full-Stack Developer',
                    'Especialista en Laravel',
                    'Desarrollador Mobile',
                    'UI/UX Designer',
                    'Arquitecto de Software'
                ],
                typeSpeed: 80,
                backSpeed: 50,
                backDelay: 2000,
                startDelay: 1000,
                loop: true,
                showCursor: true,
                cursorChar: '|',
                autoInsertCss: true
            });
        }
    }
}

// Navigation enhancements
class PortfolioNavigation {
    constructor() {
        this.navbar = document.querySelector('.navbar');
        this.initScrollEffects();
        this.initSmoothScroll();
    }
    
    initScrollEffects() {
        if (!this.navbar) return;
        
        let lastScroll = 0;
        
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            // Add/remove scrolled class
            if (currentScroll > 100) {
                this.navbar.classList.add('scrolled');
            } else {
                this.navbar.classList.remove('scrolled');
            }
            
            // Hide/show navbar on scroll
            if (currentScroll > lastScroll && currentScroll > 200) {
                this.navbar.style.transform = 'translateY(-100%)';
            } else {
                this.navbar.style.transform = 'translateY(0)';
            }
            
            lastScroll = currentScroll;
        });
    }
    
    initSmoothScroll() {
        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }
}

// Particles.js integration
class PortfolioParticles {
    constructor() {
        this.initParticles();
    }
    
    initParticles() {
        if (typeof particlesJS !== 'undefined') {
            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 50,
                        density: {
                            enable: true,
                            value_area: 800
                        }
                    },
                    color: {
                        value: '#ff3333'
                    },
                    shape: {
                        type: 'circle'
                    },
                    opacity: {
                        value: 0.5,
                        random: true,
                        anim: {
                            enable: true,
                            speed: 1,
                            opacity_min: 0.1,
                            sync: false
                        }
                    },
                    size: {
                        value: 3,
                        random: true,
                        anim: {
                            enable: true,
                            speed: 2,
                            size_min: 0.1,
                            sync: false
                        }
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: '#ff3333',
                        opacity: 0.4,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 2,
                        direction: 'none',
                        random: false,
                        straight: false,
                        out_mode: 'out',
                        bounce: false
                    }
                },
                interactivity: {
                    detect_on: 'canvas',
                    events: {
                        onhover: {
                            enable: true,
                            mode: 'repulse'
                        },
                        onclick: {
                            enable: true,
                            mode: 'push'
                        },
                        resize: true
                    },
                    modes: {
                        grab: {
                            distance: 400,
                            line_linked: {
                                opacity: 1
                            }
                        },
                        bubble: {
                            distance: 400,
                            size: 40,
                            duration: 2,
                            opacity: 8,
                            speed: 3
                        },
                        repulse: {
                            distance: 200,
                            duration: 0.4
                        },
                        push: {
                            particles_nb: 4
                        },
                        remove: {
                            particles_nb: 2
                        }
                    }
                },
                retina_detect: true
            });
        }
    }
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Start with preloader
    new PortfolioPreloader();
    
    // Initialize other features that don't depend on preloader
    console.log('🚀 Camilo Llorente Portfolio - Laravel Version Initialized');
});

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger, TextPlugin);

document.addEventListener('DOMContentLoaded', function() {
    initializePreloader();
    initializeParticles();
    initializeAnimations();
    initializeNavigation();
    initializeTypedText();
    initializeCounters();
    initializeMagneticEffect();
    initializeScrollEffects();
    initializeLanguage();
    initializeContactForm();
});

// ===== Enhanced Preloader =====
function initializePreloader() {
    const preloader = document.querySelector('.preloader');
    const progressFill = document.querySelector('.progress-fill');
    const progressText = document.querySelector('.progress-text');
    const typingLoader = document.querySelector('.typing-loader');
    
    if (!preloader) return;
    
    // Typing animation for loader
    const loaderTyped = new Typed(typingLoader, {
        strings: [
            'Cargando experiencia digital...',
            'Inicializando creatividad...',
            'Preparando innovación...',
            'Conectando con el futuro...'
        ],
        typeSpeed: 50,
        backSpeed: 30,
        backDelay: 1000,
        loop: true,
        showCursor: true,
        cursorChar: '|',
        autoInsertCss: true
    });
    
    // Progress animation
    let progress = 0;
    const progressInterval = setInterval(() => {
        progress += Math.random() * 15;
        if (progress > 100) progress = 100;
        
        progressFill.style.width = progress + '%';
        progressText.textContent = Math.round(progress) + '%';
        
        if (progress >= 100) {
            clearInterval(progressInterval);
            
            // Delay before hiding preloader
            setTimeout(() => {
                loaderTyped.destroy();
                
                // GSAP animation for smooth preloader exit
                gsap.to(preloader, {
                    opacity: 0,
                    duration: 0.8,
                    ease: "power2.out",
                    onComplete: () => {
                        preloader.style.display = 'none';
                        document.body.style.overflow = 'visible';
                        
                        // Initialize AOS after preloader
                        AOS.init({
                            duration: 1000,
                            easing: 'ease-out-cubic',
                            once: true,
                            offset: 50
                        });
                        
                        // Trigger hero animations
                        animateHeroEntry();
                    }
                });
            }, 500);
        }
    }, 100);
    
    // Minimum loading time
    setTimeout(() => {
        if (progress < 100) {
            progress = 100;
            progressFill.style.width = '100%';
            progressText.textContent = '100%';
        }
    }, 3000);
}

// ===== Enhanced Particles.js =====
function initializeParticles() {
    if (typeof particlesJS !== 'undefined') {
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: ['#ff3333', '#ffd700', '#ffffff']
                },
                shape: {
                    type: 'circle',
                    stroke: {
                        width: 0,
                        color: '#000000'
                    }
                },
                opacity: {
                    value: 0.6,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 2,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#ff3333',
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: 'none',
                    random: false,
                    straight: false,
                    out_mode: 'out',
                    bounce: false,
                    attract: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 1200
                    }
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: {
                        enable: true,
                        mode: 'repulse'
                    },
                    onclick: {
                        enable: true,
                        mode: 'push'
                    },
                    resize: true
                },
                modes: {
                    grab: {
                        distance: 400,
                        line_linked: {
                            opacity: 1
                        }
                    },
                    bubble: {
                        distance: 400,
                        size: 40,
                        duration: 2,
                        opacity: 8,
                        speed: 3
                    },
                    repulse: {
                        distance: 200,
                        duration: 0.4
                    },
                    push: {
                        particles_nb: 4
                    },
                    remove: {
                        particles_nb: 2
                    }
                }
            },
            retina_detect: true
        });
    }
}

// ===== Hero Entry Animation =====
function animateHeroEntry() {
    const tl = gsap.timeline();
    
    // Animate hero content
    tl.fromTo('.greeting', 
        { opacity: 0, x: -50 }, 
        { opacity: 1, x: 0, duration: 0.8, ease: "power2.out" }
    )
    .fromTo('.hero-title', 
        { opacity: 0, x: -50 }, 
        { opacity: 1, x: 0, duration: 0.8, ease: "power2.out" }, 
        "-=0.6"
    )
    .fromTo('.hero-info', 
        { opacity: 0, y: 30 }, 
        { opacity: 1, y: 0, duration: 0.8, ease: "power2.out" }, 
        "-=0.4"
    )
    .fromTo('.hero-description', 
        { opacity: 0, y: 20 }, 
        { opacity: 1, y: 0, duration: 0.8, ease: "power2.out" }, 
        "-=0.4"
    )
    .fromTo('.hero-buttons', 
        { opacity: 0, y: 20 }, 
        { opacity: 1, y: 0, duration: 0.8, ease: "power2.out" }, 
        "-=0.4"
    )
    .fromTo('.social-links', 
        { opacity: 0, y: 20 }, 
        { opacity: 1, y: 0, duration: 0.8, ease: "power2.out" }, 
        "-=0.4"
    );
    
    // Animate hero image
    gsap.fromTo('.image-wrapper', 
        { opacity: 0, x: 50, scale: 0.8 }, 
        { opacity: 1, x: 0, scale: 1, duration: 1, ease: "back.out(1.7)", delay: 0.3 }
    );
    
    // Animate floating icons
    gsap.fromTo('.floating-icon', 
        { opacity: 0, scale: 0 }, 
        { 
            opacity: 1, 
            scale: 1, 
            duration: 0.6, 
            ease: "back.out(1.7)", 
            stagger: 0.2,
            delay: 1
        }
    );
}

// ===== Enhanced Navigation =====
function initializeNavigation() {
    const navbar = document.querySelector('.navbar');
    const backToTop = document.querySelector('.back-to-top');
    
    // Enhanced scroll effect for navbar
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        
        if (scrolled > 100) {
            navbar.classList.add('scrolled');
            if (backToTop) backToTop.classList.add('show');
        } else {
            navbar.classList.remove('scrolled');
            if (backToTop) backToTop.classList.remove('show');
        }
    });
    
    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                gsap.to(window, {
                    duration: 1,
                    scrollTo: {
                        y: target,
                        offsetY: 80
                    },
                    ease: "power2.inOut"
                });
            }
        });
    });
    
    // Back to top functionality
    if (backToTop) {
        backToTop.addEventListener('click', () => {
            gsap.to(window, {
                duration: 1,
                scrollTo: { y: 0 },
                ease: "power2.inOut"
            });
        });
    }
    
    // Active section highlighting
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.pageYOffset >= (sectionTop - 200)) {
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
}

// ===== Enhanced Typed Text Animation =====
function initializeTypedText() {
    const typedElement = document.querySelector('.typed-text');
    if (typedElement) {
        const typed = new Typed(typedElement, {
            strings: [
                'Desarrollador Full Stack',
                'Especialista en Laravel',
                'Experto en JavaScript',
                'Arquitecto de Software'
            ],
            typeSpeed: 80,
            backSpeed: 60,
            backDelay: 2000,
            loop: true,
            showCursor: true,
            cursorChar: '|',
            autoInsertCss: true
        });
    }
}

// ===== Enhanced Counter Animation =====
function initializeCounters() {
    const counters = document.querySelectorAll('.stat-number');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count') || counter.textContent);
        
        ScrollTrigger.create({
            trigger: counter,
            start: "top 80%",
            onEnter: () => {
                gsap.fromTo(counter, 
                    { textContent: 0 },
                    {
                        textContent: target,
                        duration: 2,
                        ease: "power2.out",
                        snap: { textContent: 1 },
                        stagger: 0.2
                    }
                );
            },
            once: true
        });
    });
}

// ===== Magnetic Effect for Interactive Elements =====
function initializeMagneticEffect() {
    const magneticElements = document.querySelectorAll('.btn, .social-link, .floating-icon');
    
    magneticElements.forEach(element => {
        element.addEventListener('mousemove', (e) => {
            const rect = element.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            gsap.to(element, {
                x: x * 0.3,
                y: y * 0.3,
                duration: 0.3,
                ease: "power2.out"
            });
        });
        
        element.addEventListener('mouseleave', () => {
            gsap.to(element, {
                x: 0,
                y: 0,
                duration: 0.5,
                ease: "elastic.out(1, 0.3)"
            });
        });
    });
}

// ===== Advanced Scroll Effects =====
function initializeScrollEffects() {
    // Parallax effect for hero section
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.to('.hero-content', {
        yPercent: -50,
        ease: "none",
        scrollTrigger: {
            trigger: '.hero-section',
            start: "top bottom",
            end: "bottom top",
            scrub: true
        }
    });
    
    // Stagger animation for service cards
    gsap.fromTo('.service-card', 
        { 
            opacity: 0, 
            y: 50,
            scale: 0.9
        },
        {
            opacity: 1,
            y: 0,
            scale: 1,
            duration: 0.8,
            stagger: 0.2,
            ease: "back.out(1.7)",
            scrollTrigger: {
                trigger: '.services-section',
                start: "top 80%",
                toggleActions: "play none none reverse"
            }
        }
    );
    
    // Portfolio cards animation
    gsap.fromTo('.portfolio-card', 
        { 
            opacity: 0, 
            y: 30,
            rotationY: 45
        },
        {
            opacity: 1,
            y: 0,
            rotationY: 0,
            duration: 0.8,
            stagger: 0.15,
            ease: "power2.out",
            scrollTrigger: {
                trigger: '.portfolio-section',
                start: "top 80%",
                toggleActions: "play none none reverse"
            }
        }
    );
    
    // Contact items animation
    gsap.fromTo('.contact-item', 
        { 
            opacity: 0, 
            scale: 0.8,
            rotation: 5
        },
        {
            opacity: 1,
            scale: 1,
            rotation: 0,
            duration: 0.6,
            stagger: 0.1,
            ease: "back.out(1.7)",
            scrollTrigger: {
                trigger: '.contact-section',
                start: "top 80%",
                toggleActions: "play none none reverse"
            }
        }
    );
}

// ===== Enhanced Language System =====
function initializeLanguage() {
    const currentLang = localStorage.getItem('portfolio-language') || 'es';
    
    // Update language selector
    const langSelector = document.querySelector('[data-lang="' + currentLang + '"]');
    if (langSelector) {
        langSelector.classList.add('active');
    }
    
    // Language switching with smooth transition
    document.querySelectorAll('[data-lang]').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const newLang = link.getAttribute('data-lang');
            
            if (newLang !== currentLang) {
                // Add fade out effect
                gsap.to('body', {
                    opacity: 0.7,
                    duration: 0.3,
                    onComplete: () => {
                        // Store language preference
                        localStorage.setItem('portfolio-language', newLang);
                        
                        // Redirect to new language
                        window.location.href = newLang === 'es' ? '/' : '/' + newLang;
                    }
                });
            }
        });
    });
}

// ===== Enhanced Contact Form =====
function initializeContactForm() {
    const contactForm = document.querySelector('#contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            // Loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Enviando...';
            
            try {
                const formData = new FormData(contactForm);
                const response = await fetch('/contact', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });
                
                const result = await response.json();
                
                if (result.success) {
                    // Success animation
                    gsap.to(contactForm, {
                        scale: 0.95,
                        duration: 0.1,
                        yoyo: true,
                        repeat: 1,
                        ease: "power2.inOut"
                    });
                    
                    // Show success message
                    showNotification('¡Mensaje enviado con éxito! Te contactaré pronto.', 'success');
                    contactForm.reset();
                } else {
                    throw new Error(result.message || 'Error al enviar el mensaje');
                }
            } catch (error) {
                showNotification('Error al enviar el mensaje. Por favor, intenta de nuevo.', 'error');
                console.error('Contact form error:', error);
            } finally {
                // Reset button
                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                }, 1000);
            }
        });
    }
}

// ===== Notification System =====
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2"></i>
        ${message}
        <button class="notification-close">
            <i class="fas fa-times"></i>
        </button>
    `;
    
    // Add styles
    Object.assign(notification.style, {
        position: 'fixed',
        top: '20px',
        right: '20px',
        background: type === 'success' ? '#10b981' : '#ef4444',
        color: 'white',
        padding: '15px 20px',
        borderRadius: '8px',
        boxShadow: '0 4px 12px rgba(0,0,0,0.15)',
        zIndex: '10000',
        transform: 'translateX(100%)',
        transition: 'transform 0.3s ease',
        maxWidth: '400px',
        fontSize: '0.9rem',
        display: 'flex',
        alignItems: 'center',
        gap: '10px'
    });
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Close functionality
    const closeBtn = notification.querySelector('.notification-close');
    closeBtn.addEventListener('click', () => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => notification.remove(), 300);
    });
    
    // Auto close
    setTimeout(() => {
        if (notification.parentNode) {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => notification.remove(), 300);
        }
    }, 5000);
}

// ===== Enhanced Animations =====
function initializeAnimations() {
    // Floating animation for profile image
    gsap.to('.profile-image', {
        y: 20,
        duration: 3,
        ease: "power1.inOut",
        yoyo: true,
        repeat: -1
    });
    
    // Continuous floating for icons
    document.querySelectorAll('.floating-icon').forEach((icon, index) => {
        gsap.to(icon, {
            y: 15,
            rotation: 5,
            duration: 2 + index * 0.5,
            ease: "power1.inOut",
            yoyo: true,
            repeat: -1,
            delay: index * 0.2
        });
    });
    
    // Text highlight animation
    document.querySelectorAll('.highlight-text').forEach(text => {
        const underline = document.createElement('span');
        underline.style.cssText = `
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #ff3333, #ffd700);
            transition: width 0.6s ease;
        `;
        text.style.position = 'relative';
        text.appendChild(underline);
        
        text.addEventListener('mouseenter', () => {
            underline.style.width = '100%';
        });
        
        text.addEventListener('mouseleave', () => {
            underline.style.width = '0';
        });
    });
}

// ===== Utility Functions =====
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// ===== Error Handling =====
window.addEventListener('error', (e) => {
    console.error('Portfolio Error:', e.error);
});

// ===== Performance Optimization =====
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
        }
    });
}, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
});

document.querySelectorAll('.animate-on-scroll').forEach(el => {
    observer.observe(el);
});

// ===== Export for global access =====
window.PortfolioApp = {
    showNotification,
    initializeLanguage,
    initializeAnimations
};
