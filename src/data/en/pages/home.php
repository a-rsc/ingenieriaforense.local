<?php

$pageContent = [
    'keywords' => 'technical engineering, technical projects, activity licenses, forensic engineering, expert reports, expert opinions, legalizing activity, industrial warehouse license',
    'content' => [
        'item_1_title' => '',
        'item_1' => "<p>At {$config['company']['name']} we offer <strong>technical engineering</strong> focused on <strong>technical projects</strong>, <strong>activity licenses</strong> and <strong>expert reports</strong>. We work with a clear, rigorous and independent approach to help you resolve procedures, adapt spaces and technically document each case.</p><p>We provide service to both companies and activity holders as well as to individuals, communities and firms that need support in <strong>opening or legalizing businesses</strong>, <strong>adapting premises and warehouses</strong> or <strong>technical analysis of damages, dampness, cracks and construction non-compliance</strong>.</p><p>The objective is to provide <strong>technical clarity, well-structured documentation and a useful path of action</strong> from the initial analysis to the processing or final report.</p>",
        'list' => [],
    ],
    'images' => [
        [
            'src' => '/images/pages/Causas-de-humedad.webp',
            'alt' => $config['app']['translations']['alt'] . 'Causas de humedad',
            'category' => 'Humedades',
            'title' => 'Causas de humedad',
            'description' => 'Análisis técnico de las causas de humedad en edificios, viviendas y locales comerciales.',
        ],
        [
            'src' => '/images/pages/Danos-estructurales.webp',
            'alt' => $config['app']['translations']['alt'] . 'Daños estructurales',
            'category' => 'Daños',
            'title' => 'Daños estructurales',
            'description' => 'Evaluación de daños estructurales en edificios, viviendas y locales comerciales, con análisis técnico y propuestas de reparación.',
        ],
        [
            'src' => '/images/pages/Defectos-constructivos.webp',
            'alt' => $config['app']['translations']['alt'] . 'Defectos constructivos',
            'category' => 'Defectos',
            'title' => 'Defectos constructivos',
            'description' => 'Análisis técnico de los defectos constructivos en edificios, viviendas y locales comerciales.',
        ],
        [
            'src' => '/images/pages/Incumplimiento-contrato-obra.webp',
            'alt' => $config['app']['translations']['alt'] . 'Incumplimiento contrato obra',
            'category' => 'Incumplimiento',
            'title' => 'Incumplimiento contrato obra',
            'description' => 'Análisis técnico de los incumplimientos de obra en edificios, viviendas y locales comerciales.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];

return [
    'pages' => $pageContent,
];