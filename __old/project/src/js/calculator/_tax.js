export const getTaxInput = () => {
    const TAX_INPUT = document.querySelector('[data-tax-input]')
    if (!TAX_INPUT) return false
    return TAX_INPUT
}

export const isBrutto = () => {
    const TAX_ELE = document.querySelector('[data-tax-input]')
    return !(!TAX_ELE || !TAX_ELE.checked);
}
