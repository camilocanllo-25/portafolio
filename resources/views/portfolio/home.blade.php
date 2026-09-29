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
                    <!-- Título profesional destacado -->
                    <p style="color:#ff3333; font-size:1.35rem; font-weight:700; margin:0 0 1.5rem 0; word-break:break-word; white-space:normal;">
                        Desarrollador Full-Stack | Agentes de IA (Voz/Texto), APIs & Telecomunicaciones
                    </p>
                    <!-- Fin del título profesional -->
                    
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
                            <span>Turbo, Antioquia / Itagüí - Colombia</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-plane"></i>
                            <span>Disponibilidad inmediata | Remoto o Presencial</span>
                        </div>
                    </div>

                    <div class="hero-description">
                        <p data-translate="description">
                            Ingeniero/Desarrollador de Software especializado en Implementación de Agentes de IA Conversacionales de Voz y Texto (Vapi, Retell, ElevenLabs, WhatsApp API, Instagram, Telegram), Automatización de Procesos con n8n/Make, Integración Experta de APIs REST & Pasarelas de Pago (Wompi, MercadoPago, Stripe), Administración de Servidores Linux/Cloud y Telecomunicaciones (ISP, MikroTik, OLT, VoIP).
                        </p>
                    </div>

                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/camilo-andres-llorente-vasquez-41930a193/" target="_blank" class="social-link" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://github.com/camilollorente" target="_blank" class="social-link" title="GitHub">
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
                        <img src="{{ asset('assets/images/perfil_foto.png') }}" alt="Camilo Llorente Vásquez" class="profile-image">
                        <div class="floating-elements">
                            <div class="floating-icon" data-aos="zoom-in" data-aos-delay="500" title="Agentes IA">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div class="floating-icon" data-aos="zoom-in" data-aos-delay="700" title="n8n & Automatización">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <div class="floating-icon" data-aos="zoom-in" data-aos-delay="900" title="APIs & Servidores">
                                <i class="fas fa-server"></i>
                            </div>
                            <div class="floating-icon" data-aos="zoom-in" data-aos-delay="1100" title="Laravel">
                                <i class="fab fa-laravel"></i>
                            </div>
                            <div class="floating-icon" data-aos="zoom-in" data-aos-delay="1300" title="Telecom & MikroTik">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <div class="floating-icon" data-aos="zoom-in" data-aos-delay="1500" title="Pasarelas de Pago">
                                <i class="fas fa-credit-card"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aptitudes Clave & Coincidencia con Requisitos Section -->
