<?php

return [
    'projects' => [
        // ...other projects...
        'tropychamoy' => [
            'title' => 'TropyChamoy.com',
            'desc' => 'Online store for artisanal tropical chamoy, tamarind, tajin, and other tropical products.',
            'full_desc' => 'Store app for artisanal chamoy, tajin, and tropical products. Built with Laravel, Node.js, CSS, Bootstrap, jQuery, and AJAX.',
            'more' => 'More info',
        ],
    ],
    'name' => 'Camilo Llorente Vásquez',
    'title' => 'Full Stack Developer | Founder of Codesign',
    'greeting' => 'Hello! I\'m',
    'hero_description' => 'Full Stack Developer with over 6 years of experience specializing in modern web technologies. Founder of Codesign, passionate about creating innovative digital solutions that transform ideas into exceptional digital realities.',
    
    'info' => [
        'age' => '30 years old',
        'location' => 'Colombia',
        'email' => 'camilo@codesign.com.co',
        'phone' => '+57 312 732 1741',
        'experience' => '6+ years',
        'company' => 'Codesign (Founder)'
    ],
    
    'buttons' => [
        'download_cv' => 'Download CV',
        'contact' => 'Contact',
        'view_portfolio' => 'View Portfolio',
        'hire_me' => 'Hire Me'
    ],
    
    'navigation' => [
        'home' => 'Home',
        'about' => 'About',
        'services' => 'Services',
        'portfolio' => 'Portfolio',
        'experience' => 'Experience',
        'contact' => 'Contact',
        'resume' => 'Resume'
    ],
    
    'stats' => [
        'experience' => [
            'number' => '6',
            'label' => 'Years of Experience'
        ],
        'projects' => [
            'number' => '150',
            'label' => 'Completed Projects'
        ],
        'clients' => [
            'number' => '50',
            'label' => 'Satisfied Clients'
        ],
        'technologies' => [
            'number' => '25',
            'label' => 'Mastered Technologies'
        ]
    ],

    // (eliminado duplicado de projects)
    
    'services' => [
        'web_development' => [
            'title' => 'Web Development',
            'description' => 'Creation of modern and scalable web applications using the latest technologies like Laravel, Vue.js, React and Node.js.',
            'icon' => 'fas fa-code'
        ],
        'mobile_development' => [
            'title' => 'Mobile Development',
            'description' => 'Development of native and hybrid mobile applications for iOS and Android using React Native and Flutter.',
            'icon' => 'fas fa-mobile-alt'
        ],
        'ui_ux_design' => [
            'title' => 'UI/UX Design',
            'description' => 'Design of intuitive user interfaces and exceptional user experiences that convert visitors into customers.',
            'icon' => 'fas fa-paint-brush'
        ],
        'ecommerce' => [
            'title' => 'E-commerce',
            'description' => 'Development of complete online stores and custom e-commerce systems with integrated payment gateways.',
            'icon' => 'fas fa-shopping-cart'
        ],
        'api_development' => [
            'title' => 'API Development',
            'description' => 'Creation of robust and scalable RESTful and GraphQL APIs to connect different systems and applications.',
            'icon' => 'fas fa-server'
        ],
        'consulting' => [
            'title' => 'Tech Consulting',
            'description' => 'Technology consulting to optimize processes, software architecture and selection of appropriate technologies.',
            'icon' => 'fas fa-lightbulb'
        ]
    ],
    
    'portfolio' => [
        'section_title' => 'My Projects',
        'section_subtitle' => 'Portfolio',
        'section_description' => 'A selection of my most outstanding projects that showcase my experience in different technologies and sectors.',
        'view_project' => 'View Project',
        'view_code' => 'View Code',
        'technologies' => 'Technologies:',
        'projects' => [
            [
                'title' => 'E-learning Platform',
                'description' => 'Complete educational platform with course system, payments and certifications.',
                'technologies' => 'Laravel, Vue.js, MySQL, Stripe',
                'image' => 'project1.jpg',
                'url' => '#',
                'github' => '#'
            ],
            [
                'title' => 'Enterprise CRM System',
                'description' => 'Custom CRM for customer management, sales and advanced reporting.',
                'technologies' => 'Laravel, React, PostgreSQL, Chart.js',
                'image' => 'project2.jpg',
                'url' => '#',
                'github' => '#'
            ],
            [
                'title' => 'Delivery Mobile App',
                'description' => 'Mobile delivery application with real-time tracking and integrated payments.',
                'technologies' => 'React Native, Node.js, MongoDB, Socket.io',
                'image' => 'project3.jpg',
                'url' => '#',
                'github' => '#'
            ]
        ]
    ],
    
    'experience' => [
        'section_title' => 'My Experience',
        'section_subtitle' => 'Career',
        'section_description' => 'My professional evolution and achievements throughout my career as a developer.',
        'timeline' => [
            [
                'year' => '2024 - Present',
                'position' => 'Founder & CEO',
                'company' => 'Codesign',
                'description' => 'Founded my own software development company, leading a team of talented developers to create innovative digital solutions.',
                'achievements' => [
                    'Successful company foundation',
                    'Team growth to 8 developers',
                    '30+ projects delivered successfully',
                    'Implementation of agile methodologies'
                ]
            ],
            [
                'year' => '2021 - 2024',
                'position' => 'Senior Full Stack Developer',
                'company' => 'TechSolutions',
                'description' => 'Led the development of complex web applications and mentored junior developers in modern technologies.',
                'achievements' => [
                    'Development of 20+ web applications',
                    'Implementation of scalable architectures',
                    '40% reduction in loading time',
                    'Mentoring of 5 junior developers'
                ]
            ],
            [
                'year' => '2019 - 2021',
                'position' => 'Full Stack Developer',
                'company' => 'Digital Innovations',
                'description' => 'Development of robust web systems using Laravel, Vue.js and cutting-edge technologies.',
                'achievements' => [
                    'Successful migration of legacy systems',
                    'Implementation of RESTful APIs',
                    'Database optimization',
                    'Development of responsive interfaces'
                ]
            ],
            [
                'year' => '2018 - 2019',
                'position' => 'Backend Developer',
                'company' => 'StartupHub',
                'description' => 'Specialization in backend development with PHP and Laravel, creating APIs and scalable systems.',
                'achievements' => [
                    'Microservices development',
                    'Advanced cache implementation',
                    'Integration with external services',
                    'Complete technical documentation'
                ]
            ]
        ]
    ],
    
    'skills' => [
        'section_title' => 'My Skills',
        'section_subtitle' => 'Technologies',
        'section_description' => 'Technologies and tools I master to create exceptional digital solutions.',
        'categories' => [
            'backend' => [
                'title' => 'Backend',
                'skills' => [
                    ['name' => 'PHP', 'level' => 95],
                    ['name' => 'Laravel', 'level' => 98],
                    ['name' => 'Node.js', 'level' => 85],
                    ['name' => 'Python', 'level' => 80],
                    ['name' => 'MySQL', 'level' => 90],
                    ['name' => 'PostgreSQL', 'level' => 85]
                ]
            ],
            'frontend' => [
                'title' => 'Frontend',
                'skills' => [
                    ['name' => 'JavaScript', 'level' => 95],
                    ['name' => 'Vue.js', 'level' => 92],
                    ['name' => 'React', 'level' => 88],
                    ['name' => 'HTML5/CSS3', 'level' => 98],
                    ['name' => 'Bootstrap', 'level' => 95],
                    ['name' => 'Tailwind CSS', 'level' => 90]
                ]
            ],
            'mobile' => [
                'title' => 'Mobile',
                'skills' => [
                    ['name' => 'React Native', 'level' => 85],
                    ['name' => 'Flutter', 'level' => 75],
                    ['name' => 'Ionic', 'level' => 80]
                ]
            ],
            'tools' => [
                'title' => 'Tools',
                'skills' => [
                    ['name' => 'Git', 'level' => 95],
                    ['name' => 'Docker', 'level' => 85],
                    ['name' => 'AWS', 'level' => 80],
                    ['name' => 'Linux', 'level' => 88]
                ]
            ]
        ]
    ],
    
    'contact' => [
        'section_title' => 'Let\'s Work Together',
        'section_subtitle' => 'Contact',
        'section_description' => 'Do you have a project in mind? I\'d love to hear your ideas and help you turn them into reality.',
        'form_name' => 'Full name',
        'form_email' => 'Email address',
        'form_subject' => 'Subject',
        'form_message' => 'Message',
        'form_send' => 'Send Message',
        'info' => [
            'email' => [
                'title' => 'Email',
                'value' => 'camilo@codesign.com.co',
                'icon' => 'fas fa-envelope'
            ],
            'phone' => [
                'title' => 'Phone',
                'value' => '+57 312 732 1741',
                'icon' => 'fas fa-phone'
            ],
            'location' => [
                'title' => 'Location',
                'value' => 'Colombia',
                'icon' => 'fas fa-map-marker-alt'
            ],
            'availability' => [
                'title' => 'Availability',
                'value' => 'Available for projects',
                'icon' => 'fas fa-clock'
            ]
        ]
    ],
    
    'footer' => [
        'copyright' => '© 2024 Camilo Llorente Vásquez. All rights reserved.',
        'designed_by' => 'Designed and developed with',
        'love' => 'love',
        'by' => 'by',
        'privacy' => 'Privacy Policy',
        'terms' => 'Terms of Use'
    ],
    
    'meta' => [
        'title' => 'Camilo Llorente Vásquez - Full Stack Developer | Founder of Codesign',
        'description' => 'Full Stack Developer with 6+ years of experience. Specialist in Laravel, Vue.js, React. Founder of Codesign. Creating innovative digital solutions.',
        'keywords' => 'full stack developer, Laravel, Vue.js, React, PHP, JavaScript, Codesign, Colombia, web development, mobile applications'
    ],
    
    'social_links' => [
        'github' => 'https://github.com/camilollorente',
        'linkedin' => 'https://linkedin.com/in/camilollorente',
        'twitter' => 'https://twitter.com/camilollorente',
        'instagram' => 'https://instagram.com/camilollorente',
        'behance' => 'https://behance.net/camilollorente',
        'dribbble' => 'https://dribbble.com/camilollorente'
    ],
    
    'preloader' => [
        'loading' => 'Loading...',
        'messages' => [
            'Loading digital experience...',
            'Initializing creativity...',
            'Preparing innovation...',
            'Connecting to the future...'
        ]
    ],
    
    'language_selector' => [
        'es' => 'Español',
        'en' => 'English',
        'ru' => 'Русский'
    ],
    
    'resume' => [
        'title' => 'Resume',
        'download' => 'Download PDF',
        'print' => 'Print',
        'sections' => [
            'personal_info' => 'Personal Information',
            'professional_summary' => 'Professional Summary',
            'experience' => 'Work Experience',
            'education' => 'Education',
            'skills' => 'Technical Skills',
            'languages' => 'Languages',
            'certifications' => 'Certifications',
            'achievements' => 'Achievements'
        ]
    ],

    'intro' => 'I am',
    'role' => 'Founder of Codesign',
    'description' => 'I am a Software Developer specialized in creating interactive projects that include web applications, automation systems and creative websites. I spend most of my time programming exceptional projects or studying new technologies to improve my development stack. I develop attractive designs that come to life using transitions and animations, using the most sophisticated technologies available.',
    'download-cv' => 'View CV',
    'contact-me' => 'Contact Me',

    // Experience Section
    'experience-title' => 'My Experience',
    'experience-subtitle' => 'Professional career and featured projects',
    'exp1-title' => 'Developer / Computer Networks - Freelancer',
    'exp1-desc' => 'Working independently, I have created various applications and websites for management, inventories, sales software, among others, for various companies. Specialized in full-stack development and custom technological solutions.',
    'exp2-title' => 'Full Stack Developer',
    'exp2-desc' => 'Development of enterprise applications using React and .NET Core. Application of DDD (Domain-Driven Design) patterns for software architecture, aggregate design and separation of responsibilities. Creation of REST APIs, database management and modern user interface development.',
    'exp3-title' => 'Professional Technician',
    'exp3-desc' => 'In charge of networks, technical maintenance and company software management. Network infrastructure administration, specialized technical support and operating system optimization.',

    // Education Section
    'education-title' => 'Education and Training',
    'education-subtitle' => 'My academic background and certifications',
    'edu1-course' => 'Networks and Computer Science, Administration/Administrator of systems, networks and LAN/WAN communications',
    'edu1-desc' => 'Specialized training in network administration, computer systems and business communications.',
    'edu2-course' => 'Software Programming Technician',
    'edu2-desc' => 'Technical training in software development, programming and development methodologies.',
    'edu3-course' => 'Network and Telecommunications Design Technician',
    'edu3-desc' => 'Specialization in design and implementation of telecommunications networks.',

    // Skills Section
    'skills-title' => 'Technical Skills',
    'skills-subtitle' => 'Technologies and tools I master',
    'skill1-title' => 'Software',
    'skill2-title' => 'Maintenance Technician',
    'skill3-title' => 'Software Developer',
    'skill4-title' => 'Networks and Telecommunications',

    // Services Section
    'services-title' => 'What I Do',
    'services-subtitle' => 'Professional services I offer',
    'service1-title' => 'Full Stack Web Development',
    'service1-desc' => 'Development of complete web applications with Laravel, JavaScript, React and modern technologies. Specialized in POS systems and business management.',
    'service2-title' => 'Mobile Applications',
    'service2-desc' => 'Development of native apps for Android and iOS, as well as hybrid applications. Experience in Java, JavaScript and modern frameworks.',
    'service3-title' => 'Automation Systems',
    'service3-desc' => 'Development of home automation systems, home automation, integration with Arduino and microcontrollers for IoT projects.',
    'service4-title' => 'Security Systems',
    'service4-desc' => 'Installation and configuration of security systems, surveillance cameras, alarms and access control.',
    'service5-title' => 'Cloud Solutions',
    'service5-desc' => 'Implementation of Azure solutions, scalable web services and cloud-native architectures for companies.',
    'service6-title' => 'UX/UI Design',
    'service6-desc' => 'Modern user interface design and digital experiences using Adobe suite, Bootstrap and frontend technologies.',

    // Portfolio Section
    'portfolio-title' => 'My Projects',
    'portfolio-subtitle' => 'Some of my most outstanding work',
    'project1-title' => 'Codesign Sales POS System',
    'project1-desc' => 'Complete point of sale system for all types of businesses',
    'project1-demo' => '🚀 DEMO AVAILABLE',
    'project1-name' => 'Codesign Sales - POS System',
    'project1-full-desc' => 'Complete point of sale system for warehouses, stores, restaurants and all types of businesses. Includes inventory management, billing, reports and multiple functionalities.',
    'project1-demo-text' => 'Try the complete system:',
    'project2-title' => 'AdminISP - ISP Management',
    'project2-desc' => 'Complete system for internet and telecommunications providers',
    'project2-demo' => '🚀 DEMO AVAILABLE',
    'project2-name' => 'AdminISP - Management System',
    'project2-full-desc' => 'Complete platform for ISPs with customer management, services, automatic cuts, network equipment integration, WhatsApp Business API and billing.',
    'project2-demo-text' => 'Explore all functionalities:',
    'project3-title' => 'Codesign - Corporate Site',
    'project3-desc' => 'Corporate website of my development company',
    'project3-name' => 'Codesign - Corporate Site',
    'project3-full-desc' => 'Corporate website of my software development company with modern and responsive design.',
    'project4-title' => 'Smart Home Automation System',
    'project4-desc' => 'Home automation with Arduino and IoT sensors',
    'project4-name' => 'Arduino Home Automation System',
    'project4-full-desc' => 'Home automation system with lighting control, temperature, security and remote monitoring via mobile app.',

    // Contact Section
    'contact-title' => 'Contact Me',
    'contact-subtitle' => 'Do you have a project in mind? Let\'s talk!',
    'contact-whatsapp' => 'WhatsApp',
    'contact-send-message' => 'Send Message',
    'contact-email' => 'Email',
    'contact-send-email' => 'Send Email',
    'contact-linkedin' => 'LinkedIn',
    'contact-view-profile' => 'View Profile',
    'contact-location' => 'Location',
    'contact-address' => 'Santa María, Itagüí<br>Colombia'
];
