<footer>

    <?php print_r($testimonials); ?>



    <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($config['company']['name']) ?></p>
</footer>

    <!-- JS -->
    <script src="/js/bootstrap.bundle.min.js" defer></script>
    <script src="/js/script.js" defer></script>
    <!-- JSON-LD: LocalBusiness -->
<?php //require BASE_PATH . "/src/components/$lang/schema.php"; ?>
    <!-- End JSON-LD -->
    <!-- End JS -->
</body>
</html>