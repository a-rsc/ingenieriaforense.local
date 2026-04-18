<?php

use App\Core\View;
?>
<!DOCTYPE html>
<html lang="<?= $config['app']['lang'] ?>">
<head>
    <!-- Metadatos básicos -->
    <meta charset="<?= $config['app']['charset'] ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?= $config['company']['icon'] ?>" />
    <!-- End Metadatos básicos -->
    <!-- SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="<?= $config['company']['name'] ?>">
    <title><?= "{$pages[$config['current_page']]['title']} | " . $config['company']['name'] ?></title>
    <meta name="description" content="<?= $pages[$config['current_page']]['description'] ?>">
    <link rel="canonical" href="<?= current_url() ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap"></noscript>

    <!-- Stylesheets -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <!-- End Stylesheets -->

</head>
<body>

<header>
<?php
    View::partial('accessibility-preloader-lines', [
        'config' => $config,
    ]);
    View::partial('nav', [
        'config' => $config,
        'navPrimaries' => $navPrimaries
    ]);
?>
</header>
