<?php

use App\Core\View;

View::partial('breadcrumb', [
    'currentPage' => $currentPage,
    'parent' => $parent,
    'children' => $children,
]);
?>
    <!-- About -->
    <div id="about" class="about container py-4">
        <div class="row">
            <div class="col">
                <article>
                    <!-- Title -->
                    <header>
                        <h1 class="text-center"><?= $currentPage['content']['title'] ?></h1>
                        <p class="lead text-secondary"><?= $currentPage['content']['description'] ?></p>
                    </header>
                    <!-- End Title -->
                    <!-- Table of contents -->
                        <nav class="d-block w-100 text-center" aria-label="<?= __('table_of_contents') ?>">
                            <ul class="list-unstyled list-inline ps-2">
                            <li class="list-inline-item"><a href="#history" title="<?= $currentPage['content']['item_2_title'] ?>">#<?= $currentPage['content']['item_2_title'] ?></a></li>
                            <li class="list-inline-item"><a href="#background" title="<?= $currentPage['content']['item_3_title'] ?>">#<?= $currentPage['content']['item_3_title'] ?></a></li>
                            <li class="list-inline-item"><a href="#methodology" title="<?= $currentPage['content']['item_4_title'] ?>">#<?= $currentPage['content']['item_4_title'] ?></a></li>
                            <li class="list-inline-item"><a href="#values" title="<?= $currentPage['content']['item_5_title'] ?>">#<?= $currentPage['content']['item_5_title'] ?></a></li>
                            <li class="list-inline-item"><a href="#contact-team" title="<?= $currentPage['content']['item_6_title'] ?>">#<?= $currentPage['content']['item_6_title'] ?></a></li>
                        </ul>
                    </nav>
                    <hr>
                    <!-- End Table of contents -->
                    <!-- Section content -->
                    <section>
                        <h2 id="history"><?= $currentPage['content']['item_2_title'] ?></h2>
                        <?= $currentPage['content']['item_2'] ?>
                    </section>
                    <section>
                        <h2 id="background"><?= $currentPage['content']['item_3_title'] ?></h2>
                        <?= $currentPage['content']['item_3'] ?>
                    </section>
                    <section>
                        <h2 id="methodology"><?= $currentPage['content']['item_4_title'] ?></h2>
                        <?= $currentPage['content']['item_4'] ?>
                    </section>
                    <section>
                        <h2 id="values"><?= $currentPage['content']['item_5_title'] ?></h2>
                        <ul>
                            <li><strong><?= $currentPage['content']['item_5_1_title'] ?></strong> <?= $currentPage['content']['item_5_1'] ?></li>
                            <li><strong><?= $currentPage['content']['item_5_2_title'] ?></strong> <?= $currentPage['content']['item_5_2'] ?></li>
                            <li><strong><?= $currentPage['content']['item_5_3_title'] ?></strong> <?= $currentPage['content']['item_5_3'] ?></li>
                            <li><strong><?= $currentPage['content']['item_5_4_title'] ?></strong> <?= $currentPage['content']['item_5_4'] ?></li>
                        </ul>
                    </section>
                    <section>
                        <h2 id="contact-team"><?= $currentPage['content']['item_6_title'] ?></h2>
                        <p><em><a href="<?= url('contact') ?>" title="<?= __('contact_us') ?>"><?= $currentPage['content']['item_6'] ?></a></em></p>
                    </section>
                    <!-- End Section content -->
                </article>
            </div>
        </div>
    </div>
    <!-- End About -->
