<h1><?= current_url('') ?></h1>

<h2><?= __('about_title') ?></h2>

<h3>App name: <?= htmlspecialchars($app['name']) ?></h3>

<h4><?= __('about_text') ?></h4>

<a href="<?= url('home') ?>"><?= __('home_title') ?>: <?= url('home') ?></a>
<hr>
<a href="<?= url('home') ?>"><?= __('home_title') ?>: <?= route_slug('home') ?></a>

<p>Contenido: <?= htmlspecialchars($message ?? 'Contenido por defecto') ?></p>



