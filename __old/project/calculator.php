<?php include 'snippets/header.php'; ?>

<section class="hero">
    <?php if ($pageImageUrl) : ?>
        <picture class="hero__picture">
            <img class="hero__image" src="<?= $pageImageUrl ?>" alt="<?= $page['title'] ?>">
        </picture>
    <?php endif; ?>
    <div class="hero__container">
        <div class="hero__row">
            <div class="hero__col">
                <h1 class="hero__headline"><strong><?= $page['headline'] ?></strong></h1>
                <a class="hero__button btn btn__black btn-lg" href="./index.php">Zurück zu Startseite</a>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container-xxl">
        <div class="row align-items-center pt-2 pb-6">
            <div class="col-12 col-lg-4 mb-2 mb-xl-0">
                <small class="tagline">Preisrechner</small>
                <h2>Eine genrelle Vorstellung bekommen</h2>
                <p>Den Durchblick schaffen, was ein gewisses Produkt unter gewissen Voraussetzungen kosten wird.</p>
            </div>
            <div class="col-12 offset-lg-1 col-lg-7">
                <?php include 'snippets/calculator.php' ?>
            </div>
        </div>
    </div>
</section>


<?php include 'snippets/teasers.php' ?>
<?php include 'snippets/footer.php' ?>
