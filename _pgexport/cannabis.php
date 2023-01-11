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
                    <a class="nav-link active" href="cannabis.html"><?php _e( 'Cannabis', 'genesis_2' ); ?></a>
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
<div data-bss-scroll-zoom="true" data-bss-scroll-zoom-speed="0.3" style="background: url("<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bg3.png") center / cover;">
    <div class="text-center d-flex flex-column justify-content-center align-items-center py-4 px-3 hero-content" style="height: 500px;">
        <h1 class="display-1 fw-bold mt-0 mb-0 pb-0" style="color: rgb(88,80,138);"><?php _e( 'Cannabis', 'genesis_2' ); ?></h1>
        <p class="fs-5"><?php _e( 'Curious about cannabis and its benefits?', 'genesis_2' ); ?><br></p>
        <a class="btn btn-dark" role="button" style="background: rgb(88,80,138);border-color: rgb(88,80,138);" href="#cannabis"><?php _e( 'Learn About Medical Cannabis', 'genesis_2' ); ?><br></a>
    </div>
</div>
<div class="container py-4 py-xl-5">
    <section id="cannabis" class="py-4 py-xl-5">
        <div class="container">
            <div class="text-white border rounded border-0 d-flex flex-column justify-content-between flex-lg-row p-4 p-md-5" style="background: #58508a;">
                <div class="pb-2 pb-lg-1">
                    <h2 class="fw-bold mb-2"><?php _e( 'Office Policy and Procedures', 'genesis_2' ); ?></h2>
                </div>
            </div>
        </div>
    </section>
    <div class="row gy-4 gx-md-0 gy-md-0 row-cols-1 row-cols-md-2 row-cols-xl-3 d-md-flex d-xl-flex align-items-md-center">
        <div class="col offset-xl-2">
            <div class="card bg-light border-0">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="fw-bold mb-0"><?php _e( 'Medical Records', 'genesis_2' ); ?></h3>
                        </div>
                    </div>
                    <div>
                        <p class="mb-0"><?php _e( 'A minimum of 2 years medical records documenting your qualifying disease is required. Your records must be from a licensed physician that has treated or is currently treating you for the qualifying disease. Your records must be sent to our office no less than 5 days prior to your appointment. This gives our Providers time to review and prepare for your visit.&nbsp;If your records have not been received, we will have to cancel your appointment. No exceptions can be made.', 'genesis_2' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white border-0" style="background: rgb(88,80,138);">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="fw-bold text-white mb-0"><?php _e( 'Insurance Information', 'genesis_2' ); ?></h3>
                            <p class="mb-0"><?php _e( 'The services we provide are not covered by your insurance and full payment is due at the time of service. We will not file your insurance for any services relating to Medical Cannabis Treatment. You will be given a waiver form to sign that acknowledges your understanding of this policy.', 'genesis_2' ); ?> <br><br><?php _e( 'Our providers will do an initial assessment of your condition to see is you are eligible for treatment with the Medical Cannabis oil. If you qualify, we must register you with the State of Georgia. This registration is required by law. Please keep in mind that not all persons will qualify for the program.', 'genesis_2' ); ?></p>
                        </div>
                        <div></div>
                    </div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-4 py-xl-5">
        <div class="container" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="text-white border rounded border-0 d-flex flex-column justify-content-between flex-lg-row p-4 p-md-5" style="background: #58508a;">
                <div class="pb-2 pb-lg-1">
                    <h2 class="fw-bold mb-2"><?php _e( 'Important Information About Medical Cannabis Certification', 'genesis_2' ); ?></h2>
                </div>
            </div>
        </div>
        <div class="accordion" role="tablist" id="accordion-1">
            <div class="accordion-item">
                <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="false" aria-controls="accordion-1 .item-1">
                        <?php _e( 'How to Qualify', 'genesis_2' ); ?>
                    </button></h2>
                <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordion-1">
                    <div class="accordion-body">
                        <p class="mb-0"><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'In order to qualify for exemption from prosecution for possession of marijuana oil in Georgia, the patient must suffer from one of these qualifying illnesses:', 'genesis_2' ); ?></span><br><br><strong><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'Amyotrophic Lateral Sclerosis (ALS)', 'genesis_2' ); ?></span></strong><br><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'when such diagnosis is severe or end-stage.', 'genesis_2' ); ?></span><br><br><strong><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'Cancer', 'genesis_2' ); ?></span></strong><br><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'When such diagnosis is end stage or the treatment produces related wasting illness, recalcitrant nausea and vomiting.', 'genesis_2' ); ?></span><br><br><strong><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'Sickle Cell Disease', 'genesis_2' ); ?></span></strong><br><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( '(when such diagnosis is severe or end stage.)', 'genesis_2' ); ?></span><br><br><strong><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'Parkinson’s Disease', 'genesis_2' ); ?></span></strong><br><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( '(when such diagnosis is severe or end stage.)', 'genesis_2' ); ?></span><br><br><strong><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'Multiple Sclerosis', 'genesis_2' ); ?></span></strong><br><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( '(when such diagnosis is severe or end stage.)', 'genesis_2' ); ?></span><br><br><strong><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'Seizure disorder', 'genesis_2' ); ?></span></strong><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 's related to the diagnosis of epilepsy or trauma-related head injuries.', 'genesis_2' ); ?></span><br><br><strong><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'Mitochondrial Disease', 'genesis_2' ); ?></span></strong><br><br><strong><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'Crohn \'s Disease', 'genesis_2' ); ?></span></strong><br><br><strong><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'Alzheimer\'s Disease', 'genesis_2' ); ?></span></strong><br><br><strong><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'Epidennolysis Bullosa', 'genesis_2' ); ?></span></strong><br><br><strong><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'Tourette\'s syndrome', 'genesis_2' ); ?></span></strong><br><br><strong><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( 'Peripheral Neuropathy', 'genesis_2' ); ?></span></strong><br><span style="background-color: rgba(255, 255, 255, 0);"><?php _e( '(pain that radiates)', 'genesis_2' ); ?></span><br><br></p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false" aria-controls="accordion-1 .item-2" style="text-align: center;">
                        <?php _e( 'State Information on Medical Cannabis Certification', 'genesis_2' ); ?>
                    </button></h2>
                <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-1">
                    <div class="accordion-body">
                        <p class="mb-0"><?php _e( 'Georgia\'s new medical marijuana law allows certain qualified persons to legally possess', 'genesis_2' ); ?><br><?php _e( 'up 20 fluid ounces of "Low THC oil," which is derived from the marijuana plant. It authorizes the Georgia Department of Public Health to issue a "Low THC Oil Registry Card" to qualified persons, which will prove that they are authorized to have the oil and protect them from arrest. For more information please visit&nbsp;', 'genesis_2' ); ?><a href="https://dph.georgia.gov/low-thc-oil-faq-general-public"><span style="color: rgb(0, 0, 0);"><?php _e( 'https://dph.georgia.gov/low-thc-oil-faq-general-public', 'genesis_2' ); ?></span></a><br></p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="false" aria-controls="accordion-1 .item-3" style="text-align: center;">
                        <?php _e( 'Who is eligible for the Low THC Oil Registry Card?', 'genesis_2' ); ?>
                    </button></h2>
                <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-1">
                    <div class="accordion-body">
                        <p class="mb-0"><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( 'There are three categories of persons who may apply for the card:&nbsp;', 'genesis_2' ); ?></span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( 'An adult (age 18+) who has one or more of the diseases specified in the law, and who is a resident of the State of Georgia;&nbsp;', 'genesis_2' ); ?></span><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( '1.&nbsp;&nbsp;Legal guardians of an adult who has one or more of the diseases specified in the law, and who is a resident of the State of Georgia;&nbsp;', 'genesis_2' ); ?></span><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( '2.&nbsp;&nbsp;Parents or legal guardians of a minor child who has one or more of the diseases specified in the law, and is a resident of Georgia or was born in Georgia.&nbsp;', 'genesis_2' ); ?></span><br><br></p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-4" aria-expanded="false" aria-controls="accordion-1 .item-4" style="text-align: center;">
                        <?php _e( 'What Does The Card Allow', 'genesis_2' ); ?>
                        <br>
                    </button></h2>
                <div class="accordion-collapse collapse item-4" role="tabpanel" data-bs-parent="#accordion-1">
                    <div class="accordion-body">
                        <p class="mb-0"><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( 'The Georgia Medical Marijuana law is quite specific in key areas.', 'genesis_2' ); ?></span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( '1.&nbsp; The only form of marijuana the Card provides protection for is Low THC Oil. This is defined as commercially-produced marijuana oil with no more than 5% THC, and a', 'genesis_2' ); ?></span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( '1:1 ratio of THC vs CBD. The oil must be in a clearly-labeled pharmaceutical container. Residents with the card can possess up to 20 fluid ounces of Low THC Oil at any one time.', 'genesis_2' ); ?></span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( '2.&nbsp; However, the law does not make it legal to buy Low THC Oil, and it doesn\'t make it legal to sell it, even to patients with cards. Yes, that sounds tricky and correcting', 'genesis_2' ); ?></span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( 'this has been an ongoing discussion in the Legislature. Yet, the thousands of Georgia residents who have a card are buying and using Low THC Oil regularly, so it appears law enforcement officials will take into consideration the difficulty this situation presents for persons with serious illnesses. While Genesis Healthcare Associates not aware of any incidents where a cardholder has encountered trouble with law enforcement, you should exercise caution in this area.', 'genesis_2' ); ?></span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( '3.&nbsp; The same is true for employment situations. The law did not provide protection for employees who run afoul of employer regulations, drug tests, etc. The Low THC Oil in your system will produce a positive reading on a urine test. Each person has to determine whether to discuss their Low THC Oil use with their employer, manager or HR department based on his/her own particular situation.', 'genesis_2' ); ?></span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( '4.&nbsp; Furthermore, the 5% level that Georgia allows is above the current Federal limit. (.3%) This means possession of Medical Marijuana, legal in Georgia, is against Federal law. This is likely the same case for all states with marijuana laws. You are', 'genesis_2' ); ?></span><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( 'advised against traveling by commercial carrier with the oil. Driving in your own car may have certain risks as well, as not all states allow marijuana, medical or otherwise, and none recognize a card issued by another state.', 'genesis_2' ); ?></span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( 'After one year period, the patient must re-qualify by submitting an updated Low THC Oil Waiver, or whichever document the State of Georgia may require at that time.', 'genesis_2' ); ?></span><br></p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-5" aria-expanded="false" aria-controls="accordion-1 .item-5" style="text-align: center;">
                        <?php _e( 'How To Get A Card', 'genesis_2' ); ?>
                    </button></h2>
                <div class="accordion-collapse collapse item-5" role="tabpanel" data-bs-parent="#accordion-1">
                    <div class="accordion-body">
                        <p class="mb-0"><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( 'Qualifying for and receiving a medical marijuana card for Georgia residents is simple and straightforward. Persons who have been diagnosed by a physician for one or more of the qualifying illnesses listed must have that diagnosis authenticated by a medical professional certified to determine eligibility.', 'genesis_2' ); ?></span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( 'Following your appointment, if you qualify, our providers will enter your patient information into the Georgia state medical marijuana internet portal.', 'genesis_2' ); ?></span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( 'The medical marijuana card is issued by the State Department of Health, generally within one to five business days. Patients are notified when and where to pick up their card, usually the closest County Health Department office. There is a $25 fee for the card levied by the Department of Vital Records.', 'genesis_2' ); ?></span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( 'The medical marijuana card is valid for two years, but there are follow-up appointments required to maintain verification during that period. For your safety, Genesis Healthcare Associates conduct follow-up appointments every three to six months, depending on your condition. The appointments are centered on learning to what extent you are taking medical marijuana and how effective the medical marijuana may be in relieving your symptoms.', 'genesis_2' ); ?></span><br><br><strong><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);"><?php _e( 'Failure to keep your follow-up appointments will result in the revocation of your certificate.', 'genesis_2' ); ?></span></strong><br><br></p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-6" aria-expanded="false" aria-controls="accordion-1 .item-6" style="text-align: center;">
                        <?php _e( 'Important Forms', 'genesis_2' ); ?>
                    </button></h2>
                <div class="accordion-collapse collapse item-6" role="tabpanel" data-bs-parent="#accordion-1">
                    <div class="accordion-body">
                        <p class="mb-0"><a href="pdf/medical_cannabis_packet.pdf"><span style="color: rgb(33, 37, 41);"><?php _e( 'Medical Cannabis Packet', 'genesis_2' ); ?></span><br></a><a href="pdf/cannabis_registration_form.pdf"><span style="color: rgb(33, 37, 41);"><?php _e( 'Cannabis Registration From', 'genesis_2' ); ?></span><br></a><a href="pdf/cannabis_eduction_packet.pdf"><?php _e( 'Cannabis Education Packet', 'genesis_2' ); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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