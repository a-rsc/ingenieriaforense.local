<?php

use App\Core\View;
?>
<!DOCTYPE html>
<html lang="<?= $config['app']['lang'] ?>">
<head>
    <!-- Metadatos básicos -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?= $config['company']['icon'] ?>" />
    <!-- End Metadatos básicos -->
    <meta charset="<?= $config['app']['charset'] ?>">
    <title><?= $config['company']['name'] ?></title>

    <!-- Stylesheets -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <!-- End Stylesheets -->

</head>
<body>

<header>
    <h1><?= $config['company']['name'] ?></h1>
    <h2><?= $config['app']['lang'] ?></h2>
    <?php View::partial('nav'); ?>
</header>
