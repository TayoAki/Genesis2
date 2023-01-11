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
<section class="py-4 py-xl-5">
    <div class="container">
        <div class="text-white border rounded border-0 d-flex flex-column justify-content-between flex-lg-row p-4 p-md-5" style="background: #58508a;">
            <div class="pb-2 pb-lg-1">
                <h2 class="fw-bold mb-2"><?php _e( 'Advanced Practice Nursing Clinicals', 'genesis_2' ); ?><br></h2>
                <p class="mb-0"><?php _e( 'Genesis Healthcare Associates has established a history of supporting Advanced Practice Nurses by offering Clinical Nurses Practicums in a student-designed experience focusing on the role of the professional nurse in a variety of clinical practice specialties. These include: Internal medicine, pediatrics, family practice, and women’s health. The purpose being to gain knowledge, skills, and attitudes surrounding quality (and safe) patient care. There is a nominal fee for these services. Interested students can contact us at GenesisNPstudent@gmail.com for further information.&nbsp;', 'genesis_2' ); ?><br></p>
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

<?php get_footer(); ?>