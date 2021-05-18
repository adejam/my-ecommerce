require('./bootstrap');
import './dom-logics/placeholderLabel';
import createOptionsFromGivenValue from './dom-logics/createOptionsFromGivenValue';
import showSearchResults from './dom-logics/showSearchResults';
import closeSuggestionBoxFunc from './dom-logics/closeSuggestionBoxFunc';
import { openModal, closeModal, windowClickCloseModal } from './dom-logics/modal';
import toggleMobileNav from './dom-logics/toggleMobileNav';
import toggleElement from './dom-logics/toggleElement';

const stateValue = document.querySelector('#state');
const searchInput = document.querySelector('#search');
const searchInputSm = document.querySelector('#search-sm');
const closeSuggestionBox = document.querySelector(`#close-suggestion-box`);
const closeSuggestionBoxSm = document.querySelector(`#close-suggestion-box-sm`);
const openModalButton = document.querySelectorAll('.open-modal-button');
const toggleNavBtn = document.querySelector('#toggle-mobile-nav');
const closeModalButton = document.querySelectorAll('.close-modal-button');
const dropdownToggleClick = document.querySelectorAll('.dropdown-toggle-click');
const MegaDropdownToggleClick = document.querySelectorAll('.mega-dropdown-toggle-click');

if (dropdownToggleClick) {
  dropdownToggleClick.forEach((dropdownToggle) => {
    dropdownToggle.addEventListener('click', toggleElement);
  });
}

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

if (toggleNavBtn) {
toggleNavBtn.addEventListener('click', toggleMobileNav);
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
