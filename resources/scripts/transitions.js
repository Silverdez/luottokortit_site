/**
 * External Dependencies
 */
import { gsap } from 'gsap';
import barba from '@barba/core';


class Transitions {
  constructor() {

    this.menuAnimations = document.querySelectorAll(
      '.menu__span, .menu__link',
      '.hero__title, .hero__link',
    );

    this.wrapper = document.querySelector('[data-scroll]'); // SCROLL INIT
    this.overflow = document.querySelector('.wrapper'); // OVERFLOW
    this.header = document.querySelector('.header'); // HEADER

    this.loaderContainer = document.querySelector('.shutter'); // HANDLE LOADER ANIMATION
  }

  init() {
    const _self = this; // prevent this binding

    barba.init({
      timeout: 15000,
      debug: true,
      transitions: [
        {
          name: 'default-transition',
          // ONCE
          beforeOnce: (data) =>
            new Promise((resolve) => _self.beforeOnce(data, resolve)),
          once: (data) => new Promise((resolve) => _self.once(data, resolve)),
          afterOnce: (data) => _self.afterOnce(data),

          // BEFORE
          before: (data) => _self.before(data),
          // before,
          beforeLeave: (data) => _self.beforeLeave(data),
          leave: () => new Promise((resolve) => _self.leave(resolve)),
          // afterLeave,

          // ENTER
          beforeEnter: (data) =>
            new Promise((resolve) => _self.beforeEnter(data, resolve)),
          enter: (data) => new Promise((resolve) => _self.enter(data, resolve)),
          afterEnter: (data) => _self.afterEnter(data),
          after: () => {

          },
        },
      ],
    });
  }

  beforeLeave(data) {
    return undefined;
  }

  leave(resolve) {
    return undefined;
  }

  beforeEnter(data, resolve) {
    return undefined;
  }

  afterEnter(data) {
    return undefined;
  }

  enter(data, resolve) {
    return undefined;
  }

  before(data) {
    return undefined;
  }

  once(data, resolve) {
    return undefined;
  }

  beforeOnce(data, resolve) {
    return undefined;
  }

  afterOnce(data) {
    return undefined;
  }
}

export default Transitions;
