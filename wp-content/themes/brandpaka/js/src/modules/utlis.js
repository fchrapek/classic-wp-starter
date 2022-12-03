import reframe from 'reframe.js';

export function defineJs() {
  // Define Javascript is active by changing the body class
  document.body.classList.remove('no-js');
  document.body.classList.add('js');
}

export function reframeHelper() {
  // Fit video embeds to container
  reframe('.wp-has-aspect-ratio iframe');
}
