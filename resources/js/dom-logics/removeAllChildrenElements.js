const removeAllChildrenElements = (parentElement) => {
  while (parentElement.firstChild) {
    parentElement.firstChild.remove();
  }
};

export default removeAllChildrenElements;
