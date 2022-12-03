const stickyNav = () => {
  const siteNav = document.querySelector('[data-site-nav]');
  const siteNavToggle = document.querySelector('[data-nav-toggle]');

  if (!siteNavToggle) return;

  siteNavToggle.addEventListener('click', () => {
    siteNav.classList.toggle('-active');
  });
};

export default stickyNav;
