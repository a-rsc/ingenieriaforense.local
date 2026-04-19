<?php

use App\Core\Config;
?>
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-light fixed-top">
        <div class="container">
            <!-- Logo -->
            <a href="<?= url('home') ?>" title="<?= $config['company']['name'] ?>"><img class="logo" src="<?= $config['company']['icon'] ?>" alt="Logo de <?= $config['company']['name'] ?>" width="80" height="80" decoding="async"></a>
            <!-- End Logo -->
            <!-- Phone -->
            <a href="tel:<?= $config['company']['phone'] ?>" class="btn btn-custom btn-light mx-lg-3" title="<?= __('contact_us') ?>"><span class="pe-2" aria-hidden="true">☎️</span><?= $config['company']['phone_a11y'] ?></a>
            <!-- End Phone -->
            <!-- Language -->
            <a href="<?= switch_lang_code_url() ?>" class="navbar__lang-switch btn btn-custom bg-light" aria-label="Cambiar idioma">
                <span class="pe-2" aria-hidden="true">🌐</span><?= Config::get('app.lang_code', 'es') === 'en' ? 'Español' : 'English' ?></a>
            <!-- End Language -->
            <!-- Navigation menu -->
            <!-- Burger menu -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span></button>
            <!-- End Burger menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 justify-content-around text-white">
<?php foreach ($navPrimaries ?? [] as $navPrimary): ?>
                    <li class="nav-item"><a href="<?= $navPrimary['url'] ?>" class="nav-link <?= activeClass($navPrimary['url']) ?>"<?= activeClass($navPrimary['url'], ' aria-current="page"') ?> title="<?= $navPrimary['name'] ?>"><?= $navPrimary['name'] ?></a></li>
<?php endforeach; ?>
                </ul>
            </div>
            <!-- End Navigation menu -->
        </div>
    </nav>
    <!-- End Navbar -->
