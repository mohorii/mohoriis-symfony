<?php

include 'data/products.php';
global $calculatorProducts;

?>

<h3 class="h4">Wählen Sie ein Produkt</h3>
<div class="product__row">
    <?php foreach ($calculatorProducts as $productName => $product) : ?>
        <?php include 'product.php'; ?>
    <?php endforeach; ?>
</div>