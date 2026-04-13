<?php
declare(strict_types=1);

switch ($pageByUrl) {
    case 'Home':
        require BASE_PATH . "/src/content/$lang/index.php";
        break;

    case 'Permits':
    case 'Industrial Fires':
    case 'Reports':
        if ($service === null) {
            require BASE_PATH . "/src/content/$lang/services.php";
        } else {
            require BASE_PATH . "/src/content/$lang/services-page.php";
        }
        break;

    case 'Standard':
        require BASE_PATH . "/src/content/$lang/standard.php";
        break;

    case 'Blog':
        require BASE_PATH . "/src/content/$lang/blog.php";
        break;

    case 'About':
        require BASE_PATH . "/src/content/$lang/about.php";
        break;

    case 'Contact':
        require BASE_PATH . "/src/content/$lang/contact.php";
        break;

    case 'Privacy Policy':
        require BASE_PATH . "/src/content/$lang/privacy-policy.php";
        break;

    case 'Terms and Conditions':
        require BASE_PATH . "/src/content/$lang/terms-and-conditions.php";
        break;

    case 'Legal Notice':
        require BASE_PATH . "/src/content/$lang/legal-notice.php";
        break;

    default:
        http_response_code(404);
        require BASE_PATH . "/src/content/$lang/404.php";
}
?>
