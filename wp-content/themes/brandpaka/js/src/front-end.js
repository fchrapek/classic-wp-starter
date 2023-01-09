import 'what-input';
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import pageTemplateContact from './routes/contact';

/** Populate Router instance with DOM routes */
const routes = new Router({
  common,
  home,
  pageTemplateContact,
});

document.addEventListener('DOMContentLoaded', () => {
  routes.loadEvents();
});
