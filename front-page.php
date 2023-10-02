<?php get_header(); ?>
<!-- <div id="right-arch" class="position-absolute" style="top:0;right:0">
                <img src="<?= get_template_directory_uri() ?>/assets/images/arch-x.svg" alt="">
            </div> -->
<main id="homepage">

    <section id="section-1" class="home-section-1">
        <div class="d-flex justify-content-center align-items-center h-100 text-center">
            <div class="container">
                <h1 class="fs-1 primary-color animation fadeInUpDown opacity-0">Where stories are told through food</h1>

                <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center mt-5">
                    <button class="button-secondary py-3 px-5 mx-2 my-2 my-sm-4 rounded-pill full">View all Menu</button>
                    <button class="button-tertiary py-3 px-5 mx-2 my-2 my-sm-4 rounded-pill full">Reserve Event</button>
                </div>
            </div>
        </div>

        <div class="pill-container">
            <img class="movable-img position-absolute p-2" src="<?= get_template_directory_uri() ?>/assets/images/juice.svg" alt="Juice" width="91" height="97">
            <img class="movable-img position-absolute p-2" src="<?= get_template_directory_uri() ?>/assets/images/pasta.svg" alt="Pasta" width="96" height="115">
            <img class="movable-img position-absolute p-2" src="<?= get_template_directory_uri() ?>/assets/images/pizza.svg" alt="Pizza" width="99" height="103">
            <img class="movable-img position-absolute p-2" src="<?= get_template_directory_uri() ?>/assets/images/burger.svg" alt="Burger" width="101" height="80">
            <div class="movable-img position-absolute rounded-circle d-none d-sm-flex flex-column flex-lg-row justify-content-center align-items-center">
                <img class="w-auto p-2" src="<?= get_template_directory_uri() ?>/assets/images/chef.png" alt="Chef" width="88" height="88">
                <div class="d-none d-lg-flex flex-column">
                    <h3 class="fs-8 white-color">Chadi</h3>
                    <p class="primary-color">Executive Chef</p>
                </div>
            </div>

            <svg class="arches" viewBox="0 0 811 679" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_178_366" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="811" height="679">
                    <rect width="811" height="679" fill="#344647" fill-opacity="0.3" />
                </mask>
                <g mask="url(#mask0_178_366)">
                    <rect x="120.5" y="120.5" width="570" height="844" rx="285" stroke="url(#paint0_linear_178_366)" />
                    <rect x="60.5" y="60.5" width="690" height="1023" rx="345" stroke="url(#paint1_linear_178_366)" />
                    <rect x="0.5" y="0.5" width="810" height="1199" rx="405" stroke="url(#paint2_linear_178_366)" />
                    <rect x="180.5" y="180.5" width="450" height="784" rx="225" stroke="url(#paint3_linear_178_366)" />
                    <rect x="240.367" y="240.367" width="330.266" height="575.397" rx="165.133" stroke="url(#paint4_linear_178_366)" stroke-width="0.733925" />
                </g>
                <defs>
                    <linearGradient id="paint0_linear_178_366" x1="405.5" y1="120" x2="405.5" y2="770.5" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F2DBC4" />
                        <stop offset="1" stop-color="#344647" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_178_366" x1="405.5" y1="60" x2="416.5" y2="694.5" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F2DBC4" />
                        <stop offset="1" stop-color="#344647" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_178_366" x1="405.5" y1="0" x2="405.5" y2="716" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F2DBC4" />
                        <stop offset="1" stop-color="#344647" />
                    </linearGradient>
                    <linearGradient id="paint3_linear_178_366" x1="405.5" y1="180" x2="405.5" y2="689.5" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F2DBC4" />
                        <stop offset="1" stop-color="#344647" />
                    </linearGradient>
                    <linearGradient id="paint4_linear_178_366" x1="405.5" y1="240" x2="405.5" y2="613.935" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F2DBC4" />
                        <stop offset="1" stop-color="#344647" />
                    </linearGradient>
                </defs>
            </svg>
        </div>

        <!-- <div class="pill-container">
                <div class="pill pill-1">
                    <img class="movable-img position-absolute p-2" src="<?= get_template_directory_uri() ?>/assets/images/juice.svg" alt="Juice" width="91" height="97">
                    <img class="movable-img position-absolute p-2" src="<?= get_template_directory_uri() ?>/assets/images/pasta.svg" alt="Pasta" width="96" height="115">
                    <img class="movable-img position-absolute p-2" src="<?= get_template_directory_uri() ?>/assets/images/pizza.svg" alt="Pizza" width="99" height="103">
                    <img class="movable-img position-absolute p-2" src="<?= get_template_directory_uri() ?>/assets/images/burger.svg" alt="Burger" width="101" height="80">
                    <div class="movable-img position-absolute rounded-circle d-none d-sm-flex flex-column flex-lg-row justify-content-center align-items-center">
                        <img class="w-auto p-2" src="<?= get_template_directory_uri() ?>/assets/images/chef.png" alt="Chef" width="88" height="88">
                        <div class="d-none d-lg-flex flex-column">
                            <h3 class="fs-8 white-color">Chadi</h3>
                            <p class="primary-color">Executive Chef</p>
                        </div>
                    </div>
                     <img class="movable-img position-absolute w-2" src="<?= get_template_directory_uri() ?>/assets/images/hotdog.svg" alt="Hotdog" width="84" height="53">
                </div>
                <div class="pill pill-2"></div>
                <div class="pill pill-3"></div>
                <div class="pill pill-4"></div>
                <div class="pill pill-5"></div>
            </div> -->

        <!-- <div class="overlay overlay-1 position-absolute start-0 w-100"></div>
            <div class="overlay overlay-2 position-absolute start-0 w-100"></div> -->

        <div class="scroll-hint-wrapper scrollTo" scrollTo="section-2">
            <div class="scroll-dot"></div>
        </div>
    </section>

    <section id="section-2" class="full-height home-section-2 pb-5">
        <div class="container">
            <div class="reserve-section primary-bg rounded-5 w-100 px-5 py-6 d-flex align-items-center justify-content-between">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4">
                        <img class="d-none d-lg-block" src="<?= get_template_directory_uri() ?>/assets/images/reserve3.png" alt="">
                    </div>

                    <div class="col-lg-4">
                        <div class="reserve-text text-center">
                            <p class="fs-5">Get the perfect dessert for any occasion</p>
                            <a href="#" class="d-inline-block button-secondary py-3 px-5 mx-2 my-2 my-sm-4 rounded-pill full">Reserve</a>
                        </div>
                    </div>

                    <div class="col-lg-4 text-center">
                        <div class="reserve-video position-relative d-block d-lg-flex justify-content-end mt-4 mt-lg-0">
                            <div class="d-inline-block">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/reserve-video-image.png?v=1" alt="">
                                <div class="position-absolute reserve-play-container">
                                    <a data-fancybox href="<?= get_template_directory_uri() ?>/assets/videos/our-story.mp4" class="d-flex align-items-center hover-effect">
                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="30" cy="30" r="30" fill="white" />
                                            <path d="M39.0825 31.8953C40.3224 30.9359 40.3224 29.0642 39.0825 28.1048C35.3357 25.2055 31.1517 22.9204 26.6872 21.3348L25.8717 21.0451C24.3113 20.4909 22.6632 21.5466 22.4519 23.1573C21.8617 27.6575 21.8617 32.3425 22.4519 36.8428C22.6632 38.4535 24.3113 39.5092 25.8716 38.955L26.6872 38.6653C31.1517 37.0798 35.3357 34.7945 39.0825 31.8953Z" fill="black" />
                                        </svg>
                                        <span class="px-2 text-white">Watch our story</span>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
    
    <section id="section-3" class="home-section-3 py-3 overflow-x-hidden">
        <div class="container">
            <div class="row vh-60 justify-content-between py-5">
                <div class="col-3 d-flex align-self-end">
                    <div style="height:30vh;" class="d-flex align-items-center">
                        <svg style="position:absolute; top:0; right:0; height:100%; transform:rotate(180deg)" viewBox="0 0 363 334" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_464_12384" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" style="height:100%">
                            <rect x="0.5" y="0.5" width="333" height="493" rx="166.5" transform="matrix(4.37114e-08 1 1 -4.37114e-08 2.18557e-08 3.04957e-05)" stroke="url(#paint0_linear_464_12384)"/>
                            </mask>
                            <g mask="url(#mask0_464_12384)">
                            <rect y="3.05176e-05" width="363" height="334" fill="url(#paint1_linear_464_12384)"/>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear_464_12384" x1="167" y1="0" x2="167" y2="380.292" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F2DBC4"/>
                            <stop offset="1" stop-color="#344647"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_464_12384" x1="-1.35228e-06" y1="167" x2="363" y2="167" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F2DBC4"/>
                            <stop offset="1" stop-color="#344647"/>
                            </linearGradient>
                            </defs>
                        </svg>
                        <div class="swiper swiper-prev swiper-v me-auto overflow-x-hidden pe-4 px-lg-5" style="height:100%;border-top-right-radius: 1000px; border-bottom-right-radius: 1000px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div style="width:100%" class="d-flex align-items-center">
                        <svg style="position:absolute; top:0px; left:50%; width:80%; transform:translateX(-50%)" viewBox="0 0 571 614" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_486_12389)">
                            <rect x="0.5" y="0.5" width="570" height="844" rx="285" stroke="url(#paint0_linear_486_12389)"/>
                            <rect x="60.5" y="60.5" width="450" height="784" rx="225" stroke="url(#paint1_linear_486_12389)"/>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear_486_12389" x1="285.5" y1="0" x2="285.5" y2="650.5" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F2DBC4"/>
                            <stop offset="1" stop-color="#344647"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_486_12389" x1="285.5" y1="60" x2="285.5" y2="569.5" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F2DBC4"/>
                            <stop offset="1" stop-color="#344647"/>
                            </linearGradient>
                            <clipPath id="clip0_486_12389">
                            <rect width="571" height="614" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <div class="swiper swiper-main text-center overflow-x-hidden">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide d-flex justify-content-center align-items-center mt-7"><img class="w-50" src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center mt-7"><img class="w-50" src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center mt-7"><img class="w-50" src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center mt-7"><img class="w-50" src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center mt-7"><img class="w-50" src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center mt-7"><img class="w-50" src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center mt-7"><img class="w-50" src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center mt-7"><img class="w-50" src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center mt-7"><img class="w-50" src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div style="height:30vh;" class="d-flex align-items-center">
                        <svg style="position:absolute; top:0; left:0; height:100%" viewBox="0 0 363 334" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_464_12384" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" style="height:100%">
                            <rect x="0.5" y="0.5" width="333" height="493" rx="166.5" transform="matrix(4.37114e-08 1 1 -4.37114e-08 2.18557e-08 3.04957e-05)" stroke="url(#paint0_linear_464_12384)"/>
                            </mask>
                            <g mask="url(#mask0_464_12384)">
                            <rect y="3.05176e-05" width="363" height="334" fill="url(#paint1_linear_464_12384)"/>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear_464_12384" x1="167" y1="0" x2="167" y2="380.292" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F2DBC4"/>
                            <stop offset="1" stop-color="#344647"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_464_12384" x1="-1.35228e-06" y1="167" x2="363" y2="167" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F2DBC4"/>
                            <stop offset="1" stop-color="#344647"/>
                            </linearGradient>
                            </defs>
                        </svg>

                        <div class="swiper swiper-next swiper-v ms-auto overflow-x-hidden ps-4 px-lg-5" style="width:100%;height:100%;border-top-left-radius: 1000px; border-bottom-left-radius: 1000px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="text-center d-flex justify-content-center my-3">
                <div class="prev-btn"><img src="<?= get_template_directory_uri() ?>/assets/images/Caret-Left.svg" alt=""></div>
                <div class="next-btn"><img src="<?= get_template_directory_uri() ?>/assets/images/Caret-Right.svg" alt=""></div>
            </div>

        </div>

    </section>

    <section id="section-4" class="full-height home-section-4 py-3 d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src=" <?= get_template_directory_uri() ?>/assets/images/locate-us.jpg" alt="">
                    <div class="primary-color mt-3 fs-5">
                        <p>Hamra, Lebanon, <br>Gefinor Buildings, Bloc A, GF</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pt-10">
                        <h3 class="fs-2 primary-color">Locate us</h3>
                        <div class="text-white mt-4 mb-4">
                            <p>Choose from our famous cheesecake, chocolate chip cookie, and our delicious, sugar-free, vegan chocolate custard dessert. Each contains ingredients that are pure, unprocessed, organic, and gluten-free.</p>
                        </div>

                        <a data-fancybox href="https://www.google.com/maps/place/Starbucks/@33.902087,35.4773856,14z/data=!4m10!1m2!2m1!1sstarbucks!3m6!1s0x151f17390dc9974f:0xa77fe6b6482b3afa!8m2!3d33.9002981!4d35.4999232!15sCglzdGFyYnVja3MiA4gBAVoLIglzdGFyYnVja3OSAQtjb2ZmZWVfc2hvcOABAA!16s%2Fg%2F11ql_49slm?entry=ttu" class="d-inline-block button-secondary py-3 px-5 mx-2 my-2 my-sm-4 rounded-pill full">Get directions</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="section-5" class="full-height home-section-5 py-3 d-flex align-items-center">
        <div class="container">
            <div class="review-item">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="reviewer">

                        </div>
                    </div>
                    <div class="col-lg-10">
                        <p>Amazing experience and exquisite food that transports you through its unique flavors and combinations.</p>
                    </div>
                </div>
            </div>
            <div class="review-item">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="reviewer">

                        </div>
                    </div>
                    <div class="col-lg-10">
                        <p>Amazing experience and exquisite food that transports you through its unique flavors and combinations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/homepage.js"></script>
<?php get_footer(); ?>