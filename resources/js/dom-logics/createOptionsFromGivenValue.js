import selectInputObjectAndArrays from '../arrays/selectInputObjectAndArrays';
import removeAllChildrenElements from './removeAllChildrenElements';

const createOptionsFromGivenValue = (e) => {
  const { dataset, value } = e.target;
  const fieldTocreateOptionsFor = document.querySelector(`#${dataset.field_to_target}`);
  if (value) {
    const values = selectInputObjectAndArrays[dataset.object_to_check][value];
    removeAllChildrenElements(fieldTocreateOptionsFor);
    fieldTocreateOptionsFor.removeAttribute('disabled');
    values.forEach((value) => {
      const option = document.createElement('OPTION');
      option.innerHTML = value;
      fieldTocreateOptionsFor.appendChild(option);
    });
  } else {
    removeAllChildrenElements(fieldTocreateOptionsFor);
    fieldTocreateOptionsFor.setAttribute('disabled', 'true');
  }
};

export default createOptionsFromGivenValue;
