const toggleElement = (e) => {
  const { currentTarget } = e;
  e.stopPropagation();

  const {
    dataset: { toggle, classname, isparentchild },
  } = currentTarget;
  const toggleId = toggle;
  let targetElement;
  if (isparentchild === 'yes') {
    targetElement = currentTarget.querySelector(
      `.${currentTarget.classList.item(0)} > #${toggleId}`,
    );
  } else {
    targetElement = document.querySelector(`#${toggleId}`);
  }

  targetElement.classList.toggle(classname);
};

export default toggleElement;
