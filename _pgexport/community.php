<?php
/*
 Template Name: community
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

<nav class="navbar navbar-light navbar-expand-xl sticky-top py-3" id="Genesis-Nav">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.html"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/L2.svg"></a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
            <span class="visually-hidden"><?php _e( 'Toggle navigation', 'genesis_2' ); ?></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-2">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.html"><?php _e( 'About Us', 'genesis_2' ); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registration.html"><?php _e( 'Registration', 'genesis_2' ); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cannabis.html"><?php _e( 'Cannabis', 'genesis_2' ); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="community.html"><?php _e( 'Community Initiatives', 'genesis_2' ); ?></a>
                </li>
            </ul>
            <button class="btn btn-dark me-3" type="button" style="background: rgb(88,80,138);" data-bs-target="#modal-1" data-bs-toggle="modal">
                <?php _e( 'COVID-19 Information', 'genesis_2' ); ?>
            </button>
            <a class="btn btn-dark me-3" role="button" style="background: rgb(88,80,138);margin-top: 12px;margin-bottom: 12px;" href="nursing-clinicals.html"><?php _e( 'Advance Practice Nursing Clinicals', 'genesis_2' ); ?></a>
            <div class="dropdown" style="margin-top: -8px;margin-bottom: -8px;">
                <button class="btn btn-dark dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: rgb(88,80,138);margin-top: 4px;margin-bottom: 4px;">
                    <?php _e( 'Payments', 'genesis_2' ); ?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="nav-link" href="patient-payment.html"><?php _e( 'Patients', 'genesis_2' ); ?></a>
                    <a class="nav-link" href="student-payment.html"><?php _e( 'Students', 'genesis_2' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div data-bss-scroll-zoom="true" data-bss-scroll-zoom-speed="0.3" style="background: url("<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bg4.png") center / cover;">
    <div class="text-center d-flex flex-column justify-content-center align-items-center py-4 px-3 hero-content" style="height: 500px;">
        <h1 class="display-1 fw-bold mt-0 mb-0 pb-0" style="color: rgb(88,80,138);"><?php _e( 'GENESIS HEALTHCARE', 'genesis_2' ); ?></h1>
        <p class="fs-5"><?php _e( 'Making each patient an integral part of their own healthcare.', 'genesis_2' ); ?><br><?php _e( 'Take charge of your health today!', 'genesis_2' ); ?><br></p>
        <a class="btn btn-dark" role="button" style="background: rgb(88,80,138);border-color: rgb(88,80,138);" href="#community"><?php _e( 'Learn How We\'re Giving Back', 'genesis_2' ); ?><br></a>
    </div>
</div>
<section id="community" class="photo-gallery py-4 py-xl-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2><?php _e( 'Back To School Benefitting Fair&nbsp;', 'genesis_2' ); ?><br></h2>
                <p class="w-lg-50"><?php _e( 'In partnership with 40 Mustard Seed - a non-profit run by Gabriel Tobin. Teachers had a Chik-Fil-A breakfast during pre-planning and students received backpacks for Monday August 1st School Start', 'genesis_2' ); ?><br></p>
            </div>
        </div>
        <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox="">
            <div class="col item">
                <a href="assets/img/2.png"><img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/2.png"></a>
            </div>
            <div class="col item">
                <a href="assets/img/3.png"><img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/3.png"></a>
            </div>
            <div class="col item">
                <a href="assets/img/4.png"><img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/4.png"></a>
            </div>
            <div class="col item">
                <a href="assets/img/8.png"><img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/8.png"></a>
            </div>
            <div class="col item">
                <a href="assets/img/9.png"><img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/9.png"></a>
            </div>
            <div class="col item">
                <a href="assets/img/7.png"><img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/7.png"></a>
            </div>
        </div>
    </div>
</section>
<section style="background: #ffffff;">
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2><?php _e( 'Recommended Reading', 'genesis_2' ); ?></h2>
                <p class="fs-4 w-lg-50"><?php _e( 'Below you will find a curated list of recommended readings on the topic of healthcare', 'genesis_2' ); ?><br></p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card">
                    <img class="card-img w-100 d-block" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/quit_like_a_woman.jpg">
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img w-100 d-block" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/the_complete_mediterranean_cookbook.jpg">
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img w-100 d-block" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/5-ingredient-cookbook.jpg">
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img w-100 d-block" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/are_you_there_god.jpg">
                </div>
            </div>
        </div>
    </div>
</section>
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

<?php get_footer(); ?>