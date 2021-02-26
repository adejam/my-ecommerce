const showSearchResults = (e) => {
  const { dataset, value } = e.target;
  const searchBarSection = document.querySelector(`#${dataset.parent_to_target}`);
  const suggestionSection = document.querySelector(`#${dataset.box}`);
  const closeSearchbox = document.querySelector(`#${dataset.close_searchbox}`);
  searchBarSection.classList.add('show-search');
  suggestionSection.classList.remove('d-none');
  closeSearchbox.classList.remove('d-none');
  if (value.length < 1) {
    searchBarSection.classList.remove('show-search');
    suggestionSection.classList.add('d-none');
    closeSearchbox.classList.add('d-none');
  }
};

export default showSearchResults;
