import {calcMiniPrice, calcMainPrice} from './_calculation'
import {getQuantityInput} from './_quantity'
import {getMainPriceElement} from "./_price";
import {getAllMiniPriceElements, getAllMiniUnitElements, replaceMiniPrices, replaceMiniUnits} from './_product'

const handleMiniPrices = () => {
    if (!getAllMiniPriceElements()) return
    getAllMiniPriceElements().forEach(miniPriceElem => {
        replaceMiniPrices(miniPriceElem, calcMiniPrice(miniPriceElem))
    })
}

const handleMiniUnits = () => {
    if (!getAllMiniUnitElements()) return
    getAllMiniUnitElements().forEach(miniUnitElem => {
        replaceMiniUnits(miniUnitElem)
    })
}

export const handleMiniValues = () => {
    handleMiniUnits()
    handleMiniPrices()
}

export const handleQuantityButton = (button) => {
    if (button.dataset.quantityCountButton === 'up') {
        getQuantityInput().stepUp()
    } else {
        getQuantityInput().stepDown()
    }
}

export const handleMainPrice = () => {
    calcMainPrice(getMainPriceElement())
}
