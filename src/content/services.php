<?php
declare(strict_types=1);

// Contenido específico de la página
ob_start();
?>
        <!-- Services -->
        <section id="services" class="services">
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
                             <!-- Contenido de la sección -->
                            <section>
                                <div class="row">
<?php foreach ($serviceCollections[$pageByUrl] ?? [] as $key => $item): ?>
                                    <div class="col-md-4 d-flex">
                                        <div class="card w-100 mb-4 shadow-lg">
                                            <img src="<?= getRandomElement($item['images']) ?>" class="card-img-top" alt="<?= $item['alt'] ?>" title="<?= $item['title'] ?>" width="286" height="180" decoding="async">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title"><?= $item['title'] ?></h5>
                                                <p class="card-text"><?= $item['description'] ?></p>
                                                <span class="card-link mt-auto" title="<?= $item['title'] ?>">Saber más →</span>
                                            </div>
                                            <a href="<?= $item['url'] ?>" class="stretched-link" title="<?= $item['title'] ?>"></a>
                                        </div>
                                    </div>
<?php endforeach; ?>
                                </div>
                            </section>
                            <!-- End Contenido de la sección -->
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services -->
<?php require BASE_PATH . '/src/components/partners.php'; ?>
<?php $main = ob_get_clean(); ?>
