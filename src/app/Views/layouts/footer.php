<!-- Footer -->
<footer class="bg-dark border-top border-light text-white" role="contentinfo">
    <div class="container py-4">
        <!-- Navigation menu -->
        <div class="row pb-4">
<?php foreach ($navFooterPrimaries ?? [] as $navFooterPrimary): ?>
            <div class="col-md-4">
                <p class="text-center"><a href="<?= $navFooterPrimary['url'] ?>"<?= active_class($navFooterPrimary['url']) ? ' class="active" aria-current="page"' : '' ?>><?= $navFooterPrimary['name'] ?></a></p>
                <nav class="navbar-dark" aria-label="<?= __('nav.nav_footer') . $navFooterPrimary['name'] ?>">
                    <ul class="navbar-nav list-unstyled">
<?php foreach ($navFooterPrimary['children'] ?? [] as $child): ?>
                        <li class="nav-item"><a href="<?= $pages[$child]['url'] ?>" class="nav-link p-0 <?= active_class($pages[$child]['url']) ?>"<?= active_class($pages[$child]['url'], ' aria-current="page"') ?> aria-label="<?= $pages[$child]['title'] ?>"><?= $pages[$child]['name'] ?></a></li>
<?php endforeach; ?>
                    </ul>
                </nav>
            </div>
<?php endforeach; ?>
            <div class="col-md-4">
                <p class="text-center">Menú</p>
                <nav class="navbar-dark" aria-label="<?= __('nav.nav_footer_home') ?>">
                    <ul class="navbar-nav list-unstyled">
<?php foreach ($navHeaderPrimaries ?? [] as $navHeaderPrimary): ?>
                        <li class="nav-item"><a href="<?= $navHeaderPrimary['url']?: '/' ?>" class="nav-link p-0 <?= active_class($navHeaderPrimary['url']) ?>"<?= active_class($navHeaderPrimary['url'], ' aria-current="page"') ?> aria-label="<?= $navHeaderPrimary['title'] ?>"><?= $navHeaderPrimary['name'] ?></a></li>
<?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Navigation menu -->
        <div class="row">
            <div class="col">
                <address>
                    <ul class="list-unstyled">
                        <li><span class="pe-2" aria-hidden="true">✉️</span><?= __('email') ?>: <a href="mailto:<?= $config['company']['email'] ?>" aria-label="<?= __('email_label') . $config['company']['name'] ?>"><?= $config['company']['email'] ?></a></li>
                        <li><span class="pe-2" aria-hidden="true">☎️</span><?= __('phone') ?>: <a href="tel:<?= $config['company']['phone'] ?>" aria-label="<?= __('phone_label') . $config['company']['name'] ?>"><?= $config['company']['phone_a11y'] ?></a></li>
                    </ul>
                </address>
            </div>
        </div>
        <div class="row">
            <div class="col footer-legal-content text-center">
                <nav class="navbar-dark" aria-label="<?= __('nav.nav_legal_content') ?>">
                    <ul class="list-inline">
<?php foreach ($navFooterSecondaries ?? [] as $navFooterSecondary): ?>
                        <li class="list-inline-item"><a href="<?= $navFooterSecondary['url']?: '/' ?>"<?= active_class($navFooterSecondary['url']?: '/', ' class="active" aria-current="page"') ?>><?= $navFooterSecondary['name'] ?></a></li>
<?php endforeach; ?>
                        <li class="list-inline-item"><a href="<?= url('home') ?>" aria-label="<?= $config['company']['name'] ?>">&copy; <?= date('Y') . ' ' . $config['company']['name'] ?></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col footer-legal-content text-center">
                <a href="https://www.linkedin.com/in/alvaro-rs/" target="_blank" title="<?= __('created_by_ARS') ?>"><?= __('created_by_ARS') ?></a>
            </div>
        </div>
    </div>
</footer>
<!-- JS -->
<script src="/js/bootstrap.bundle.min.js" defer></script>
<script src="/js/script.js" defer></script>
<!-- JSON-LD: LocalBusiness -->
<?php // require BASE_PATH . "/src/components/$lang/schema.php"; ?>
<!-- End JSON-LD -->
<!-- End JS -->
</body>
</html>