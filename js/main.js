import { initSlider } from "./module/sliders.js";
import { initScrollToTop } from "./module/scroll-to-top.js";
import { initScroll } from "./module/scroll.js";
import { initPopup } from "./module/popup.js";
import { initStickyHeader } from './module/sticky-header.js';
import { initMobileMenu } from "./module/mobileMenu.js";
import { initReviewSlider } from "./module/sliders.js";


window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');
    initScrollToTop();
    initScroll();
    baguetteBox.run('.gallery-wrapper');
    initPopup();
    initStickyHeader();
    initMobileMenu();   
    initSlider(); 
    initReviewSlider();


});
