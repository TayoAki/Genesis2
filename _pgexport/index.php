<?php get_header(); ?>

<?php get_template_part( 'navbar' ); ?>
<section>
    <div data-bss-scroll-zoom="true" data-bss-scroll-zoom-speed="0.3" style="background: url("<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bg1.png") center / cover;">
        <div class="text-center d-flex flex-column justify-content-center align-items-center py-4 px-3 hero-content" style="height: 500px;">
            <h1 class="display-1 fw-bold mt-0 mb-0 pb-0" style="color: rgb(88,80,138);"><?php _e( 'GENESIS HEALTHCARE', 'genesis_2' ); ?></h1>
            <p class="fs-5"><?php _e( 'Making each patient an integral part of their own healthcare.', 'genesis_2' ); ?><br><?php _e( 'Take charge of your health today!', 'genesis_2' ); ?><br></p>
            <a class="btn btn-dark" role="button" style="background: rgb(88,80,138);border-color: rgb(88,80,138);" href="https://www.myhealthrecord.com/Portal/SSO" target="_blank"><?php _e( 'Sign-in To My Health Portal', 'genesis_2' ); ?><br></a>
        </div>
    </div>
    <div class="container h-100 position-relative" style="top: -50px;">
        <div class="carousel" data-bs-ride="carousel" data-bs-interval="false" data-bs-pause="false" id="carouselExampleControls">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card">
                        <img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Vaccine.png">
                        <div class="card-body p-4" style="background: #f3f4f5;">
                            <h4 class="card-title" style="text-align: center;"><?php _e( 'COVID-19 Vaccines Available&nbsp;', 'genesis_2' ); ?></h4>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/1.png">
                        <div class="card-body p-4" style="background: #f3f4f5;">
                            <h4 class="card-title" style="text-align: center;"><?php _e( 'Back 2 School Benefit Fair', 'genesis_2' ); ?></h4>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/book.png">
                        <div class="card-body p-4" style="background: #f3f4f5;">
                            <h4 class="card-title" style="text-align: center;"><?php _e( 'Genesis Book Club', 'genesis_2' ); ?></h4>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Giving%20Tuesday.png">
                        <div class="card-body p-4" style="background: #f3f4f5;">
                            <h4 class="card-title" style="text-align: center;"><?php _e( 'Giving Tuesday', 'genesis_2' ); ?></h4>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bna.png">
                        <div class="card-body p-4" style="background: #f3f4f5;">
                            <h4 class="card-title" style="text-align: center;"><?php _e( 'Be Not Afraid Foundation', 'genesis_2' ); ?></h4>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden"><?php _e( 'Previous', 'genesis_2' ); ?></span></a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden"><?php _e( 'Next', 'genesis_2' ); ?></span></a>
            </div>
        </div>
    </div>
</section>
<section class="position-relative py-4 py-xl-5" style="background: #f3f4f6;">
    <div class="container position-relative">
        <div class="row">
            <div class="col">
                <iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDFEaJVhenfboIrzw6PloEb6whJqRqjHj4&amp;q=3200+Highlands+Pkwy+SE%2C+Smyrna%2C+GA+30082&amp;zoom=15" width="100%" height="100%"></iframe>
            </div>
            <div class="col-md-6 col-xl-4">
                <div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center card-title"><?php _e( 'Hours Of Operation', 'genesis_2' ); ?></h4>
                            <h6 class="text-center text-muted card-subtitle mb-2"><?php _e( 'COVID-19 Testing By Appointment', 'genesis_2' ); ?> <br><?php _e( 'On Tuesdays &amp; Thursdays at 4 PM', 'genesis_2' ); ?></h6>
                            <ul class="list-hours mb-5">
                                <li class="d-flex list-unstyled-item list-hours-item">
                                    <?php _e( 'Monday - Friday', 'genesis_2' ); ?>
                                    <span class="ms-auto"><?php _e( '8 AM to 5 PM', 'genesis_2' ); ?></span>
                                </li>
                                <li class="d-flex list-unstyled-item list-hours-item">
                                    <?php _e( 'Lab Appointments (AM)', 'genesis_2' ); ?>
                                    <br>
                                    <span class="ms-auto"><?php _e( '8 AM to 12:30 PM', 'genesis_2' ); ?></span>
                                </li>
                                <li class="d-flex list-unstyled-item list-hours-item">
                                    <?php _e( 'Lab Appointment (PM)', 'genesis_2' ); ?>
                                    <br>
                                    <span class="ms-auto"><?php _e( '1:30 PM to 4:30 PM', 'genesis_2' ); ?></span>
                                </li>
                                <li class="d-flex list-unstyled-item list-hours-item">
                                    <?php _e( 'Saturday Appointments', 'genesis_2' ); ?>
                                    <br>
                                    <span class="ms-auto"><?php _e( 'Coming Soon', 'genesis_2' ); ?></span>
                                </li>
                                <li class="d-flex list-unstyled-item list-hours-item">
                                    <?php _e( 'Sunday&nbsp;', 'genesis_2' ); ?>
                                    <br>
                                    <span class="ms-auto"><?php _e( 'Closed', 'genesis_2' ); ?></span>
                                </li>
                                <li class="d-flex list-unstyled-item list-hours-item">
                                    <?php _e( 'Closed For Lunch', 'genesis_2' ); ?>
                                    <br>
                                    <span class="ms-auto"><?php _e( '12 PM to 1 PM', 'genesis_2' ); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="text-center py-4">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3">
            <div class="col"></div>
            <div class="col">
                <p class="text-muted my-2"><?php _e( 'Genesis Healthcare © 2022', 'genesis_2' ); ?></p>
            </div>
            <div class="col"></div>
        </div>
    </div>
</footer>
<div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align: center;"><?php _e( 'COVID-19 Testing &amp; Vaccine Information', 'genesis_2' ); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="text-align: center;"><strong><span style="color: rgb(255, 20, 5);"><?php _e( 'COVID-19 Testing is available&nbsp;on Tuesdays and Thursdays at 4 pm by appointment.', 'genesis_2' ); ?></span></strong><br><br><?php _e( 'Call to make an appointment&nbsp;', 'genesis_2' ); ?><br><a href="tel:7704341904"><span style="color: rgb(0, 0, 0);"><?php _e( '770-434-1904', 'genesis_2' ); ?></span></a><br></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" type="button" data-bs-dismiss="modal">
                    <?php _e( 'Close', 'genesis_2' ); ?>
                </button>
            </div>
        </div>
    </div>
</div>        

<?php get_footer(); ?>