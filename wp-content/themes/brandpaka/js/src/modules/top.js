/* eslint-disable max-len */
import MoveTo from 'moveto';

const backToTop = () => {
  const moveToTop = new MoveTo({ duration: 300, easing: 'easeOutQuart' });
  const topButton = document.getElementById('top');
  const focusableElements = document.querySelectorAll('button, a, input, select, textarea, [tabindex]:not([tabindex="-1"])');

  function trackScroll() {
    const scrolled = window.pageYOffset;
    const scrollAmount = document.documentElement.clientHeight;

    if (scrolled > scrollAmount) {
      topButton.classList.add('is-visible');
    }

    if (scrolled < scrollAmount) {
      topButton.classList.remove('is-visible');
    }
  }

  function backToTopEvent(event) {
    event.preventDefault();

    // Focus to the first focusable element on the page
    moveToTop.move(focusableElements[0]);
  }

  if (topButton) {
    topButton.addEventListener('click', backToTopEvent);
  }

  window.addEventListener('scroll', trackScroll);
};

export default backToTop;
