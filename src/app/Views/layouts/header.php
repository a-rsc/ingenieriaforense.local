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
    <title><?= "{$currentPage['name']} | " . $config['company']['name'] ?></title>
    <meta name="description" content="<?= $currentPage['description'] ?>">
    <link rel="canonical" href="<?= current_url() ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap"></noscript>
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= "{$currentPage['name']} | " . $config['company']['name'] ?>">
    <meta property="og:description" content="<?= $currentPage['description'] ?>">
    <meta property="og:url" content="<?= $config['app']['url'] . $currentPage['url'] ?>">
    <meta property="og:image" content="<?= $config['company']['og_logo'] ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="<?= $config['company']['name'] ?>">
    <meta property="og:image:alt" content="Logo de <?= $config['company']['name'] ?>">
    <meta property="og:locale" content="<?= $config['app']['lang_locale'] ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= "{$currentPage['name']} | " . $config['company']['name'] ?>">
    <meta name="twitter:description" content="<?= $currentPage['description'] ?>">
    <meta name="twitter:image" content="<?= $config['company']['og_logo'] ?>">
    <!-- End SEO Meta Tags -->
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
