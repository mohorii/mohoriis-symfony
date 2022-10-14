
<div class="row justify-content-end">
    <div class="col-lg-6">
        <div class="price__box">
            <p class="price__total d-flex">Gesamtpreis <span class="price__text"><span
                        class="price__text--value">0,00</span>&nbsp;€<span
                        class="price__text--asterisk small">*</span></span>
            </p>
            <input id="priceTotal" type="number" name="priceTotal" step="0.01" hidden="hidden"
                   value="0">
            <label class="sr-only" for="priceTotal">Gesamtpreis</label>
        </div>
    </div>

    <div class="col-12">
        <hr>
    </div>
    <div class="col-lg-6">
        <div class="price__box">
            <p class="price__vat d-flex">inkl. 19% MwSt. <span class="price__text"><span
                        class="price__text--value">0,00</span>&nbsp;€</span></p>
            <input id="priceVat" type="number" name="priceVat" step="0.01" hidden="hidden"
                   value="0">
            <label class="sr-only" for="priceVat">Price Vat</label>
        </div>
        <div class="price__box">
            <div class="delivery__prices">
                <p class="price__delivery d-flex">inkl. Lieferkosten
                    <span class="price__text">0,00&nbsp;€</span></p>
            </div>
            <input id="priceDeliverySum" type="number" name="priceDeliverySum" step="0.01"
                   hidden="hidden" value="0">
            <label class="sr-only" for="priceDeliverySum">Price Delivery</label>
            <input id="priceDeliverySingle" type="number" name="priceDeliverySingle" step="0.01"
                   hidden="hidden" value="0">
            <label class="sr-only" for="priceDeliverySingle">Price Delivery</label>
        </div>
    </div>
</div>