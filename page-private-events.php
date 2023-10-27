<?php get_header(); ?>

<main id="private-events" class="private-events">
    
    <section id="section-1" class="section-1 mt-6">

        <div class="container">

            <div class="row g-0 align-items-center white-color">
                <div class="col-12 col-lg-6 px-0 pe-lg-6">
                    <h1 class="fs-3 primary-color">Book your private event in seconds</h1>
                    <div class="d-flex flex-column gap-4 mt-5">

                        <div class="d-flex flex-column flex-lg-row justify-content-between gap-4">
                            <div class="w-100">
                                <label for="first-name" class="d-block fs-9">First Name</label>
                                <input type="text" name="first-name" id="first-name" class="mt-2 w-100 p-2">
                            </div>

                            <div class="w-100">
                                <label for="last-name" class="d-block fs-9">Last Name</label>
                                <input type="text" name="last-name" id="last-name" class="mt-2 w-100 p-2">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="w-100">
                                <label for="email" class="d-block fs-9">Email</label>
                                <input type="text" name="email" id="email" class="mt-2 w-100 p-2">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="w-100">
                                <label for="phone" class="d-block fs-9">Phone Number</label>
                                <input type="tel" name="phone" id="phone" class="mt-2 w-100 p-2">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="w-100">
                                <label for="date" class="d-block fs-9">Event date</label>
                                <input type="date" name="date" id="date" class="mt-2 w-100 p-2" placeholder="dd-mm-yyyy">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="w-100">
                                <label for="invitees" class="d-block fs-9">Number of invitees</label>
                                <input type="text" name="invitees" id="invitees" class="mt-2 w-100 p-2">
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <div class="w-100 containerr" >
                                <input type="checkbox" name="acknowledgement" id="ack-label">       
                                <label for="ack-label">You agree to our <a id="acknowledgement" href="">privacy policy</a>.</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-3">
                            <div class="w-100">
                                <button class="button-secondary py-3 px-5 w-100 rounded-pill">Request Reservation</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-6 d-none d-lg-flex justify-content-end">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/private-events.png" alt="Private Events" width="608" height="766">
                </div>
            </div>
        
        </div>

    </section>

</main>

<?php get_footer(); ?>