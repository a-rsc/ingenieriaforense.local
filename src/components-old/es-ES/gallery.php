<?php
declare(strict_types=1);
?>
    <!-- Gallery -->
    <div id="gallery" class="gallery carousel slide shadow-sm" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
<?php
    foreach ($service['images'] ?? [] as $key => $image):
        $isFirst = $key === 0;
?>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="<?= $key ?>"<?= $isFirst ? ' class="active" aria-current="true"' : '' ?> aria-label="Slide <?= $key + 1 ?>"></button>
<?php
    endforeach;
?>
        </div>
        <!-- End Indicators -->
        <!-- Slides -->
        <div class="carousel-inner">
<?php
    foreach ($service['images'] ?? [] as $key => $image):
        $isFirst = $key === 0;
?>
            <div class="carousel-item<?= $isFirst ? ' active' : '' ?>">
                <img src="<?= $image['src'] ?>" class="d-block w-100" <?= $isFirst ? ' fetchpriority="high"' : ' loading="lazy"' ?> alt="<?= $image['alt'] ?>" decoding="async">
            </div>
<?php
    endforeach;
?>
        </div>
        <!-- End Slides -->
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#gallery" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Anterior</span></button>
        <button class="carousel-control-next" type="button" data-bs-target="#gallery" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Siguiente</span></button>
    </div>
    <!-- End Gallery -->
