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
                'developer_title' => $locale === 'en' ? 'Full-Stack Developer' : 
                                   ($locale === 'ru' ? 'Full-Stack Разработчик' : 'Desarrollador Full-Stack'),
                'hero_description' => $locale === 'en' ? 'Passionate about creating innovative digital solutions. With 6+ years of experience in web development, mobile applications, and home automation systems.' : 
                                     ($locale === 'ru' ? 'Увлечен созданием инновационных цифровых решений. Более 6 лет опыта в веб-разработке, мобильных приложениях и системах домашней автоматизации.' : 'Apasionado por crear soluciones digitales innovadoras. Con más de 6 años de experiencia en desarrollo web, aplicaciones móviles y sistemas de automatización del hogar.'),
                'info' => [
                    'age' => $locale === 'en' ? '30 Years' : 
                            ($locale === 'ru' ? '30 лет' : '30 Años'),
                    'location' => $locale === 'en' ? 'Santa María, Itagüí - Colombia' : 
                                 ($locale === 'ru' ? 'Санта-Мария, Итагуи - Колумбия' : 'Santa María, Itagüí - Colombia'),
                    'email' => 'camilollorente@codesign.com.co',
                    'phone' => '+57 300 211 2728',
                    'experience' => $locale === 'en' ? '6+ Years Experience' : 
                                   ($locale === 'ru' ? '6+ лет опыта' : '6+ Años de Experiencia'),
                    'company' => 'Codesign'
                ],
                'buttons' => [
                    'download_cv' => $locale === 'en' ? 'Download CV' : 
                                    ($locale === 'ru' ? 'Скачать CV' : 'Descargar CV'),
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
                    'section_title' => $locale === 'en' ? 'Featured Projects' : 
                                      ($locale === 'ru' ? 'Избранные проекты' : 'Proyectos Destacados'),
                    'section_description' => $locale === 'en' ? 'Discover some of my recent projects and achievements in web development, automation, and digital solutions.' : 
                                            ($locale === 'ru' ? 'Откройте для себя некоторые из моих недавних проектов и достижений в веб-разработке, автоматизации и цифровых решениях.' : 'Descubre algunos de mis proyectos recientes y logros en desarrollo web, automatización y soluciones digitales.'),
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
                    'section_description' => $locale === 'en' ? 'Ready to start your next project? Let\'s discuss how we can work together to create something amazing.' : 
                                            ($locale === 'ru' ? 'Готовы начать свой следующий проект? Давайте обсудим, как мы можем работать вместе, чтобы создать что-то удивительное.' : '¿Listo para comenzar tu próximo proyecto? Hablemos sobre cómo podemos trabajar juntos para crear algo increíble.'),
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
                    'title' => $locale === 'en' ? 'My Services' : 
                              ($locale === 'ru' ? 'Мои услуги' : 'Mis Servicios'),
                    'description' => $locale === 'en' ? 'I offer comprehensive digital solutions from web development to automation systems, always focused on innovation and quality.' : 
                                    ($locale === 'ru' ? 'Я предлагаю комплексные цифровые решения от веб-разработки до систем автоматизации, всегда ориентируясь на инновации и качество.' : 'Ofrezco soluciones digitales integrales desde desarrollo web hasta sistemas de automatización, siempre enfocado en la innovación y calidad.')
                ],
                'projects' => [
                    'subtitle' => $locale === 'en' ? 'Portfolio' : 
                                 ($locale === 'ru' ? 'Портфолио' : 'Portafolio'),
                    'title' => $locale === 'en' ? 'Recent Projects' : 
                              ($locale === 'ru' ? 'Недавние проекты' : 'Proyectos Recientes')
                ],
                'typed' => [
                    'developer' => $locale === 'en' ? 'Full-Stack Developer' : 
                                  ($locale === 'ru' ? 'Full-Stack Разработчик' : 'Desarrollador Full-Stack'),
                    'engineer' => $locale === 'en' ? 'Software Engineer' : 
                                 ($locale === 'ru' ? 'Инженер-программист' : 'Ingeniero de Software'),
                    'automation' => $locale === 'en' ? 'Automation Specialist' : 
                                   ($locale === 'ru' ? 'Специалист по автоматизации' : 'Especialista en Automatización'),
                    'innovator' => $locale === 'en' ? 'Tech Innovator' : 
                                  ($locale === 'ru' ? 'Технологический инноватор' : 'Innovador Tecnológico')
                ]
            ],
            'personalInfo' => [
                'name' => 'Camilo Llorente Vásquez',
                'title' => __('portfolio.developer_title'),
                'birth_date' => '15.07.1994',
                'phone' => '+57 300 211 2728',
                'email' => 'camilollorente@codesign.com.co',
                'location' => 'Santa María, Itagüí - Colombia',
                'linkedin' => 'https://www.linkedin.com/in/camilo-andres-llorente-vasquez-41930a193/',
                'company' => 'Codesign',
                'experience_years' => 6,
                'profile_image' => 'assets/images/camilo-profile.jpeg'
            ],
            'services' => [
                [
                    'icon' => 'fas fa-laptop-code',
                    'title' => $locale === 'en' ? 'Web Development' : 
                              ($locale === 'ru' ? 'Веб-разработка' : 'Desarrollo Web'),
                    'description' => $locale === 'en' ? 'Custom web applications with modern technologies and responsive design.' : 
                                    ($locale === 'ru' ? 'Веб-приложения с современными технологиями и адаптивным дизайном.' : 'Aplicaciones web personalizadas con tecnologías modernas y diseño responsivo.'),
                    'delay' => 100
                ],
                [
                    'icon' => 'fas fa-mobile-alt',
                    'title' => $locale === 'en' ? 'Mobile Apps' : 
                              ($locale === 'ru' ? 'Мобильные приложения' : 'Aplicaciones Móviles'),
                    'description' => $locale === 'en' ? 'Native and hybrid mobile applications for iOS and Android platforms.' : 
                                    ($locale === 'ru' ? 'Нативные и гибридные мобильные приложения для iOS и Android.' : 'Aplicaciones móviles nativas e híbridas para iOS y Android.'),
                    'delay' => 200
                ],
                [
                    'icon' => 'fas fa-home',
                    'title' => $locale === 'en' ? 'Home Automation' : 
                              ($locale === 'ru' ? 'Домашняя автоматизация' : 'Automatización del Hogar'),
                    'description' => $locale === 'en' ? 'IoT solutions and smart systems for home and industrial automation.' : 
                                    ($locale === 'ru' ? 'IoT решения и умные системы для домашней и промышленной автоматизации.' : 'Soluciones IoT y sistemas inteligentes para automatización del hogar e industrial.'),
                    'delay' => 300
                ],
                [
                    'icon' => 'fas fa-shield-alt',
                    'title' => $locale === 'en' ? 'Security Systems' : 
                              ($locale === 'ru' ? 'Системы безопасности' : 'Sistemas de Seguridad'),
                    'description' => $locale === 'en' ? 'Advanced security solutions and surveillance systems with real-time monitoring.' : 
                                    ($locale === 'ru' ? 'Продвинутые решения безопасности и системы видеонаблюдения с мониторингом в реальном времени.' : 'Soluciones avanzadas de seguridad y sistemas de vigilancia con monitoreo en tiempo real.'),
                    'delay' => 400
                ],
                [
                    'icon' => 'fas fa-cloud',
                    'title' => $locale === 'en' ? 'Cloud Solutions' : 
                              ($locale === 'ru' ? 'Облачные решения' : 'Soluciones en la Nube'),
                    'description' => $locale === 'en' ? 'Cloud infrastructure, migration, and scalable solutions for businesses.' : 
                                    ($locale === 'ru' ? 'Облачная инфраструктура, миграция и масштабируемые решения для бизнеса.' : 'Infraestructura en la nube, migración y soluciones escalables para empresas.'),
                    'delay' => 500
                ],
                [
                    'icon' => 'fas fa-palette',
                    'title' => $locale === 'en' ? 'UI/UX Design' : 
                              ($locale === 'ru' ? 'UI/UX дизайн' : 'Diseño UI/UX'),
                    'description' => $locale === 'en' ? 'User-centered design with modern interfaces and optimal user experience.' : 
                                    ($locale === 'ru' ? 'Пользовательский дизайн с современными интерфейсами и оптимальным пользовательским опытом.' : 'Diseño centrado en el usuario con interfaces modernas y experiencia de usuario óptima.'),
                    'delay' => 600
                ]
            ],
            'projects' => [
                [
                    'title' => 'Codesign Ventas - Sistema POS',
                    'description' => __('portfolio.projects.pos.description'),
                    'image' => 'assets/images/ventas-codesign.jpg',
                    'technologies' => ['Laravel', 'PHP', 'JavaScript', 'MySQL', 'Bootstrap'],
                    'url' => 'https://ventas.codesign.com.co/signup',
                    'delay' => 100
                ],
                [
                    'title' => 'AdminISP - Sistema de Gestión',
                    'description' => __('portfolio.projects.adminisp.description'),
                    'image' => 'assets/images/adminisp-codesign.jpg',
                    'technologies' => ['Laravel', 'API', 'MikroTik', 'WhatsApp', 'OLT'],
                    'url' => 'https://adminisp.codesign.com.co/login',
                    'delay' => 200
                ],
                [
                    'title' => 'Codesign - Sitio Corporativo',
                    'description' => __('portfolio.projects.website.description'),
                    'image' => 'assets/images/codesign-web.jpg',
                    'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap', 'PHP'],
                    'url' => 'https://codesign.com.co',
                    'delay' => 300
                ],
                [
                    'title' => 'Sistema Domótico Arduino',
                    'description' => __('portfolio.projects.automation.description'),
                    'image' => 'assets/images/automation-project.jpg',
                    'technologies' => ['Arduino', 'C++', 'Sensores IoT', 'Android App'],
                    'url' => '#',
                    'delay' => 400
                ],
                [
                    'title' => __('portfolio.projects.tropychamoy.title'),
                    'description' => __('portfolio.projects.tropychamoy.desc'),
                    'image' => 'assets/images/tropychamoy.png',
                    'technologies' => ['Laravel', 'Node.js', 'CSS', 'Bootstrap', 'jQuery', 'AJAX'],
                    'url' => 'https://tropychamoy.com',
                    'delay' => 500
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
                    'number' => '25+', 
                    'label' => $locale === 'en' ? 'Mastered Technologies' : 
                              ($locale === 'ru' ? 'Освоенных технологий' : 'Tecnologías Dominadas')
                ]
            ],
            'skills' => [
                'backend' => [
                    ['name' => 'PHP / Laravel', 'percentage' => 95],
                    ['name' => 'Node.js', 'percentage' => 85],
                    ['name' => 'Python', 'percentage' => 80],
                    ['name' => 'Java', 'percentage' => 75]
                ],
                'frontend' => [
                    ['name' => 'JavaScript / ES6+', 'percentage' => 92],
                    ['name' => 'React', 'percentage' => 88],
                    ['name' => 'Vue.js', 'percentage' => 85],
                    ['name' => 'HTML5 / CSS3', 'percentage' => 98]
                ],
                'database' => [
                    ['name' => 'MySQL', 'percentage' => 90],
                    ['name' => 'PostgreSQL', 'percentage' => 82],
                    ['name' => 'Azure', 'percentage' => 78],
                    ['name' => 'Docker', 'percentage' => 75]
                ],
                'mobile' => [
                    ['name' => 'Android (Java)', 'percentage' => 85],
                    ['name' => 'Arduino / IoT', 'percentage' => 88],
                    ['name' => 'React Native', 'percentage' => 80],
                    ['name' => 'Sistemas de Seguridad', 'percentage' => 85]
                ]
            ]        ];

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
