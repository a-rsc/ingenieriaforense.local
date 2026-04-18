<?php
declare(strict_types=1);
?>
                            <!-- Table of contents -->
                            <nav class="d-block w-100 text-center" aria-label="Índice de contenido">
                                <ul class="list-unstyled list-inline ps-2">
<?php
    foreach ($serviceCollections[$pageByUrl] ?? [] as $key => $item):
?>
                                    <li class="list-inline-item"><a href="<?= $item['url'] ?>"<?= isActive($item['url']) ? ' class="active" aria-current="page"' : '' ?> aria-label="<?= $item['name'] ?>">#<?= $item['name'] ?></a></li>
<?php
    endforeach;
?>
                                </ul>
                            </nav>
                            <hr>
                            <!-- End Table of contents -->
