<?php
global $productName;
global $product;
?>

<div class="product__col">
    <div class="product" data-product
         data-product-netto="<?= $product['netto'] ?>"
         data-product-brutto="<?= $product['brutto'] ?>">
        <input class="product__input" type="radio" hidden
               name="productItems" id="productId<?= $product['id'] ?>"
               data-product-input <?php if ($product['id'] == '1') : ?>checked <?php endif; ?>>
        <label class="product__label" for="productId<?= $product['id'] ?>">
            <?= $productName ?>
            <span class="product__price">ab&nbsp;<span
                        data-mini-price><?= $product['brutto'] ?></span>&nbsp;€&nbsp;/&nbsp;<span
                        data-mini-unit>t</span></span>
        </label>
    </div>
</div>