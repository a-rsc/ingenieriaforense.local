<?php
declare(strict_types=1);

// Contenido específico de la página
ob_start();
?>
        <!-- Legal Notice -->
        <section id="legal-notice" class="legal-doc">
            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <article>
                            <!-- Título -->
                            <header>
                                <h1>Aviso Legal</h1>
                            </header>
                            <!-- End Título -->
                            <p>El presente aviso legal regula el acceso, navegación y uso del sitio web titularidad de <strong><?= COMPANY_NAME ?></strong>, así como las responsabilidades derivadas de la utilización de sus contenidos.</p>
                            <p>Le rogamos lea detenidamente este documento antes de utilizar el sitio web. El acceso implica la aceptación sin reservas de lo aquí dispuesto.</p>
                            <p><strong>Fecha de última actualización:</strong> <time datetime="2025-08-25">25 de agosto de 2025</time></p>
                            <!-- Índice de contenido -->
                            <nav aria-label="Índice de contenido">
                                <ul class="list-unstyled ps-2">
                                    <li><a href="#titular" title="1. Identificación del titular">1. Identificación del titular</a></li>
                                    <li><a href="#objeto" title="2. Objeto y ámbito de aplicación">2. Objeto y ámbito de aplicación</a></li>
                                    <li><a href="#condiciones-uso" title="3. Condiciones de uso del sitio web">3. Condiciones de uso del sitio web</a></li>
                                    <li><a href="#propiedad-intelectual" title="4. Propiedad intelectual e industrial">4. Propiedad intelectual e industrial</a></li>
                                    <li><a href="#contenidos-enlaces" title="5. Contenidos y enlaces">5. Contenidos y enlaces</a></li>
                                    <li><a href="#exenciones" title="6. Exenciones de responsabilidad">6. Exenciones de responsabilidad</a></li>
                                    <li><a href="#datos-personales" title="7. Protección de datos personales">7. Protección de datos personales</a></li>
                                    <li><a href="#comunicaciones" title="8. Comunicaciones comerciales">8. Comunicaciones comerciales</a></li>
                                    <li><a href="#normativa" title="9. Normativa aplicable">9. Normativa aplicable</a></li>
                                    <li><a href="#jurisdiccion" title="10. Jurisdicción">10. Jurisdicción</a></li>
                                    <li><a href="#contacto" title="11. Contacto">11. Contacto</a></li>
                                </ul>
                            </nav>
                            <hr>
                            <!-- End Índice de contenido -->
                            <!-- Contenido de la sección -->
                            <section>
                                <h2 id="titular">1. Identificación del titular</h2>
                                <p><strong>Titular:</strong> <?= COMPANY_NAME ?></p>
                                <p><strong>NIF:</strong> <?= COMPANY_NIF ?></p>
                                <p><strong>Domicilio:</strong> <?= COMPANY_ADDRESS ?></p>
                                <p><strong>Correo electrónico:</strong> <a href="mailto:<?= COMPANY_EMAIL ?>" aria-label="Enviar correo a <?= COMPANY_NAME ?>"><?= COMPANY_EMAIL ?></a></p>
                                <p><strong>Teléfono:</strong> <a href="tel:<?= COMPANY_PHONE ?>" aria-label="Llamar a <?= COMPANY_NAME ?>"><?= COMPANY_PHONE_A11Y ?></a></p>
                            </section>
                            <section>
                                <h2 id="objeto">2. Objeto y ámbito de aplicación</h2>
                                <p>El sitio web tiene por finalidad informar sobre los servicios profesionales de <?= COMPANY_NAME ?> y facilitar su contratación. Este aviso legal se aplica a todos los usuarios que acceden y/o utilizan el sitio.</p>
                            </section>
                            <section>
                                <h2 id="condiciones-uso">3. Condiciones de uso del sitio web</h2>
                                <ul>
                                    <li>El usuario se compromete a hacer un uso diligente y lícito del sitio y sus contenidos, conforme a la normativa vigente y a este aviso legal.</li>
                                    <li>No podrá realizarse ninguna acción que cause daños o alteraciones en los contenidos ni obstaculice el correcto funcionamiento del sitio.</li>
                                    <li><?= COMPANY_NAME ?> se reserva el derecho a denegar o retirar el acceso a quienes incumplan estas condiciones.</li>
                                </ul>
                            </section>
                            <section>
                                <h2 id="propiedad-intelectual">4. Propiedad intelectual e industrial</h2>
                                <p>Todos los elementos del sitio (textos, imágenes, logotipos, diseños, código, software, marcas y demás signos distintivos) están protegidos por los derechos de propiedad intelectual e industrial de <?= COMPANY_NAME ?> o de terceros licenciantes. Queda prohibida su reproducción, distribución, comunicación pública, transformación o cualquier uso no expresamente autorizado.</p>
                            </section>
                            <section>
                                <h2 id="contenidos-enlaces">5. Contenidos y enlaces</h2>
                                <p>Los contenidos ofrecidos tienen carácter informativo. Aunque se procura su actualización y exactitud, <?= COMPANY_NAME ?> no garantiza la ausencia de errores u omisiones y no asume responsabilidad por el uso que el usuario haga de ellos.</p>
                                <p>El sitio puede incluir enlaces a páginas de terceros. <?= COMPANY_NAME ?> no se hace responsable de los contenidos, políticas o prácticas de dichos sitios externos, a los que el usuario accede bajo su responsabilidad.</p>
                            </section>
                            <section>
                                <h2 id="exenciones">6. Exenciones de responsabilidad</h2>
                                <ul>
                                    <li><strong>Disponibilidad:</strong> No se garantiza la continuidad del funcionamiento del sitio ni la inexistencia de interrupciones o errores de acceso, si bien se adoptarán medidas para reducir su impacto.</li>
                                    <li><strong>Seguridad:</strong> No se garantiza la invulnerabilidad absoluta del sitio frente a ataques o vulnerabilidades; el usuario es responsable de disponer de herramientas adecuadas para la detección y desinfección de software malicioso.</li>
                                    <li><strong>Uso indebido:</strong> <?= COMPANY_NAME ?> no responderá de los daños que deriven de un uso inadecuado del sitio por parte de los usuarios.</li>
                                </ul>
                            </section>
                            <section>
                                <h2 id="datos-personales">7. Protección de datos personales</h2>
                                <p>El tratamiento de los datos personales se rige por la <a href="/politica-de-privacidad" rel="nofollow">Política de Privacidad</a> de <?= COMPANY_NAME ?>, donde se informa de las finalidades, bases legales, cesiones y derechos de los interesados.</p>
                            </section>
                            <section>
                                <h2 id="comunicaciones">8. Comunicaciones comerciales</h2>
                                <p>En caso de que el usuario otorgue su consentimiento, <?= COMPANY_NAME ?> podrá enviar comunicaciones comerciales relacionadas con sus servicios. Podrá revocar dicho consentimiento en cualquier momento siguiendo las instrucciones incluidas en cada comunicación o contactando a través de los datos del apartado 1.</p>
                            </section>
                            <section>
                                <h2 id="normativa">9. Normativa aplicable</h2>
                                <p>Este aviso legal se rige por la legislación española y, en su caso, por la normativa europea que resulte de aplicación.</p>
                            </section>
                            <section>
                                <h2 id="jurisdiccion">10. Jurisdicción</h2>
                                <p>Para cualquier controversia derivada del acceso o uso del sitio, las partes se someten a los Juzgados y Tribunales del domicilio social de <?= COMPANY_NAME ?>, salvo que la normativa de consumidores y usuarios establezca otra competencia imperativa.</p>
                            </section>
                            <section>
                                <h2 id="contacto">11. Contacto</h2>
                                <p>Para cualquier consulta relacionada con este aviso legal, puede dirigirse a <a href="mailto:<?= COMPANY_EMAIL ?>"><?= COMPANY_EMAIL ?></a> o al teléfono <a href="tel:<?= COMPANY_PHONE ?>"><?= COMPANY_PHONE_A11Y ?></a>.</p>
                            </section>
                            <!-- End Contenido de la sección -->
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Legal Notice -->
<?php $main = ob_get_clean(); ?>
