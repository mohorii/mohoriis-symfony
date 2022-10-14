<?php

include 'data/pages.php';
global $pages;

$teasers = $pages;

$fileName = basename($_SERVER["SCRIPT_FILENAME"], '.php');
$ratio = '2x1';

if ($fileName === 'index') {
    $ratio = '3x2';
}

?>

<section class="teasers">
    <div class="teasers__container">
        <div class="teasers__row">
            <?php foreach ($teasers as $teaserName => $teaser) :
                if (!str_contains($teaser['path'], $fileName)) : ?>
                    <div class="teaser" href="<?= $teaser['path'] ?>">
                        <a href="<?= $teaser['path'] ?>" class="teaser__link" title="<?= $teaser['title'] ?>">
                            <picture class="teaser__picture">
                                <img class="teaser__image" src="<?= $teaser['image'] ?>" alt="<?= $teaser['title'] ?>">
                            </picture>
                            <span class="teaser__title"><strong><?= $teaser['title'] ?>.</strong></span>
                            <button role="button" class="btn teaser__button">Ansehen</button>
                        </a>
                    </div>
                <?php endif;
            endforeach; ?>
        </div>
    </div>
</section>

