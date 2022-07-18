import {domReady} from '@roots/sage/client';

import 'jquery';

/**
 * External Dependencies
 */
import barba from '@barba/core';
import barbaPrefetch from '@barba/prefetch';

import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Our modules
import MobileMenu from "./modules/MobileMenu";
import TabItems from "./modules/TabItems";


// import Transitions from './transitions';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);


(() => {

  document.body.classList.remove('loading');
  gsap.registerPlugin(ScrollTrigger);

  barba.use(barbaPrefetch);
  barba.hooks.afterLeave(({ next }) => {
    document.body.setAttribute(
      'class',
      next.html
        .match(/<body class="(.*?)"/g)[0]
        .replace('<body class="', '')
        .replace('"', ''),
    );
  });

  barba.hooks.beforeEnter(() => {
    if ('scrollRestoration' in history) {
      history.scrollRestoration = 'manual';
    }
  });

  const header = document.querySelector('.header');
  const cards = document.querySelectorAll('.cardComponent');


  document.addEventListener("scroll", function() {
    if (window.scrollY > header.offsetHeight) {
      header.classList.add("active");
    } else {
      header.classList.remove("active");
    }
  });

  //
  new MobileMenu()
  cards.forEach(card => {
    new TabItems(card)
  })

})();
