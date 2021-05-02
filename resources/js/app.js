require('./bootstrap');
import './dom-logics/placeholderLabel';
import createOptionsFromGivenValue from './dom-logics/createOptionsFromGivenValue';
import showSearchResults from './dom-logics/showSearchResults';
import closeSuggestionBoxFunc from './dom-logics/closeSuggestionBoxFunc';
import { openModal, closeModal, windowClickCloseModal } from './dom-logics/modal';

const stateValue = document.querySelector('#state');
const searchInput = document.querySelector('#search');
const searchInputSm = document.querySelector('#search-sm');
const closeSuggestionBox = document.querySelector(`#close-suggestion-box`);
const closeSuggestionBoxSm = document.querySelector(`#close-suggestion-box-sm`);
const openModalButton = document.querySelectorAll('.open-modal-button');
const closeModalButton = document.querySelectorAll('.close-modal-button');

if (openModalButton) {
  openModalButton.forEach((btn) => {
    btn.addEventListener('click', openModal);
  });
}

if (closeModalButton) {
  closeModalButton.forEach((btn) => {
    btn.addEventListener('click', closeModal);
  });
}

window.addEventListener('click', windowClickCloseModal);

if (stateValue) {
  stateValue.addEventListener('change', createOptionsFromGivenValue);
}

if (searchInput) {
  searchInput.addEventListener('keyup', showSearchResults);
}

if (searchInputSm) {
  searchInputSm.addEventListener('keyup', showSearchResults);
}

if (closeSuggestionBox) {
  closeSuggestionBox.addEventListener('click', closeSuggestionBoxFunc);
}

if (closeSuggestionBoxSm) {
  closeSuggestionBoxSm.addEventListener('click', closeSuggestionBoxFunc);
}
