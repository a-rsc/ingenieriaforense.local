<?php
declare(strict_types=1);
?>
<!-- Breadcrumb -->
<nav id="breadcrumb" class="bg-light" aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';">
    <div class="container pb-md-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= $pages['Home']['url'] ?>">
                    <?= $pages['Home']['name'] ?>
                </a>
            </li>
            <?php if ($service === null): ?>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $pages[$pageByUrl]['name'] ?>
                </li>
            <?php else: ?>
                <li class="breadcrumb-item">
                    <a href="<?= $pages[$pageByUrl]['url'] ?>">
                        <?= $pages[$pageByUrl]['name'] ?>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $service['name'] ?>
                </li>
            <?php endif; ?>
        </ol>
    </div>
</nav>
<!-- End Breadcrumb -->