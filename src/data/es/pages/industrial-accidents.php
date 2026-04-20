<?php

$pageContent = [
    'keywords' => 'ingeniería técnica, proyectos técnicos, licencias de actividad, ingeniería forense, informes periciales, peritajes, legalización de actividad, licencia nave industrial',
    'content' => [
        'item_1_title' => '',
        'item_1' => '',
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