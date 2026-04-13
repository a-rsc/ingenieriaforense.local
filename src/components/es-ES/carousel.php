<?php
declare(strict_types=1);

$activeSlides = array_merge(
    getRandomActiveSlides($permits, 2),
    getRandomActiveSlides($industrialFires, 2),
    getRandomActiveSlides($reports, 2)
);

// Shuffle slides to ensure a varied order on each page load
shuffle($activeSlides);
?>
    <!-- Carousel -->
    <div id="mainCarousel" class="main-carousel carousel slide shadow-lg" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
<?php
    foreach ($activeSlides ?? [] as $key => $slide):
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
    foreach ($activeSlides ?? [] as $key => $slide):
        $isFirst = $key === 0;
?>
            <div class="carousel-item<?= $isFirst ? ' active' : '' ?>">
                <img src="<?= $slide['slide-image'] ?>" class="d-block w-100" alt="<?= $slide['slide-alt'] ?>"<?= $isFirst ? ' fetchpriority="high"' : ' loading="lazy"' ?> decoding="async">
                <div class="bg-dark bg-opacity-50 position-absolute start-0 bottom-0 w-100 text-white d-none d-md-block py-4">
                    <h3><?= categoryLabel($slide['category'], $lang) . ' · ' . $slide['title'] ?></h3>
                    <p class="text-center"><?= $slide['description'] ?></p>
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
    </div>
    <!-- End Carousel -->