<section id="aptitudes" class="aptitudes-section" style="padding: 60px 0; background: rgba(255, 51, 51, 0.03); border-top: 1px solid rgba(255, 51, 51, 0.15); border-bottom: 1px solid rgba(255, 51, 51, 0.15);">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <div style="display: inline-block; background: rgba(255, 51, 51, 0.15); color: #ff3333; padding: 6px 18px; border-radius: 30px; font-weight: 700; font-size: 0.9rem; margin-bottom: 15px; border: 1px solid rgba(255, 51, 51, 0.3);">
                ✅ COINCIDENCIA CON REQUISITOS INDISPENSABLES
            </div>
            <h2 data-translate="aptitudes_title">Aptitudes Clave & Competencias Principales</h2>
            <p data-translate="aptitudes_subtitle">Especialista listo para implementar Agentes IA, Automatización y Soluciones de Software</p>
        </div>
        
        <div class="row g-4 mt-2">
            <!-- Aptitud 1 -->
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div style="background: rgba(26, 26, 26, 0.9); border: 1px solid rgba(255, 51, 51, 0.25); border-radius: 14px; padding: 24px; height: 100%; display: flex; gap: 16px; align-items: flex-start; transition: transform 0.3s ease; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
                    <div style="background: #ff3333; color: #fff; width: 44px; height: 44px; min-width: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                        <i class="fas fa-check"></i>
                    </div>
                    <div>
                        <h4 style="color: #fff; font-size: 1.15rem; font-weight: 700; margin-bottom: 8px;">Experiencia con IA, agentes, LLMs y automatización</h4>
                        <p style="color: #b0b0b0; font-size: 0.96rem; margin: 0; line-height: 1.6;">
                            Creación de agentes de voz (Vapi, Retell, ElevenLabs, Twilio) y chatbots multicanal (WhatsApp Cloud API, Instagram, Telegram), ingeniería de prompts y flujos autónomos con n8n, Make y Python.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Aptitud 2 -->
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div style="background: rgba(26, 26, 26, 0.9); border: 1px solid rgba(255, 51, 51, 0.25); border-radius: 14px; padding: 24px; height: 100%; display: flex; gap: 16px; align-items: flex-start; transition: transform 0.3s ease; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
                    <div style="background: #ff3333; color: #fff; width: 44px; height: 44px; min-width: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                        <i class="fas fa-check"></i>
                    </div>
                    <div>
                        <h4 style="color: #fff; font-size: 1.15rem; font-weight: 700; margin-bottom: 8px;">Conocimientos de programación, APIs e integraciones</h4>
                        <p style="color: #b0b0b0; font-size: 0.96rem; margin: 0; line-height: 1.6;">
                            Desarrollo Full-Stack sólido (Laravel, PHP, JavaScript, Node.js, React, Python), consumo y diseño de APIs RESTful, Webhooks, conexiones a servidores y bases de datos.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Aptitud 3 -->
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div style="background: rgba(26, 26, 26, 0.9); border: 1px solid rgba(255, 51, 51, 0.25); border-radius: 14px; padding: 24px; height: 100%; display: flex; gap: 16px; align-items: flex-start; transition: transform 0.3s ease; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
                    <div style="background: #ff3333; color: #fff; width: 44px; height: 44px; min-width: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                        <i class="fas fa-check"></i>
                    </div>
                    <div>
                        <h4 style="color: #fff; font-size: 1.15rem; font-weight: 700; margin-bottom: 8px;">Conocimientos de UX/UI y Figma</h4>
                        <p style="color: #b0b0b0; font-size: 0.96rem; margin: 0; line-height: 1.6;">
                            Prototipado e interfaces interactivas en Figma, diseño centrado en el usuario, usabilidad digital, maquetación responsive limpia y maquetas visuales listas para desarrollo.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Aptitud 4 -->
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div style="background: rgba(26, 26, 26, 0.9); border: 1px solid rgba(255, 51, 51, 0.25); border-radius: 14px; padding: 24px; height: 100%; display: flex; gap: 16px; align-items: flex-start; transition: transform 0.3s ease; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
                    <div style="background: #ff3333; color: #fff; width: 44px; height: 44px; min-width: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                        <i class="fas fa-check"></i>
                    </div>
                    <div>
                        <h4 style="color: #fff; font-size: 1.15rem; font-weight: 700; margin-bottom: 8px;">Manejo de herramientas como Claude, ChatGPT y MCPs</h4>
                        <p style="color: #b0b0b0; font-size: 0.96rem; margin: 0; line-height: 1.6;">
                            Uso avanzado de Claude 3.5, ChatGPT (GPT-4o), automatización asistida por IA y protocolo **MCP (Model Context Protocol)** para conectar asistentes inteligentes a servidores y herramientas empresariales.
                        </p>
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
            <p data-translate="services-subtitle">Servicios profesionales y soluciones especializadas</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card" style="border-top: 3px solid #ff3333;">
                    <div class="service-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h4 data-translate="service1-title">Agentes de IA Conversacional (Voz y Texto)</h4>
                    <p data-translate="service1-desc">Creación e implementación de Agentes de IA para atención al cliente y ventas. Agentes de voz (ElevenLabs, Vapi, Retell, Twilio) y chatbots multicanal (WhatsApp API, Instagram, Telegram, Messenger y Web Widgets).</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card" style="border-top: 3px solid #ff3333;">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h4 data-translate="service2-title">Automatización de Procesos Empresariales</h4>
                    <p data-translate="service2-desc">Automatización de flujos de trabajo con n8n, Make (Integromat), Zapier y scripts personalizados en Python/Node.js integrados a CRMs, bases de datos y herramientas del cliente.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card" style="border-top: 3px solid #ff3333;">
                    <div class="service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h4 data-translate="service3-title">Desarrollo de APIs REST & Servidores</h4>
                    <p data-translate="service3-desc">Diseño, consumo y documentación de APIs RESTful, Webhooks, JWT/OAuth, consumo de web services y administración de servidores Linux (Ubuntu/Debian), VPS, Nginx, Docker y SSL.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card" style="border-top: 3px solid #ff3333;">
                    <div class="service-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h4 data-translate="service4-title">Pasarelas de Pago & Cobros Recurrentes</h4>
                    <p data-translate="service4-desc">Integración segura de pasarelas de pago como Wompi, MercadoPago, Stripe, PayU y PayPal. Procesamiento de webhooks para facturación automática y suscripciones.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card" style="border-top: 3px solid #ff3333;">
                    <div class="service-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h4 data-translate="service5-title">Telecomunicaciones & Redes ISP</h4>
                    <p data-translate="service5-desc">Gestión de infraestructura de red ISP, aprovisionamiento de OLTs/GPON, integración con MikroTik API, telefonía IP/VoIP (Asterisk/SIP) y desarrollo de software ISP (AdminISP).</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-card" style="border-top: 3px solid #ff3333;">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h4 data-translate="service6-title">Desarrollo Web Full-Stack & Apps</h4>
                    <p data-translate="service6-desc">Desarrollo de aplicaciones web avanzadas, paneles administrativos, plataformas POS y sistemas a la medida con Laravel, PHP, React, Node.js y MySQL.</p>
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
            <p data-translate="experience-subtitle">Trayectoria profesional, automatizaciones y desarrollo de software</p>
        </div>
        
        <div class="experience-timeline" data-aos="fade-up" data-aos-delay="200">
            <!-- Codesign / Freelance AI & Dev -->
            <div class="experience-card" data-aos="fade-up" data-aos-delay="100">
                <div class="experience-header">
                    <div class="experience-period">2023 - Presente</div>
                    <div class="experience-duration">Actualidad</div>
                </div>
                <div class="experience-content">
                    <div class="company-info">
                        <h3 class="job-title" data-translate="exp1-title">Implementador de Agentes IA & Desarrollador Senior</h3>
                        <div class="company-name">
                            <i class="fas fa-robot"></i>
                            Codesign / Consultoría Independiente
                        </div>
                    </div>
                    <div class="job-description">
                        <p data-translate="exp1-desc">
                            Diseño e implementación autónoma de agentes de IA conversacionales (Voz con Vapi/ElevenLabs/Twilio y Texto en WhatsApp Cloud API, Instagram, Telegram), automatización de procesos empresariales con n8n/Make/Python, desarrollo full-stack e integración de pasarelas de pago y microservicios.
                        </p>
                    </div>
                    <div class="achievements">
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Implementación de Agentes de IA de Voz (Vapi, Retell, ElevenLabs) y Texto (WhatsApp API, IG)</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Automatización de flujos de trabajo con n8n, Make, Webhooks y Python</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Integración de Pasarelas de Pago (Wompi, MercadoPago, Stripe) y Servidores Linux</span>
                        </div>
                    </div>
                    <div class="tech-stack">
                        <span class="tech-tag">Agentes IA</span>
                        <span class="tech-tag">Vapi / Retell</span>
                        <span class="tech-tag">ElevenLabs</span>
                        <span class="tech-tag">n8n / Make</span>
                        <span class="tech-tag">WhatsApp API</span>
                        <span class="tech-tag">Wompi / Stripe</span>
                        <span class="tech-tag">APIs REST</span>
                        <span class="tech-tag">Linux VPS</span>
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
                        <h3 class="job-title" data-translate="exp2-title">Desarrollador Full Stack & Integrador de APIs</h3>
                        <div class="company-name">
                            <i class="fas fa-building"></i>
                            Asicom S.A.S.
                        </div>
                    </div>
                    <div class="job-description">
                        <p data-translate="exp2-desc">
                            Desarrollo de aplicaciones empresariales usando React, Laravel y .NET Core. Aplicación de patrones DDD para arquitectura de software, creación e integración de APIs REST, webhooks, pasarelas de pago y administración de bases de datos.
                        </p>
                    </div>
                    <div class="achievements">
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Desarrollo de APIs RESTful y arquitectura de microservicios</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Integración de componentes frontend en React y backend robusto</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Optimización de consultas SQL Server / MySQL y servidores Azure/Linux</span>
                        </div>
                    </div>
                    <div class="tech-stack">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">.NET Core</span>
                        <span class="tech-tag">API REST</span>
                        <span class="tech-tag">SQL Server</span>
                        <span class="tech-tag">Azure</span>
                    </div>
                </div>
            </div>

            <!-- Turbo TV / Telecom -->
            <div class="experience-card" data-aos="fade-up" data-aos-delay="300">
                <div class="experience-header">
                    <div class="experience-period">2017 - 2020</div>
                    <div class="experience-duration">3 años</div>
                </div>
                <div class="experience-content">
                    <div class="company-info">
                        <h3 class="job-title" data-translate="exp3-title">Especialista en Telecomunicaciones & Redes</h3>
                        <div class="company-name">
                            <i class="fas fa-tv"></i>
                            Turbo TV / Proyectos de Redes
                        </div>
                    </div>
                    <div class="job-description">
                        <p data-translate="exp3-desc">
                            Administración de infraestructura de red ISP, equipos MikroTik via API, aprovisionamiento OLT/GPON, telefonía IP/VoIP (Asterisk/SIP), soporte técnico especializado y optimización de servidores.
                        </p>
                    </div>
                    <div class="achievements">
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Automatización de cortes y habilitaciones con MikroTik API</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Aprovisionamiento de equipos OLT GPON y redes de fibra óptica</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Configuración de centrales VoIP SIP / Asterisk</span>
                        </div>
                    </div>
                    <div class="tech-stack">
                        <span class="tech-tag">MikroTik API</span>
                        <span class="tech-tag">OLT GPON</span>
                        <span class="tech-tag">VoIP / SIP</span>
                        <span class="tech-tag">Redes LAN/WAN</span>
                        <span class="tech-tag">Linux Server</span>
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
            <p data-translate="education-subtitle">Mi trayectoria académica, redes y certificaciones</p>
        </div>
        
        <div class="row g-4">
            <!-- Systems & Networks -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="education-card">
                    <div class="education-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="education-period">2018 - 2020</div>
                    <h4 class="education-title">Udemy & Platzi</h4>
                    <h5 class="education-course" data-translate="edu1-course">Redes e Informática, Administración de Sistemas y Telecomunicaciones LAN/WAN</h5>
                    <p class="education-description" data-translate="edu1-desc">
                        Formación especializada en administración de redes, infraestructura de servidores, seguridad y comunicaciones empresariales.
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
                    <h5 class="education-course" data-translate="edu2-course">Técnico en Programación de Software</h5>
                    <p class="education-description" data-translate="edu2-desc">
                        Formación técnica en desarrollo de software, algoritmos, bases de datos y metodologías ágiles.
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
                    <h5 class="education-course" data-translate="edu3-course">Técnico Diseño de Redes y Telecomunicaciones</h5>
                    <p class="education-description" data-translate="edu3-desc">
                        Especialización en diseño, configuración e implementación de redes de fibra óptica y telecomunicaciones.
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
            <!-- IA & Automatización -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="skill-item" style="border-left: 4px solid #ff3333;">
                    <div class="skill-icon"><i class="fas fa-robot"></i></div>
                    <h4>Agentes IA de Voz (Vapi/Retell)</h4>
                    <span class="skill-percentage">95%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="skill-item" style="border-left: 4px solid #ff3333;">
                    <div class="skill-icon"><i class="fab fa-whatsapp"></i></div>
                    <h4>Chatbots WhatsApp/IG/Telegram</h4>
                    <span class="skill-percentage">98%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="skill-item" style="border-left: 4px solid #ff3333;">
                    <div class="skill-icon"><i class="fas fa-cogs"></i></div>
                    <h4>n8n / Make / Workflows</h4>
                    <span class="skill-percentage">96%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="skill-item" style="border-left: 4px solid #ff3333;">
                    <div class="skill-icon"><i class="fas fa-brain"></i></div>
                    <h4>OpenAI API / Claude / Prompts</h4>
                    <span class="skill-percentage">95%</span>
                </div>
            </div>

            <!-- APIs & Servidores -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fas fa-exchange-alt"></i></div>
                    <h4>APIs RESTful & Webhooks</h4>
                    <span class="skill-percentage">98%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="350">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fas fa-credit-card"></i></div>
                    <h4>Wompi / MercadoPago / Stripe</h4>
                    <span class="skill-percentage">95%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-linux"></i></div>
                    <h4>Servidores Linux (Ubuntu/VPS)</h4>
                    <span class="skill-percentage">92%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="450">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-docker"></i></div>
                    <h4>Docker & Nginx</h4>
                    <span class="skill-percentage">88%</span>
                </div>
            </div>

            <!-- Telecom & Backend -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fas fa-network-wired"></i></div>
                    <h4>MikroTik API & Redes ISP</h4>
                    <span class="skill-percentage">92%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="550">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fas fa-phone-alt"></i></div>
                    <h4>VoIP / Asterisk / SIP</h4>
                    <span class="skill-percentage">85%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-laravel"></i></div>
                    <h4>Laravel & PHP</h4>
                    <span class="skill-percentage">97%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="650">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-js"></i></div>
                    <h4>JavaScript & Node.js</h4>
                    <span class="skill-percentage">95%</span>
                </div>
            </div>

            <!-- Databases & Frontend -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fas fa-database"></i></div>
                    <h4>MySQL & PostgreSQL</h4>
                    <span class="skill-percentage">92%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="750">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-react"></i></div>
                    <h4>React & Vue.js</h4>
                    <span class="skill-percentage">88%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="800">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-python"></i></div>
                    <h4>Python Automation</h4>
                    <span class="skill-percentage">85%</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="850">
                <div class="skill-item">
                    <div class="skill-icon"><i class="fab fa-bootstrap"></i></div>
                    <h4>HTML5 / CSS3 / Bootstrap</h4>
                    <span class="skill-percentage">98%</span>
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
            <p data-translate="portfolio-subtitle">Casos de éxito en IA, Automatización, APIs y Telecomunicaciones</p>
        </div>
        
        <div class="row g-4">
            <!-- Proyecto Agente IA Conversacional Multicanal & Voz -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-card" style="border: 1px solid rgba(255, 51, 51, 0.3);">
                    <div class="portfolio-image">
                        <img src="{{ asset('assets/images/ai-agent-project.jpg') }}" alt="Agentes de IA Conversacionales" onerror="this.src='{{ asset('assets/images/codesign-web.jpg') }}'">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Agente IA Conversacional Multicanal & Voz</h4>
                                <p>Agente inteligente de voz (Vapi/Retell/ElevenLabs) y texto (WhatsApp Cloud API, Instagram, Telegram) integrado a servidor y pasarelas de pago.</p>
                                <a href="https://wa.me/573002112728?text=Hola%20Camilo,%20vi%20tu%20proyecto%20de%20Agente%20de%20IA" target="_blank" class="btn btn-primary">
                                    <i class="fab fa-whatsapp"></i> Probar / Consultar Demo
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h5>Agente IA Conversacional Multicanal & Voz</h5>
                        <div class="demo-badge" style="display: inline-block; background: linear-gradient(45deg, #ff3333, #ff6666); color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; margin-bottom: 10px;">
                            🤖 AGENTE DE IA & AUTOMATIZACIÓN
                        </div>
                        <p class="portfolio-tech">OpenAI API • Vapi • ElevenLabs • WhatsApp Cloud API • n8n • Node.js • Wompi</p>
                        <p>Sistema de Agentes de IA conversacionales capaces de gestionar llamadas entrantes y salientes automatizadas (Voz AI) y responder consultas multicanal en WhatsApp, Instagram y Telegram. Conectado a base de datos de servidor para agendamiento de citas y procesamiento de pagos.</p>
                    </div>
                </div>
            </div>

            <!-- Proyecto AdminISP -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="{{ asset('assets/images/adminisp-codesign.jpg') }}" alt="AdminISP Sistema">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 data-translate="project2-title">AdminISP - Gestión ISP & Telecom</h4>
                                <p data-translate="project2-desc">Plataforma completa para proveedores de internet y telecomunicaciones con MikroTik API y WhatsApp</p>
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
                        <h5 data-translate="project2-name">AdminISP - Sistema de Gestión ISP & Telecom</h5>
                        <div class="demo-badge" style="display: inline-block; background: linear-gradient(45deg, #ff3333, #ff6666); color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; margin-bottom: 10px;">
                            📡 TELECOM & MIKROTIK API
                        </div>
                        <p class="portfolio-tech">Laravel • MikroTik API • OLT SNMP • WhatsApp API • REST API • Wompi</p>
                        <p data-translate="project2-full-desc">Plataforma completa para ISPs con gestión de clientes, servicios, cortes automáticos via MikroTik API, integración con OLTs, WhatsApp Business API y cobranza automatizada.</p>
                        <div class="demo-info" style="background: #f8f9fa; border-left: 4px solid #ff3333; padding: 10px; margin-top: 10px; border-radius: 4px;">
                            <strong style="color: #ff3333;" data-translate="project2-demo-text">Explora todas las funcionalidades:</strong><br>
                            <small>Email: <code>admin@example.com</code> | Contraseña: <code>secret12345</code></small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyecto Sistema POS Codesign Ventas -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
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
                        <p class="portfolio-tech">Laravel • PHP • JavaScript • MySQL • Bootstrap • REST API</p>
                        <p data-translate="project1-full-desc">Sistema completo de punto de venta para almacenes, tiendas, restaurantes y todo tipo de negocios. Incluye gestión de inventario, facturación, reportes y múltiples funcionalidades.</p>
                    </div>
                </div>
            </div>

            <!-- Plataforma de Automatización de Procesos & Pasarela de Pagos -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="{{ asset('assets/images/payment-automation.jpg') }}" alt="Pasarela de Pagos y Automatización" onerror="this.src='{{ asset('assets/images/codesign-web.jpg') }}'">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Plataforma de Automatización & Pasarelas de Pago</h4>
                                <p>Workflows en n8n/Laravel para cobros recurrentes, pasarelas Wompi, MercadoPago, Stripe y webhooks en tiempo real.</p>
                                <a href="#contact" class="btn btn-primary">
                                    <i class="fas fa-info-circle"></i> Saber Más
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h5>Plataforma de Automatización & Pasarelas de Pago</h5>
                        <div class="demo-badge" style="display: inline-block; background: linear-gradient(45deg, #ff3333, #ff6666); color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; margin-bottom: 10px;">
                            💳 WORKFLOWS & PASARELA DE PAGOS
                        </div>
                        <p class="portfolio-tech">n8n • Python • Stripe • Wompi • MercadoPago • Webhooks • Laravel</p>
                        <p>Sistema automatizado de procesamiento de órdenes y cobros recurrentes. Gestiona webhooks de pasarelas de pago en tiempo real, genera facturas automatizadas y sincroniza datos con CRM y mensajería.</p>
                    </div>
                </div>
            </div>

            <!-- TropyChamoy.com Project -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="{{ asset('assets/images/tropychamoy.png') }}" alt="TropyChamoy.com">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 data-translate="projects.tropychamoy.title">TropyChamoy.com</h4>
                                <p data-translate="projects.tropychamoy.desc">Tienda online e-commerce de productos artesanales con integración de pasarela de pago y WhatsApp.</p>
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
                        <p class="portfolio-tech">Laravel • Node.js • CSS • Bootstrap • jQuery • AJAX • Wompi</p>
                        <p data-translate="projects.tropychamoy.full_desc">Salsas tropicales artesanales, sitio web hecho en Laravel, Node.js, Bootstrap, jQuery y AJAX.</p>
                    </div>
                </div>
            </div>
            
            <!-- Sistema Domótico Arduino -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="{{ asset('assets/images/automation-project.jpg') }}" alt="Sistema Domótico">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4 data-translate="project4-title">Sistema Domótico Inteligente IoT</h4>
                                <p data-translate="project4-desc">Automatización del hogar con Arduino y sensores IoT</p>
                                <a href="#contact" class="btn btn-primary">
                                    <i class="fas fa-info-circle"></i> Más Info
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h5 data-translate="project4-name">Sistema Domótico Arduino & Telecom</h5>
                        <p class="portfolio-tech">Arduino • C++ • Sensores IoT • MQTT • Android App</p>
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
