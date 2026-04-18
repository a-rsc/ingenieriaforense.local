<?php

use App\Core\Config;

$name = Config::get('company.name');

$pageContent = [
    'home' => [
        'text' => "<p>At {$name} we offer <strong>technical engineering</strong> focused on <strong>technical projects</strong>, <strong>activity licenses</strong> and <strong>expert reports</strong>. We work with a clear, rigorous and independent approach to help you resolve procedures, adapt spaces and technically document each case.</p><p>We provide service to both companies and activity holders as well as to individuals, communities and firms that need support in <strong>opening or legalizing businesses</strong>, <strong>adapting premises and warehouses</strong> or <strong>technical analysis of damages, dampness, cracks and construction non-compliance</strong>.</p><p>The objective is to provide <strong>technical clarity, well-structured documentation and a useful path of action</strong> from the initial analysis to the processing or final report.</p>",
        'list' => [],
        'keywords' => 'technical engineering, technical projects, activity licenses, forensic engineering, expert reports, expert opinions, legalizing activity, industrial warehouse license',
        'images' => [
            [
                'src' => '/images/maincarousel/Causas-de-humedad.webp',
                'alt' => 'Image of Causas de humedad',
                'category' => 'Humedades',
                'title' => 'Causas de humedad',
                'description' => 'Análisis técnico de las causas de humedad en edificios, viviendas y locales comerciales.',
            ],
            [
                'src' => '/images/maincarousel/Danos-estructurales.webp',
                'alt' => 'Image of Daños estructurales',
                'category' => 'Daños estructurales',
                'title' => 'Daños estructurales',
                'description' => 'Evaluación de daños estructurales en edificios, viviendas y locales comerciales, con análisis técnico y propuestas de reparación.',
            ],
            [
                'src' => '/images/maincarousel/Defectos-constructivos.webp',
                'alt' => 'Image of Defectos constructivos',
                'category' => 'Defectos constructivos',
                'title' => 'Defectos constructivos',
                'description' => 'Análisis técnico de los defectos constructivos en edificios, viviendas y locales comerciales.',
            ],
            [
                'src' => '/images/maincarousel/Incumplimiento-contrato-obra.webp',
                'alt' => 'Image of Incumplimiento de obra',
                'category' => 'Incumplimiento de obra',
                'title' => 'Incumplimiento de obra',
                'description' => 'Análisis técnico de los incumplimientos de obra en edificios, viviendas y locales comerciales.',
            ],
        ],
    ]
];

return [
    'pages' => $pageContent,
];