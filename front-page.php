<?php get_header(); ?>

<main id="homepage" class="homepage">
    <section id="section-1" class="section-1 pt-5 movable-container">
        <div class="d-flex justify-content-center align-items-center h-100 text-center">
            <div class="position-absolute w-100 pill">
                <div class="">
                    <img id="pill-1" data-value="-5" class="p-2 movable-img position-absolute burger" src="<?= get_template_directory_uri() ?>/assets/images/burger.svg" alt="Burger">
                    <img id="pill-2" data-value="3" class="p-2 movable-img position-absolute pizza" src="<?= get_template_directory_uri() ?>/assets/images/pizza.svg" alt="Pizza">
                    <div id="pill-chef" data-value="-1" class="movable-img position-absolute d-none d-lg-flex flex-column flex-lg-row justify-content-center align-items-center">
                        <img class="w-auto p-2  rounded-circle " src="<?= get_template_directory_uri() ?>/assets/images/chef.png" alt="Chef" width="88" height="88">
                        <div class="d-none d-lg-flex flex-column text-start">
                            <h3 class="fs-8 white-color">Chadi Nassif</h3>
                            <p class="primary-color">Executive Chef</p>
                        </div>
                    </div>
                    <img id="pill-4" data-value="7" class="p-2 movable-img position-absolute pasta" src="<?= get_template_directory_uri() ?>/assets/images/pasta.svg" alt="Pasta">
                    <img id="pill-5" data-value="-4" class="p-2 movable-img position-absolute juice" src="<?= get_template_directory_uri() ?>/assets/images/juice.svg" alt="juice">
                    <svg class="w-100 arches h-100" viewBox="0 0 811 679" fill="none" xmlns="http://www.w3.org/2000/svg">
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

            </div>
            <div class="container">
                <h1 class="fs-1 primary-color animation fadeInUpDown opacity-0 test2">Where stories are told through food</h1>

                <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center mt-3 mt-sm-6">
                    <a href="<?= home_url() ?>/menu/a-great-start/" class="button-secondary py-3 px-5 mx-2 rounded-pill full">View all Menu</a>
                    <a href="<?= home_url() ?>/private-events" class="button-tertiary py-3 px-5 mx-2 mt-2 mt-sm-0 rounded-pill full">Reserve Event</a>
                </div>
            </div>
        </div>

        <div class="scroll-hint-wrapper scrollTo" scrollTo="section-2">
            <div class="scroll-dot"></div>
        </div>
    </section>

    <section id="section-2" class="section-2 mt-9">
        <div class="container">
            <div class="reserve-section primary-bg rounded-5 w-100 px-5 py-6 px-2k-8 py-2k-9">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4">
                        <img class="d-none d-lg-block w-100" src="<?= get_template_directory_uri() ?>/assets/images/reserve3.png" alt="">
                    </div>

                    <div class="col-lg-4">
                        <div class="reserve-text text-center">
                            <p class="fs-5 test">Get the perfect dessert for any occasion</p>
                            <a href="#" class="d-inline-block button-secondary py-3 px-5 mx-2 my-2 my-sm-4 rounded-pill full">Reserve</a>
                        </div>
                    </div>

                    <div class="col-lg-4 text-center">
                        <div class="reserve-video position-relative d-block d-lg-flex justify-content-end mt-4 mt-lg-0">
                            <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/reserve-video-image.png?v=1" alt="">
                            <div class="position-absolute reserve-play-container">
                                <a data-fancybox href="<?= get_template_directory_uri() ?>/assets/videos/our-story.mp4" class="d-flex align-items-center hover-effect">
                                    <svg width="130" height="130" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
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
    </section>

    <section id="section-3" class="section-3 mt-9">
        <div class="container">
            <div class="row justify-content-between vh-60">
                <div class="col-md-3 col-fhd-3 d-flex flex-column justify-content-between">
                    <div class="text-center text-lg-start">
                        <h2 class="primary-color fs-3">Discover our indulging selection</h2>
                    </div>
                    <div style="height:30vh;" class="d-none d-md-flex align-items-center mt-6">
                        <svg style="position:absolute; top:0; right:0; height:100%; transform:rotate(180deg)" viewBox="0 0 363 334" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_464_12384" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" style="height:100%">
                                <rect x="0.5" y="0.5" width="333" height="493" rx="166.5" transform="matrix(4.37114e-08 1 1 -4.37114e-08 2.18557e-08 3.04957e-05)" stroke="url(#paint0_linear_464_12384)" />
                            </mask>
                            <g mask="url(#mask0_464_12384)">
                                <rect y="3.05176e-05" width="363" height="334" fill="url(#paint1_linear_464_12384)" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_464_12384" x1="167" y1="0" x2="167" y2="380.292" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F2DBC4" />
                                    <stop offset="1" stop-color="#344647" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_464_12384" x1="-1.35228e-06" y1="167" x2="363" y2="167" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F2DBC4" />
                                    <stop offset="1" stop-color="#344647" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <div class="swiper swiper-prev swiper-v me-auto overflow-x-hidden pe-4 px-lg-5" style="width:100%; height:100%;border-top-right-radius: 1000px; border-bottom-right-radius: 1000px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide d-flex align-items-center justify-content-end"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center justify-content-end"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center justify-content-end"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center justify-content-end"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center justify-content-end"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center justify-content-end"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center justify-content-end"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center justify-content-end"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center justify-content-end"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xl-4 col-fhd-4">
                    <div style="width:100%; height:100%" class="d-flex align-items-center">
                        <svg viewBox="0 0 571 614" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-none d-md-block" style="z-index:2;position:absolute; top:0px; left:50%; width:101%;height:100%; transform:translateX(-50%)">
                            <g clip-path="url(#clip0_570_6587)">
                                <path d="M1 338L0 2H571V319H548.5C541.667 227.333 478.6 42.8 281 38C83.4 33.2 11.3333 236 1 338Z" fill="#344647" stroke="#344647" />
                                <mask id="path-2-inside-1_570_6587" fill="white">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M285.5 0C127.823 0 0 127.823 0 285.5V559.5C0 717.177 127.823 845 285.5 845C443.177 845 571 717.177 571 559.5V285.5C571 127.823 443.177 0 285.5 0ZM285.5 845C160.96 845 60 744.04 60 619.5V285.5C60 160.96 160.96 60 285.5 60C410.04 60 511 160.96 511 285.5V619.5C511 744.04 410.04 845 285.5 845Z" />
                                </mask>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M285.5 0C127.823 0 0 127.823 0 285.5V559.5C0 717.177 127.823 845 285.5 845C443.177 845 571 717.177 571 559.5V285.5C571 127.823 443.177 0 285.5 0ZM285.5 845C160.96 845 60 744.04 60 619.5V285.5C60 160.96 160.96 60 285.5 60C410.04 60 511 160.96 511 285.5V619.5C511 744.04 410.04 845 285.5 845Z" fill="#344647" />
                                <path d="M1 285.5C1 128.375 128.375 1 285.5 1V-1C127.27 -1 -1 127.27 -1 285.5H1ZM1 559.5V285.5H-1V559.5H1ZM285.5 844C128.375 844 1 716.625 1 559.5H-1C-1 717.73 127.27 846 285.5 846V844ZM570 559.5C570 716.625 442.625 844 285.5 844V846C443.73 846 572 717.73 572 559.5H570ZM570 285.5V559.5H572V285.5H570ZM285.5 1C442.625 1 570 128.375 570 285.5H572C572 127.27 443.73 -1 285.5 -1V1ZM285.5 844C161.512 844 61 743.488 61 619.5H59C59 744.593 160.408 846 285.5 846V844ZM61 619.5V285.5H59V619.5H61ZM61 285.5C61 161.512 161.512 61 285.5 61V59C160.408 59 59 160.407 59 285.5H61ZM285.5 61C409.488 61 510 161.512 510 285.5H512C512 160.408 410.593 59 285.5 59V61ZM510 285.5V619.5H512V285.5H510ZM510 619.5C510 743.488 409.488 844 285.5 844V846C410.593 846 512 744.593 512 619.5H510Z" fill="url(#paint0_linear_570_6587)" mask="url(#path-2-inside-1_570_6587)" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_570_6587" x1="285.5" y1="0" x2="285.5" y2="650.5" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F2DBC4" />
                                    <stop offset="1" stop-color="#344647" />
                                </linearGradient>
                                <clipPath id="clip0_570_6587">
                                    <rect width="571" height="614" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <div class="swiper swiper-main text-center overflow-x-hidden">
                            <div class="swiper-wrapper align-items-center">
                                <div data-dish-name="THE BEEFs" data-dish-price="153" class="swiper-slide d-flex justify-content-center align-items-center py-5"><img class="w-60" src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div data-dish-name="THE BEEssdF" data-dish-price="143" class="swiper-slide d-flex justify-content-center align-items-center py-5"><img class="w-60" src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div data-dish-name="THE ewrBEEF" data-dish-price="103" class="swiper-slide d-flex justify-content-center align-items-center py-5"><img class="w-60" src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div data-dish-name="THE BdsfEEF" data-dish-price="193" class="swiper-slide d-flex justify-content-center align-items-center py-5"><img class="w-60" src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div data-dish-name="THE BEfdgEF" data-dish-price="183" class="swiper-slide d-flex justify-content-center align-items-center py-5"><img class="w-60" src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div data-dish-name="THE BEghrEF" data-dish-price="173" class="swiper-slide d-flex justify-content-center align-items-center py-5"><img class="w-60" src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div data-dish-name="THE BfhjEEF" data-dish-price="163" class="swiper-slide d-flex justify-content-center align-items-center py-5"><img class="w-60" src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div data-dish-name="THE BEhgjEF" data-dish-price="153" class="swiper-slide d-flex justify-content-center align-items-center py-5"><img class="w-60" src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div data-dish-name="THE BEsdfEF" data-dish-price="313" class="swiper-slide d-flex justify-content-center align-items-center py-5"><img class="w-60" src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-fhd-3 d-flex flex-column justify-content-between order-">
                    <div style="height:30vh;" class="d-md-flex d-none align-items-center">
                        <svg style="position:absolute; top:0; left:0; height:100%" viewBox="0 0 363 334" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_464_12384" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" style="height:100%">
                                <rect x="0.5" y="0.5" width="333" height="493" rx="166.5" transform="matrix(4.37114e-08 1 1 -4.37114e-08 2.18557e-08 3.04957e-05)" stroke="url(#paint0_linear_464_12384)" />
                            </mask>
                            <g mask="url(#mask0_464_12384)">
                                <rect y="3.05176e-05" width="363" height="334" fill="url(#paint1_linear_464_12384)" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_464_12384" x1="167" y1="0" x2="167" y2="380.292" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F2DBC4" />
                                    <stop offset="1" stop-color="#344647" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_464_12384" x1="-1.35228e-06" y1="167" x2="363" y2="167" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F2DBC4" />
                                    <stop offset="1" stop-color="#344647" />
                                </linearGradient>
                            </defs>
                        </svg>

                        <div class="swiper swiper-next swiper-v ms-auto overflow-x-hidden ps-4 px-lg-5" style="width:100%;height:100%;border-top-left-radius: 1000px; border-bottom-left-radius: 1000px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide d-flex align-items-center"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""></div>
                                <div class="swiper-slide d-flex align-items-center"><img class="w-75" src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-flex mt-3 mt-md-0">
                        <a class="m-auto d-inline-block text-center button-secondary py-3 px-5  my-2 my-sm-4 rounded-pill" href="<?= home_url() ?>/menu/a-great-start/">View all Menu</a>
                    </div>

                </div>
            </div>
            <div class="z-2 mt-md-8 mt-xl-6">
                <div class="swiper-info-container text-center mt-3">
                    <h3 class="dish-name white-color fs-4">THE BEEF CORDON CRUNCH</h3>
                    <h4 class="dish-price primary-color fs-6 fw-normal">$<span>11.00</span></h4>
                </div>
                <div class="text-center d-flex justify-content-center mt-3">
                    <div class="prev-btn cursor-pointer"><img src="<?= get_template_directory_uri() ?>/assets/images/Caret-Left.svg" alt=""></div>
                    <div class="next-btn cursor-pointer"><img src="<?= get_template_directory_uri() ?>/assets/images/Caret-Right.svg" alt=""></div>
                </div>
                <div class="d-flex d-md-none mt-5 mt-md-0">
                    <a class="m-auto d-inline-block text-center button-secondary py-3 px-5  my-2 my-sm-4 rounded-pill" href="<?= home_url() ?>/menu/a-great-start/">View all Menu</a>
                </div>
            </div>
        </div>
    </section>


    <section id="section-4" class="section-4 mt-9 d-flex align-items-center justify-content-center">
        <div class="position-absolute w-100 pill top-0 d-none d-md-block">
            <div class="">
                <svg class="w-100 arches h-100" viewBox="0 0 811 679" fill="none" xmlns="http://www.w3.org/2000/svg">
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
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="w-100" src=" <?= get_template_directory_uri() ?>/assets/images/locate-us.jpg" alt="">
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

    <section id="section-5" class="section-5 mt-9 d-flex align-items-center">
        <div class="container">
            <div class="review-item py-5">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="reviewer d-flex align-items-center">
                            <img width="150" class="rounded-circle me-2 mb-2 mb-lg-0" src="<?= get_template_directory_uri() ?>/assets/images/reviewer1.webp" alt="Reviewer picture">
                            <div>
                                <h6 class="white-color fs-7">James Bond</h6>
                                <h6 class="primary-color">Founder & Chairman</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="ttext">

                            <div class="text2">
                                <div id="">
                                    <div class="text-element-container">
                                        <div class="text-element">Lorem ipsum dolor</div>
                                        <span>Lorem ipsum dolor</span>
                                    </div>
                                    <br>
                                    <div class="text-element-container">
                                        <div class="text-element">
                                            sit amet consectetur adip
                                        </div>
                                        <span>sit amet consectetur adip</span>
                                    </div>
                                    <br>
                                    <div class="text-element-container">
                                        <div class="text-element">
                                            sit amet consectetur
                                        </div>
                                        <span>sit amet consectetur</span>
                                    </div>
                                    <br>
                                    <div class="text-element-container">
                                        <div class="text-element">
                                            sit amet adip
                                        </div>
                                        <span>sit amet adip</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <h4 class="color-animated fs-2 primary-color mt-0 mt-lg-n3"><span>Amazing experience and exquisite food that</span> <span> transports you through </span> <span>unique flavors and combinations.</span></h4> -->
                    </div>
                </div>
            </div>

            <div class="review-item py-5">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="reviewer d-flex align-items-center">
                            <img width="150" class="rounded-circle me-2 mb-2 mb-lg-0" src="<?= get_template_directory_uri() ?>/assets/images/reviewer2.webp" alt="Reviewer picture">
                            <div>
                                <h6 class="white-color fs-7">Leonardo DiCaprio</h6>
                                <h6 class="primary-color">Founder & Chairman</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="ttext">

                            <div class="text2">
                                <div id="">
                                    <div class="text-element-container">
                                        <div class="text-element">Lorem ipsum dolor</div>
                                        <span>Lorem ipsum dolor</span>
                                    </div>
                                    <br>
                                    <div class="text-element-container">
                                        <div class="text-element">
                                            sit amet consectetur adip
                                        </div>
                                        <span>sit amet consectetur adip</span>
                                    </div>
                                    <br>
                                    <div class="text-element-container">
                                        <div class="text-element">
                                            sit amet consectetur
                                        </div>
                                        <span>sit amet consectetur</span>
                                    </div>
                                    <br>
                                    <div class="text-element-container">
                                        <div class="text-element">
                                            sit amet adip
                                        </div>
                                        <span>sit amet adip</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <h4 class="color-animated fs-2 primary-color mt-0 mt-lg-n3"><span>Amazing experience and exquisite food that</span> <span> transports you through </span> <span>unique flavors and combinations.</span></h4> -->
                    </div>
                </div>
            </div>
            <!-- <div class="review-item mt-5">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="reviewer d-flex align-items-center">
                            <img width="150" class="rounded-circle me-2 mb-2 mb-lg-0" src="<?= get_template_directory_uri() ?>/assets/images/reviewer2.webp" alt="Reviewer picture">
                            <div>
                                <h6 class="white-color fs-7">Leonardo DiCaprio</h6>
                                <h6 class="primary-color">Founder & Chairman</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h4 class="color-animated fs-2 primary-color mt-0 mt-lg-n3"><span>Amazing experience and exquisite</span> <span>food that transports you</span> <span>through its unique flavors and combinations.</span></h4>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
</main>

<?php get_footer(); ?>