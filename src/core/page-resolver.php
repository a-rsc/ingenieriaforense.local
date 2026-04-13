<?php

declare(strict_types=1);

// Server url
// $currentPage = pathinfo($_SERVER['SCRIPT_FILENAME'], PATHINFO_FILENAME);

// Real url
$currentPage = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$currentPage = $currentPage !== '' ? $currentPage : 'index';

// $currentPage = '/ingenieria-forense/perito-de-humedades';

$pageByUrl = $currentPage === 'index'
    ? 'Home'
    : findKeyByUrl($pages, $currentPage);

$serviceCollections = [
    'Industrial Fires' => $industrialFires,
    'Permits' => $permits,
    'Reports' => $reports,
];

$service = null;

if (!isset($serviceCollections[$pageByUrl])) {
    foreach ($serviceCollections as $collectionName => $items) {
        $foundKey = findKeyByUrl($items, $currentPage);

        if ($foundKey === null) {
            continue;
        }

        $pageByUrl = $collectionName;
        $service = $items[$foundKey];
        break;
    }

    if ($pageByUrl === null) {
        $pageByUrl = '404';
    }
}
?>
