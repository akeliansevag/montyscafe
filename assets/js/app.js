(function() {

    const swiper = new Swiper('.selection-slider', {
        loop: true,     
        navigation: {
            nextEl: ".next-btn",
            prevEl: ".prev-btn",
        },
        slidesPerView: 3,
        centeredSlides: true,
        effect: "creative",
        creativeEffect: {
            limitProgress: 2,
            prev: {
                translate: ["-100%", 100 , 0],
                scale: 0.5,
                rotate: [0,0,90]
            },
            next: {
                translate: ["100%", -100, 0],
                scale: 0.5,
                rotate: [0,0,90]
            }
        }
    });
    swiper.on('slideChangeTransitionStart', (swiper)=>{
        const all = document.querySelectorAll('.dish-active');
        all.forEach((elem)=>{
            elem.classList.remove('dish-active');
        });
    });

    swiper.on("slideChangeTransitionEnd",(swiper)=>{
        const current = document.querySelector('[data-swiper-slide-index="'+swiper.realIndex+'"');
    });

    
    Fancybox.bind("[data-fancybox]", {
    // Your custom options
    }); 
    // Animations
    document.addEventListener("DOMContentLoaded", function() {
        var animationElements = [].slice.call(document.querySelectorAll(".animation"));
        if ("IntersectionObserver" in window) {
            let animationElementsObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let animationEl = entry.target;
                        if(animationEl.classList.contains('fadeInRightLeft')){
                            animationEl.classList.add('animation-fade-right-left')
                        }
                        else if(animationEl.classList.contains('fadeInLeftRight')){
                            animationEl.classList.add('animation-fade-left-right')
                        }
                        else if(animationEl.classList.contains('fadeInUpDown')){
                            animationEl.classList.add('animation-fade-up-down')
                        }
                        else if(animationEl.classList.contains('fadeInDownUp')){
                            animationEl.classList.add('animation-fade-down-up')
                        }
                        else if(animationEl.classList.contains('scaleDownUp')){
                            animationEl.classList.add('animation-scale-up-fade')
                        }
                        else if(animationEl.classList.contains('scaleUpDown')){
                            animationEl.classList.add('animation-scale-up-fade')
                        }
                        else if(animationEl.classList.contains('shake')){
                            animationEl.classList.add('animation-shake')
                        }
                        else if(animationEl.classList.contains('stagger-text')){
                            animationEl.classList.add('animation-stagger-text')
                        }
                        animationEl.classList.remove('opacity-0')
                        animationElementsObserver.unobserve(animationEl);
                    }
                });
            });
            animationElements.forEach(function(animationEl) {
                animationElementsObserver.observe(animationEl);
            });
        } else {
        // Possibly fall back to event handlers here
        }
    });


    let menuBtn = document.querySelector(".menu-btn");
    let navLinks = document.querySelector(".mobile-nav--list .nav");

    menuBtn.addEventListener("click", () => {
        if(navLinks.classList.contains("open")){
            navLinks.classList.remove("open");
            menuBtn.classList.remove("toggle");
            document.body.classList.remove("overflow-hidden");
        }
        else{
            navLinks.classList.add("open");
            menuBtn.classList.add("toggle");
            document.body.classList.add("overflow-hidden");
        }
    });

})();