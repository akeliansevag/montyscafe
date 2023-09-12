<?php get_header(); ?>

<main id="homepage">

    <section id="section-1" class="section-1">
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
            <div class="movable-img position-absolute rounded-circle d-none d-sm-flex flex-column flex-md-row justify-content-center align-items-center">
                <img class="w-auto p-2" src="<?= get_template_directory_uri() ?>/assets/images/chef.png" alt="Chef" width="88" height="88">
                <div class="d-none d-md-flex flex-column">
                    <h3 class="fs-6 white-color">Chadi</h3>
                    <p class="primary-color">Executive Chef</p>
                </div>
            </div>

            <svg width="811" height="679" viewBox="0 0 811 679" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <div class="movable-img position-absolute rounded-circle d-none d-sm-flex flex-column flex-md-row justify-content-center align-items-center">
                        <img class="w-auto p-2" src="<?= get_template_directory_uri() ?>/assets/images/chef.png" alt="Chef" width="88" height="88">
                        <div class="d-none d-md-flex flex-column">
                            <h3 class="fs-6 white-color">Chadi</h3>
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

    <section id="section-2" class="section-2 vh-100">

    </section>

    <section id="section-3" class="section-3 vh-100 primary-bg">

    </section>
</main>

<?php get_footer(); ?>

<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/homepage.js"></script>