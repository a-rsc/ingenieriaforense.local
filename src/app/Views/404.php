        <!-- Page 404 -->
        <section id="error404" class="error-404">
            <div class="container text-center py-4">
                <!-- Title -->
                <header>
                    <h1 class="text-center"><?= $pages['404']['title'] ?></h1>
                    <p class="lead text-start text-secondary"><?= $pages['404']['description'] ?></p>
                </header>
                <!-- End Title -->
                <!-- Section content -->
                <img class="logo d-block mx-auto my-4" src="<?= $config['company']['logo'] ?>" alt="<?= __('alt') . $config['company']['name'] ?>" decoding="async" style="max-width: 300px;">
                <a href="<?= url('home') ?>" class="btn btn-light btn-custom"><span class="pe-3">🏠</span><?= __('back_to_home') ?></a>
                <!-- End Section content -->
            </div>
        </section>
        <!-- End Page 404 -->
