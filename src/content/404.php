<?php
declare(strict_types=1);

// Contenido específico de la página
ob_start();
?>
        <!-- Page 404 -->
        <section id="error404" class="error-404 d-flex align-items-center justify-content-center" style="min-height:50vh;">
            <div class="text-center py-4">
                <!-- Título -->
                <header>
                    <h1><?= $pages[$pageByUrl]['title'] ?></h1>
                    <p class="lead text-center text-secondary"><?= $pages[$pageByUrl]['description'] ?></p>
                </header>
                <!-- End Título -->
                <!-- Contenido de la sección -->
                <img class="logo" src="<?= COMPANY_LOGO ?>" alt="Logo de <?= COMPANY_NAME ?>" decoding="async">
                <a href="<?= $pages['Home']['url'] ?>" class="btn btn-light btn-custom"><span class="pe-3">🏠</span>Volver al inicio</a>
                <!-- End Contenido de la sección -->
            </div>
        </section>
        <!-- End Page 404 -->
<?php $main = ob_get_clean(); ?>
