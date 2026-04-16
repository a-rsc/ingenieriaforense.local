        <!-- Partners -->
        <aside class="partners bg-dark border-top border-light">
            <div class="container py-4">
                <h2 class="text-white visually-hidden"><?= __('partners_title') ?></h2>
                <div class="row g-4">
<?php foreach ($partners ?? [] as $key => $partner): ?>
                    <div class="col">
                        <div class="card bg-dark shadow-sm">
                            <div class="d-flex justify-content-center">
                                <img src="<?= $partner['images'][0]['src'] ?>" class="card-img-top rounded" alt="<?= $partner['images'][0]['alt'] ?>" width="80" height="80" loading="lazy" decoding="async">
                            </div>
                            <div class="card-body">
                                <p class="card-title text-center text-white"><?= $partner['name'] ?></p>
                            </div>
                            <a href="<?= $partner['url'] ?>" target="_blank" class="stretched-link" rel="noopener noreferrer" title="<?= $partner['name'] ?>"></a>
                        </div>
                    </div>
<?php endforeach; ?>
                </div>
            </div>
        </aside>
        <!-- End Partners -->
