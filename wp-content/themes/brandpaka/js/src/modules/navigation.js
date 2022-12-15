export function navToggler() {
  const siteNav = document.querySelector('[data-site-nav]');
  const siteNavToggle = document.querySelector('[data-nav-toggle]');

  if (!siteNavToggle) return;

  siteNavToggle.addEventListener('click', () => {
    siteNav.classList.toggle('-active');
  });
}

export function closeNavAfterMenuItemClick() {
  const siteNav = document.querySelector('[data-site-nav]');
  const menuItems = siteNav.querySelectorAll('.menu-item');

  menuItems.forEach((item) => {
    item.addEventListener('click', () => {
      if (siteNav.classList.contains('-active')) {
        siteNav.classList.remove('-active');
      }
    });
  });
}
