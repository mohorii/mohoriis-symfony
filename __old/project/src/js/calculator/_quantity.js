export const getQuantityButtons = () => {
    const QUANTITY_BUTTONS = document.querySelectorAll('[data-quantity-count-button]')
    if (QUANTITY_BUTTONS.length <= 0) return false
    return QUANTITY_BUTTONS
}

export const getQuantityInput = () => {
    const QUANTITY_INPUT = document.querySelector('[data-quantity-input]')
    if (!QUANTITY_INPUT) return false
    return QUANTITY_INPUT
}

export const getActualQuantity = () => {
    if (!getQuantityInput()) return false
    return Number(getQuantityInput().value)
}
