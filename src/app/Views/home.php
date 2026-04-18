<?php

use App\Core\View;

// View::partial('breadcrumb', [
    //     'items' => [
    //         ['label' => 'Inicio', 'url' => url('home')],
    //         ['label' => 'Nosotros', 'url' => url('about')],
    //     ]
    // ]);

    shuffle($pages['home']['images']);

    View::partial('carousel', [
        'idCarousel' => 'mainCarousel',
        'classCarousel' => 'main-carousel',
        'images' => $pages['home']['images'],
    ]);

?>

    <hr>
    <h2><?= $pages['home']['title'] ?></h2>
    <p><?= $pages['home']['description'] ?></p>
    <hr>

    <h1><?= current_url('') ?></h1>

    <h2>No:<?= $app['title'] ?></h2>

    <h3>App name: <?= htmlspecialchars($config['app']['name']) ?></h3>

    <h4><?= __('home_text') ?></h4>

    <a href="<?= url('about') ?>"><?= __('about_title') ?>: <?= url('about') ?></a>
    <hr>
    <a href="<?= url('about') ?>"><?= __('about_title') ?>: <?= route_slug('about') ?></a>

    <p>Contenido: <?= htmlspecialchars($message ?? 'Contenido por defecto') ?></p>

</section>
