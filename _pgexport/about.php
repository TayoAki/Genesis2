<?php
/*
 Template Name: About-Us
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
                    <a class="nav-link active" href="about.html"><?php _e( 'About Us', 'genesis_2' ); ?></a>
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
<div data-bss-scroll-zoom="true" data-bss-scroll-zoom-speed="0.3" style="background: url("<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bg2.png") center / cover;">
    <div class="text-center d-flex flex-column justify-content-center align-items-center py-4 px-3 hero-content" style="height: 500px;">
        <h1 class="display-1 fw-bold mt-0 mb-0 pb-0" style="color: rgb(88,80,138);"><?php _e( 'About Genesis', 'genesis_2' ); ?></h1>
        <p class="fs-5"><?php _e( 'A high-touch, family-centered healthcare experience.', 'genesis_2' ); ?><br></p>
        <a class="btn btn-dark" role="button" style="background: rgb(88,80,138);border-color: rgb(88,80,138);" href="#about"><?php _e( 'Read About Your Providers', 'genesis_2' ); ?><br></a>
    </div>
</div>
<section>
    <div class="container">
        <div class="text-white border rounded border-0 d-flex flex-column justify-content-between flex-lg-row p-4 p-md-5" style="background: rgb(88,80,138);">
            <div class="pb-2 pb-lg-1">
                <h2 class="fw-bold mb-2"><?php _e( 'The Start Of Genesis...', 'genesis_2' ); ?></h2>
                <p class="mb-0"><?php _e( 'Genesis Healthcare Associates P.C. was founded in 2006 as part of a vision that Dr. Carla Neal-Haley had for a high-touch, family-centered care experience. The vision has evolved to bring us to our current reality: Genesis offers an excellent patient experience, combined with high clinical competence provided by a highly engaged healthcare team that is accountable to you and your family. Genesis actively works to make the patient an integral part of their own care. We realize that each patient must be empowered to take charge of their own healthcare. We realize that our healthcare team and each patient we serve must work together to maintain and improve the healthcare condition of every patient.', 'genesis_2' ); ?></p>
            </div>
            <div class="my-2"></div>
        </div>
    </div>
</section>
<div class="container py-4 py-xl-5" id="about">
    <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-lg-3">
        <div class="col">
            <div>
                <div class="d-flex">
                    <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="164" height="168" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/carlaa.jpg">
                    <div>
                        <p class="fs-2 fw-bold mb-0 bio"><?php _e( 'Carla Y. Neal-Haley', 'genesis_2' ); ?></p>
                        <p class="fs-5 text-muted mb-0"><?php _e( 'M.D.', 'genesis_2' ); ?></p>
                    </div>
                </div>
                <p class="text-black-50 bg-light border rounded border-0 border-light p-4"><?php _e( 'Dr. Neal-Haley specializes in internal medicine and pediatrics. She received her medical degree from the University of Pittsburgh School of Medicine in 1991. She completed her residency in internal medicine and pediatrics at Wayne State University and Detroit Medical Center.', 'genesis_2' ); ?> <br><br><?php _e( 'Being board certified in both internal medicine and pediatrics, Dr. Neal-Haley has a special interest in adolescent medicine, preventive health care, and obesity/metabolic syndrome. Dr. Neal-Haley opened Genesis Healthcare Associates P.C., after nine years at the Emory Clinic of Smyrna, where she was Medical Director for four years.', 'genesis_2' ); ?> <br><br><?php _e( 'She served as Clinical Instructor of Pediatrics and Internal Medicine at Children’s Hospital of Michigan and Wayne State University before moving to Atlanta in 1997.', 'genesis_2' ); ?> <br><br><?php _e( 'She has 3 children and is actively involved in the community. She serves on the board of trustees at the Lovetts School and is Chief of Staff at Emory Adventist Hospital.', 'genesis_2' ); ?><br></p>
            </div>
        </div>
        <div class="col">
            <div>
                <div class="d-flex">
                    <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="164" height="168" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Christine-Wasilewski-NP-244396-zoom.jpg">
                    <div>
                        <p class="fs-2 fw-bold mb-0 bio"><?php _e( 'Christine Wasliewski', 'genesis_2' ); ?></p>
                        <p class="fs-5 text-muted mb-0"><?php _e( 'FNP - BC', 'genesis_2' ); ?></p>
                    </div>
                </div>
                <p class="text-black-50 bg-light border rounded border-0 border-light p-4"><?php _e( 'Christine Wasilewski cares for patients of all ages. She is originally from New Hampshire and moved to Georgia in 1996. She completed her Bachelor of Science Degree from the University of New Hampshire in 1996 and her Master of Science in Nursing from Georgia State University in 2001.', 'genesis_2' ); ?> <br><br><?php _e( 'She has specialized in primary care of adults and children since 2004 working with Dr. Carla Neal-Haley at the Emory Clinic as well as Genesis HCA. She has a special interest in preventative health care and pediatric and adolescent medicine. Prior to that, she cared for adults and children with cancer and blood disorders.', 'genesis_2' ); ?><br><br><?php _e( 'Christine lives in Marietta, GA with her husband and two children. She is active in the community and serves on the Foundation Board at Kincaid Elementary School. When not at work she enjoys spending time running and relaxing with her family.', 'genesis_2' ); ?><br></p>
            </div>
        </div>
        <div class="col">
            <div>
                <div class="d-flex">
                    <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="164" height="168" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Crystal.jpg">
                    <div>
                        <p class="fs-2 fw-bold mb-0 bio"><?php _e( 'Crystal Johnson', 'genesis_2' ); ?></p>
                        <p class="fs-5 text-muted mb-0"><?php _e( 'FNP - BC', 'genesis_2' ); ?><br></p>
                    </div>
                </div>
                <p class="text-black-50 bg-light border rounded border-0 border-light p-4"><?php _e( 'Crystal Johnson is an award-winning, Board Certified Family Nurse Practitioner. She began her career in the cardiovascular intensive care unit as a Registered Nurse 16 years ago at Emory University Hospital Midtown. She received her Bachelor of Science degree in Nursing from Emory University. She received her Masters of Science degree and training as a Family Nurse Practitioner from Walden University in Minnesota in conjunction with Dr. Carla Neal-Haley of Genesis Healthcare.&nbsp;', 'genesis_2' ); ?><br><br><?php _e( 'Crystal is the recipient of The Emory Medal. This is the highest honor presented to Emory Alumni for outstanding service. Crystal was part of the healthcare team at Emory University Hospital’s Serious Health and Communicable Diseases Unit that successfully and safely treated patients with Ebola virus disease in 2014. She was one of the healthcare professionals honored by Time Magazine’s “Person of the Year” and acknowledged by President Obama. She received the Emory School of Nursing Excellence in Nursing Award in 2015.', 'genesis_2' ); ?><br><br><?php _e( 'Crystal has a unique combination of strong nursing skills and strives to provide the best health care possible. She believes in building a long lasting and trusting relationship with her patients and families. She strives to acquire a comprehensive evaluation of every patient by taking time to listen and understand their particular needs. Her true desire is to enhance a positive healing experience and confidence to those in need.', 'genesis_2' ); ?><br></p>
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