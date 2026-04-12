<?php
declare(strict_types=1);
?>
        <!-- Partners -->
        <aside class="partners bg-dark border-top border-light">
            <div class="container py-4">
                <h2 class="text-white visually-hidden">Entidades y colaboradores</h2>
                <div class="row g-4">
<?php
    foreach ($members ?? [] as $key => $member):
        if (
            $member['category'] === Category::MEMBER &&
            $member['subcategory'] !== MemberCategory::PARTNER
        ) continue;
?>
                    <div class="col">
                        <div class="card bg-dark shadow-lg">
                            <div class="d-flex justify-content-center">
                                <img src="<?= $member['images'][0] ?>" class="card-img-top rounded" alt="<?= $member['alt'] ?>" width="80" height="80" loading="lazy" decoding="async">
                            </div>
                            <div class="card-body">
                                <p class="card-title text-center text-white"><?= $member['name'] ?></p>
                            </div>
                            <a href="<?= $member['url'] ?>" target="_blank" class="stretched-link" rel="noopener noreferrer" title="<?= $member['name'] ?>"></a>
                        </div>
                    </div>
<?php endforeach; ?>
                </div>
            </div>
        </aside>
        <!-- End Partners -->
