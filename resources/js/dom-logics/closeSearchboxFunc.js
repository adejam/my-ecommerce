const closeSearchboxFunc = (e) => {
  const { dataset, classList } = e.currentTarget;
  const searchBarSection = document.querySelector(`#${dataset.parent_to_target}`);
  const suggestionSection = document.querySelector(`#${dataset.box}`);
  searchBarSection.classList.remove('show-search');
  suggestionSection.classList.add('d-none');
  classList.add('d-none');
};

export default closeSearchboxFunc;
