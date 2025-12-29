// ========================================
// Portfolio JavaScript Functions
// ========================================

document.addEventListener('DOMContentLoaded', function() {
    
    // ========================================
    // CV Download Button Animation
    // ========================================
    
    const cvButton = document.querySelector('.btn-download-cv');
    if (cvButton) {
        // Add download tracking
        cvButton.addEventListener('click', function() {
            // Add a small animation feedback
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 100);
            
            // Track download event (you can integrate with analytics)
            console.log('CV downloaded');
        });
    }
    
    // ========================================
    // Skill Bars Animation
    // ========================================
    
    function animateSkillBars() {
        const skillBars = document.querySelectorAll('.skill-progress');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const progressBar = entry.target;
                    const width = progressBar.getAttribute('data-width');
                    
                    // Animate the progress bar
                    setTimeout(() => {
                        progressBar.style.width = width;
                    }, 200);
                    
                    observer.unobserve(progressBar);
                }
            });
        }, {
            threshold: 0.5
        });
        
        skillBars.forEach(bar => {
            observer.observe(bar);
        });
    }
    
    // ========================================
    // Typed Text - DESACTIVADO para evitar problemas
    // ========================================
    
    function initTypedText() {
        console.log('Texto estático sin animación problemática');
        const typedElement = document.getElementById('typed-text');
        
        if (!typedElement) {
            console.error('Elemento typed-text no encontrado');
            return;
        }
        
        // TEXTO FIJO SIN ANIMACIÓN
        typedElement.textContent = 'Desarrollador Full Stack';
        typedElement.style.opacity = '1';
        
        console.log('Texto establecido como estático');
    }
    
    // ========================================
    // Timeline Animation
    // ========================================
    
    function initTimelineAnimation() {
        const timelineItems = document.querySelectorAll('.timeline-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.3
        });
        
        timelineItems.forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(50px)';
            item.style.transition = 'all 0.6s ease';
            observer.observe(item);
        });
    }
    
    // ========================================
    // Demo Credentials Copy Function
    // ========================================
    
    window.copyDemoCredentials = function(email, password) {
        // Store credentials in localStorage for auto-fill
        localStorage.setItem('demoEmail', email);
        localStorage.setItem('demoPassword', password);
        
        // Show notification
        showNotification('Credenciales copiadas. Se auto-completarán en el demo.', 'success');
    };
    
    // ========================================
    // Notification System
    // ========================================
    
    function showNotification(message, type = 'info') {
        // Remove existing notifications
        const existingNotifications = document.querySelectorAll('.notification');
        existingNotifications.forEach(notification => {
            notification.remove();
        });
        
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.innerHTML = `
            <div class="notification-content">
                <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-info-circle'}"></i>
                <span>${message}</span>
            </div>
            <button class="notification-close" onclick="this.parentElement.remove()">
                <i class="fas fa-times"></i>
            </button>
        `;
        
        // Add styles
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${type === 'success' ? '#28a745' : '#007bff'};
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-width: 300px;
            max-width: 400px;
            animation: slideInRight 0.3s ease;
        `;
        
        // Add notification styles to head if not exists
        if (!document.querySelector('#notification-styles')) {
            const styles = document.createElement('style');
            styles.id = 'notification-styles';
            styles.textContent = `
                @keyframes slideInRight {
                    from {
                        transform: translateX(100%);
                        opacity: 0;
                    }
                    to {
                        transform: translateX(0);
                        opacity: 1;
                    }
                }
                
                .notification-content {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                }
                
                .notification-close {
                    background: none;
                    border: none;
                    color: white;
                    cursor: pointer;
                    font-size: 1rem;
                    opacity: 0.8;
                    transition: opacity 0.3s ease;
                }
                
                .notification-close:hover {
                    opacity: 1;
                }
            `;
            document.head.appendChild(styles);
        }
        
        document.body.appendChild(notification);
        
        // Auto-remove after 5 seconds
        setTimeout(() => {
            if (notification.parentElement) {
                notification.style.animation = 'slideInRight 0.3s ease reverse';
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }
        }, 5000);
    }
    
    // ========================================
    // Smooth Scrolling for Navigation
    // ========================================
    
    function initSmoothScrolling() {
        const navLinks = document.querySelectorAll('a[href^="#"]');
        
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                if (targetSection) {
                    const offsetTop = targetSection.offsetTop - 80; // Account for fixed header
                    
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }
    
    // ========================================
    // Portfolio Card Hover Effects
    // ========================================
    
    function initPortfolioEffects() {
        const portfolioCards = document.querySelectorAll('.portfolio-card');
        
        portfolioCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
                this.style.boxShadow = '0 20px 40px rgba(0,0,0,0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 10px 30px rgba(0,0,0,0.1)';
            });
        });
    }
    
    // ========================================
    // Parallax Effect for CV Button
    // ========================================
    
    function initParallaxCVButton() {
        const cvButton = document.querySelector('.cv-download-btn');
        
        if (cvButton) {
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.02;
                
                cvButton.style.transform = `translateY(calc(-50% + ${rate}px))`;
            });
        }
    }
    
    // ========================================
    // Initialize All Functions
    // ========================================
    
    // Initialize animations
    animateSkillBars();
    initTypedText();
    initTimelineAnimation();
    initSmoothScrolling();
    initPortfolioEffects();
    initParallaxCVButton();
    
    // Initialize AOS (Animate On Scroll) if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    }
    
    console.log('Portfolio JavaScript initialized successfully!');
});

// ========================================
// Additional Utility Functions
// ========================================

// Function to preload images for better performance
function preloadImages() {
    const images = [
        'assets/images/camilo.jpg',
        'assets/images/ventas-codesign.jpg',
        'assets/images/adminisp-codesign.jpg',
        'assets/images/codesign-web.jpg',
        'assets/images/automation-project.jpg'
    ];
    
    images.forEach(src => {
        const img = new Image();
        img.src = src;
    });
}

// Function to handle form submissions (if needed)
function handleContactForm() {
    const contactForm = document.querySelector('#contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Add your form submission logic here
            showNotification('Mensaje enviado correctamente. Te contactaré pronto!', 'success');
        });
    }
}

// Initialize additional functions when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    preloadImages();
    handleContactForm();
});

// ========================================
// Performance Optimization
// ========================================

// Lazy loading for images
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    const lazyImages = document.querySelectorAll('img[data-src]');
    lazyImages.forEach(img => imageObserver.observe(img));
}
