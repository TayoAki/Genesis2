<?php
/*
 Template Name: registration
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
                    <a class="nav-link active" href="registration.html"><?php _e( 'Registration', 'genesis_2' ); ?></a>
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
<div data-bss-scroll-zoom="true" data-bss-scroll-zoom-speed="0.3" style="background: url("<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bg2.png") center / cover;">
    <div class="text-center d-flex flex-column justify-content-center align-items-center py-4 px-3 hero-content" style="height: 500px;">
        <h1 class="display-1 fw-bold mt-0 mb-0 pb-0" style="color: rgb(88,80,138);"><?php _e( 'Registration', 'genesis_2' ); ?></h1>
        <p class="fs-5"><?php _e( 'Everything you need to know before your visit.&nbsp;', 'genesis_2' ); ?><br><?php _e( 'Take charge of your health today!', 'genesis_2' ); ?><br></p>
        <a class="btn btn-dark" role="button" style="background: rgb(88,80,138);border-color: rgb(88,80,138);" href="#services"><?php _e( 'Review Office Policies, Procedures and Registration Forms&nbsp;', 'genesis_2' ); ?><br></a>
    </div>
</div>
<section class="py-4 py-xl-5">
    <div class="container">
        <div class="text-white border rounded border-0 d-flex flex-column justify-content-between flex-lg-row p-4 p-md-5" style="background: #58508a;">
            <div class="pb-2 pb-lg-1">
                <h2 class="fw-bold mb-2"><?php _e( 'Learn All About Registering To Become A Patient&nbsp;', 'genesis_2' ); ?></h2>
                <p class="mb-0"><?php _e( 'Before you arrive please be sure to review our office policies and procedures, registration forms , and our list of services.&nbsp;', 'genesis_2' ); ?><br></p>
            </div>
            <div class="my-2"></div>
        </div>
    </div>
</section>
<div class="container py-4 py-xl-5" id="services" style="padding-bottom: 0px;padding-top: 0px;margin-top: 0px;">
    <p class="text-center"><strong><?php _e( 'Toggle to view our services, policies and procedures&nbsp;', 'genesis_2' ); ?></strong></p>
    <div>
        <ul class="nav nav-pills d-flex justify-content-center" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" role="tab" data-bs-toggle="pill" href="#tab-1"><?php _e( 'Our Services', 'genesis_2' ); ?></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" role="tab" data-bs-toggle="pill" href="#tab-2"><?php _e( 'Policies and Procedures', 'genesis_2' ); ?></a>
            </li>
        </ul>
        <div class="tab-content pt-5">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body flex-grow-0 p-4" style="background: #f4f5f6;">
                                <h4 class="display-6 fw-bold card-title"><?php _e( 'Our Services', 'genesis_2' ); ?></h4>
                            </div>
                            <div class="card-footer d-flex flex-column flex-grow-1 justify-content-between">
                                <span class="badge bg-light text-uppercase mb-2"><?php _e( 'current Services Offered at Genesis', 'genesis_2' ); ?></span>
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-2">
                                        <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                            </svg></span>
                                        <span><?php _e( 'Immunizations (3231)', 'genesis_2' ); ?><br></span>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                            </svg></span>
                                        <span><?php _e( 'Asthma &amp; Allergy Action Plans', 'genesis_2' ); ?><br></span>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                            </svg></span>
                                        <span><?php _e( 'Sports Physicals Completion', 'genesis_2' ); ?></span>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                            </svg></span>
                                        <span><?php _e( 'Adult Annual Visits', 'genesis_2' ); ?></span>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                            </svg></span>
                                        <span><?php _e( 'Well Child Checks', 'genesis_2' ); ?></span>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                            </svg></span>
                                        <span><?php _e( 'Hearing &amp; Vision (3300)', 'genesis_2' ); ?></span>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                            </svg></span>
                                        <span><?php _e( 'Medical Cannabis Certification', 'genesis_2' ); ?></span>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                            </svg></span>
                                        <span><?php _e( 'Management of Chronic Diseases', 'genesis_2' ); ?></span>
                                    </li>
                                </ul>
                                <span class="badge bg-light text-uppercase mb-2"><?php _e( 'Important Note About Well Child Checks', 'genesis_2' ); ?></span>
                                <p><?php _e( 'There is no copay, coinsurance, or deductible for the benefit. Well-care visits focus on what you can do to prevent future disease or injury, or catch health problems before they become serious.', 'genesis_2' ); ?><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body flex-grow-0 p-4" style="background: #f4f5f6;">
                                <h4 class="display-6 fw-bold card-title"><?php _e( 'Essential Forms', 'genesis_2' ); ?></h4>
                            </div>
                            <div class="card-footer d-flex flex-column flex-grow-1 justify-content-between">
                                <span class="badge bg-light text-uppercase mb-2" style="color: rgb(88,80,138);box-shadow: inset 0px 0px;"><?php _e( 'current and future Patient Forms', 'genesis_2' ); ?></span>
                                <div>
                                    <ul class="list-unstyled">
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <a href="pdf/pre_registration_form.pdf"><span><?php _e( 'Pre-Registration From', 'genesis_2' ); ?><br></span></a>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <a href="pdf/HIPAA.pdf"><span><?php _e( 'HIPPA', 'genesis_2' ); ?><br></span></a>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <a href="pdf/GHC_Intake_form_questionaire.pdf"><span><?php _e( 'Intake Form', 'genesis_2' ); ?><br></span></a>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <a href="pdf/med_record_release.pdf"><span><?php _e( 'Medical Record Release', 'genesis_2' ); ?><br></span></a>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <a href="pdf/registration_agreement.pdf"><span><?php _e( 'Registration Agreement', 'genesis_2' ); ?><br></span></a>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <a href="pdf/medical_cannabis_packet.pdf"><span><?php _e( 'Medical Cannabis Packet', 'genesis_2' ); ?><br></span></a>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <a href="pdf/adult_health_questionnaire.pdf"><span><?php _e( 'Adult Health Questionnaire', 'genesis_2' ); ?><br></span></a>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <a href="pdf/physicals_and _well_child_checks.pdf"><span><?php _e( 'Physicals and Well Child Checks', 'genesis_2' ); ?><br></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="badge bg-light text-uppercase mb-2"><?php _e( 'Nursing Student Forms', 'genesis_2' ); ?></span>
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-2">
                                        <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                            </svg></span>
                                        <a href="pdf/NP_Emergency_contact_NPS.pdf"><span><?php _e( 'Emergency Contact', 'genesis_2' ); ?><br></span></a>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                            </svg></span>
                                        <a href="pdf/NP_fee_letter_agreement_12-19.pdf"><span><?php _e( 'Fee Letter Agreement', 'genesis_2' ); ?><br></span></a>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                            </svg></span>
                                        <a href="pdf/NP_Student_Intake_Questionaire.pdf"><span><?php _e( 'Student Intake Questionnaire', 'genesis_2' ); ?><br></span></a>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                            </svg></span>
                                        <a href="pdf/NP_student_vaccination_immunizations_record.pdf"><span><?php _e( 'Student Vaccination Immunization', 'genesis_2' ); ?><br></span></a>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                            </svg></span>
                                        <a href="pdf/NP_Welcome_student_letter_12_19.pdf"><span><?php _e( 'Welcome Student Letter', 'genesis_2' ); ?><br></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body flex-grow-0 p-4" style="background: #f4f5f6;">
                                <h4 class="display-6 fw-bold card-title"><?php _e( 'Insurances', 'genesis_2' ); ?></h4>
                            </div>
                            <div class="card-footer d-flex flex-column flex-grow-1 justify-content-between">
                                <span class="badge bg-light text-uppercase mb-2"><?php _e( 'Accepted Insurances', 'genesis_2' ); ?></span>
                                <div>
                                    <ul class="list-unstyled">
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Wellcare Medicaid', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Amerigroup', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Peachstate', 'genesis_2' ); ?></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Caresource', 'genesis_2' ); ?></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Blue Cross Blue Shield', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Aetna', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Humana', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Cigna', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'United Healthcare', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Medicare', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Ambetter', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Kaiser', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'PHCS', 'genesis_2' ); ?><br></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-2">
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body flex-grow-0 p-4">
                                <h4 class="display-6 fw-bold card-title"><?php _e( 'Pre-Visit Labs&nbsp;', 'genesis_2' ); ?></h4>
                            </div>
                            <div class="card-footer d-flex flex-column flex-grow-1 justify-content-between p-4">
                                <div>
                                    <ul class="list-unstyled">
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'All patients are required to get their labs in advance for physical and routine follow-up.', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Please let our associate know the reason for your visit and the nature of your chronic problems when you make your appointments so we can better serve you.', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Labs should be drawn 3-5 days prior to visit.', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'If your labs are not available at the time of your visit, you may be asked to reschedule or make a lab only follow-up visit.', 'genesis_2' ); ?></span>
                                        </li>
                                        <li class="d-flex mb-2"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body flex-grow-0 p-4">
                                <h4 class="display-6 fw-bold card-title"><?php _e( 'Lab Results', 'genesis_2' ); ?></h4>
                            </div>
                            <div class="card-footer d-flex flex-column flex-grow-1 justify-content-between p-4">
                                <div>
                                    <ul class="list-unstyled">
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon me-2" style="background: rgba(88,80,138,0.68);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Genesis HCA only mails results on pap smears and mammograms.', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'All other labs should be reviewed with providers in the context of a visit.', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'This allows for more accurate communication.', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Patients can ask all of their questions and an appropriate follow-up plan can be made.', 'genesis_2' ); ?></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Please make sure you make your follow-up appointment at your visit or immediately after you special testing is done.', 'genesis_2' ); ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body flex-grow-0 p-4">
                                <h4 class="display-6 fw-bold card-title"><?php _e( 'Medicine Refill', 'genesis_2' ); ?><span class="fs-3 fw-normal text-muted"></span></h4>
                            </div>
                            <div class="card-footer d-flex flex-column flex-grow-1 justify-content-between p-4">
                                <div>
                                    <ul class="list-unstyled">
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon me-2" style="background: rgba(88,80,138,0.7);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg" style="color: rgb(255,255,255);">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Genesis HCA does not do phone or fax refills.', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon me-2" style="background: rgba(88,80,138,0.7);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg" style="color: rgb(255,255,255);">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'We will give you enough refills at your visit to get you to your next visit.', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon me-2" style="background: rgba(88,80,138,0.7);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg" style="color: rgb(255,255,255);">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'This allows for accuracy in dosing, often lost or confused over the phone.', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'It also makes sure that you get proper lab and side effect monitoring.', 'genesis_2' ); ?><br></span>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16" class="bi bi-check-lg">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span>
                                            <span><?php _e( 'Please make your medication refill appointments when you fill your last prescription at the pharmacy.', 'genesis_2' ); ?><br></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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