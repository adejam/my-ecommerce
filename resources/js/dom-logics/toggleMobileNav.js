const toggleMobileNav = ({ currentTarget }) => {
  const {
    dataset: { target },
  } = currentTarget;
  const targetId = target;
  const mobileNav = document.querySelector(`#${targetId}`);
  const navLinksList = document.querySelectorAll('.mobile-nav-item');
  const hamburger = document.querySelector('#hamburger');
  mobileNav.classList.toggle('mobile-nav-active');
  hamburger.classList.toggle('hamburgerToggle');

  navLinksList.forEach((list, index) => {
    if (list.style.animation) {
      list.style.animation = '';
    } else {
      list.style.animation = `mobileNavLinksFade 0.5s ease forwards ${index / 7 + 0.5}s`;
    }
  });
};

export default toggleMobileNav;
