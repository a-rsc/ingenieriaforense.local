<?php
declare(strict_types=1);
?>
    <!-- Footer -->
    <footer class="bg-dark border-top border-light text-white" role="contentinfo">
        <div class="container py-4">
            <div class="row">
<?php foreach ($serviceCollections ?? [] as $key => $serviceCollection): ?>
                <div class="col-md-3">
                    <p class="text-center"><a href="<?= $pages[$key]['url'] ?>"<?= isActive($pages[$key]['url']) ? ' class="active" aria-current="page"' : '' ?>><?= $pages[$key]['name'] ?></a></p>
                    <div class="navbar navbar-dark">
                        <ul class="navbar-nav list-unstyled">
<?php foreach ($serviceCollection as $item): ?>
                           <li class="nav-item"><a href="<?= $item['url'] ?>" class="nav-link p-0 <?= activeClass($item['url']) ?>"<?= activeClass($item['url'], ' aria-current="page"') ?> aria-label="<?= $item['title'] ?>"><?= $item['name'] ?></a></li>
<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
<?php endforeach; ?>
                <div class="col-md-3">
                    <p class="text-center">Menú</p>
                    <!-- Navigation menu -->
                    <div class="navbar navbar-dark">
                         <ul class="navbar-nav list-unstyled" aria-label="Navegación inferior">
<?php
    foreach ($pages ?? [] as $page):
        if (($page['subcategory'] ?? null) != NavCategory::PRIMARY) continue;
?>
                            <li class="nav-item"><a href="<?= $page['url'] ?>" class="nav-link p-0 <?= activeClass($page['url']) ?>"<?= activeClass($page['url'], ' aria-current="page"') ?> aria-label="<?= $page['title'] ?>"><?= $page['name'] ?></a></li>
<?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- End Navigation menu -->
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <address>
                        <ul class="list-unstyled">
                            <li><span class="pe-3">✉️</span>Email: <a href="mailto:<?= EMAIL_TO ?>" aria-label="Enviar correo a <?= COMPANY_NAME ?>"> <?= EMAIL_TO ?></a></li>
                            <li><span class="pe-3">☎️</span>Teléfono: <a href="tel:<?= COMPANY_PHONE ?>" aria-label="Llamar a <?= COMPANY_NAME ?>"> <?= COMPANY_PHONE_A11Y ?></a></li>
                        </ul>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="next-legal-doc list-inline text-center">
<?php
    foreach ($pages ?? [] as $page):
        if (($page['subcategory'] ?? null) != NavCategory::SECONDARY) continue;
?>
                        <li class="list-inline-item"><a href="<?= $page['url'] ?>"<?= activeClass($page['url'], ' class="active" aria-current="page"') ?>><?= $page['name'] ?></a></li>
<?php endforeach; ?>
                        <li class="list-inline-item"><a href="<?= $pages['Home']['url'] ?>" aria-label="<?= COMPANY_BRAND ?>">&copy; <?= date('Y') . ' ' . COMPANY_NAME ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
