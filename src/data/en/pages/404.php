<?php

$pageContent = [
    'keywords' => 'error 404, page not found, page unavailable, page deleted',
    'content' => [
        'item_1_title' => '',
        'item_1' => '<p>The page you are looking for could not be found. It may have been deleted, renamed, or is temporarily unavailable. We recommend you go back to the <a href="' . url('home') . '">Home Page</a> or use the navigation menu to find the information you need.</p>',
        'list' => [],
    ],
    'images' => [
        [
            'src' => '/images/pages/404.jpg',
            'alt' => $config['app']['translations']['alt'] . '404',
            'category' => '',
            'title' => 'Error 404',
            'description' => 'The page you are looking for could not be found.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];

return [
    'pages' => $pageContent,
];