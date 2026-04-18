<?php

// use App\Core\View;

// View::partial('breadcrumb', [
    //     'items' => [
    //         ['label' => 'Inicio', 'url' => url('home')],
    //         ['label' => 'Nosotros', 'url' => url('about')],
    //     ]
    // ]);
?>

    <!-- Carousel -->
    <section class="py-4">
        <div id="mainCarousel" class="main-carousel carousel slide shadow-sm" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
<?php
    foreach ($pages['home']['images'] ?? [] as $key => $image):
        $isFirst = $key === 0;
?>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="<?= $key ?>"<?= $isFirst ? ' class="active" aria-current="true"' : '' ?> aria-label="Slide <?= $key + 1 ?>"></button>
<?php
    endforeach;
?>
            </div>
            <!-- End Indicators -->
            <!-- Slides -->
            <div class="carousel-inner">
<?php
    foreach ($pages['home']['images'] ?? [] as $key => $image):
        $isFirst = $key === 0;
?>
                <div class="carousel-item<?= $isFirst ? ' active' : '' ?>">
                    <img src="<?= $image['src'] ?>" class="d-block w-100" alt="<?= $image['alt'] ?>"<?= $isFirst ? ' fetchpriority="high"' : ' loading="lazy"' ?> decoding="async">
                    <div class="bg-dark bg-opacity-50 position-absolute start-0 bottom-0 w-100 text-white d-none d-md-block py-4">
                        <h3><?= $image['category'] . ' · ' . $image['title'] ?></h3>
                        <p class="text-center"><?= $image['description'] ?></p>
                    </div>
                </div>
<?php
    endforeach;
?>
            </div>
            <!-- End Slides -->
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Anterior</span></button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Siguiente</span></button>
            <!-- End Controls -->
        </div>
    </section>
    <!-- End Carousel -->


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
