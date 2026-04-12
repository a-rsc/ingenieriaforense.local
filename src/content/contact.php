<?php
declare(strict_types=1);

// Contenido específico de la página
ob_start();
?>
        <!-- Contact -->
        <section id="contact" class="contact">
            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <article>
                            <!-- Título -->
                            <header>
                                <h1>Contáctanos para más información</h1>
                            </header>
                            <!-- End Título -->
                            <section>
                                <h2 class="text-start">Cuéntanos tu caso y te responderemos pronto</h2>
                                <!-- Formulario -->
                                <form method="post" class="contact__form" action="post" novalidate>
                                    <!-- CSRF (si tu backend lo usa) -->
                                    <input type="hidden" name="csrf_token" value="<?= CSRF_TOKEN ?? '' ?>">
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
                                    <!-- Campos -->
                                    <fieldset>
                                        <legend class="visually-hidden">Formulario de contacto</legend>
                                        <div class="col-md-12 form-group py-4">
                                            <label for="c-name" class="visually-hidden">Nombre</label>
                                            <input id="c-name" class="form-control" name="name" type="text" placeholder="Tu Nombre *" autocomplete="name" required>
                                        </div>
                                        <div class="col-md-12 form-group py-4">
                                            <label for="c-email" class="visually-hidden">Email</label>
                                            <input id="c-email" class="form-control" name="email" type="email" placeholder="Tu Email *" autocomplete="email" required>
                                        </div>
                                        <div class="col-md-12 form-group py-4">
                                            <label for="c-phone" class="visually-hidden">Teléfono</label>
                                            <input id="c-phone" class="form-control" name="phone" type="text" inputmode="tel" placeholder="Tu Teléfono *" autocomplete="tel" required>
                                        </div>
                                        <div class="col-md-12 form-group py-4">
                                            <label for="c-subject" class="visually-hidden">Asunto</label>
                                            <input id="c-subject" class="form-control" name="subject" type="text" placeholder="Tu Asunto *" autocomplete="off" required>
                                        </div>
                                        <div class="col-md-12 form-group py-4">
                                            <label for="c-message" class="visually-hidden">Mensaje</label>
                                            <textarea id="c-message" class="form-control" name="message" cols="30" rows="4" placeholder="Tu Mensaje *" autocomplete="off" required></textarea>
                                        </div>
                                        <!-- Consentimiento -->
                                        <div class="col-md-12 form-group py-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="contact-consent" name="consent" required>
                                                <label class="form-check-label" for="contact-consent">He leído y acepto la <a href="/politica-de-privacidad.php">Política de Privacidad</a>.</label>
                                            </div>
                                            <small id="contact-legal" class="form-text text-muted">No compartiremos tu información con terceros sin tu consentimiento.</small>
                                        </div>
                                        <!-- End Consentimiento -->
                                        <div class="col-md-12 text-center">
                                            <button name="submitBtn" type="submit" class="btn btn-light btn-custom"><span class="pe-3">📩</span>Enviar Mensaje</button>
                                        </div>
                                    </fieldset>
                                    <!-- End Campos -->
                                </form>
                                <!-- End Formulario -->
                            </section>
                        </article>
                    </div>
                </div>
            </div>
<?php require BASE_PATH . '/src/components/testimonials.php'; ?>
            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <section>
                            <header>
                                <h2 class="text-start">Datos de contacto</h2>
                            </header>
                            <!-- Información de la firma -->
                            <p><strong><?= COMPANY_NAME ?></strong></p>
                            <address>
                                <ul class="list-unstyled">
                                    <li><strong><span class="pe-3">✉️</span>Email:</strong> <a href="mailto:<?= EMAIL_TO ?>" aria-label="Enviar correo a <?= COMPANY_NAME ?>"> <?= EMAIL_TO ?></a></li>
                                    <li><strong><span class="pe-3">☎️</span>Teléfono:</strong> <a href="tel:<?= COMPANY_PHONE ?>" aria-label="Llamar a <?= COMPANY_NAME ?>"> <?= COMPANY_PHONE_A11Y ?></a></li>
                                    <li><strong><span class="pe-3">📍</span>Dirección:</strong> <?= COMPANY_ADDRESS ?></li>
                                    <li><strong><span class="pe-3">🪪</span>NIF:</strong> <?= COMPANY_NIF ?? '-' ?></li>
                                </ul>
                            </address>
                            <!-- End Información de la firma -->
                            <!-- Mapa -->
                            <iframe title="Ubicación de <?= COMPANY_NAME ?> en el mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11933.167158433429!2d2.2775296703553183!3d41.60620153297257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4c7cf4242446d%3A0x1c7b5f146fbca228!2sGranollers%2C%20Barcelona!5e0!3m2!1ses!2ses!4v1756287453221!5m2!1ses!2ses" width="100%" height="500" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                            <!-- End Mapa -->
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->
<?php require BASE_PATH . '/src/components/partners.php'; ?>
<?php $main = ob_get_clean(); ?>
