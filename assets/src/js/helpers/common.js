(function () {
  // // Sections
  // const options = {
  //     rootMargin: '0px 0px -0.5% 0px', //'0px 0px -0.5% 0px',
  //     threshold: 0.5 // half of item height 0.5
  // }

  // if(!!window.IntersectionObserver){
  // 	let observer = new IntersectionObserver((entries, observer) => {
  // 		entries.forEach(entry => {
  // 			let target_id = entry.target.id
  // 			let scrollTo = document.querySelector(".scrollTo[scrollTo=" + target_id + "]");
  // 			if(entry.isIntersecting > 0){
  //                 if(!scrollTo.classList.contains('active')) scrollTo.classList.add('active');
  // 				// observer.unobserve(entry.target);
  // 			}
  // 			else{
  // 				scrollTo.classList.remove('active');
  // 			}
  // 		});
  // 	}, options);
  // 	document.querySelectorAll('.section').forEach(el => { observer.observe(el) });
  // }

  // Scroll To Section (Scroll Hint)
  const headerHeight = document.getElementById("header").clientHeight;
  document.body.addEventListener("click", (e) => {
    if (e.target.classList.contains("scrollTo")) {
      let scrollToSection = e.target.getAttribute("scrollTo");
      const y =
        document.getElementById(scrollToSection).getBoundingClientRect().top +
        window.pageYOffset -
        headerHeight;

      scroll({
        top: y,
        behavior: "smooth",
      });
    }
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

  // Mobile Menu
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
