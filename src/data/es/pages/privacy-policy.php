<?php

$pageContent = [
    'keywords' => 'política de privacidad, protección de datos, privacidad web, tratamiento de datos personales, RGPD',
    'content' => [
        'item_1_title' => '',
        'item_1' => '',
        'list' => [],
    ],
    'images' => [
        [
            'src' => '/images/pages/privacy-policy.jpg',
            'alt' => $config['app']['translations']['alt'] . 'Política de privacidad',
            'category' => '',
            'title' => 'Política de privacidad',
            'description' => 'En esta sección se detalla la política de privacidad de IF360, explicando cómo se recopilan, utilizan y protegen los datos personales de los usuarios que acceden a nuestro sitio web, en cumplimiento con el RGPD y las leyes de protección de datos aplicables.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];

return [
    'pages' => $pageContent,
];