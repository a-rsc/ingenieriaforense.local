    <!-- Breadcrumb -->
    <nav id="breadcrumb" class="bg-light shadow-sm" aria-label="breadcrumb">
        <div class="container pb-md-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="/" title="Home">Home</a>
                </li>
<?php if (!empty($pages[$currentPage['parent']])): ?>
                <li class="breadcrumb-item">
                    <a href="<?= $pages[$currentPage['parent']]['url'] ?>" title="<?= $pages[$currentPage['parent']]['name'] ?>"><?= $pages[$currentPage['parent']]['name'] ?></a>
                </li>
<?php endif; ?>
                <li class="breadcrumb-item active" aria-current="page">
                    <span><?= $currentPage['name'] ?></span>
                </li>
            </ol>
        </div>
    </nav>
    <!-- End Breadcrumb -->
