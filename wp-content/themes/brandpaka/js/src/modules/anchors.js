/* eslint-disable no-param-reassign, no-undef */

import MoveTo from 'moveto';

const initAnchors = () => {
  // General anchors used in links with class "js-trigger"
  const easeFunctions = {
    easeInQuad(t, b, c, d) {
      t /= d;
      return c * t * t + b;
    },
    easeOutQuad(t, b, c, d) {
      t /= d;
      return -c * t * (t - 2) + b;
    },
  };

  const moveTo = new MoveTo(
    {
      ease: 'easeInQuad',
    },
    easeFunctions,
  );

  const menuLis = document.querySelectorAll('li.menu-item');
  menuLis.forEach((li) => {
    if (li.classList.contains('js-trigger') && li.firstElementChild.tagName === 'A') {
      li.firstElementChild.classList.add('js-trigger');
      li.classList.remove('js-trigger');
    }
  });

  const triggers = document.getElementsByClassName('js-trigger');
  // eslint-disable-next-line no-plusplus
  for (let i = 0; i < triggers.length; i++) {
    moveTo.registerTrigger(triggers[i]);

    triggers[i].addEventListener('click', () => {
      if (triggers[i].parentElement.tagName === 'LI') {
        document.querySelector('body').classList.remove('js-nav-active');
        document.querySelector('html').classList.remove('disable-scroll');
      }
    });
  }
};

export default initAnchors;
