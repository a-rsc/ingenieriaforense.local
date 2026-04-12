<?php

declare(strict_types=1);

// Contenido específico de la página
ob_start();
?>
<!-- Services Page -->
<section id="services-page" class="services-page">
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <article>
                    <!-- Título -->
                    <header>
                        <h1><?= $pages[$pageByUrl]['title'] ?></h1>
                        <p class="lead text-secondary"><?= $pages[$pageByUrl]['description'] ?></p>
                    </header>
                    <!-- End Título -->
                    <?php require BASE_PATH . '/src/components/services-nav.php'; ?>
                    <!-- Contenido de la sección -->
                    <section>
                        <h2><?= $service['title'] ?></h2>
                        <p class="lead text-secondary"><?= $service['description'] ?></p>
                        <?= $service['text'] ?>
                        <?php foreach ($service['list'] ?? [] as $key => $value): ?>
                            <ul>
                                <li><?= $value ?></li>
                            </ul>
                        <?php endforeach; ?>
                        <?php require BASE_PATH . '/src/components/gallery.php'; ?>
                    </section>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- End Services Page -->
<?php require BASE_PATH . '/src/components/partners.php'; ?>
<?php $main = ob_get_clean(); ?>