<?php

use App\Core\View;

View::partial('breadcrumb', [
    'currentPage' => $currentPage,
    'pages' => $pages,
]);
?>
    <!-- Contact -->
    <div id="contact" class="contact container py-4">
        <div class="row">
            <div class="col">
                <article>
                    <!-- Title -->
                    <header>
                        <h1 class="text-center"><?= $currentPage['content']['title'] ?></h1>
                        <p class="lead text-secondary"><?= $currentPage['content']['description'] ?></p>
                    </header>
                    <!-- End Title -->
                    <section>
                        <h2 class="text-start"><?= __('form.title') ?></h2>
                        <!-- Form -->
                        <form method="post" class="contact__form" action="post" novalidate>
                            <!-- CSRF -->
                            <input type="hidden" name="csrf_token" value="<?= $config['email']['csrf_token'] ?>">
                            <!-- End CSRF -->
                            <!-- Honeypot -->
                            <input type="text" name="hp" tabindex="-1" autocomplete="off" aria-hidden="true" style="position: absolute; left: -9999px;">
                            <!-- End Honeypot -->
                            <!-- Mensajes -->
                            <div class="row">
                                <div class="col">
                                    <div class="alert contact__msg" role="status" aria-live="polite" style="display: none"></div>
                                </div>
                            </div>
                            <!-- End Mensajes -->
                            <!-- Fields -->
                            <fieldset>
                                <legend class="visually-hidden"><?= __('form.legend') ?></legend>
                                <div class="col-md-12 form-group py-4">
                                    <label for="c-name" class="visually-hidden"><?= __('form.name_label') ?></label>
                                    <input id="c-name" class="form-control" name="name" type="text" placeholder="<?= __('form.name_input') ?>" autocomplete="name" required>
                                </div>
                                <div class="col-md-12 form-group py-4">
                                    <label for="c-email" class="visually-hidden"><?= __('form.email_label') ?></label>
                                    <input id="c-email" class="form-control" name="email" type="email" placeholder="<?= __('form.email_input') ?>" autocomplete="email" required>
                                </div>
                                <div class="col-md-12 form-group py-4">
                                    <label for="c-phone" class="visually-hidden"><?= __('form.phone_label') ?></label>
                                    <input id="c-phone" class="form-control" name="phone" type="text" inputmode="tel" placeholder="<?= __('form.phone_input') ?>" autocomplete="tel" required>
                                </div>
                                <div class="col-md-12 form-group py-4">
                                    <label for="c-subject" class="visually-hidden"><?= __('form.subject_label') ?></label>
                                    <input id="c-subject" class="form-control" name="subject" type="text" placeholder="<?= __('form.subject_input') ?>" autocomplete="off" required>
                                </div>
                                <div class="col-md-12 form-group py-4">
                                    <label for="c-message" class="visually-hidden"><?= __('form.message_label') ?></label>
                                    <textarea id="c-message" class="form-control" name="message" cols="30" rows="4" placeholder="<?= __('form.message_input') ?>" autocomplete="off" required></textarea>
                                </div>
                                <!-- Accept privacy policy -->
                                <div class="col-md-12 form-group py-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="contact-consent" name="consent" required>
                                        <label class="form-check-label" for="contact-consent"><?= __('form.check_label') ?></label>
                                    </div>
                                    <small id="contact-legal" class="form-text text-muted"><?= __('form.check_message') ?></small>
                                </div>
                                <!-- End Accept privacy policy -->
                                <div class="col-md-12 text-center">
                                    <button name="submitBtn" type="submit" class="btn btn-light"><span class="pe-2" aria-hidden="true">📩</span><?= __('send_us_the_message') ?></button>
                                </div>
                            </fieldset>
                            <!-- End Fields -->
                        </form>
                        <!-- End Form -->
                    </section>
                </article>
            </div>
        </div>
    </div>
    <!-- End Contact -->
<?php View::partial('testimonial', ['testimonial' => $testimonial]) ?>
    <!-- Data contact -->
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <section>
                    <header>
                        <h2 class="text-start"><?= __('data_contact') ?></h2>
                    </header>
                    <!-- Contact information -->
                    <p><strong><?= $config['company']['name'] ?></strong></p>
                    <address>
                        <ul class="list-unstyled">
                            <li><strong><span class="pe-2" aria-hidden="true">✉️</span><?= __('email') ?>: </strong> <a href="mailto:<?= $config['email']['to'] ?>" aria-label="<?= __('email_a') . $config['company']['name'] ?>"><?= $config['email']['to'] ?></a></li>
                            <li><strong><span class="pe-2" aria-hidden="true">☎️</span><?= __('phone') ?>: </strong> <a href="tel:<?= $config['company']['phone'] ?>" aria-label="<?= __('phone_a') . $config['company']['name'] ?>"><?= $config['company']['phone_a11y'] ?></a></li>
                            <li><strong><span class="pe-2" aria-hidden="true">📍</span><?= __('address') ?>: </strong><?= $config['company']['address'] ?></li>
                            <li><strong><span class="pe-2" aria-hidden="true">🪪</span><?= __('nif') ?>: </strong><?= $config['company']['nif'] ?></li>
                        </ul>
                    </address>
                    <!-- End Contact information -->
                    <!-- Map -->
                    <iframe title="Ubicación de <?= $config['company']['name'] ?> en el mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11933.167158433429!2d2.2775296703553183!3d41.60620153297257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4c7cf4242446d%3A0x1c7b5f146fbca228!2sGranollers%2C%20Barcelona!5e0!3m2!1ses!2ses!4v1756287453221!5m2!1ses!2ses" width="100%" height="500" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <!-- End Map -->
                </section>
            </div>
        </div>
    </div>
    <!-- End Data contact -->
