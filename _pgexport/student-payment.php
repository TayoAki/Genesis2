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
                    <a class="nav-link" href="community.html"><?php _e( 'Community Initiatives', 'genesis_2' ); ?></a>
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
<main class="page payment-page">
    <section class="clean-block payment-form dark">
        <div class="container">
            <div class="block-heading"></div>
            <form style="border-top-color: rgb(136,51,138);">
                <div>
                    <div id="smart-button-container">
                        <div class="card-details">
                            <h3 class="title"><?php _e( 'Make A Payment', 'genesis_2' ); ?></h3>
                            <div class="form-row">
                                <div class="col-sm-12 col-lg-12 col-xl-12">
                                    <div class="form-group">
                                        <label for="description">
                                            <strong><?php _e( 'Advanced Practice Nurse Clinicals', 'genesis_2' ); ?></strong>
                                            <br>
                                        </label>
                                        <input class="form-control" type="text" id="description" placeholder="Please Enter Name" name="descriptionInput">
                                    </div>
                                    <p id="descriptionError" class="above" style="visibility:hidden; color:red; text-align: left;" display="none"><?php _e( 'Please enter a description', 'genesis_2' ); ?></p>
                                </div>
                                <div class="col-sm-12 col-lg-12 col-xl-12">
                                    <div class="form-group">
                                        <label for="amount">
                                            <?php _e( 'Payment Amount', 'genesis_2' ); ?>
                                        </label>
                                        <input class="form-control" type="number" id="amount" placeholder="USD" name="amountInput">
                                        <p id="priceLabelError" style="visibility: hidden; color:red; text-align: left;"><?php _e( 'Please enter a price', 'genesis_2' ); ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12 col-xl-12">
                                    <div class="form-group" id="invoiceidDiv">
                                        <label for="invoiceid">
                                            <strong><?php _e( 'Total Clinical Hours', 'genesis_2' ); ?></strong>
                                            <br>
                                        </label>
                                        <input class="form-control" type="text" id="invoiceid" placeholder="Please Enter Total Hours" name="invoiceid">
                                        <p id="invoiceidError" style="visibility: hidden; color:red; text-align: left;"><?php _e( 'Please enter your hours', 'genesis_2' ); ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-7 col-xl-12">
                                    <div id="smart-button-container">
                                        <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
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