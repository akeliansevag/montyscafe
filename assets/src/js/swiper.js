import Swiper from "swiper";

(function () {
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

    swiperMain.on("slideChange", (swiper) => {
      

      const current = document.querySelector(".swiper-main .swiper-slide-active");
      const dishName = current.getAttribute("data-dish-name");
      const dishPrice = current.getAttribute("data-dish-price"); 

      document.querySelector(".swiper-info-container").style.opacity="0"
        setTimeout(() => {
          document.querySelector(".dish-name").innerHTML = dishName;
          document.querySelector(".dish-price span").innerHTML = dishPrice;
        document.querySelector(".swiper-info-container").style.opacity = "1"
      }, 200);

    });
})();
