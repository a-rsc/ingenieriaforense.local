<?php

$pageContent = [
    'keywords' => 'privacy policy, data protection, web privacy, personal data processing, GDPR',
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
            'description' => 'In this section, the privacy policy of IF360 is detailed, explaining how the personal data of users who access our website is collected, used and protected, in compliance with the GDPR and applicable data protection laws.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];

return [
    'pages' => $pageContent,
];