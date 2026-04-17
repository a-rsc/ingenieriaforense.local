<?php
declare(strict_types=1);

// Contenido específico de la página
ob_start();
?>
        <!-- About -->
        <div id="about" class="about container py-4">
            <div class="row">
                <div class="col">
                    <article>
                        <!-- Title -->
                        <header>
                            <h1 class="text-center"><?= $pages[$pageByUrl]['title'] ?></h1>
                            <p class="lead text-secondary"><?= $pages[$pageByUrl]['description'] ?></p>
                        </header>
                        <!-- End Title -->
                        <!-- Table of contents -->
                            <nav class="d-block w-100 text-center" aria-label="Índice de contenidos">
                                <ul class="list-unstyled list-inline ps-2">
                                <li class="list-inline-item"><a href="#historia" title="Historia">#Historia</a></li>
                                <li class="list-inline-item"><a href="#trayectoria" title="Trayectoria">#Trayectoria</a></li>
                                <li class="list-inline-item"><a href="#metodologia" title="Metodología">#Metodología</a></li>
                                <li class="list-inline-item"><a href="#valores" title="Valores">#Valores</a></li>
                                <li class="list-inline-item"><a href="#contacto-equipo" title="Conoce a nuestro equipo">#Conoce a nuestro equipo</a></li>
                            </ul>
                        </nav>
                        <hr>
                        <!-- End Table of contents -->
                        <!-- Section content -->
                        <section>
                            <h2 id="historia">Historia</h2>
                            <p>Nacimos con el propósito de aportar soluciones técnicas de alto nivel en el ámbito de los proyectos técnicos, licencias de actividad y peritajes. Desde el inicio, reunimos a un equipo de ingenieros especializados en distintas disciplinas, comprometidos con el análisis riguroso, la objetividad y la independencia profesional.</p>
                        </section>
                        <section>
                            <h2 id="trayectoria">Trayectoria</h2>
                            <p>A lo largo de nuestra trayectoria hemos acompañado a clientes privados, empresas y administraciones públicas en la resolución de casos complejos, elaborando informes claros, verificables y fundamentados. Nuestro trabajo se apoya en metodologías contrastadas y en la actualización continua de conocimientos.</p>
                        </section>
                        <section>
                            <h2 id="metodologia">Metodología</h2>
                            <p>Aplicamos un enfoque multidisciplinar con inspecciones in situ, contraste documental y análisis normativo. Cada dictamen incluye diagnóstico de causas, evaluación de daños y conclusiones sólidas, preparadas para superar el escrutinio técnico y legal.</p>
                        </section>
                        <section>
                            <h2 id="valores">Valores</h2>
                            <ul>
                                <li><strong>Calidad:</strong> mejora continua y cumplimiento normativo.</li>
                                <li><strong>Rigor técnico:</strong> criterios objetivos y verificables.</li>
                                <li><strong>Independencia:</strong> imparcialidad en todo el proceso.</li>
                                <li><strong>Transparencia:</strong> comunicación clara con el cliente.</li>
                            </ul>
                        </section>
                        <section>
                            <h2 id="contacto-equipo">Conoce a nuestro equipo</h2>
                            <p><em><a href="<?= $pages['Contact']['url'] ?>" title="Contáctanos">¿Quieres saber más sobre nuestro equipo de ingenieros y áreas de especialización? Contáctanos para recibir información detallada.</a></em></p>
                        </section>
                        <!-- End Section content -->
                    </article>
                </div>
            </div>
        </div>
        <!-- End About -->
<?php
    require BASE_PATH . "/src/components/$lang/partners.php";
    $main = ob_get_clean();
?>
