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
                        <p>El presente documento establece los términos y condiciones que regulan el acceso y uso del sitio web de <strong><?= $config['company']['name'] ?></strong>, así como la contratación de nuestros servicios ofrecidos a través del mismo.</p>
                        <p>Al utilizar este sitio web o contratar nuestros servicios, el usuario acepta íntegramente los presentes términos. Le recomendamos leerlos detenidamente.</p>
                        <p><strong>Fecha de última actualización:</strong> <time datetime="2025-08-25">25 de agosto de 2025</time></p>
                        <!-- Table of contents -->
                        <nav aria-label="Índice de contenido">
                            <ul class="list-unstyled ps-2">
                                <li><a href="#data-controller" title="1. Identificación del titular">1. Identificación del titular</a></li>
                                <li><a href="#purpose" title="2. Objeto">2. Objeto</a></li>
                                <li><a href="#terms-of-use" title="3. Condiciones de uso">3. Condiciones de uso</a></li>
                                <li><a href="#service-conditions" title="4. Condiciones de contratación">4. Condiciones de contratación</a></li>
                                <li><a href="#liability" title="5. Responsabilidad">5. Responsabilidad</a></li>
                                <li><a href="#intellectual-property" title="6. Propiedad intelectual e industrial">6. Propiedad intelectual e industrial</a></li>
                                <li><a href="#applicable-law" title="7. Legislación y jurisdicción aplicable">7. Legislación y jurisdicción aplicable</a></li>
                                <li><a href="#policy-changes" title="8. Modificación de los términos">8. Modificación de los términos</a></li>
                            </ul>
                        </nav>
                        <hr>
                        <!-- End Table of contents -->
                        <!-- Section content -->
                        <section>
                            <h2 id="data-controller">1. Identificación del titular</h2>
                            <p><strong>Titular:</strong> <?= $config['company']['name'] ?></p>
                            <p><strong>NIF:</strong> <?= $config['company']['nif'] ?></p>
                            <p><strong>Dirección:</strong> <?= $config['company']['address'] ?></p>
                            <p><strong>Correo electrónico:</strong> <a href="mailto:<?= $config['company']['email'] ?>"><?= $config['company']['email'] ?></a></p>
                            <p><strong>Teléfono:</strong> <a href="tel:<?= $config['company']['phone'] ?>"><?= $config['company']['phone_a11y'] ?></a></p>
                        </section>
                        <section>
                            <h2 id="purpose">2. Objeto</h2>
                            <p>Los presentes términos y condiciones regulan el acceso, navegación y uso del sitio web, así como las responsabilidades derivadas de la contratación de los servicios profesionales ofrecidos por <?= $config['company']['name'] ?>.</p>
                        </section>
                        <section>
                            <h2 id="terms-of-use">3. Condiciones de uso</h2>
                            <ul>
                                <li>El usuario se compromete a utilizar el sitio web y los servicios ofrecidos de conformidad con la ley, la buena fe y los presentes términos.</li>
                                <li>No está permitido el uso de la web con fines ilícitos o que puedan dañar, inutilizar o sobrecargar los sistemas de <?= $config['company']['name'] ?>.</li>
                                <li><?= $config['company']['name'] ?> se reserva el derecho de retirar el acceso al sitio web a aquellos usuarios que incumplan estas condiciones.</li>
                            </ul>
                        </section>
                        <section>
                            <h2 id="service-conditions">4. Condiciones de contratación</h2>
                            <p>La contratación de los servicios se formalizará mediante la aceptación expresa del presupuesto presentado por <?= $config['company']['name'] ?>. Dicho presupuesto incluirá el alcance del trabajo, honorarios, plazos y condiciones de pago.</p>
                            <p>Una vez aceptado, se entenderá perfeccionado el contrato entre las partes.</p>
                        </section>
                        <section>
                            <h2 id="liability">5. Responsabilidad</h2>
                            <p><?= $config['company']['name'] ?> no será responsable de daños derivados del mal uso del sitio web o de la información publicada en él. Asimismo, no garantiza la disponibilidad continua del servicio online, aunque adoptará las medidas necesarias para minimizar posibles interrupciones.</p>
                        </section>
                        <section>
                            <h2 id="intellectual-property">6. Propiedad intelectual e industrial</h2>
                            <p>Todos los contenidos de este sitio web (textos, imágenes, logotipos, marcas, código fuente, etc.) son propiedad de <?= $config['company']['name'] ?> o de terceros con licencia de uso. Queda prohibida su reproducción, distribución o transformación sin autorización expresa.</p>
                        </section>
                        <section>
                            <h2 id="applicable-law">7. Legislación y jurisdicción aplicable</h2>
                            <p>Estos términos y condiciones se rigen por la legislación española. En caso de conflicto, las partes se someten expresamente a los Juzgados y Tribunales del domicilio social de <?= $config['company']['name'] ?>, salvo que la normativa aplicable disponga otra cosa.</p>
                        </section>
                        <section>
                            <h2 id="policy-changes">8. Modificación de los términos</h2>
                            <p><?= $config['company']['name'] ?> podrá modificar en cualquier momento los presentes términos y condiciones para adaptarlos a cambios legislativos o a la evolución de los servicios ofrecidos. Se recomienda revisar periódicamente esta página.</p>
                        </section>
                        <!-- End Section content -->
                    </article>
                </div>
            </div>
        </div>
        <!-- End Terms and Conditions -->
