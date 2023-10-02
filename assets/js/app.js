(function () {
  const swiperPrev = new Swiper(".swiper-prev", {
    loop: true,
    direction: "vertical",
    allowTouchMove: false,
    autoHeight: true,
    slidesPerView: 1,
    spaceBetween: 100,
    speed: 1000,
  });

  const swiperMain = new Swiper(".swiper-main", {
    loop: true,
    allowTouchMove: false,
    slidesPerView: 1,
    spaceBetween: 100,
    speed: 1000,
  });

  const swiperNext = new Swiper(".swiper-next", {
    loop: true,
    direction: "vertical",
    allowTouchMove: false,
    autoHeight: true,
    slidesPerView: 1,
    spaceBetween: 100,
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

  //   const swiper = new Swiper(".selection-slider", {
  //     loop: true,
  //     speed: 800,
  //     navigation: {
  //       nextEl: ".next-btn",
  //       prevEl: ".prev-btn",
  //     },
  //     slidesPerView: 3,
  //     centeredSlides: true,
  //     effect: "creative",
  //     creativeEffect: {
  //       limitProgress: 2,
  //       prev: {
  //         translate: ["-110%", 100, 0],
  //         scale: 0.5,
  //         rotate: [0, 0, 90],
  //       },
  //       next: {
  //         translate: ["110%", -100, 0],
  //         scale: 0.5,
  //         rotate: [0, 0, 90],
  //       },
  //     },
  //   });

  //   let archRight = document.getElementById("right-arch");
  //   let element = document.querySelector(".swiper-slide-next");

  //   function getElementTop(element) {
  //     const rect = element.getBoundingClientRect();
  //     const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  //     return rect.top + scrollTop;
  //   }

  //   function setArchPosition() {
  //     const topPosition = getElementTop(element);
  //     const elementHeight = element.getBoundingClientRect().height;
  //     const top = topPosition - elementHeight / 2;
  //     archRight.style.top = top + "px";
  //   }
  //   setArchPosition();

  //   window.addEventListener("resize", function () {
  //     setArchPosition();
  //   });

  //   swiper.on("slideChange", (swiper) => {
  //     const elem = document.querySelector(".dish-active");
  //     elem.classList.remove("dish-active");
  //     const current = document.querySelector(
  //       '[data-swiper-slide-index="' + swiper.realIndex + '"'
  //     );
  //     const dishName = current.getAttribute("data-dish-name");
  //     const dishPrice = current.getAttribute("data-dish-price");
  //     setTimeout(() => {
  //       document.querySelector(".dish-name").innerHTML = dishName;
  //       document.querySelector(".dish-price span").innerHTML = dishPrice;
  //       elem.classList.add("dish-active");
  //     }, 200);
  //   });

  Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });
  // Animations
  document.addEventListener("DOMContentLoaded", function () {
    var animationElements = [].slice.call(
      document.querySelectorAll(".animation")
    );
    if ("IntersectionObserver" in window) {
      let animationElementsObserver = new IntersectionObserver(function (
        entries,
        observer
      ) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            let animationEl = entry.target;
            if (animationEl.classList.contains("fadeInRightLeft")) {
              animationEl.classList.add("animation-fade-right-left");
            } else if (animationEl.classList.contains("fadeInLeftRight")) {
              animationEl.classList.add("animation-fade-left-right");
            } else if (animationEl.classList.contains("fadeInUpDown")) {
              animationEl.classList.add("animation-fade-up-down");
            } else if (animationEl.classList.contains("fadeInDownUp")) {
              animationEl.classList.add("animation-fade-down-up");
            } else if (animationEl.classList.contains("scaleDownUp")) {
              animationEl.classList.add("animation-scale-up-fade");
            } else if (animationEl.classList.contains("scaleUpDown")) {
              animationEl.classList.add("animation-scale-up-fade");
            } else if (animationEl.classList.contains("shake")) {
              animationEl.classList.add("animation-shake");
            } else if (animationEl.classList.contains("stagger-text")) {
              animationEl.classList.add("animation-stagger-text");
            }
            animationEl.classList.remove("opacity-0");
            animationElementsObserver.unobserve(animationEl);
          }
        });
      });
      animationElements.forEach(function (animationEl) {
        animationElementsObserver.observe(animationEl);
      });
    } else {
      // Possibly fall back to event handlers here
    }
  });

  let menuBtn = document.querySelector(".menu-btn");
  let navLinks = document.querySelector(".mobile-nav--list .nav");

  menuBtn.addEventListener("click", () => {
    if (navLinks.classList.contains("open")) {
      navLinks.classList.remove("open");
      menuBtn.classList.remove("toggle");
      document.body.classList.remove("overflow-hidden");
    } else {
      navLinks.classList.add("open");
      menuBtn.classList.add("toggle");
      document.body.classList.add("overflow-hidden");
    }
  });
})();
