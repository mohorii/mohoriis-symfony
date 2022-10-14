<?php include 'snippets/header.php' ?>

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
            </div>
        </div>
    </div>
</section>

<?php include 'snippets/teasers.php' ?>
<?php include 'snippets/footer.php' ?>
