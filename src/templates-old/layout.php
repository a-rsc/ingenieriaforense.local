<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <!-- Metadatos básicos -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?= COMPANY_ICON ?>" />
    <!-- End Metadatos básicos -->
    <!-- SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="<?= COMPANY_NAME ?>">
    <title><?= "{$pages[$pageByUrl]['title']} | " . COMPANY_NAME ?></title>
    <meta name="description" content="<?= $pages[$pageByUrl]['description'] ?>">
    <link rel="canonical" href="<?= BASE_URL . $currentPage ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap"></noscript>
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= "{$pages[$pageByUrl]['title']} | " . COMPANY_NAME ?>">
    <meta property="og:description" content="<?= $pages[$pageByUrl]['description'] ?>">
    <meta property="og:url" content="<?= BASE_URL . $currentPage ?>">
    <meta property="og:image" content="<?= COMPANY_OG_LOGO ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="<?= COMPANY_NAME ?>">
    <meta property="og:image:alt" content="Logo de <?= COMPANY_NAME ?>">
    <meta property="og:locale" content="<?= APP_LOCALE ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= "{$pages[$pageByUrl]['title']} | " . COMPANY_NAME ?>">
    <meta name="twitter:description" content="<?= $pages[$pageByUrl]['description'] ?>">
    <meta name="twitter:image" content="<?= COMPANY_OG_LOGO ?>">
    <!-- End SEO Meta Tags -->
    <!-- Stylesheets -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <!-- End Stylesheets -->

</head>
<body>
<?php
    require BASE_PATH . "/src/components/$lang/accessibility-preloader-lines.php";
    require BASE_PATH . "/src/components/$lang/header.php";
?>
    <!-- Main Content -->
    <main id="main-content">
<?php
    if (!isHome($pageByUrl)) {
        require BASE_PATH . "/src/components/$lang/breadcrumb.php";
    }
    echo $main ?? '';
?>
    </main>
    <!-- End Main Content -->
<?php
    require BASE_PATH . "/src/components/$lang/footer.php";
?>
    <!-- JS -->
    <script src="/js/bootstrap.bundle.min.js" defer></script>
    <script src="/js/script.js" defer></script>
    <!-- JSON-LD: LocalBusiness -->
<?php require BASE_PATH . "/src/components/$lang/schema.php"; ?>
    <!-- End JSON-LD -->
    <!-- End JS -->
</body>
</html>