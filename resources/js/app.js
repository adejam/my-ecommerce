require('./bootstrap');
import './dom-logics/placeholderLabel';
import createOptionsFromGivenValue from './dom-logics/createOptionsFromGivenValue';
import showSearchResults from './dom-logics/showSearchResults';
import closeSuggestionBoxFunc from './dom-logics/closeSuggestionBoxFunc'

const stateValue = document.querySelector('#state');
const searchInput = document.querySelector('#search');
const closeSuggestionBox = document.querySelector(`#close-suggestion-box`);

if (stateValue) {
    stateValue.addEventListener('change', createOptionsFromGivenValue);
}

if (searchInput) {
    searchInput.addEventListener('keyup', showSearchResults);
}

if (closeSuggestionBox) {
    closeSuggestionBox.addEventListener('click', closeSuggestionBoxFunc);
}

