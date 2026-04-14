<?php
declare(strict_types=1);
?>
    <!-- Header -->
    <header>
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-light fixed-top">
            <div class="container">
                <!-- Logo -->
                <a href="<?= $pages['Home']['url'] ?>" title="<?= COMPANY_NAME ?>"><img class="logo" src="<?= COMPANY_ICON ?>" alt="Logo de <?= COMPANY_NAME ?>" width="80" height="80" decoding="async"></a>
                <!-- End Logo -->
                <!-- Phone -->
                <div class="bg-light rounded ms-lg-3">
                    <a href="tel:<?= COMPANY_PHONE ?>" class="nav-link btn btn-light btn-custom" title="Contáctanos"><span class="pe-3">☎️</span>Contáctanos</a>
                </div>
                <!-- End Phone -->
                <!-- Burger menu -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span></button>
                <!-- End Burger menu -->
                <!-- Navigation menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav w-100 justify-content-around text-white">
<?php
    foreach ($pages ?? [] as $page):
        if (($page['subcategory'] ?? null) != NavCategory::PRIMARY) continue;
?>
                        <li class="nav-item"><a href="<?= $page['url'] ?>" class="nav-link <?= activeClass($page['url']) ?>"<?= activeClass($page['url'], ' aria-current="page"') ?> title="<?= $page['name'] ?>"><?= $page['name'] ?></a></li>
<?php
    endforeach;
?>
                    </ul>
                </div>
                <!-- End Navigation menu -->
            </div>
        </nav>
        <!-- End Navbar -->
    </header>
    <!-- End Header -->
