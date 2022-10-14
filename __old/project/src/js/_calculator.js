import {
    addUnitEventListeners,
    addTaxEventListeners,
    addQuantityButtonsEventListeners,
    addQuantityEventListeners,
    addProductEventListeners
} from "./calculator/_listener";

import {handleMiniValues, handleMainPrice} from "./calculator/_handler";

export const initCalculator = () => {
    handleMiniValues()
    handleMainPrice()
    addProductEventListeners()
    addUnitEventListeners()
    addTaxEventListeners()
    addQuantityButtonsEventListeners()
    addQuantityEventListeners()
}
