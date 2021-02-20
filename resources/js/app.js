require('./bootstrap');
import './dom-logics/placeholderLabel';
import createOptionsFromGivenValue from './dom-logics/createOptionsFromGivenValue';

const inputValue = document.querySelector('#state');
inputValue.addEventListener('change', createOptionsFromGivenValue);
