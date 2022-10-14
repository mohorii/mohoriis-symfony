import {isBrutto} from './_tax';
import {getActiveUnit} from "./_unit";

export const getAllProductElements = () => {
    const ALL_PRODUCTS = document.querySelectorAll('[data-product]')
    if (ALL_PRODUCTS.length <= 0) return false
    return ALL_PRODUCTS
}

export const getProductElementFromChild = (childElem) => {
    const PARENT_ELEM = childElem.closest('[data-product]')
    if (!PARENT_ELEM) return false
    return childElem.closest('[data-product]')
}

export const getActiveProductElement = () => {
    const ACTIVE_PRODUCT_INPUT = document.querySelector('[data-product-input]:checked')
    if (!ACTIVE_PRODUCT_INPUT) return false
    return getProductElementFromChild(ACTIVE_PRODUCT_INPUT)
}

export const getAllMiniPriceElements = () => {
    const ALL_MINI_PRICES = document.querySelectorAll('[data-mini-price]')
    if (ALL_MINI_PRICES.length <= 0) return false
    return ALL_MINI_PRICES
}
export const replaceMiniPrices = (miniPriceElem, replaceBy) => {
    if (!miniPriceElem || !replaceBy) return false
    miniPriceElem.innerText = replaceBy
}

export const getAllMiniUnitElements = () => {
    const ALL_MINI_UNITS = document.querySelectorAll('[data-mini-unit]')
    if (ALL_MINI_UNITS.length <= 0) return false
    return ALL_MINI_UNITS
}
export const replaceMiniUnits = (miniUnitElem) => {
    if (!miniUnitElem || !getActiveUnit()) return false
    miniUnitElem.innerText = getActiveUnit().dataset.unit
}

export const getProductPriceDependingFromTax = (productEle) => {
    if(isBrutto()) {
        return Number(productEle.dataset.productBrutto)
    } else {
        return Number(productEle.dataset.productNetto)
    }
}
