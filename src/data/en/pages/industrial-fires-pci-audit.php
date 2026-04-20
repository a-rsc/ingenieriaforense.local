<?php

return [
    'keywords' => 'origen y causa incendio industrial, investigación forense incendio, foco de ignición, peritaje incendio industrial',
    'content' => [
        'item_1_title' => '',
        'item_1' => '',
        'list' => [],
    ],
    'images' => [
        [
            'src' => '/images/pages/Defectos-constructivos.webp',
            'alt' => $config['app']['translations']['alt'] . 'Defectos constructivos',
            'category' => 'Origen y causa',
            'title' => 'Origen y causa',
            'description' => 'Análisis técnico del foco y fuente de ignición.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];

return [
    'pages' => $pageContent,
];