    <!-- Breadcrumb -->
    <nav id="breadcrumb" class="bg-light shadow-sm" aria-label="breadcrumb">
        <div class="container pb-md-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="/" title="Home">Home</a>
                </li>
<?php if (!empty($parent)): ?>
                <li class="breadcrumb-item">
                    <a href="<?= $parent['url'] ?>" title="<?= $parent['name'] ?>">
                        <?= $parent['name'] ?>
                    </a>
                </li>
<?php endif; ?>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $currentPage['name'] ?>
                </li>
            </ol>
        </div>
    </nav>
    <!-- End Breadcrumb -->
