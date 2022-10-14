<?php

global $productName;
global $product;

?>

<div class="product">
    <input class="product__input" type="checkbox" id="<?= $productName ?>" hidden data-product-input>
    <label class="product__label" data-product data-netto="38.00" data-brutto="57.00" for="<?= $productName ?>">
        <span class="product__content">
            <picture class="product__picture">
                <img class="product__image" src="<?= $product['image'] ?>"
                     width="52" height="52" alt="Produktbild <?= $productName ?>"
                     title="Produktbild <?= $productName ?>">
            </picture>
            <span class="product__text">
                <span class="product__title"><?= $productName ?></span>
                <span class="product__price-info">
                    <span class="price">45,22</span>&nbsp;€&nbsp;/&nbsp;<span
                            class="unit">Tonne</span>
                </span>
            </span>
        </span>
        <span class="product__quantity">
            <span class="input-group-prepend product__quantity-count--minus"></span>
            <span class="input-group-append product__quantity-count--plus"></span>
        </span>
        <span class="product__price"></span>
    </label>
</div>
