<?php

use App\Core\View;
?>
        <!-- Industrial fires -->
        <div id="industrial-accidents" class="industrial-accidents container py-4">
            <div class="row">
                <div class="col">
<?php foreach ($children as $key => $child): ?>
                    <a href="<?= $child['url'] ?>">Ver más</a>
<?php endforeach; ?>
                    <section class="intro-text">
                        <p>En el entorno industrial, un incendio no es solo un evento accidental; es un fenómeno complejo donde convergen procesos químicos, fallos eléctricos de alta potencia y deficiencias en sistemas de protección. En <strong>ingenieriaforense.es</strong>, aportamos claridad técnica donde la pericia convencional no llega, transformando datos de campo en evidencias científicas robustas para procesos judiciales y reclamaciones de grandes daños.</p>
                    </section>
                    <section class="methodology">
                        <h2>Una Metodología Científica al Servicio del Derecho</h2>
                        <p>No nos limitamos a identificar dónde empezó el fuego. Aplicamos el método científico para reconstruir la secuencia completa del siniestro, analizando por qué las barreras preventivas y reactivas no cumplieron su función.</p>
                    </section>
                    <section class="services-grid">
                        <article class="service-item">
                            <h3>1. Investigación Especializada de Origen y Causa</h3>
                            <p>Determinamos con precisión técnica el foco y la fuente de ignición en entornos de alta complejidad. Nuestro análisis profundiza en:</p>
                            <ul>
                                <li><strong>Fallo de Maquinaria y Equipos Críticos:</strong> Análisis de sobrecalentamientos, fricciones y averías mecánicas.</li>
                                <li><strong>Procesos Químicos:</strong> Identificación de igniciones espontáneas o fallos en el control de sustancias peligrosas y reacciones exotérmicas.</li>
                                <li><strong>Análisis Forense Eléctrico:</strong> Investigación de arcos eléctricos, cortocircuitos y fallos en instalaciones de alta potencia o cuadros de control.</li>
                            </ul>
                        </article>
                        <article class="service-item">
                            <h3>2. Análisis Dinámico del Comportamiento del Fuego</h3>
                            <p>Entender la propagación es clave para dirimir responsabilidades en naves industriales de grandes dimensiones:</p>
                            <ul>
                                <li><strong>Dinámica de Fluidos y Gases:</strong> Estudio del flujo de humos y gases calientes para entender la evolución térmica.</li>
                                <li><strong>Evaluación de la Sectorización:</strong> Análisis de la eficacia real de muros cortafuegos, sellados y elementos de compartimentación.</li>
                                <li><strong>Modelización Post-Siniestro:</strong> Reconstrucción de la curva de crecimiento del incendio para contrastarla con los daños estructurales.</li>
                            </ul>
                        </article>
                        <article class="service-item">
                            <h3>3. Auditoría Forense de Sistemas de Protección (PCI)</h3>
                            <p>Determinamos si las medidas de seguridad operaron según su diseño y la legislación vigente:</p>
                            <ul>
                                <li><strong>Sistemas Activos:</strong> Verificación de activación de rociadores, caudales de agua y registros en centrales de detección.</li>
                                <li><strong>Cumplimiento del RIPCI:</strong> Auditoría técnica para verificar si el diseño, instalación y mantenimiento cumplían con la normativa específica.</li>
                                <li><strong>Análisis de Fallo:</strong> Determinación de negligencias en el mantenimiento o infradimensionamiento del riesgo real.</li>
                            </ul>
                        </article>
                    </section>
                    <aside class="legal-notice">
                        <p><strong>Especialistas en Litigios de Grandes Riesgos:</strong> Proporcionamos a bufetes de abogados informes periciales visados, diseñados para soportar el rigor de un interrogatorio judicial. Nuestra prioridad es la objetividad técnica como base para una defensa legal sólida.</p>
                    </aside>
                    <section class="cta text-center">
                        <h2>¿Necesita un análisis de viabilidad para un caso de incendio industrial?</h2>
                        <a href="/contacto" class="btn btn-custom btn-light">Contactar con nuestros ingenieros forenses</a>
                    </section>
<?php
    shuffle($currentPage['images']);

    View::partial('carousel', [
        'idCarousel' => 'carousel',
        'classCarousel' => 'carousel',
        'images' => $currentPage['images'],
        ]);
?>
                </div>
            </div>
        </div>
        <!-- End Industrial fires -->

