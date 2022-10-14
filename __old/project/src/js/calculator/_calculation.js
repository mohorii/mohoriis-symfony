import {getUnitFactor} from './_unit';
import {getActualQuantity} from './_quantity'
import {
    getActiveProductElement,
    getProductElementFromChild,
    getProductPriceDependingFromTax
} from "./_product";

// CURRENCY ROUNDING AS GOOD AS POSSIBLE
const roundToCurrencyValue = num => (Math.round((num + Number.EPSILON) * 100) / 100).toFixed(2)

const calcBruttoOrNetto = productElem => {
    const calcUnitByUnitFactor = num => getUnitFactor() * Number(num)

    const CALCULATION_PRICE = getProductPriceDependingFromTax(productElem)
    return calcUnitByUnitFactor(CALCULATION_PRICE)
}

export const calcMiniPrice = (miniPriceElement) => {
    const PRODUCT_ELE = getProductElementFromChild(miniPriceElement)
    return roundToCurrencyValue(calcBruttoOrNetto(PRODUCT_ELE))
}

export const calcMainPrice = priceEle => {
    if (!getActiveProductElement()) return false
    priceEle.innerText = roundToCurrencyValue(calcBruttoOrNetto(getActiveProductElement()) * getActualQuantity())
}
