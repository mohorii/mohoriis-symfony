export const getMainPriceElement = () => {
    const PRICE_ELEM = document.querySelector('[data-main-price]')
    if (!PRICE_ELEM) return false
    return PRICE_ELEM
}
