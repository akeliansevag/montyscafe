<?php get_header(); ?>

<main id="about-us" class="about-us">
    <section class="section-1 d-flex align-items-center">
        <img width="233px" class="position-absolute start-0" style="transform:rotate(180deg)" src="<?= get_template_directory_uri() ?>/assets/images/arc-right.svg" alt="">
        <div class="container">
            <div class="text-center">
                <h1 class="fs-3 primary-color">Our culinary journey</h1>
                <div class="text-center d-flex align-items-center justify-content-center py-4">
                    <div class="m-2 mx-lg-3">
                        <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/burger.svg" alt="">
                    </div>
                    <div class="m-2 mx-lg-3">
                        <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/pasta.svg" alt="">
                    </div>
                    <div class="m-2 mx-lg-3">
                        <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/pizza.svg" alt="">
                    </div>
                    <div class="m-2 mx-lg-3">
                        <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/juice.svg" alt="">
                    </div>
                    <div class="m-2 mx-lg-3">
                        <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/hotdog.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <section class="section-2 mt-5">
        <div class="container">
            <img src="<?= get_template_directory_uri() ?>/assets/images/about-us-banner.jpg" alt="">
        </div>
    </section>

    <section class="section-3 mt-6 mt-lg-9">

        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 mt-3 mt-lg-0 d-flex justify-content-center">
                    <img class="w-50" src="<?= get_template_directory_uri() ?>/assets/images/pasta.svg" alt="">
                </div>
                <div class="col-lg-6">
                    <h2 class="fs-6 primary-color fw-light mb-3">Our story</h2>
                    <p class="white-color fs-6 mb-3">At Monty’s Café, we believe that a memorable dining experience is about more than just great food. It's about creating a warm and inviting atmosphere where every guest feels like family. Established in 2023, our restaurant has been serving delicious meals and creating lasting memories in the heart of Beirut.</p>
                </div>

            </div>
            <div class="row align-items-center mt-6 mt-lg-9">
                <div class="col-lg-6">
                    <h2 class="primary-color mb-3 fs-6 fw-light">Our philosophy</h2>
                    <p class="white-color fs-6">Our culinary philosophy is simple: fresh, local, and made with love. We source the finest ingredients from local farmers and suppliers to ensure that every dish is bursting with flavor and crafted with care. From our kitchen to your plate, we strive to deliver an exceptional dining experience.</p>
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0 d-flex align-items-center justify-content-center">
                    <img class="w-50" src="<?= get_template_directory_uri() ?>/assets/images/pizza.svg" alt="">
                </div>
            </div>
        </div>

    </section>

    <section class="section-4 mt-9 mt-lg-16">
        <div class="container text-center">
            <img src="<?= get_template_directory_uri() ?>/assets/images/bigchef.jpg" alt="">
            <div class="text-center">
                <h2 class="primary-color mt-5 mb-3 fs-6 fw-light">Meet the Chef - Chadi Sarkis</h2>
                <p class="white-color fs-6">Behind every mouthwatering dish is a team of passionate individuals dedicated to making your dining experience exceptional. From our talented chefs who bring creativity and expertise to every recipe, to our friendly servers who ensure your visit is nothing short of delightful, each member of our team plays a crucial role in your dining pleasure.</p>
            </div>
        </div>

    </section>

</main>

<?php get_footer(); ?>