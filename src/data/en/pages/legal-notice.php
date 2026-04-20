<?php

$pageContent = [
    'keywords' => 'legal notice, usage conditions, privacy policy, liability, legal terms',
    'content' => [
        'item_1_title' => '',
        'item_1' => '',
        'list' => [],
    ],
    'images' => [
        [
            'src' => '/images/pages/legal-notice.jpg',
            'alt' => $config['app']['translations']['alt'] . 'Legal notice',
            'category' => '',
            'title' => 'Aviso Legal',
            'description' => 'Este es el aviso legal de IF360, donde se establecen las condiciones de uso, la política de privacidad y la responsabilidad de los usuarios al acceder a nuestro sitio web.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];

return [
    'pages' => $pageContent,
];