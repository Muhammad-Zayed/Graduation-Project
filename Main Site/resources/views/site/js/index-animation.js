"use strict";

gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(ScrollToPlugin); //about scroll 

document.getElementById('scroll_to').addEventListener('click', function (e) {
  gsap.to(window, {
    duration: 0.8,
    scrollTo: "#about"
  });
}); //scroll to top

document.querySelector('.scroll_to_top').addEventListener('click', function (e) {
  gsap.to(window, {
    duration: 1,
    scrollTo: 0
  });
}); //for header

gsap.from(".animate_1", {
  duration: 1.2,
  y: 50,
  opacity: 0,
  ease: "power4",
  stagger: 0.2
});
gsap.from(".img_side img", {
  duration: 1.2,
  y: -100,
  opacity: 0,
  ease: "power4"
}); ///for about

gsap.from('.about_info', {
  scrollTrigger: {
    trigger: '.about_content_side',
    start: 'top center',
    toggleActions: 'restart'
  },
  duration: 1,
  y: 100,
  opacity: 0,
  ease: "power4",
  stagger: 0.2
});
gsap.from('.about__img', {
  scrollTrigger: {
    trigger: '.about_content_side',
    start: 'top center',
    toggleActions: 'restart'
  },
  duration: 1.2,
  scale: 0.6,
  ease: 'power1'
}); //for team

gsap.from('.item__img', {
  scrollTrigger: {
    trigger: '.item__img',
    start: 'top center',
    toggleActions: 'restart'
  },
  duration: 1.2,
  y: -100,
  opacity: 0,
  stagger: 0.3,
  ease: "power1"
});