<?php
/**
 * Data Loader for Projects & Details
 * Yug Bhuva Portfolio
 */

require_once __DIR__ . '/config.php';

$jsonPaths = [
    __DIR__ . '/../content/projects.json',
    __DIR__ . '/../../content/projects.json',
    __DIR__ . '/../projects.json',
    __DIR__ . '/projects.json'
];

$rawProjects = [];
foreach ($jsonPaths as $path) {
    if (file_exists($path)) {
        $rawProjects = json_decode(file_get_contents($path), true) ?: [];
        break;
    }
}

$details = [
    'placement' => [
        'short' => 'Placement Portal',
        'type' => 'Web application',
        'image' => 'project-placement.jpg',
        'alt' => 'College Placement Portal web dashboard interface showing student placement statistics, job listings, and aptitude scores',
        'headline' => 'A better place to take the next step.',
        'focus' => [
            'Student registration & authentication',
            'Job listings and placement updates',
            'Aptitude quizzes & student dashboards'
        ],
        'note' => 'Built during my web development internship at ExcelPTP.'
    ],
    'api' => [
        'short' => 'Restaurant API',
        'type' => 'Backend development',
        'image' => 'project-api.jpg',
        'alt' => 'Restaurant REST API developer documentation and testing console with JSON endpoints and authentication',
        'headline' => 'The structure behind a smoother service.',
        'focus' => [
            'Menus, orders & categories',
            'Serializers and viewsets',
            'Token-based authentication'
        ],
        'note' => 'A focused backend project using Django REST Framework.'
    ],
    'shop' => [
        'short' => 'Watch E-Commerce',
        'type' => 'Frontend development',
        'image' => 'project-shop.jpg',
        'alt' => 'Watch E-Commerce luxury watch product showcase with specifications and shopping cart',
        'headline' => 'Making every detail worth a closer look.',
        'focus' => [
            'Responsive product listings',
            'Product presentation & cart interface',
            'Layouts for desktop and mobile'
        ],
        'note' => 'A frontend e-commerce study in clear product presentation.'
    ],
    'chat' => [
        'short' => 'AI Chatbot',
        'type' => 'AI experiment',
        'image' => 'project-chat.jpg',
        'alt' => 'AI Chatbot conversational interface with real-time code generation and assistant dialog',
        'headline' => 'An interface built around conversation.',
        'focus' => [
            'Python and AI API integration',
            'Conversational interaction',
            'Automation experiments'
        ],
        'note' => 'An ongoing experiment. The original hosted demo currently returns an unavailable page.',
        'unavailable' => true
    ],
    'portfolio' => [
        'short' => 'Portfolio / 01',
        'type' => 'Personal website',
        'image' => 'project-portfolio.jpg',
        'alt' => 'Developer Portfolio First Edition interface with glassmorphism cards and skill badges',
        'headline' => 'The first chapter of my digital presence.',
        'focus' => [
            'Django templates & responsive pages',
            'Project and skill presentation',
            'Animated interface elements'
        ],
        'note' => 'The original portfolio that started this evolution.'
    ],
    'creative' => [
        'short' => 'Creative Giant',
        'type' => 'Frontend study',
        'image' => 'project-creative.jpg',
        'alt' => 'Creative Giant avant-garde digital design exploration with 3D fluid artwork and bold editorial typography',
        'headline' => 'Exploring what an interface can express.',
        'focus' => [
            'Expressive typography & visual design',
            'CSS animation experiments',
            'Responsive frontend layouts'
        ],
        'note' => 'A UI study inspired by Creative Giants. The external link opens the original design reference.'
    ],
    'data' => [
        'short' => 'Data Extract',
        'type' => 'Automation experiment',
        'image' => 'project-data.jpg',
        'alt' => 'Web data extraction and scraping dashboard with parsed data tables, throughput metrics, and JSON export',
        'headline' => 'Turning scattered information into structure.',
        'focus' => [
            'Website & document data extraction',
            'Python-based processing',
            'Workflow automation'
        ],
        'note' => 'In development. No public demo is currently linked.'
    ],
    'face' => [
        'short' => 'Face Recognition',
        'type' => 'Computer vision',
        'image' => 'project-face.jpg',
        'alt' => 'Computer vision face recognition attendance system with real-time biometric detection and verification log',
        'headline' => 'Giving attendance a familiar face.',
        'focus' => [
            'Real-time face detection',
            'Recognition with Python and OpenCV',
            'Attendance tracking experiments'
        ],
        'note' => 'In development. No public demo is currently linked.'
    ]
];

$projects = [];
foreach ($rawProjects as $i => $p) {
    $id = $p['id'] ?? '';
    $extra = $details[$id] ?? [];
    $p['number'] = str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT);
    $projects[] = array_merge($p, $extra);
}

if (!function_exists('getProjectById')) {
    function getProjectById(string $id, array $projects): ?array {
        foreach ($projects as $p) {
            if (($p['id'] ?? '') === $id) {
                return $p;
            }
        }
        return null;
    }
}

if (!function_exists('renderProjectCover')) {
    function renderProjectCover(array $p, string $cls = ''): string {
        $id = escape($p['id'] ?? '');
        $number = escape($p['number'] ?? '01');
        $alt = escape($p['alt'] ?? ($p['name'] ?? 'Project Artwork'));
        $image = !empty($p['image']) ? escape($p['image']) : '';
        $isImage = !empty($image);
        $caption = $isImage ? 'PROJECT SHOWCASE' : 'PROJECT STUDY';

        $typeArtHtml = '';
        if (!$isImage) {
            if ($id === 'api') {
                $typeArtHtml = '<span class="code-line">{ menus,</span><span class="code-line">orders,</span><span class="code-line">possibilities }</span>';
            } elseif ($id === 'chat') {
                $typeArtHtml = '<span class="chat-art-line">HELLO,</span><span class="chat-art-line outlined">WHAT’S</span><span class="chat-art-line">NEXT?</span>';
            } elseif ($id === 'creative') {
                $typeArtHtml = '<span class="creative-art-line">MAKE</span><span class="creative-art-line">SOME</span><span class="creative-art-line">NOISE.</span>';
            } elseif ($id === 'data') {
                $typeArtHtml = '<span class="data-art-line">RAW →</span><span class="data-art-line outlined">REFINED.</span>';
            } else {
                $typeArtHtml = '<span class="face-art-line">HUMAN.</span><span class="face-art-line outlined">RECOGNIZED.</span>';
            }
        }

        $artInner = $isImage
            ? '<img src="' . url('assets/' . $image) . '" alt="' . $alt . '" width="1536" height="1024" loading="lazy">'
            : '<div class="type-art" aria-hidden="true">' . $typeArtHtml . '</div>';

        return '
        <div class="project-art art-' . $id . ' ' . escape($cls) . '" data-image-effect>
            ' . $artInner . '
            <span class="cover-number">' . $number . ' / YB</span>
            <span class="cover-caption">' . $caption . '</span>
            <span class="cover-view">EXPLORE <b>↗</b></span>
        </div>';
    }
}
