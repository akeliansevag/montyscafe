import {gsap} from 'gsap';
import { ScrollTrigger } from "gsap/ScrollTrigger";


(function () {
    gsap.registerPlugin(ScrollTrigger);
    const elements = document.querySelectorAll(".color-animated span");

    var anim = gsap.timeline({
        duration: 0.5
    });

    elements.forEach(function (element) {
        anim.to(element, { opacity: 1 });
        anim.to(element, { opacity: 0.3 }, ">4");
      });
      ScrollTrigger.create({
        trigger: "#section-5",
        start: "top bottom-=20%",
        end: "center",
        scrub: true,
        animation: anim,
      });

 

const throttled = (delay, fn) => {
  let lastCall = 0;
  return function (...args) {
    const now = (new Date).getTime();
    if (now - lastCall < delay) {
      return;
    }
    lastCall = now;
    return fn(...args);
  }
}

const movableElementsWrapper = document.querySelectorAll('.movable-container');

const mouseMoveHandler = (e) => {
      const y = e.movementY;
      const x = e.movementX;
  
      let moveX = x > 0 ? -x : x;
      let moveY = y > 0 ? -y : y;

      const movableElements =   document.querySelectorAll('.movable-img');

      movableElements.forEach(
        (movableElement) => {
          gsap.to(movableElement, {x: moveX, y: moveY, duration: 1})
        }
      );
   };
const speed = 0.35;

const mouseMoveHandler2 = (e) => {
  const movableElements =   document.querySelectorAll('.movable-img');

  movableElements.forEach(
    (movableElement) => {
      const  shiftValue = movableElement.getAttribute('data-value');
      const moveX = (e.clientX * shiftValue) / 250;
      const moveY = (e.clientY * shiftValue) / 250;
      
      
      gsap.to(movableElement, {x: moveX, y: moveY, duration: 1})

    }
  );
};

const tHandler = throttled(200, mouseMoveHandler2);
movableElementsWrapper.forEach(function(elem){
    elem.onmousemove = tHandler;
});




})();
