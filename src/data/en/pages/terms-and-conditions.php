<?php

$pageContent = [
    'keywords' => 'terms and conditions, usage policy, service conditions, contract, legality, legal terms',
    'content' => [
        'item_1_title' => '',
        'item_1' => '',
        'list' => [],
    ],
    'images' => [
        [
            'src' => '/images/pages/terms-and-conditions.jpg',
            'alt' => $config['app']['translations']['alt'] . 'Términos y condiciones',
            'category' => '',
            'title' => 'Terms and Conditions',
            'description' => 'In this section, the terms and conditions of use of IF360 are detailed, establishing the rules and responsibilities of users when accessing our website and using our services, with the aim of ensuring a safe and transparent experience for all visitors.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];