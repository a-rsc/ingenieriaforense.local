<?php

use App\Core\View;

require __DIR__ . '/header.php';
?>

<main>
<?= $content ?>
<?php View::partial('partners', ['partners' => $partners]); ?>
</main>

<?php require __DIR__ . '/footer.php'; ?>
