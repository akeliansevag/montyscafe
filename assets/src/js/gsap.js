import {gsap} from 'gsap';
import { ScrollTrigger } from "gsap/ScrollTrigger";


(function () {
    gsap.registerPlugin(ScrollTrigger);
    const elements = document.querySelectorAll(".color-animated span");
    console.log(elements);

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

})();
