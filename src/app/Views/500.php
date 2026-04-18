<?php
http_response_code(500);

$title = $title ?? 'Error 500';
$lang = $lang ?? 'es';

$messages = [
    'es' => [
        'title' => 'Error interno del servidor',
        'subtitle' => 'Ha ocurrido un problema inesperado.',
        'description' => 'Estamos trabajando para solucionarlo. Por favor, inténtalo de nuevo en unos minutos.',
        'home' => 'Volver al inicio',
    ],
    'en' => [
        'title' => 'Internal Server Error',
        'subtitle' => 'An unexpected problem has occurred.',
        'description' => 'We are working to fix it. Please try again in a few minutes.',
        'home' => 'Back to home',
    ],
];

$t = $messages[$lang] ?? $messages['es'];
$homeUrl = $lang === 'en' ? '/en' : '/';
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang, ENT_QUOTES, 'UTF-8') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        :root {
            --bg: #0f172a;
            --card: #111827;
            --text: #e5e7eb;
            --muted: #94a3b8;
            --accent: #38bdf8;
            --border: rgba(255,255,255,0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            font-family: Arial, Helvetica, sans-serif;
            background:
                radial-gradient(circle at top, rgba(56, 189, 248, 0.12), transparent 35%),
                var(--bg);
            color: var(--text);
        }

        .error-card {
            width: 100%;
            max-width: 640px;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 40px 32px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.35);
        }

        .code {
            font-size: 72px;
            font-weight: 700;
            line-height: 1;
            margin: 0 0 16px;
            color: var(--accent);
        }

        h1 {
            margin: 0 0 12px;
            font-size: 32px;
        }

        .subtitle {
            margin: 0 0 12px;
            font-size: 18px;
            color: var(--text);
        }

        .description {
            margin: 0 auto 28px;
            max-width: 48ch;
            color: var(--muted);
            line-height: 1.6;
        }

        .button {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            color: #0b1120;
            background: var(--accent);
            transition: transform 0.15s ease, opacity 0.15s ease;
        }

        .button:hover {
            transform: translateY(-1px);
            opacity: 0.95;
        }
    </style>
</head>
<body>
    <main class="error-card">
        <p class="code">500</p>
        <h1><?= htmlspecialchars($t['title'], ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="subtitle"><?= htmlspecialchars($t['subtitle'], ENT_QUOTES, 'UTF-8') ?></p>
        <p class="description"><?= htmlspecialchars($t['description'], ENT_QUOTES, 'UTF-8') ?></p>
        <a class="button" href="<?= htmlspecialchars($homeUrl, ENT_QUOTES, 'UTF-8') ?>">
            <?= htmlspecialchars($t['home'], ENT_QUOTES, 'UTF-8') ?>
        </a>
    </main>
</body>
</html>