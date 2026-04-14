<?php
declare(strict_types=1);

$randomItems = [];

foreach ($serviceCollections ?? [] as $key => $items) {
    if (!empty($items)) {
        $randomItems[$key] = $items[array_rand($items)];
    }
}

$services = getRandomItems($serviceCollections['Reports'], 3);

// Contenido específico de la página
ob_start();
?>
        <section class="py-4">
<?php
    require BASE_PATH . "/src/components/$lang/carousel.php";
?>
        </section>
        <!-- Home -->
        <section id="home" class="home">
            <div class="container py-4">
                <!-- Title -->
                <header>
                    <h1><?= COMPANY_NAME ?></h1>
                </header>
                <!-- End Title -->
                <!-- Section content -->
                <div class="row g-4">
<?php
foreach ($randomItems ?? [] as $key => $item):
?>
                    <div class="col-md-4">
                        <div class="card h-100 position-relative shadow-sm">
                            <div class="card-body">
                                <h3 class="card-title"><?= $item['name'] ?></h3>
                                <p><?= $item['description'] ?></p>
                                <span class="card-link mt-auto" title="<?= $item['title'] ?>">Saber más →</span>
                            </div>
                            <a href="<?= $item['url'] ?>" class="stretched-link"></a>
                        </div>
                    </div>
<?php
    endforeach;
?>
                </div>
                <!-- End Section content -->
            </div>
        </section>
        <!-- End Home -->
<?php
    require BASE_PATH . "/src/components/$lang/testimonials.php";
?>
        <section>
            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <!-- Title -->
                         <header>
                             <h1><?= $pages['Reports']['title'] ?></h1>
                             <p class="lead text-secondary"><?= $pages['Reports']['description'] ?></p>
                         </header>
                        <!-- End Title -->
                    </div>
                </div>
                <!-- Section content -->
                <div class="row">
<?php
    foreach ($services ?? [] as $key => $item):
        $image = getRandomElement($item['images']);
?>
                    <div class="col-md-4 d-flex">
                        <div class="card w-100 mb-4 shadow-sm">
                            <img src="<?= $image['src'] ?>" class="card-img-top" alt="<?= $image['alt'] ?>" title="<?= $item['title'] ?>" width="286" height="180" decoding="async">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?= $item['title'] ?></h5>
                                <p class="card-text"><?= $item['description'] ?></p>
                                <span class="card-link mt-auto" title="<?= $item['title'] ?>">Saber más →</span>
                            </div>
                            <a href="<?= $item['url'] ?>" class="stretched-link" title="<?= $item['title'] ?>"></a>
                        </div>
                    </div>
<?php
    endforeach;
?>
                </div>
            </div>
        </section>
        <!-- End Section content -->
<?php
    require BASE_PATH . "/src/components/$lang/partners.php";
    $main = ob_get_clean();
?>
