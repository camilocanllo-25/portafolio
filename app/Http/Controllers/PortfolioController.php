<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $locale = $request->get('lang', 'es');
        
        // Validate locale
        if (!in_array($locale, ['es', 'en', 'ru'])) {
            $locale = 'es';
        }
        
        app()->setLocale($locale);
        
        $data = [
            'translations' => [
                'greeting' => $locale === 'en' ? 'Hello, I am' : 
                             ($locale === 'ru' ? 'Привет, я' : 'Hola, soy'),
                'name' => 'Camilo Llorente Vásquez',
                'developer_title' => $locale === 'en' ? 'Full-Stack Developer | AI Agents & Telecom Expert' : 
                                   ($locale === 'ru' ? 'Full-Stack Разработчик | AI Агенты и Телеком' : 'Desarrollador Full-Stack | Agentes de IA, APIs & Telecomunicaciones'),
                'hero_description' => $locale === 'en' ? 'Software Engineer & AI Automation Specialist. Expert in implementing Voice & Text Multichannel AI Agents (Vapi, Retell, ElevenLabs, WhatsApp, Instagram, Telegram), REST APIs, Payment Gateways (Wompi, MercadoPago, Stripe), Linux Servers, and Telecommunications Systems (ISP, MikroTik, OLT, VoIP).' : 
                                     ($locale === 'ru' ? 'Инженер по ПО и специалист по автоматизации ИИ. Эксперт в реализации голосовых и текстовых мультиканальных ИИ-агентов, REST API, платежных шлюзов, Linux серверов и телекоммуникаций.' : 'Desarrollador de Software y Especialista en Automatización e Inteligencia Artificial Conversacional. Experto en implementación de Agentes de IA Multicanal (Voz con Vapi/Retell/ElevenLabs y Texto en WhatsApp, Instagram, Telegram), APIs REST, Servidores Linux, Pasarelas de Pago (Wompi, MercadoPago, Stripe) y Telecomunicaciones (ISP, MikroTik, OLT, VoIP).'),
                'info' => [
                    'age' => $locale === 'en' ? '30 Years' : 
                            ($locale === 'ru' ? '30 лет' : '30 Años'),
                    'location' => $locale === 'en' ? 'Santa María, Itagüí - Colombia' : 
                                 ($locale === 'ru' ? 'Санта-Мария, Итагуи - Колумбия' : 'Santa María, Itagüí - Colombia'),
                    'email' => 'contacto@camilollorente.blog',
                    'phone' => '+57 300 211 2728',
                    'experience' => $locale === 'en' ? '6+ Years Experience' : 
                                   ($locale === 'ru' ? '6+ лет опыта' : '6+ Años de Experiencia'),
                    'company' => 'Codesign'
                ],
                'buttons' => [
                    'download_cv' => $locale === 'en' ? 'Download CV' : 
                                    ($locale === 'ru' ? 'Скачать CV' : 'Ver CV'),
                    'contact' => $locale === 'en' ? 'Contact Me' : 
                                ($locale === 'ru' ? 'Связаться' : 'Contáctame')
                ],
                'social_links' => [
                    'github' => 'https://github.com/camilollorente',
                    'linkedin' => 'https://www.linkedin.com/in/camilo-andres-llorente-vasquez-41930a193/',
                    'twitter' => 'https://twitter.com/camilollorente',
                    'instagram' => 'https://instagram.com/camilollorente',
                    'behance' => 'https://behance.net/camilollorente',
                    'dribbble' => 'https://dribbble.com/camilollorente'
                ],
                'navigation' => [
                    'services' => $locale === 'en' ? 'What I Do' : 
                                 ($locale === 'ru' ? 'Что я делаю' : 'Lo Que Hago')
                ],
                'portfolio' => [
                    'section_subtitle' => $locale === 'en' ? 'My Work' : 
                                         ($locale === 'ru' ? 'Мои работы' : 'Mi Trabajo'),
                    'section_title' => $locale === 'en' ? 'Featured AI & Software Projects' : 
                                      ($locale === 'ru' ? 'Избранные проекты' : 'Proyectos Destacados de IA & Software'),
                    'section_description' => $locale === 'en' ? 'Discover my recent implementations in AI agents, process automation, payment integrations, servers, and telecom platforms.' : 
                                            ($locale === 'ru' ? 'Откройте для себя мои недавние реализации ИИ-агентов, автоматизации процессов, платежей и телекома.' : 'Descubre mis proyectos más recientes en implementación de agentes de IA conversacionales, automatización de procesos, pasarelas de pago, servidores y telecomunicaciones.'),
                    'view_project' => $locale === 'en' ? 'View Project' : 
                                     ($locale === 'ru' ? 'Посмотреть проект' : 'Ver Proyecto'),
                    'view_code' => $locale === 'en' ? 'View Code' : 
                                  ($locale === 'ru' ? 'Посмотреть код' : 'Ver Código'),
                    'technologies' => $locale === 'en' ? 'Technologies:' : 
                                     ($locale === 'ru' ? 'Технологии:' : 'Tecnologías:')
                ],
                'contact' => [
                    'section_subtitle' => $locale === 'en' ? 'Get In Touch' : 
                                         ($locale === 'ru' ? 'Связаться' : 'Ponte en Contacto'),
                    'section_title' => $locale === 'en' ? 'Contact Me' : 
                                      ($locale === 'ru' ? 'Свяжитесь со мной' : 'Contáctame'),
                    'section_description' => $locale === 'en' ? 'Looking for an AI Agent Implementer, Automation Developer or Telecom Expert? Let\'s talk.' : 
                                            ($locale === 'ru' ? 'Ищете специалиста по внедрению ИИ-агентов или разработчика? Давайте обсудим.' : '¿Buscas un Implementador de Agentes de IA, Especialista en Automatización o Desarrollador Full-Stack? Hablemos.'),
                    'form_name' => $locale === 'en' ? 'Your Name' : 
                                  ($locale === 'ru' ? 'Ваше имя' : 'Tu Nombre'),
                    'form_email' => $locale === 'en' ? 'Your Email' : 
                                   ($locale === 'ru' ? 'Ваш Email' : 'Tu Email'),
                    'form_subject' => $locale === 'en' ? 'Subject' : 
                                     ($locale === 'ru' ? 'Тема' : 'Asunto'),
                    'form_message' => $locale === 'en' ? 'Your Message' : 
                                     ($locale === 'ru' ? 'Ваше сообщение' : 'Tu Mensaje'),
                    'form_send' => $locale === 'en' ? 'Send Message' : 
                                  ($locale === 'ru' ? 'Отправить сообщение' : 'Enviar Mensaje')
                ],
                'hero' => [
                    'contact' => $locale === 'en' ? 'Contact' : 
                                ($locale === 'ru' ? 'Контакт' : 'Contacto'),
                    'scroll' => $locale === 'en' ? 'Scroll Down' : 
                               ($locale === 'ru' ? 'Прокрутить вниз' : 'Desplázate')
                ],
                'services' => [
                    'subtitle' => $locale === 'en' ? 'What I Do' : 
                                 ($locale === 'ru' ? 'Что я делаю' : 'Lo Que Hago'),
                    'title' => $locale === 'en' ? 'My Specialized Services' : 
                              ($locale === 'ru' ? 'Мои услуги' : 'Mis Servicios Especializados'),
                    'description' => $locale === 'en' ? 'End-to-end digital implementation: Conversational AI agents, process automation, server APIs, payment gateways, and telecommunications.' : 
                                    ($locale === 'ru' ? 'Комплексная реализация: ИИ-агенты, автоматизация, API серверов, платежи и телеком.' : 'Soluciones integrales de alto impacto: Implementación de Agentes de IA conversacionales, automatización de procesos con n8n, APIs REST, servidores Linux, pasarelas de pago y telecomunicaciones.')
                ],
                'projects' => [
                    'subtitle' => $locale === 'en' ? 'Portfolio' : 
                                 ($locale === 'ru' ? 'Портфолио' : 'Portafolio'),
                    'title' => $locale === 'en' ? 'Featured Projects' : 
                              ($locale === 'ru' ? 'Недавние проекты' : 'Proyectos Destacados')
                ],
                'typed' => [
                    'ai' => $locale === 'en' ? 'AI Agent Specialist' : 
                           ($locale === 'ru' ? 'Специалист по ИИ' : 'Implementador de Agentes IA'),
                    'developer' => $locale === 'en' ? 'Full-Stack Developer' : 
                                  ($locale === 'ru' ? 'Full-Stack Разработчик' : 'Desarrollador Full-Stack'),
                    'apis' => $locale === 'en' ? 'API & Server Architect' : 
                             ($locale === 'ru' ? 'Архитектор API и серверов' : 'Arquitecto de APIs & Servidores'),
                    'automation' => $locale === 'en' ? 'Process Automation Expert' : 
                                   ($locale === 'ru' ? 'Эксперт по автоматизации' : 'Experto en Automatización & Telecom')
                ]
            ],
            'personalInfo' => [
                'name' => 'Camilo Llorente Vásquez',
                'title' => __('portfolio.developer_title'),
                'birth_date' => '15.07.1994',
                'phone' => '+57 300 211 2728',
                'email' => 'contacto@camilollorente.blog',
                'location' => 'Santa María, Itagüí - Colombia',
                'linkedin' => 'https://www.linkedin.com/in/camilo-andres-llorente-vasquez-41930a193/',
                'company' => 'Codesign',
                'experience_years' => 6,
                'profile_image' => 'assets/images/perfil_foto.png'
            ],
            'services' => [
                [
                    'icon' => 'fas fa-robot',
                    'title' => $locale === 'en' ? 'Voice & Text AI Agents' : 
                              ($locale === 'ru' ? 'Голосовые и текстовые ИИ-агенты' : 'Agentes de IA Conversacional (Voz y Texto)'),
                    'description' => $locale === 'en' ? 'Multichannel Voicebots (Vapi, Retell, ElevenLabs, Twilio) and Text AI chatbots (WhatsApp API, Instagram, Telegram, Messenger, Web Chat) with CRM & Database integration.' : 
                                    ($locale === 'ru' ? 'Мультиканальные голосовые и текстовые ИИ-агенты с интеграцией в CRM.' : 'Implementación de Agentes de IA conversacionales para llamadas de voz (Vapi, Retell, ElevenLabs, Twilio) y chat multicanal (WhatsApp API, Instagram, Telegram, Messenger, Web Chat) conectados a servidores y CRM.'),
                    'delay' => 100
                ],
                [
                    'icon' => 'fas fa-cogs',
                    'title' => $locale === 'en' ? 'Process Automation' : 
                              ($locale === 'ru' ? 'Автоматизация процессов' : 'Automatización de Procesos Empresariales'),
                    'description' => $locale === 'en' ? 'End-to-end process automation workflows using n8n, Make (Integromat), Zapier, and custom Python/Node.js scripts.' : 
                                    ($locale === 'ru' ? 'Автоматизация рабочих процессов с помощью n8n, Make и скриптов Python.' : 'Automatización de flujos de trabajo con n8n, Make (Integromat), Zapier y scripts en Python/Node.js conectados a bases de datos y herramientas empresariales.'),
                    'delay' => 200
                ],
                [
                    'icon' => 'fas fa-server',
                    'title' => $locale === 'en' ? 'REST APIs & Server Administration' : 
                              ($locale === 'ru' ? 'REST API и администрирование серверов' : 'Desarrollo de APIs REST & Conexión a Servidores'),
                    'description' => $locale === 'en' ? 'Designing and consuming RESTful APIs, Webhooks, JWT/OAuth authentication, and managing Linux (Ubuntu/Debian) VPS servers, Nginx, Docker, and SSL.' : 
                                    ($locale === 'ru' ? 'Разработка REST API, Webhooks и управление Linux серверами, Docker и Nginx.' : 'Arquitectura e integración experta de APIs RESTful, Webhooks, JWT/OAuth, consumo de web services y administración de servidores Linux, VPS, Nginx, Docker y SSL.'),
                    'delay' => 300
                ],
                [
                    'icon' => 'fas fa-credit-card',
                    'title' => $locale === 'en' ? 'Payment Gateways & Recurring Billing' : 
                              ($locale === 'ru' ? 'Платежные шлюзы и регулярные платежи' : 'Pasarelas de Pago & Cobros Recurrentes'),
                    'description' => $locale === 'en' ? 'Integration of payment processors (Wompi, MercadoPago, Stripe, PayU, PayPal) with automated webhooks, invoice generation, and subscription models.' : 
                                    ($locale === 'ru' ? 'Интеграция платежных шлюзов (Wompi, MercadoPago, Stripe, PayPal) с вебхуками.' : 'Integración segura de pasarelas de pago como Wompi, MercadoPago, Stripe, PayU y PayPal. Procesamiento de webhooks para facturación automática y cobros recurrentes.'),
                    'delay' => 400
                ],
                [
                    'icon' => 'fas fa-network-wired',
                    'title' => $locale === 'en' ? 'Telecommunications & ISP Systems' : 
                              ($locale === 'ru' ? 'Телекоммуникации и провайдеры (ISP)' : 'Telecomunicaciones & Redes ISP'),
                    'description' => $locale === 'en' ? 'ISP network management, OLT/GPON provisioning, MikroTik API automation, VoIP/SIP Asterisk integration, and specialized ISP management software.' : 
                                    ($locale === 'ru' ? 'Управление сетями ISP, OLT/GPON, MikroTik API, VoIP/SIP Asterisk.' : 'Gestión de infraestructura de red ISP, aprovisionamiento OLT/GPON, integración con MikroTik API, telefonía IP/VoIP (Asterisk/SIP) y desarrollo de software para ISPs (AdminISP).'),
                    'delay' => 500
                ],
                [
                    'icon' => 'fas fa-laptop-code',
                    'title' => $locale === 'en' ? 'Full-Stack Web Development' : 
                              ($locale === 'ru' ? 'Full-Stack Веб-разработка' : 'Desarrollo Web Full-Stack & Apps'),
                    'description' => $locale === 'en' ? 'Custom web platforms, POS systems, management portals, and responsive apps built with Laravel, PHP, React, Node.js, and MySQL.' : 
                                    ($locale === 'ru' ? 'Создание веб-платформ, POS систем и панелей управления на Laravel, React, Node.js.' : 'Desarrollo de aplicaciones web avanzadas, paneles de control, sistemas POS y plataformas a la medida con Laravel, PHP, React, Node.js y MySQL.'),
                    'delay' => 600
                ]
            ],
            'projects' => [
                [
                    'title' => 'Agente IA Conversacional Multicanal & Voz',
                    'description' => 'Sistema de Agentes de IA de Voz (Vapi/ElevenLabs/Twilio) y Texto (WhatsApp Cloud API, Instagram, Telegram) integrado a servidor y pasarela de pagos Wompi/MercadoPago.',
                    'image' => 'assets/images/ai-agent-project.jpg',
                    'technologies' => ['OpenAI API', 'Vapi', 'ElevenLabs', 'WhatsApp API', 'n8n', 'Node.js', 'Wompi'],
                    'url' => '#',
                    'delay' => 100
                ],
                [
                    'title' => 'AdminISP - Gestión ISP & MikroTik API',
                    'description' => __('portfolio.projects.adminisp.description'),
                    'image' => 'assets/images/adminisp-codesign.jpg',
                    'technologies' => ['Laravel', 'API REST', 'MikroTik API', 'WhatsApp API', 'OLT SNMP', 'Wompi'],
                    'url' => 'https://adminisp.codesign.com.co/login',
                    'delay' => 200
                ],
                [
                    'title' => 'Codesign Ventas - Sistema POS',
                    'description' => __('portfolio.projects.pos.description'),
                    'image' => 'assets/images/ventas-codesign.jpg',
                    'technologies' => ['Laravel', 'PHP', 'JavaScript', 'MySQL', 'Bootstrap', 'REST API'],
                    'url' => 'https://ventas.codesign.com.co/signup',
                    'delay' => 300
                ],
                [
                    'title' => 'Plataforma de Automatización & Pasarelas de Pago',
                    'description' => 'Sistema automatizado en n8n/Laravel para cobros recurrentes y facturación electrónica con webhooks integrados a Stripe, Wompi y MercadoPago.',
                    'image' => 'assets/images/payment-automation.jpg',
                    'technologies' => ['n8n', 'Python', 'Stripe', 'Wompi', 'MercadoPago', 'Webhooks', 'Laravel'],
                    'url' => '#',
                    'delay' => 400
                ],
                [
                    'title' => __('portfolio.projects.tropychamoy.title'),
                    'description' => __('portfolio.projects.tropychamoy.desc'),
                    'image' => 'assets/images/tropychamoy.png',
                    'technologies' => ['Laravel', 'Node.js', 'CSS', 'Bootstrap', 'jQuery', 'AJAX', 'Wompi'],
                    'url' => 'https://tropychamoy.com',
                    'delay' => 500
                ],
                [
                    'title' => 'Sistema Domótico & IoT Telecom',
                    'description' => __('portfolio.projects.automation.description'),
                    'image' => 'assets/images/automation-project.jpg',
                    'technologies' => ['Arduino', 'C++', 'Sensores IoT', 'MQTT', 'Android App'],
                    'url' => '#',
                    'delay' => 600
                ]
            ],
            'stats' => [
                [
                    'number' => '6+', 
                    'label' => $locale === 'en' ? 'Years of Experience' : 
                              ($locale === 'ru' ? 'Лет опыта' : 'Años de Experiencia')
                ],
                [
                    'number' => '150+', 
                    'label' => $locale === 'en' ? 'Completed Projects' : 
                              ($locale === 'ru' ? 'Завершенных проектов' : 'Proyectos Completados')
                ],
                [
                    'number' => '50+', 
                    'label' => $locale === 'en' ? 'Satisfied Clients' : 
                              ($locale === 'ru' ? 'Довольных клиентов' : 'Clientes Satisfechos')
                ],
                [
                    'number' => '30+', 
                    'label' => $locale === 'en' ? 'APIs & AI Tools Mastered' : 
                              ($locale === 'ru' ? 'Освоенных технологий' : 'APIs, IA & Herramientas Dominadas')
                ]
            ],
            'skills' => [
                'ai_automation' => [
                    ['name' => 'IA, Agentes de Voz/Texto & LLMs', 'percentage' => 98],
                    ['name' => 'Claude, ChatGPT & MCPs Protocol', 'percentage' => 96],
                    ['name' => 'Automatización (n8n / Make / Python)', 'percentage' => 96],
                    ['name' => 'Prompt Engineering & Function Calling', 'percentage' => 95]
                ],
                'apis_servers' => [
                    ['name' => 'Programación, APIs REST & Integraciones', 'percentage' => 98],
                    ['name' => 'Pasarelas de Pago (Wompi, MercadoPago, Stripe)', 'percentage' => 95],
                    ['name' => 'Servidores Linux (Ubuntu / VPS / Nginx / Docker)', 'percentage' => 92],
                    ['name' => 'Webhooks en tiempo real & Microservicios', 'percentage' => 95]
                ],
                'design_uxui' => [
                    ['name' => 'Diseño UX/UI & Prototipado en Figma', 'percentage' => 92],
                    ['name' => 'Interfaces Atractivas & Prototipado Interactivo', 'percentage' => 94],
                    ['name' => 'Diseño Responsive (Bootstrap / CSS3)', 'percentage' => 98],
                    ['name' => 'Experiencia de Usuario centrada en Conversión', 'percentage' => 90]
                ],
                'fullstack_telecom' => [
                    ['name' => 'PHP / Laravel / Node.js / React', 'percentage' => 96],
                    ['name' => 'MikroTik API & Redes ISP / OLT', 'percentage' => 92],
                    ['name' => 'VoIP / SIP / Asterisk', 'percentage' => 85],
                    ['name' => 'MySQL / PostgreSQL / Python', 'percentage' => 92]
                ]
            ]
        ];

        return view('portfolio.index', compact('data', 'locale'));
    }
    
    public function resume(Request $request)
    {
        $locale = $request->get('lang', 'es');
        
        if (!in_array($locale, ['es', 'en', 'ru'])) {
            $locale = 'es';
        }
        
        app()->setLocale($locale);
        
        $data = [
            'experience' => [
                [
                    'period' => '2019 - ' . __('portfolio.present'),
                    'position' => __('portfolio.experience.codesign.position'),
                    'company' => 'Codesign - Santa María, Itagüí',
                    'description' => __('portfolio.experience.codesign.description'),
                    'tasks' => [
                        __('portfolio.experience.codesign.task1'),
                        __('portfolio.experience.codesign.task2'),
                        __('portfolio.experience.codesign.task3'),
                        __('portfolio.experience.codesign.task4')
                    ]
                ],
                [
                    'period' => '2018 - 2019',
                    'position' => __('portfolio.experience.techsolutions.position'),
                    'company' => 'TechSolutions Colombia - Medellín',
                    'description' => __('portfolio.experience.techsolutions.description'),
                    'tasks' => [
                        __('portfolio.experience.techsolutions.task1'),
                        __('portfolio.experience.techsolutions.task2'),
                        __('portfolio.experience.techsolutions.task3'),
                        __('portfolio.experience.techsolutions.task4')
                    ]
                ],
                [
                    'period' => '2016 - 2018',
                    'position' => __('portfolio.experience.digital.position'),
                    'company' => 'Digital Agency - Medellín',
                    'description' => __('portfolio.experience.digital.description'),
                    'tasks' => [
                        __('portfolio.experience.digital.task1'),
                        __('portfolio.experience.digital.task2'),
                        __('portfolio.experience.digital.task3'),
                        __('portfolio.experience.digital.task4')
                    ]
                ]
            ],
            'education' => [
                [
                    'title' => __('portfolio.education.systems.title'),
                    'institution' => __('portfolio.education.systems.institution'),
                    'period' => '2014 - 2018',
                    'description' => __('portfolio.education.systems.description'),
                    'icon' => 'fas fa-graduation-cap'
                ],
                [
                    'title' => __('portfolio.education.azure.title'),
                    'institution' => 'Microsoft',
                    'period' => '2023',
                    'description' => __('portfolio.education.azure.description'),
                    'icon' => 'fas fa-certificate'
                ],
                [
                    'title' => __('portfolio.education.laravel.title'),
                    'institution' => 'Platzi',
                    'period' => '2022',
                    'description' => __('portfolio.education.laravel.description'),
                    'icon' => 'fas fa-code'
                ],
                [
                    'title' => __('portfolio.education.react.title'),
                    'institution' => 'Udemy',
                    'period' => '2021',
                    'description' => __('portfolio.education.react.description'),
                    'icon' => 'fas fa-mobile-alt'
                ]
            ]
        ];
        
        return view('portfolio.resume', compact('data', 'locale'));
    }
    
    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string|max:2000'
            ]);
            
            // Here you would typically send an email
            // For now, we'll just return a success response
            
            return response()->json([
                'success' => true,
                'message' => __('portfolio.contact.success')
            ]);
        }
        
        return redirect()->route('portfolio.index');
    }
}
