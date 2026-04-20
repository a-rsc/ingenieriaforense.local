<!-- Footer -->
<footer class="bg-dark border-top border-light text-white" role="contentinfo">
    <div class="container py-4">
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
            <div class="col-12">
                <ul class="footer-legal list-inline text-center">
<?php foreach ($navSecondaries ?? [] as $navSecondary): ?>
                    <li class="list-inline-item"><a href="<?= $navSecondary['url']?: '/' ?>"<?= activeClass($navSecondary['url']?: '/', ' class="active" aria-current="page"') ?>><?= $navSecondary['name'] ?></a></li>
<?php endforeach; ?>
                    <li class="list-inline-item"><a href="<?= url('home') ?>" aria-label="<?= $config['company']['name'] ?>">&copy; <?= date('Y') . ' ' . $config['company']['name'] ?></a></li>
                </ul>
            </div>
            <div class="col-12 footer-legal">
                <a href="">Página creada por ARS</a>
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