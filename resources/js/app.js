require('./bootstrap');
import './dom-logics/placeholderLabel';
import createOptionsFromGivenValue from './dom-logics/createOptionsFromGivenValue';
import showSearchResults from './dom-logics/showSearchResults';
import closeSearchboxFunc from './dom-logics/closeSearchboxFunc'

const stateValue = document.querySelector('#state');
const searchInput = document.querySelector('#search');
const closeSearchbox = document.querySelector(`#close_searchbox`);

if (stateValue) {
    stateValue.addEventListener('change', createOptionsFromGivenValue);
}

if (searchInput) {
    searchInput.addEventListener('keyup', showSearchResults);
}

if (closeSearchbox) {
    closeSearchbox.addEventListener('click', closeSearchboxFunc);
}

