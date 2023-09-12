(function() {

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
    const headerHeight = document.getElementById('header').clientHeight;
    document.body.addEventListener("click", (e) => {
        if(e.target.classList.contains('scrollTo')){
            let scrollToSection = e.target.getAttribute('scrollTo');
            const y = document.getElementById(scrollToSection).getBoundingClientRect().top + window.pageYOffset;
            scroll({
                top: y,
                behavior: "smooth"
            });
        }
    });
    
})();