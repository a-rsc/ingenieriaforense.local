<?php

use App\Core\View;

require __DIR__ . '/header.php';
?>
<!-- Main Content -->
<main id="main-content">
<?= $content ?>
<?php
    View::partial('partners', [
        'partners' => $partners
    ]);
?>
</main>
<!-- End Main Content -->
<?php require __DIR__ . '/footer.php'; ?>
