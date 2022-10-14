<?php

include 'data/products.php';
global $inquiryCategorizedProducts;

?>

<h3 class="tagline">Produkte</h3>
<div class="row">
    <div class="col-12">

        <?php foreach ($inquiryCategorizedProducts as $category => $products) : ?>
            <div class="product__category">
                <h4 class="category__title"><?= $category ?></h4>

                <?php foreach ($products as $productName => $product) : ?>
                    <?php include 'product.php' ?>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>