    <!-- Carousel -->
    <section class="py-4">
        <div id="<?= $idCarousel ?>" class="<?= $classCarousel ?> carousel slide shadow-sm" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
<?php
    foreach ($images ?? [] as $key => $image):
        $isFirst = $key === 0;
?>
                <button type="button" data-bs-target="#<?= $idCarousel ?>" data-bs-slide-to="<?= $key ?>"<?= $isFirst ? ' class="active" aria-current="true"' : '' ?> aria-label="Slide <?= $key + 1 ?>"></button>
<?php
    endforeach;
?>
            </div>
            <!-- End Indicators -->
            <!-- Slides -->
            <div class="carousel-inner">
<?php
    foreach ($images ?? [] as $key => $image):
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
            <button class="carousel-control-prev" type="button" data-bs-target="#<?= $idCarousel ?>" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden"><?= __('carousel.prev') ?></span></button>
            <button class="carousel-control-next" type="button" data-bs-target="#<?= $idCarousel ?>" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden"><?= __('carousel.next') ?></span></button>
            <!-- End Controls -->
        </div>
    </section>
    <!-- End Carousel -->
