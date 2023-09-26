<?php get_header(); ?>

<main id="contact-us" class="contact-us">
    
    <section id="section-1" class="section-1">

        <div class="container">

            <div class="row align-items-center white-color">
                <div class="col-6">
                    <h1 class="primary-color">Contact Us</h1>
                    <h2>We would love to hear from you</h2>
                    <div class="d-flex flex-column gap-4 mt-5">
                        <div class="d-flex justify-content-between gap-4">
                            <div class="w-100">
                                <label for="first-name" class="d-block">First Name</label>
                                <input type="text" name="first-name" id="first-name" class="mt-2 w-100 p-2">
                            </div>
                            <div class="w-100">
                                <label for="last-name" class="d-block">Last Name</label>
                                <input type="text" name="last-name" id="last-name" class="mt-2 w-100 p-2">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between gap-4">
                            <div class="w-100">
                                <label for="email" class="d-block">Email</label>
                                <input type="text" name="email" id="email" class="mt-2 w-100 p-2">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between gap-4">
                            <div class="w-100">
                                <label for="phone" class="d-block">Phone Number</label>
                                <input type="tel" name="phone" id="phone" class="mt-2 w-100 p-2">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between gap-4">
                            <div class="w-100">
                                <label for="message" class="d-block">Message</label>
                                <textarea name="message" id="message" rows="10" class="mt-2 w-100 p-2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/contact-us.png" alt="Chef" width="608" height="766">
                </div>
            </div>
        
        </div>

    </section>

</main>

<?php get_footer(); ?>