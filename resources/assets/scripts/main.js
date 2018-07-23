// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import modernizr from './routes/modernizr';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  modernizr,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// inport fontawesome SVG with js
import fontawesome from "@fortawesome/fontawesome"; 
import faPhone from "@fortawesome/fontawesome-pro-solid/faPhone";
import faEnvelope from "@fortawesome/fontawesome-pro-solid/faEnvelope";
import faHome from "@fortawesome/fontawesome-pro-solid/faHome";
import faAngleRight from "@fortawesome/fontawesome-pro-light/faAngleRight";
import faAngleLeft from "@fortawesome/fontawesome-pro-light/faAngleLeft";
fontawesome.library.add(faPhone, faEnvelope, faHome, faAngleRight, faAngleLeft)

// Load Events
jQuery(document).ready(() => routes.loadEvents());
