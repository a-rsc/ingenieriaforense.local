<?php

$pageContent = [
    'text' => '<p>The page you are looking for could not be found. It may have been deleted, renamed, or is temporarily unavailable. We recommend you go back to the <a href="' . url('home') . '">Home Page</a> or use the navigation menu to find the information you need.</p>',
    'list' => [],
    'keywords' => 'error 404, page not found, page unavailable, page deleted',
    'images' => [
        [
            'src' => '/images/4041.jpg',
            'alt' => 'Image 404 1',
            'category' => 'Error 404',
            'title' => 'Error 404',
            'description' => 'The page you are looking for could not be found.',
        ],
    ],
];

return [
    'pages' => $pageContent,
];