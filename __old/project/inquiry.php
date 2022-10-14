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
                <a class="hero__button btn btn__black btn-lg" href="./index.php">Zurück zur Startseite</a>
            </div>
        </div>
    </div>
</section>

<section id="intro" class="intro">
    <div class="container-xxl">
        <div class="row pb-4 justify-content-center">
            <div class="col-md-6 text-center">
                <small class="tagline">Unverbindliche Anfrage stellen</small>
                <h2>Submit vorübergehend deaktiviert</h2>
                <p>Aktuell befindet sich dieses Projekt im strukturellen Aufbau. Das HTML bekommt eine neue Struktur und
                    zeitgleich nutze ich die Möglichkeit für einen neuen Anstrich.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'snippets/inquiry.php' ?>

<?php include 'snippets/teasers.php' ?>
<?php include 'snippets/footer.php' ?>
