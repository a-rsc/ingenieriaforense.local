<?php
declare(strict_types=1);

switch ($pageByUrl) {
    case 'Home':
        require BASE_PATH . '/src/content/index.php';
        break;

    case 'Permits':
    case 'Projects':
    case 'Reports':
        if ($service === null) {
            require BASE_PATH . '/src/content/services.php';
        } else {
            require BASE_PATH . '/src/content/services-page.php';
        }
        break;

    case 'Standard':
        require BASE_PATH . '/src/content/standard.php';
        break;

    case 'Blog':
        require BASE_PATH . '/src/content/blog.php';
        break;

    case 'About':
        require BASE_PATH . '/src/content/about.php';
        break;

    case 'Contact':
        require BASE_PATH . '/src/content/contact.php';
        break;

    case 'Privacy Policy':
        require BASE_PATH . '/src/content/privacy-policy.php';
        break;

    case 'Terms and Conditions':
        require BASE_PATH . '/src/content/terms-and-conditions.php';
        break;

    case 'Legal Notice':
        require BASE_PATH . '/src/content/legal-notice.php';
        break;

    default:
        http_response_code(404);
        require BASE_PATH . '/src/content/404.php';
}
?>
