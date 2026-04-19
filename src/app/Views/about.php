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
                            <h1 class="text-center"><?= $currentPage['title'] ?></h1>
                            <p class="lead text-secondary"><?= $currentPage['description'] ?></p>
                        </header>
                        <!-- End Title -->
                        <!-- Table of contents -->
                            <nav class="d-block w-100 text-center" aria-label="<?= __('table_of_contents') ?>">
                                <ul class="list-unstyled list-inline ps-2">
                                <li class="list-inline-item"><a href="#history" title="<?= $currentPage['item_1'] ?>">#<?= $currentPage['item_1'] ?></a></li>
                                <li class="list-inline-item"><a href="#background" title="<?= $currentPage['item_2'] ?>">#<?= $currentPage['item_2'] ?></a></li>
                                <li class="list-inline-item"><a href="#methodology" title="<?= $currentPage['item_3'] ?>">#<?= $currentPage['item_3'] ?></a></li>
                                <li class="list-inline-item"><a href="#values" title="<?= $currentPage['item_4'] ?>">#<?= $currentPage['item_4'] ?></a></li>
                                <li class="list-inline-item"><a href="#contact-team" title="<?= $currentPage['item_5'] ?>">#<?= $currentPage['item_5'] ?></a></li>
                            </ul>
                        </nav>
                        <hr>
                        <!-- End Table of contents -->
                        <!-- Section content -->
                        <section>
                            <h2 id="history"><?= $currentPage['item_1'] ?></h2>
                            <?= $currentPage['item_1_text'] ?>
                        </section>
                        <section>
                            <h2 id="background"><?= $currentPage['item_2'] ?></h2>
                            <?= $currentPage['item_2_text'] ?>
                        </section>
                        <section>
                            <h2 id="methodology"><?= $currentPage['item_3'] ?></h2>
                            <?= $currentPage['item_3_text'] ?>
                        </section>
                        <section>
                            <h2 id="values"><?= $currentPage['item_4'] ?></h2>
                            <ul>
                                <li><strong><?= $currentPage['item_4_value_1'] ?></strong> <?= $currentPage['item_4_value_1_text'] ?></li>
                                <li><strong><?= $currentPage['item_4_value_2'] ?></strong> <?= $currentPage['item_4_value_2_text'] ?></li>
                                <li><strong><?= $currentPage['item_4_value_3'] ?></strong> <?= $currentPage['item_4_value_3_text'] ?></li>
                                <li><strong><?= $currentPage['item_4_value_4'] ?></strong> <?= $currentPage['item_4_value_4_text'] ?></li>
                            </ul>
                        </section>
                        <section>
                            <h2 id="contact-team"><?= $currentPage['item_5'] ?></h2>
                            <p><em><a href="<?= url('contact') ?>" title="<?= __('contact_us') ?>"><?= $currentPage['item_5_text'] ?></a></em></p>
                        </section>
                        <!-- End Section content -->
                    </article>
                </div>
            </div>
        </div>
        <!-- End About -->
