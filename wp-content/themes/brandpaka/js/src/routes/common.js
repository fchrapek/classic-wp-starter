// import navigation from '../modules/navigation';
import stickyNav from '../modules/sticky-nav';
import initAnchors from '../modules/anchors';
import backToTop from '../modules/top';
import navigation from '../modules/navigation';
import { defineJs, reframeHelper } from '../modules/utlis';

export default {
  init() {
    navigation();
    stickyNav();
    initAnchors();
    backToTop();
    defineJs();
    reframeHelper();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
