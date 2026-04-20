<?php

use App\Core\View;

View::partial('breadcrumb', [
    'currentPage' => $currentPage,
    'parent' => $parent,
    'children' => $children,
]);

// dd('hola');

require content_path('content', $config['current_page']);
