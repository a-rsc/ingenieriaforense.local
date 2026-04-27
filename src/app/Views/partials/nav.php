    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-light shadow-sm fixed-top" aria-label="<?= __('nav.nav_top_home') ?>">
        <div class="container">
                <!-- Logo -->
                 <div class="d-flex align-items-center flex-nowrap gap-2">
                     <a href="<?= url('home') ?>" title="<?= $config['company']['name'] ?>"><img class="logo" src="<?= $config['company']['icon'] ?>" alt="Logo de <?= $config['company']['name'] ?>" width="80" height="80" decoding="async"></a>
                     <!-- End Logo -->
                     <!-- Phone -->
                     <a href="tel:<?= $config['company']['phone'] ?>" class="btn btn-light" title="<?= __('contact_us') ?>" aria-label="Llamar al <?= $config['company']['phone_a11y'] ?>"><span class="pe-2" aria-hidden="true">☎️</span><span><?= $config['company']['phone_a11y'] ?></span></a>
                     <!-- End Phone -->
                     <!-- Language -->
                     <a href="<?= switch_lang_code_url() ?>" class="btn btn-light" aria-label="<?= app_lang_code() === 'en' ? 'Cambiar idioma a español' : 'Switch language to English' ?>"><span class="pe-2" aria-hidden="true">🌐</span><span><?= app_lang_code() === 'en' ? 'ES' : 'EN' ?></span></a>
                     <!-- End Language -->
                 </div>
                <!-- Navigation menu -->
                <!-- Burger menu -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span></button>
                <!-- End Burger menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav w-100 justify-content-around text-white">
    <?php foreach ($navHeaderPrimaries ?? [] as $navHeaderPrimary): ?>
                        <li class="nav-item"><a href="<?= $navHeaderPrimary['url']?: '/' ?>" class="nav-link <?= active_class($navHeaderPrimary['url']?: '/') ?>"<?= active_class($navHeaderPrimary['url']?: '/', ' aria-current="page"') ?> title="<?= $navHeaderPrimary['name'] ?>"><?= $navHeaderPrimary['name'] ?></a></li>
    <?php endforeach; ?>
                    </ul>
                </div>
                <!-- End Navigation menu -->

        </div>
    </nav>
    <!-- End Navbar -->
