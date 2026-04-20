<?php

use App\Core\View;

View::partial('breadcrumb', [
    'currentPage' => $currentPage,
    'pages' => $pages,
]);

require BASE_PATH . '/src/app/Views/content/' . app_lang_code() . "/{$config['current_page']}.php";
