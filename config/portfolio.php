<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Personal Information
    |--------------------------------------------------------------------------
    */

    'personal' => [

        'name' => 'Joshua Gallardo',

        'email' => 'joshuagallardo6588@gmail.com',

        'location' => 'Philippines',

        'status' => 'Open to Opportunities',

        'graduation_year' => '2026',

    ],

    /*
    |--------------------------------------------------------------------------
    | Experience Timeline
    |--------------------------------------------------------------------------
    */

    'experience' => [

        [
            'year' => '2026',

            'title' => 'BSIT Graduate',

            'organization' => 'Bachelor of Science in Information Technology',

            'description' => 'Completed my degree with a strong foundation in software engineering, databases, and web development, alongside consistent hands-on project work.',
        ],

        [
            'year' => '2025',

            'title' => 'Capstone SURE Scholarship System',

            'organization' => 'Full-stack Development',

            'description' => 'Built the SURE Scholarship Management System together with my capstone partner. I led the full-stack development of the platform while my partner focused on the research documentation and thesis. The system streamlines scholarship applications, reviews, and reporting workflows.',
        ],

        [
            'year' => '2024',

            'title' => 'Academic & Freelance Projects',

            'organization' => 'Laravel · Livewire · MySQL',

            'description' => 'Built internal tools, portfolio websites, and utility applications while improving my understanding of scalable architecture and user-focused interfaces.',
        ],

        [
            'year' => '2023',

            'title' => 'Self-Learning Journey',

            'organization' => 'PHP · JavaScript · Tailwind CSS',

            'description' => 'Started learning modern web development and discovered a passion for building clean, responsive, and user-friendly web applications.',
        ],

        [
            'year' => 'Next',

            'title' => 'Junior Software Developer',

            'organization' => 'Open to Opportunities',

            'description' => 'Seeking opportunities to work with experienced engineers, contribute to meaningful products, and continue growing as a software developer.',
        ],

    ],
/*
|--------------------------------------------------------------------------
| Footer
|--------------------------------------------------------------------------
*/

'footer' => [

    'description' => 'Fresh BSIT Graduate — building thoughtful, modern web experiences from the Philippines.',

    'copyright' => 'Crafted with care.',

],

/*
|--------------------------------------------------------------------------
| Social Links
|--------------------------------------------------------------------------
*/

'socials' => [

    [
        'name' => 'GitHub',
        'icon' => 'github',
        'url' => '#',
    ],

    [
        'name' => 'LinkedIn',
        'icon' => 'linkedin',
        'url' => '#',
    ],

    [
        'name' => 'Facebook',
        'icon' => 'facebook',
        'url' => '#',
    ],

],
/*
|--------------------------------------------------------------------------
| Hero Section
|--------------------------------------------------------------------------
*/

'hero' => [

    'availability' => 'Available for opportunities',

    'first_name' => 'Joshua',

    'last_name' => 'Gallardo',

    'description' =>
        'Fresh BSIT Graduate and aspiring software developer from the Philippines. I build thoughtful, modern web experiences with Laravel, PHP, JavaScript, Tailwind CSS, Livewire, FlutterFlow, and AI-assisted workflows.',

    'resume' => 'resume/Joshua_Gallardo_Resume.pdf',

    'project_button' => '#projects',

    'stats' => [

        [
            'key' => 'BSIT',
            'value' => 'Graduate',
        ],

        [
            'key' => '10+',
            'value' => 'Projects Built',
        ],

        [
            'key' => '24/7',
            'value' => 'Learning Mode',
        ],

    ],

    'tech_stack' => [

        'Laravel',
        'PHP',
        'JavaScript',
        'Tailwind',
        'Livewire',

    ],

],
/*
|--------------------------------------------------------------------------
| Navigation
|--------------------------------------------------------------------------
*/

'navigation' => [

    [
        'label' => 'Home',
        'href' => '#home',
    ],

    [
        'label' => 'About',
        'href' => '#about',
    ],

    [
        'label' => 'Skills',
        'href' => '#skills',
    ],

    [
        'label' => 'Projects',
        'href' => '#projects',
    ],

    [
        'label' => 'Experience',
        'href' => '#experience',
    ],

    [
        'label' => 'Contact',
        'href' => '#contact',
    ],

],
/*
|--------------------------------------------------------------------------
| Projects
|--------------------------------------------------------------------------
*/

'projects' => [

    'featured' => [

        'title' => 'SURE Scholarship Management System',

        'description' => 'Built together with my capstone partner. I led the full-stack development while my partner focused on the research documentation and thesis. The platform streamlines scholarship applications, review, disbursement, and reporting.',

        'stack' => [
            'Laravel',
            'Livewire',
            'MySQL',
            'Tailwind CSS',
            'Alpine.js',
        ],

        'live' => '#',

        'repository' => '#',

    ],

    'items' => [

        [

            'title' => 'Faculty Evaluation Portal',

            'description' => 'Anonymous faculty evaluation platform with real-time analytics.',

            'stack' => [
                'Laravel',
                'MySQL',
                'Chart.js',
            ],

            'tag' => 'Academic',

            'link' => '#',

        ],

        [

            'title' => 'Barangay Records System',

            'description' => 'Resident records management with role-based access.',

            'stack' => [
                'PHP',
                'MySQL',
                'Tailwind',
            ],

            'tag' => 'Community',

            'link' => '#',

        ],

        [

            'title' => 'Inventory Tracker',

            'description' => 'Inventory dashboard with CSV export and stock alerts.',

            'stack' => [
                'Livewire',
                'SQLite',
            ],

            'tag' => 'Utility',

            'link' => '#',

        ],

        [

            'title' => 'Personal AI Notes',

            'description' => 'Experimental AI-powered note application.',

            'stack' => [
                'TypeScript',
                'AI',
            ],

            'tag' => 'Exploration',

            'link' => '#',

        ],

    ],

],
/*
|--------------------------------------------------------------------------
| Skills
|--------------------------------------------------------------------------
*/
'skills' => [

    [
        'title' => 'Frontend',
        'items' => [
            'JavaScript',
            'TypeScript',
            'Tailwind CSS',
            'Livewire',
            'HTML5',
            'Alpine.js',
        ],
    ],

    [
        'title' => 'Backend',
        'items' => [
            'PHP',
            'Laravel',
            'REST APIs',
            'Auth & Sessions',
            'Eloquent ORM',
        ],
    ],

    [
        'title' => 'Database',
        'items' => [
            'MySQL',
            'SQLite',
            'Migrations',
            'Query Optimization',
        ],
    ],

    [
        'title' => 'Tools',
        'items' => [
            'Git',
            'GitHub',
            'VS Code',
            'Figma',
            'Postman',
            'Vite',
        ],
    ],

    [
        'title' => 'Others',
        'items' => [
            'FlutterFlow',
            'AI-assisted Development',
            'UI/UX Basics',
            'Agile',
        ],
    ],

],

'marquee_skills' => [

    'Laravel',
    'Livewire',
    'Tailwind CSS',
    'PHP',
    'MySQL',
    'JavaScript',
    'TypeScript',
    'FlutterFlow',
    'Git',
    'GitHub',
    'Figma',

],
];