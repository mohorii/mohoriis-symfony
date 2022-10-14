<?php

include 'data/pages.php';
global $pages;

$navigationStructure = $pages;

?>

<nav class="navbar navbar-expand-lg fixed-top bg-light">
    <div class="container-fluid">
        <a class="navbar-brand"
           href="<?= $navigationStructure['index']['path'] ?>"
           title="Zurück zur Startseite">モホリ–</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mohorii__content"
                aria-controls="mohorii__content" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="mohorii__content">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <?php foreach ($navigationStructure as $i => $naviItem) :
                    if ($i !== 'index') :?>
                        <li class="navbar__nav--item nav-item">
                            <a class="navbar__nav--link nav-link " href="<?= $naviItem['path'] ?>"
                               title="<?= $naviItem['path'] ?>"><?= $naviItem['title'] ?></a>
                        </li>
                    <?php endif; endforeach; ?>
            </ul>
            <a href="mailto:no-real@email.de" class="navbar__button btn btn__black"
               title="Bestellen Sie jetzt online">E-Mail senden</a>
        </div>
    </div>
</nav>
