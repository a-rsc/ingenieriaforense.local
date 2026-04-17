<?php
declare(strict_types=1);

// Contenido específico de la página
ob_start();
?>
        <!-- Terms and Conditions -->
        <div id="terms-conditions" class="legal-doc container py-4">
            <div class="row">
                <div class="col">
                    <article>
                        <!-- Title -->
                        <header>
                            <h1>Términos y Condiciones</h1>
                        </header>
                        <!-- End Title -->
                        <p>El presente documento establece los términos y condiciones que regulan el acceso y uso del sitio web de <strong><?= COMPANY_NAME ?></strong>, así como la contratación de nuestros servicios ofrecidos a través del mismo.</p>
                        <p>Al utilizar este sitio web o contratar nuestros servicios, el usuario acepta íntegramente los presentes términos. Le recomendamos leerlos detenidamente.</p>
                        <p><strong>Fecha de última actualización:</strong> <time datetime="2025-08-25">25 de agosto de 2025</time></p>
                        <!-- Table of contents -->
                        <nav aria-label="Índice de contenido">
                            <ul class="list-unstyled ps-2">
                                <li><a href="#identificacion" title="1. Identificación del titular">1. Identificación del titular</a></li>
                                <li><a href="#objeto" title="2. Objeto">2. Objeto</a></li>
                                <li><a href="#condiciones" title="3. Condiciones de uso">3. Condiciones de uso</a></li>
                                <li><a href="#contratacion" title="4. Condiciones de contratación">4. Condiciones de contratación</a></li>
                                <li><a href="#responsabilidad" title="5. Responsabilidad">5. Responsabilidad</a></li>
                                <li><a href="#propiedad" title="6. Propiedad intelectual e industrial">6. Propiedad intelectual e industrial</a></li>
                                <li><a href="#ley" title="7. Legislación y jurisdicción aplicable">7. Legislación y jurisdicción aplicable</a></li>
                                <li><a href="#cambios" title="8. Modificación de los términos">8. Modificación de los términos</a></li>
                            </ul>
                        </nav>
                        <hr>
                        <!-- End Table of contents -->
                        <!-- Section content -->
                        <section>
                            <h2 id="identificacion">1. Identificación del titular</h2>
                            <p><strong>Titular:</strong> <?= COMPANY_NAME ?></p>
                            <p><strong>NIF:</strong> <?= COMPANY_NIF ?></p>
                            <p><strong>Dirección:</strong> <?= COMPANY_ADDRESS ?></p>
                            <p><strong>Correo electrónico:</strong> <a href="mailto:<?= COMPANY_EMAIL ?>"><?= COMPANY_EMAIL ?></a></p>
                            <p><strong>Teléfono:</strong> <a href="tel:<?= COMPANY_PHONE ?>"><?= COMPANY_PHONE_A11Y ?></a></p>
                        </section>
                        <section>
                            <h2 id="objeto">2. Objeto</h2>
                            <p>Los presentes términos y condiciones regulan el acceso, navegación y uso del sitio web, así como las responsabilidades derivadas de la contratación de los servicios profesionales ofrecidos por <?= COMPANY_NAME ?>.</p>
                        </section>
                        <section>
                            <h2 id="condiciones">3. Condiciones de uso</h2>
                            <ul>
                                <li>El usuario se compromete a utilizar el sitio web y los servicios ofrecidos de conformidad con la ley, la buena fe y los presentes términos.</li>
                                <li>No está permitido el uso de la web con fines ilícitos o que puedan dañar, inutilizar o sobrecargar los sistemas de <?= COMPANY_NAME ?>.</li>
                                <li><?= COMPANY_NAME ?> se reserva el derecho de retirar el acceso al sitio web a aquellos usuarios que incumplan estas condiciones.</li>
                            </ul>
                        </section>
                        <section>
                            <h2 id="contratacion">4. Condiciones de contratación</h2>
                            <p>La contratación de los servicios se formalizará mediante la aceptación expresa del presupuesto presentado por <?= COMPANY_NAME ?>. Dicho presupuesto incluirá el alcance del trabajo, honorarios, plazos y condiciones de pago.</p>
                            <p>Una vez aceptado, se entenderá perfeccionado el contrato entre las partes.</p>
                        </section>
                        <section>
                            <h2 id="responsabilidad">5. Responsabilidad</h2>
                            <p><?= COMPANY_NAME ?> no será responsable de daños derivados del mal uso del sitio web o de la información publicada en él. Asimismo, no garantiza la disponibilidad continua del servicio online, aunque adoptará las medidas necesarias para minimizar posibles interrupciones.</p>
                        </section>
                        <section>
                            <h2 id="propiedad">6. Propiedad intelectual e industrial</h2>
                            <p>Todos los contenidos de este sitio web (textos, imágenes, logotipos, marcas, código fuente, etc.) son propiedad de <?= COMPANY_NAME ?> o de terceros con licencia de uso. Queda prohibida su reproducción, distribución o transformación sin autorización expresa.</p>
                        </section>
                        <section>
                            <h2 id="ley">7. Legislación y jurisdicción aplicable</h2>
                            <p>Estos términos y condiciones se rigen por la legislación española. En caso de conflicto, las partes se someten expresamente a los Juzgados y Tribunales del domicilio social de <?= COMPANY_NAME ?>, salvo que la normativa aplicable disponga otra cosa.</p>
                        </section>
                        <section>
                            <h2 id="cambios">8. Modificación de los términos</h2>
                            <p><?= COMPANY_NAME ?> podrá modificar en cualquier momento los presentes términos y condiciones para adaptarlos a cambios legislativos o a la evolución de los servicios ofrecidos. Se recomienda revisar periódicamente esta página.</p>
                        </section>
                        <!-- End Section content -->
                    </article>
                </div>
            </div>
        </div>
        <!-- End Terms and Conditions -->
<?php $main = ob_get_clean(); ?>
