import Swiper from "swiper";

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { Fancybox } from "@fancyapps/ui";

const throttled = (delay, fn) => {
    let lastCall = 0;
    return function (...args) {
        const now = new Date().getTime();
        if (now - lastCall < delay) {
            return;
        }
        lastCall = now;
        return fn(...args);
    };
};

const mouseMoveHandler = (e) => {
    const y = e.movementY;
    const x = e.movementX;

    let moveX = x > 0 ? -x : x;
    let moveY = y > 0 ? -y : y;

    const movableElements = document.querySelectorAll(".movable-img");

    movableElements.forEach((movableElement) => {
        gsap.to(movableElement, { x: moveX, y: moveY, duration: 1 });
    });
};

const mouseMoveHandler2 = (e) => {
    const movableElements = document.querySelectorAll(".movable-img");

    movableElements.forEach((movableElement) => {
        const shiftValue = movableElement.getAttribute("data-value");
        const moveX = (e.clientX * shiftValue) / 250;
        const moveY = (e.clientY * shiftValue) / 250;

        gsap.to(movableElement, { x: moveX, y: moveY, duration: 1 });
    });
};

const tHandler = throttled(200, mouseMoveHandler2);

(function () {
    // FANCYBOX
    Fancybox.bind("[data-fancybox]", {});

    // SWIPER
    const swiperPrev = new Swiper(".swiper-prev", {
        loop: true,
        direction: "vertical",
        allowTouchMove: false,
        slidesPerView: 1,
        speed: 1000,
    });

    const swiperMain = new Swiper(".swiper-main", {
        loop: true,
        allowTouchMove: false,
        slidesPerView: 1,
        speed: 1000,
    });

    const swiperNext = new Swiper(".swiper-next", {
        loop: true,
        direction: "vertical",
        allowTouchMove: false,
        slidesPerView: 1,
        speed: 1000,
    });

    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");

    nextBtn.addEventListener("click", function () {
        swiperPrev.slideNext();
        swiperMain.slidePrev();
        swiperNext.slidePrev();
    });

    prevBtn.addEventListener("click", function () {
        swiperPrev.slidePrev();
        swiperMain.slideNext();
        swiperNext.slideNext();
    });

    swiperMain.on("slideChange", (swiper) => {
        const current = document.querySelector(
            ".swiper-main .swiper-slide-active"
        );
        const dishName = current.getAttribute("data-dish-name");
        const dishPrice = current.getAttribute("data-dish-price");

        document.querySelector(".swiper-info-container").style.opacity = "0";
        setTimeout(() => {
            document.querySelector(".dish-name").innerHTML = dishName;
            document.querySelector(".dish-price span").innerHTML = dishPrice;
            document.querySelector(".swiper-info-container").style.opacity =
                "1";
        }, 200);
    });

    // GSAP
    gsap.registerPlugin(ScrollTrigger);
    // const elements = document.querySelectorAll(".color-animated span");

    // var anim = gsap.timeline({
    //   duration: 0.5,
    // });

    // elements.forEach(function (element) {
    //   anim.to(element, { opacity: 1 });
    //   anim.to(element, { opacity: 0.3 }, ">4");
    // });

    // ScrollTrigger.create({
    //   trigger: "#section-5",
    //   start: "top bottom-=20%",
    //   end: "center",
    //   scrub: true,
    //   animation: anim,
    // });

    const movableElementsWrapper =
        document.querySelectorAll(".movable-container");

    const speed = 0.35;

    movableElementsWrapper.forEach(function (elem) {
        elem.onmousemove = tHandler;
    });

    // const options = {
    //   root: null,
    //   rootMargin: "0px",
    //   threshold: 0,
    // };

    // function onScroll() {
    //   var trext = document.querySelector(".trext");
    //   var trextRect = trext.getBoundingClientRect();

    //   // Calculate the progress based on the position of the top of the element
    //   var progress =
    //     ((window.innerHeight - trextRect.top) / trextRect.height) * 100;

    //   // Ensure progress is between 0 and 100
    //   progress = Math.max(0, Math.min(progress, 100));

    //   document.querySelector("d1").style.width = progress + "%";
    // }

    // if (!!window.IntersectionObserver) {
    //   let observer = new IntersectionObserver((entries, observer) => {
    //     entries.forEach((entry) => {
    //       if (entry.isIntersecting) {
    //         onScroll();
    //       }
    //     });
    //   }, options);

    //   document.querySelectorAll(".trext").forEach((el) => {
    //     observer.observe(el);
    //   });

    //   // Listen to the scroll event for more accurate tracking
    //   window.addEventListener("scroll", onScroll);
    // }

    // const options = {
    //   root: null,
    //   rootMargin: "0px",
    //   threshold: 0,
    // };

    // let currentIndex = 0;

    // function onScroll() {
    //   var trext = document.querySelector(".trext");
    //   var trextRect = trext.getBoundingClientRect();

    //   var progress =
    //     ((window.innerHeight - trextRect.top) / trextRect.height) * 100;
    //   progress = Math.max(0, Math.min(progress, 100));

    //   const elements = document.querySelectorAll(".dr");

    //   // Calculate the index based on the progress
    //   const indexToUpdate = Math.floor((progress / 100) * elements.length);

    //   // Check if scrolling down
    //   const isScrollingDown = progress > currentIndex * (100 / elements.length);

    //   // Update the width of the current element only when scrolling down
    //   if (isScrollingDown && elements[currentIndex]) {
    //     elements[currentIndex].style.width = progress + "%";
    //   }

    //   // Update the width of the current element in reverse when scrolling up
    //   if (!isScrollingDown && elements[currentIndex]) {
    //     // elements[currentIndex].style.width = 100 - progress + "%";
    //   }

    //   // Check if the index has changed
    //   if (indexToUpdate !== currentIndex && elements[currentIndex]) {
    //     // Reset the width of the previous element to 100%
    //     elements[currentIndex].style.width = "100%";
    //     currentIndex = indexToUpdate;
    //   }
    // }

    // if (!!window.IntersectionObserver) {
    //   let observer = new IntersectionObserver((entries, observer) => {
    //     entries.forEach((entry) => {
    //       if (entry.isIntersecting) {
    //         onScroll();
    //       }
    //     });
    //   }, options);

    //   document.querySelectorAll(".trext").forEach((el) => {
    //     observer.observe(el);
    //   });

    //   window.addEventListener("scroll", onScroll);
    // }

    // const options = {
    //   root: null,
    //   rootMargin: "0px",
    //   threshold: 0,
    // };

    // let currentIndex = 0;
    // let scrollDownProgress = 0;
    // let scrollUpProgress = 0;

    // function onScroll() {
    //   var trext = document.querySelector(".trext");
    //   var trextRect = trext.getBoundingClientRect();

    //   var progress =
    //     ((window.innerHeight - trextRect.top) / trextRect.height) * 100;
    //   progress = Math.max(0, Math.min(progress, 100));

    //   const elements = document.querySelectorAll(".dr");

    //   // Calculate the index based on the progress
    //   const indexToUpdate = Math.floor((progress / 100) * elements.length);

    //   // Check if scrolling down
    //   const isScrollingDown = progress > currentIndex * (100 / elements.length);

    //   // Update the progress values based on scrolling direction
    //   if (isScrollingDown) {
    //     scrollDownProgress = progress;
    //   } else {
    //     scrollUpProgress = progress;
    //   }

    //   // Update the width of the current element based on scrolling direction
    //   if (elements[currentIndex]) {
    //     if (isScrollingDown) {
    //       elements[currentIndex].style.width = scrollDownProgress + "%";
    //     } else {
    //       elements[currentIndex].style.width = 100 - scrollUpProgress + "%";
    //     }
    //   }

    //   // Check if the index has changed
    //   if (indexToUpdate !== currentIndex && elements[currentIndex]) {
    //     // Reset the width of the previous element to 100%
    //     elements[currentIndex].style.width = "100%";
    //     currentIndex = indexToUpdate;
    //   }
    // }

    // if (!!window.IntersectionObserver) {
    //   let observer = new IntersectionObserver((entries, observer) => {
    //     entries.forEach((entry) => {
    //       if (entry.isIntersecting) {
    //         onScroll();
    //       }
    //     });
    //   }, options);

    //   document.querySelectorAll(".trext").forEach((el) => {
    //     observer.observe(el);
    //   });

    //   window.addEventListener("scroll", onScroll);
    // }

    const textElements = document.querySelectorAll(".text-element");

    var textAnim = gsap.timeline();

    textElements.forEach(function (element) {
        textAnim.to(element, { width: "100%" });
    });

    ScrollTrigger.create({
        trigger: "#section-5",
        start: "top+=20% bottom-=10%",
        end: "bottom-=30% top+=40%",
        scrub: true,
        animation: textAnim,
    });
})();
