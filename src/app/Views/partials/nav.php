    <!-- Header -->
    <header>
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-light fixed-top">
            <div class="container">
                <!-- Logo -->
                <a href="<?= url('home') ?>" title="<?= $config['company']['name'] ?>"><img class="logo" src="<?= $config['company']['icon'] ?>" alt="Logo de <?= $config['company']['name'] ?>" width="80" height="80" decoding="async"></a>
                <!-- End Logo -->
                <!-- Phone -->
                <div class="bg-light rounded ms-lg-3">
                    <a href="tel:<?= $config['company']['phone'] ?>" class="nav-link btn btn-light btn-custom" title="<?= __('contact-us') ?>"><span class="pe-3">☎️</span><?= __('contact-us') ?></a>
                </div>
                <!-- End Phone -->
                <!-- Burger menu -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span></button>
                <!-- End Burger menu -->
                <!-- Navigation menu -->
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
    </header>
    <!-- End Header -->
