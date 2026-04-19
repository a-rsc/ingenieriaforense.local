<?php

use App\Core\View;

View::partial('breadcrumb', [
    'currentPage' => $currentPage,
    'parent' => $parent,
    'children' => $children,
]);

require content_path('content', 'privacy-policy');
