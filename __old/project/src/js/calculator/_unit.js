export const getUnitInputs = () => {
    const UNIT_INPUTS = document.querySelectorAll('[data-unit]')
    if (UNIT_INPUTS <= 0) return false
    return UNIT_INPUTS
}

export const getActiveUnit = () => {
    const ACTIVE_UNIT_ELEM = document.querySelector('[data-unit]:checked')
    if (!ACTIVE_UNIT_ELEM) return false
    return ACTIVE_UNIT_ELEM
}

export const getUnitFactor = () => {
    const ACTIVE_UNIT_ELEM = getActiveUnit()
    if (!ACTIVE_UNIT_ELEM || ACTIVE_UNIT_ELEM.dataset.unit === 't') return Number(1)
    return Number(ACTIVE_UNIT_ELEM.value)
}
