        <!-- About -->
        <div id="about" class="about container py-4">
            <div class="row">
                <div class="col">
                    <article>
                        <!-- Title -->
                        <header>
                            <h1 class="text-center"><?= $pages['about']['title'] ?></h1>
                            <p class="lead text-secondary"><?= $pages['about']['description'] ?></p>
                        </header>
                        <!-- End Title -->
                        <!-- Table of contents -->
                            <nav class="d-block w-100 text-center" aria-label="<?= __('table_of_contents') ?>">
                                <ul class="list-unstyled list-inline ps-2">
                                <li class="list-inline-item"><a href="#history" title="<?= $pages['about']['item_1'] ?>">#<?= $pages['about']['item_1'] ?></a></li>
                                <li class="list-inline-item"><a href="#background" title="<?= $pages['about']['item_2'] ?>">#<?= $pages['about']['item_2'] ?></a></li>
                                <li class="list-inline-item"><a href="#methodology" title="<?= $pages['about']['item_3'] ?>">#<?= $pages['about']['item_3'] ?></a></li>
                                <li class="list-inline-item"><a href="#values" title="<?= $pages['about']['item_4'] ?>">#<?= $pages['about']['item_4'] ?></a></li>
                                <li class="list-inline-item"><a href="#contact-team" title="<?= $pages['about']['item_5'] ?>">#<?= $pages['about']['item_5'] ?></a></li>
                            </ul>
                        </nav>
                        <hr>
                        <!-- End Table of contents -->
                        <!-- Section content -->
                        <section>
                            <h2 id="history"><?= $pages['about']['item_1'] ?></h2>
                            <?= $pages['about']['item_1_text'] ?>
                        </section>
                        <section>
                            <h2 id="background"><?= $pages['about']['item_2'] ?></h2>
                            <?= $pages['about']['item_2_text'] ?>
                        </section>
                        <section>
                            <h2 id="methodology"><?= $pages['about']['item_3'] ?></h2>
                            <?= $pages['about']['item_3_text'] ?>
                        </section>
                        <section>
                            <h2 id="values"><?= $pages['about']['item_4'] ?></h2>
                            <ul>
                                <li><strong><?= $pages['about']['item_4_value_1'] ?></strong> <?= $pages['about']['item_4_value_1_text'] ?></li>
                                <li><strong><?= $pages['about']['item_4_value_2'] ?></strong> <?= $pages['about']['item_4_value_2_text'] ?></li>
                                <li><strong><?= $pages['about']['item_4_value_3'] ?></strong> <?= $pages['about']['item_4_value_3_text'] ?></li>
                                <li><strong><?= $pages['about']['item_4_value_4'] ?></strong> <?= $pages['about']['item_4_value_4_text'] ?></li>
                            </ul>
                        </section>
                        <section>
                            <h2 id="contact-team"><?= $pages['about']['item_5'] ?></h2>
                            <p><em><a href="<?= url('contact') ?>" title="<?= __('contact_us') ?>"><?= $pages['about']['item_5_text'] ?></a></em></p>
                        </section>
                        <!-- End Section content -->
                    </article>
                </div>
            </div>
        </div>
        <!-- End About -->
