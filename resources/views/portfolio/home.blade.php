@extends('portfolio.basic-layout')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero-section" style="min-height: 100vh; display: flex; align-items: center; padding-top: 20px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="hero-content" data-aos="fade-right">
                    <div class="greeting">
                        <span data-translate="greeting">¡Hola a todos!</span> 👋
                    </div>
                    <h1 class="hero-title">
                        <span data-translate="intro">Soy</span> Camilo Llorente
                    </h1>
                    <!-- Título profesional simple, sin corte ni animación -->
                    <p style="color:#ff3333; font-size:1.3rem; font-weight:700; margin:0 0 1.5rem 0; word-break:break-word; white-space:normal;">
                        Desarrollador de software
                    </p>
                    <!-- Fin del título profesional simple -->
                    
                    <div class="hero-info">
                        <div class="info-item">
                            <i class="fab fa-whatsapp"></i>
                            <a href="https://wa.me/573002112728" target="_blank">+57 300 211 2728</a>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:contacto@camilollorente.blog">contacto@camilollorente.blog</a>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Turbo Antioquia - Colombia</span>
                        </div>
                    </div>

                    <div class="hero-description">
                        <p data-translate="description">
                            Soy un Desarrollador de Software especializado en crear 
                            proyectos interactivos que incluyen aplicaciones web, 
                            sistemas de automatización y sitios web creativos. 
                            Paso la mayor parte del tiempo programando proyectos excepcionales
                             o estudiando nuevas tecnologías para mejorar mi stack de desarrollo.
                              Desarrollo diseños atractivos que cobran vida usando transiciones y
                               animaciones, utilizando las tecnologías más sofisticadas disponibles.
                        </p>
                    </div>

                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/camilo-andres-llorente-vasquez-41930a193/" target="_blank" class="social-link" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://github.com/linecodemanager?tab=repositories" target="_blank" class="social-link" title="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>

                    <!-- CV Download Button in Hero -->
                    <div class="hero-actions" style="margin-top: 2rem;">
                        <a href="{{ asset('assets/cv/CV-Camilo-Llorente.html') }}" target="_blank" class="btn btn-primary btn-lg me-3" data-aos="fade-up" data-aos-delay="800">
                            <i class="fas fa-eye me-2"></i>
                            <span data-translate="download-cv">Ver CV</span>
                        </a>
                        <a href="#contact" class="btn btn-outline-primary btn-lg" data-aos="fade-up" data-aos-delay="900">
                            <i class="fas fa-envelope me-2"></i>
                            <span data-translate="contact-me">Contáctame</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="hero-image" data-aos="fade-left">
                    <div class="image-wrapper">
                        <img src="{{ asset('assets/images/camilo.jpg') }}" alt="Camilo Llorente Vásquez" class="profile-image">
                        <div class="floating-elements">
                            <div class="floating-icon" data-aos="zoom-in" data-aos-delay="500" title="Laravel">
                                <i class="fab fa-laravel"></i>
                            </div>
                            <div class="floating-icon" data-aos="zoom-in" data-aos-delay="700" title="JavaScript">
                                <i class="fab fa-js-square"></i>
                            </div>
                            <div class="floating-icon" data-aos="zoom-in" data-aos-delay="900" title="React">
                                <i class="fab fa-react"></i>
                            </div>
                            <div class="floating-icon" data-aos="zoom-in" data-aos-delay="1100" title="PHP">
                                <i class="fab fa-php"></i>
                            </div>
                            <div class="floating-icon" data-aos="zoom-in" data-aos-delay="1300" title="Python">
                                <i class="fab fa-python"></i>
                            </div>
                            <div class="floating-icon" data-aos="zoom-in" data-aos-delay="1500" title="Bootstrap">
                                <i class="fab fa-bootstrap"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 data-translate="services-title">Lo que hago</h2>
            <p data-translate="services-subtitle">Servicios profesionales que ofrezco</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h4 data-translate="service1-title">Desarrollo Web Full Stack</h4>
                    <p data-translate="service1-desc">Desarrollo de aplicaciones web completas con Laravel, JavaScript, React y tecnologías modernas. Especializado en sistemas POS y gestión empresarial.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h4 data-translate="service2-title">Aplicaciones Móviles</h4>
                    <p data-translate="service2-desc">Desarrollo de apps nativas para Android e iOS, así como aplicaciones híbridas. Experiencia en Java, JavaScript y frameworks modernos.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h4 data-translate="service3-title">Sistemas de Automatización</h4>
                    <p data-translate="service3-desc">Desarrollo de sistemas domóticos, automatización del hogar, integración con Arduino y microcontroladores para proyectos IoT.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 data-translate="service4-title">Sistemas de Seguridad</h4>
                    <p data-translate="service4-desc">Instalación y configuración de sistemas de seguridad, cámaras de vigilancia, alarmas y control de acceso.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h4 data-translate="service5-title">Soluciones en la Nube</h4>
                    <p data-translate="service5-desc">Implementación de soluciones Azure, servicios web escalables y arquitecturas cloud-native para empresas.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h4 data-translate="service6-title">Diseño UX/UI</h4>
                    <p data-translate="service6-desc">Diseño de interfaces de usuario modernas y experiencias digitales utilizando la suite Adobe, Bootstrap y tecnologías de frontend.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="experience-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 data-translate="experience-title">Mi Experiencia</h2>
            <p data-translate="experience-subtitle">Trayectoria profesional y proyectos destacados</p>
        </div>
        
        <div class="experience-timeline" data-aos="fade-up" data-aos-delay="200">
            <!-- Turbo TV -->
            <div class="experience-card" data-aos="fade-up" data-aos-delay="300">
                <div class="experience-header">
                    <div class="experience-period">2017 - 2019</div>
                    <div class="experience-duration">2 años</div>
                </div>
                <div class="experience-content">
                    <div class="company-info">
                        <h3 class="job-title" data-translate="exp3-title">Técnico Profesional</h3>
                        <div class="company-name">
                            <i class="fas fa-tv"></i>
                            Turbo TV
                        </div>
                    </div>
                    <div class="job-description">
                        <p data-translate="exp3-desc">
                            Encargado de las redes, mantenimiento técnico y gestión del software de la empresa. 
                            Administración de infraestructura de red, soporte técnico especializado y 
                            optimización de sistemas operativos.
                        </p>
                    </div>
                    <div class="achievements">
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Gestión completa de infraestructura de red</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Soporte técnico especializado</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Optimización de sistemas</span>
                        </div>
                    </div>
                    <div class="tech-stack">
                        <span class="tech-tag">Redes</span>
                        <span class="tech-tag">Mantenimiento</span>
                        <span class="tech-tag">Soporte Técnico</span>
                        <span class="tech-tag">Sistemas</span>
                    </div>
                </div>
            </div>
            <!-- Asicom S.A.S -->
            <div class="experience-card" data-aos="fade-up" data-aos-delay="200">
                <div class="experience-header">
                    <div class="experience-period">2020 - 2023</div>
                    <div class="experience-duration">3 años</div>
                </div>
                <div class="experience-content">
                    <div class="company-info">
                        <h3 class="job-title" data-translate="exp2-title">Desarrollador Full Stack</h3>
                        <div class="company-name">
                            <i class="fas fa-building"></i>
                            Asicom S.A.S.
                        </div>
                    </div>
                    <div class="job-description">
                        <p data-translate="exp2-desc">
                            Desarrollo de aplicaciones empresariales usando React y .NET Core. 
                            Aplicación de patrones DDD (Domain-Driven Design) para arquitectura de software, 
                            diseño de agregados y separación de responsabilidades. Creación de APIs REST, 
                            gestión de bases de datos y desarrollo de interfaces de usuario modernas.
                        </p>
                    </div>
                    <div class="achievements">
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Implementación de arquitectura DDD</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>APIs REST escalables</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Interfaces de usuario modernas</span>
                        </div>
                    </div>
                    <div class="tech-stack">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">.NET Core</span>
                        <span class="tech-tag">DDD</span>
                        <span class="tech-tag">API REST</span>
                        <span class="tech-tag">SQL Server</span>
                        <span class="tech-tag">Azure</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section id="education" class="education-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 data-translate="education-title">Educación y Formación</h2>
            <p data-translate="education-subtitle">Mi trayectoria académica y certificaciones</p>
        </div>
        
        <div class="row g-4">
            <!-- Udemy Courses -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="education-card">
                    <div class="education-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="education-period">2018 - 2020</div>
                    <h4 class="education-title">Udemy</h4>
                    <h5 class="education-course" data-translate="edu1-course">Redes e Informática, Administración/Administrador de sistemas, redes y comunicaciones LAN/WAN</h5>
                    <p class="education-description" data-translate="edu1-desc">
                        Formación especializada en administración de redes, sistemas informáticos y 
                        comunicaciones empresariales.
                    </p>
                </div>
            </div>

            <!-- SENA - Programming -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="education-card">
                    <div class="education-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="education-period">2016 - 2017</div>
                    <h4 class="education-title">SENA</h4>
                    <h5 class="education-course" data-translate="edu2-course">Técnico en programación de software</h5>
                    <p class="education-description" data-translate="edu2-desc">
                        Formación técnica en desarrollo de software, programación y metodologías de desarrollo.
                    </p>
                </div>
            </div>

            <!-- SENA - Networks -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="education-card">
                    <div class="education-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <div class="education-period">2021 - 2021</div>
                    <h4 class="education-title">SENA</h4>
                    <h5 class="education-course" data-translate="edu3-course">Técnico Diseño de redes y telecomunicaciones</h5>
                    <p class="education-description" data-translate="edu3-desc">
                        Especialización en diseño e implementación de redes de telecomunicaciones.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 data-translate="skills-title">Habilidades Técnicas</h2>
            <p data-translate="skills-subtitle">Tecnologías y herramientas que domino</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-html5"></i></div>
                    <h4>HTML5</h4>
                    <span class="skill-percentage">100%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-css3-alt"></i></div>
                    <h4>CSS3</h4>
                    <span class="skill-percentage">100%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-js"></i></div>
                    <h4>JavaScript</h4>
                    <span class="skill-percentage">98%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-laravel"></i></div>
                    <h4>Laravel</h4>
                    <span class="skill-percentage">97%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fas fa-database"></i></div>
                    <h4>MySQL</h4>
                    <span class="skill-percentage">95%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="350">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-php"></i></div>
                    <h4>PHP</h4>
                    <span class="skill-percentage">95%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-java"></i></div>
                    <h4>Java</h4>
                    <span class="skill-percentage">90%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="450">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-node-js"></i></div>
                    <h4>Node.js</h4>
                    <span class="skill-percentage">90%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fas fa-bolt"></i></div>
                    <h4>AJAX</h4>
                    <span class="skill-percentage">95%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="550">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-google"></i></div>
                    <h4>Google Cloud</h4>
                    <span class="skill-percentage">85%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fas fa-fire"></i></div>
                    <h4>Firebase</h4>
                    <span class="skill-percentage">85%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="650">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-adobe"></i></div>
                    <h4>Adobe Suite</h4>
                    <span class="skill-percentage">90%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fas fa-vial"></i></div>
                    <h4>QA & Testing</h4>
                    <span class="skill-percentage">90%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="750">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-react"></i></div>
                    <h4>React</h4>
                    <span class="skill-percentage">85%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="800">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-bootstrap"></i></div>
                    <h4>Bootstrap</h4>
                    <span class="skill-percentage">95%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="850">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fas fa-cogs"></i></div>
                    <h4>Automatización</h4>
                    <span class="skill-percentage">90%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="900">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fas fa-network-wired"></i></div>
                    <h4>Redes y Telecomunicaciones</h4>
                    <span class="skill-percentage">88%</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 data-translate="portfolio-title">Mis Proyectos</h2>
            <p data-translate="portfolio-subtitle">Algunos de mis trabajos más destacados</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="{{ asset('assets/images/ventas-codesign.jpg') }}" alt="Sistema POS Ventas">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 data-translate="project1-title">Sistema POS Codesign Ventas</h4>
                                <p data-translate="project1-desc">Sistema punto de venta completo para todo tipo de negocios</p>
                                <div class="demo-credentials" style="background: rgba(255,255,255,0.95); padding: 15px; border-radius: 8px; margin: 15px 0; color: #333;">
                                    <strong style="color: #ff3333;" data-translate="project1-demo">🚀 DEMO DISPONIBLE</strong><br>
                                    <small><strong>Email:</strong> admin@example.com<br>
                                    <strong>Contraseña:</strong> secret</small>
                                </div>
                                <a href="https://ventas.codesign.com.co/signin?email=admin@example.com&password=secret&demo=1" target="_blank" class="btn btn-primary me-2" onclick="copyDemoCredentials('admin@example.com', 'secret')">
                                    <i class="fas fa-play"></i> Probar Demo
                                </a>
                                <a href="https://ventas.codesign.com.co/signup" target="_blank" class="btn btn-outline-light">
                                    <i class="fas fa-external-link-alt"></i> Registrarse
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h5 data-translate="project1-name">Codesign Ventas - Sistema POS</h5>
                        <div class="demo-badge" style="display: inline-block; background: linear-gradient(45deg, #ff3333, #ff6666); color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; margin-bottom: 10px;">
                            ✨ DEMO INTERACTIVA DISPONIBLE
                        </div>
                        <p class="portfolio-tech">Laravel • PHP • JavaScript • MySQL • Bootstrap</p>
                        <p data-translate="project1-full-desc">Sistema completo de punto de venta para almacenes, tiendas, restaurantes y todo tipo de negocios. Incluye gestión de inventario, facturación, reportes y múltiples funcionalidades.</p>
                        <div class="demo-info" style="background: #f8f9fa; border-left: 4px solid #ff3333; padding: 10px; margin-top: 10px; border-radius: 4px;">
                            <strong style="color: #ff3333;" data-translate="project1-demo-text">Prueba el sistema completo:</strong><br>
                            <small>Email: <code>admin@example.com</code> | Contraseña: <code>secret</code></small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TropyChamoy.com Project (en sección de proyectos, igual que los demás) -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="{{ asset('assets/images/tropychamoy.png') }}" alt="TropyChamoy.com">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 data-translate="projects.tropychamoy.title">TropyChamoy.com</h4>
                                <p data-translate="projects.tropychamoy.desc">¡Bienvenidos a Tropy Chamoy! Descubre nuestras salsas artesanales tropicales hechas con amor por Sara y Valeria Vasquez</p>
                                <a href="https://wa.me/573002112728?text=Hola%20quiero%20informaci%C3%B3n%20de%20TropyChamoy.com" target="_blank" class="btn btn-primary">
                                    <i class="fab fa-whatsapp"></i> <span data-translate="projects.tropychamoy.more">Contáctanos por WhatsApp</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h5 data-translate="projects.tropychamoy.title">
                            <a href="https://tropychamoy.com" target="_blank" style="color: inherit; text-decoration: underline;">TropyChamoy.com</a>
                        </h5>
                        <p class="portfolio-tech">Laravel • Node.js • CSS • Bootstrap • jQuery • AJAX</p>
                        <p data-translate="projects.tropychamoy.full_desc">Salsas tropicales artesanales, sitio web hecho en Laravel, Node.js, Bootstrap, jQuery y AJAX.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="{{ asset('assets/images/adminisp-codesign.jpg') }}" alt="AdminISP Sistema">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 data-translate="project2-title">AdminISP - Gestión ISP</h4>
                                <p data-translate="project2-desc">Sistema completo para proveedores de internet y telecomunicaciones</p>
                                <div class="demo-credentials" style="background: rgba(255,255,255,0.95); padding: 15px; border-radius: 8px; margin: 15px 0; color: #333;">
                                    <strong style="color: #ff3333;" data-translate="project2-demo">🚀 DEMO DISPONIBLE</strong><br>
                                    <small><strong>Email:</strong> admin@example.com<br>
                                    <strong>Contraseña:</strong> secret12345</small>
                                </div>
                                <a href="https://adminisp.codesign.com.co/login?email=admin@example.com&password=secret12345&demo=1" target="_blank" class="btn btn-primary me-2" onclick="copyDemoCredentials('admin@example.com', 'secret12345')">
                                    <i class="fas fa-play"></i> Probar Demo
                                </a>
                                <a href="https://adminisp.codesign.com.co/register" target="_blank" class="btn btn-outline-light">
                                    <i class="fas fa-external-link-alt"></i> Más Info
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h5 data-translate="project2-name">AdminISP - Sistema de Gestión</h5>
                        <div class="demo-badge" style="display: inline-block; background: linear-gradient(45deg, #ff3333, #ff6666); color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; margin-bottom: 10px;">
                            ✨ DEMO INTERACTIVA DISPONIBLE
                        </div>
                        <p class="portfolio-tech">Laravel • API • MikroTik • WhatsApp • OLT</p>
                        <p data-translate="project2-full-desc">Plataforma completa para ISPs con gestión de clientes, servicios, cortes automáticos, integración con equipos de red, WhatsApp Business API y facturación.</p>
                        <div class="demo-info" style="background: #f8f9fa; border-left: 4px solid #ff3333; padding: 10px; margin-top: 10px; border-radius: 4px;">
                            <strong style="color: #ff3333;" data-translate="project2-demo-text">Explora todas las funcionalidades:</strong><br>
                            <small>Email: <code>admin@example.com</code> | Contraseña: <code>secret</code></small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="{{ asset('assets/images/codesign-web.jpg') }}" alt="Codesign Website">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 data-translate="project3-title">Codesign - Sitio Corporativo</h4>
                                <p data-translate="project3-desc">Sitio web corporativo de mi empresa de desarrollo</p>
                                <a href="https://codesign.com.co" target="_blank" class="btn btn-primary">
                                    <i class="fas fa-external-link-alt"></i> Ver Proyecto
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h5 data-translate="project3-name">Codesign - Sitio Corporativo</h5>
                        <p class="portfolio-tech">HTML5 • CSS3 • JavaScript • Bootstrap • PHP</p>
                        <p data-translate="project3-full-desc">Sitio web corporativo de mi empresa de desarrollo de software con diseño moderno y responsive.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="{{ asset('assets/images/automation-project.jpg') }}" alt="Sistema Domótico">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 data-translate="project4-title">Sistema Domótico Inteligente</h4>
                                <p data-translate="project4-desc">Automatización del hogar con Arduino y sensores IoT</p>
                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-info-circle"></i> Más Info
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h5 data-translate="project4-name">Sistema Domótico Arduino</h5>
                        <p class="portfolio-tech">Arduino • C++ • Sensores IoT • Android App</p>
                        <p data-translate="project4-full-desc">Sistema de automatización del hogar con control de iluminación, temperatura, seguridad y monitoreo remoto vía app móvil.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 data-translate="contact-title">Contáctame</h2>
            <p data-translate="contact-subtitle">¿Tienes un proyecto en mente? ¡Hablemos!</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-info" data-aos="fade-up" data-aos-delay="100">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div class="contact-content">
                                    <h5 data-translate="contact-whatsapp">WhatsApp</h5>
                                    <p>+57 300 211 2728</p>
                                    <a href="https://wa.me/573002112728" target="_blank" class="btn btn-outline-primary btn-sm">
                                        <i class="fab fa-whatsapp"></i> <span data-translate="contact-send-message">Enviar Mensaje</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-content">
                                    <h5 data-translate="contact-email">Email</h5>
                                    <p>contacto@camilollorente.blog</p>
                                    <a href="mailto:contacto@camilollorente.blog" class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-envelope"></i> <span data-translate="contact-send-email">Enviar Email</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fab fa-linkedin"></i>
                                </div>
                                <div class="contact-content">
                                    <h5 data-translate="contact-linkedin">LinkedIn</h5>
                                    <p>Camilo Andrés Llorente Vásquez</p>
                                    <a href="https://www.linkedin.com/in/camilo-andres-llorente-vasquez-41930a193/" target="_blank" class="btn btn-outline-primary btn-sm">
                                        <i class="fab fa-linkedin"></i> <span data-translate="contact-view-profile">Ver Perfil</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-content">
                                    <h5 data-translate="contact-location">Ubicación</h5>
                                    <p data-translate="contact-address">Santa María, Itagüí<br>Colombia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
