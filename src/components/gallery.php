<?php
declare(strict_types=1);
?>
    <!-- Gallery -->
    <div id="gallery" class="gallery carousel slide shadow-lg" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
<?php
    foreach ($service['images'] ?? [] as $key => $image):
        $isFirst = $key === 0;
?>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="<?= $key ?>"<?= $isFirst ? ' class="active" aria-current="true"' : '' ?> aria-label="Slide <?= $key + 1 ?>"></button>
<?php endforeach; ?>
        </div>
        <!-- Slides -->
        <div class="carousel-inner">
<?php
    foreach ($service['images'] ?? [] as $key => $image):
        $isFirst = $key === 0;
?>
            <div class="carousel-item<?= $isFirst ? ' active' : '' ?>">
                <img src="<?= $image ?>" class="d-block w-100" <?= $isFirst ? ' fetchpriority="high"' : ' loading="lazy"' ?> decoding="async">
            </div>
<?php endforeach; ?>
        </div>
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#gallery" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></button>
        <button class="carousel-control-next" type="button" data-bs-target="#gallery" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></button>
    </div>
    <!-- End Gallery -->
