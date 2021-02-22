require('./bootstrap');
import './dom-logics/placeholderLabel';
import createOptionsFromGivenValue from './dom-logics/createOptionsFromGivenValue';

const stateValue = document.querySelector('#state');
if (stateValue) {
    stateValue.addEventListener('change', createOptionsFromGivenValue);
}

