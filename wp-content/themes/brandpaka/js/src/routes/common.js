// import navigation from '../modules/navigation';
import initAnchors from '../modules/anchors';
import backToTop from '../modules/top';
import { navToggler, closeNavAfterMenuItemClick } from '../modules/navigation';
import { defineJs, reframeHelper } from '../modules/utlis';

export default {
  init() {
    navToggler();
    closeNavAfterMenuItemClick();
    initAnchors();
    backToTop();
    defineJs();
    reframeHelper();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
