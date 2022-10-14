import {getAllProductElements} from "./_product";
import {getUnitInputs} from './_unit'
import {getTaxInput} from './_tax'
import {getQuantityButtons, getQuantityInput} from "./_quantity";
import {handleMiniValues, handleQuantityButton, handleMainPrice} from './_handler';

export const addProductEventListeners = () => {
    if (!getAllProductElements()) return

    getAllProductElements().forEach(productElement => {
        productElement.addEventListener('change', () => {
            handleMainPrice()
        })
    })
}

export const addQuantityButtonsEventListeners = () => {
    if (!getQuantityButtons()) return

    getQuantityButtons().forEach(quantityButton => {
        quantityButton.addEventListener('click', () => {
            handleQuantityButton(quantityButton)
            handleMainPrice()
        })
    })
}

export const addUnitEventListeners = () => {
    if (!getUnitInputs()) return

    getUnitInputs().forEach(unitInput => {
        unitInput.addEventListener('change', () => {
            handleMiniValues()
            handleMainPrice()
        })
    })
}

export const addQuantityEventListeners = () => {
    if (!getQuantityInput()) return

    getQuantityInput().addEventListener('input', () => {
        handleMainPrice()
    })
}

export const addTaxEventListeners = () => {
    if (!getTaxInput()) return

    getTaxInput().addEventListener('change', () => {
        handleMiniValues()
        handleMainPrice()
    })
}

