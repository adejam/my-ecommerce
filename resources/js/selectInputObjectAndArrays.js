const selectInputObjectAndArrays = {
  states: {
    lagos: ['', 'ogudu', 'ojota'],
    oyo: ['', 'ogbomosho', 'ibadan'],
  },
};

// const returnAreas = ({e:{target}}) => {
// if (e.target.value) {
//   const areaValue = document.querySelector('#area');
//   const areas = states[e.target.value];
//   while (areaValue.firstChild) {
//     areaValue.firstChild.remove();
//   }
//   areas.forEach((area) => {
//     const option = document.createElement('OPTION');
//     option.innerHTML = area;
//     areaValue.appendChild(option);
//   });
// }

// };

export default selectInputObjectAndArrays;
