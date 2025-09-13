<?php get_header(); ?>
<main class="main">

 <div id="heroCarousel" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel">

    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/slider-1.JPG"
                class="d-block w-100" alt="Hospital Slide 1">
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/medical-slide-1.jpg"
                class="d-block w-100" alt="Hospital Slide 2">
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/3.jpg"
                class="d-block w-100" alt="Hospital Slide 3">
        </div>
    </div>

    <!-- Arrows -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>

    <section id="home-about" class="home-about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="about-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/About-us.JPG"
                            alt="Modern Healthcare Facility" class="img-fluid rounded-3 mb-4">

                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="about-content">
                        <h2>About Our Hospital</h2>
                        <p>Our hospital is committed to delivering world-class healthcare with a focus on patient
                            safety and comfort. We offer a wide range of medical services supported by modern facilities
                            and
                            advanced technology. Our team of experienced doctors, skilled nurses, and compassionate
                            staff work
                            together to provide personalized care for every patient. Whether it’s routine checkups,
                            specialized
                            treatments, or emergency services, we ensure that you receive the highest quality of medical
                            attention.
                            With 24/7 availability and a patient-first approach, we strive to create a healing
                            environment where
                            health and well-being come first.</p>

                        <div class="row g-4 mt-4">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="feature-item">
                                    <div class="icon">
                                        <i class="bi bi-heart-pulse"></i>
                                    </div>
                                    <h4>Compassionate Care</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="feature-item">
                                    <div class="icon">
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <h4>Medical Excellence</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>

                        <div class="cta-wrapper mt-4">
                            <a href="#" class="btn btn-primary">Learn More About Us</a>
                            <a href="#" class="btn btn-outline">Meet Our Team</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </section>
    <!-- /Home About Section -->


    <!-- Featured Departments Section -->
    <section id="featured-departments" class="featured-departments section py-5">
        <div class="container">

            <!-- Section Title -->
            <div class="container section-title text-center mb-4" data-aos="fade-up">
                <h2>Specialists</h2>
                <p>We offer a wide range of medical specialties for comprehensive patient care.</p>
            </div>

            <!-- Bootstrap Carousel -->
            <div id="departmentsCarousel" class="carousel slide position-relative" data-bs-ride="carousel">

                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#departmentsCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#departmentsCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row gy-4 justify-content-center">

                            <div class="col-lg-4 col-md-6">
                                <a href="anaesthesiology.php" class="department-card text-decoration-none">
                                    <div class="department-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/health/anaesthesia.jpg"
                                            class="img-fluid" alt="Anaesthesiology">
                                    </div>
                                    <div class="department-content">
                                        <div class="department-icon"><i class="fas fa-syringe"></i></div>
                                        <h3>Anaesthesiology</h3>
                                        <p>Safe and effective anaesthesia services for surgeries and pain management.
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <a href="dermatology.php" class="department-card text-decoration-none">
                                    <div class="department-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/health/dermatology.jpg"
                                            class="img-fluid" alt="Dermatology">
                                    </div>
                                    <div class="department-content">
                                        <div class="department-icon"><i class="fas fa-allergies"></i></div>
                                        <h3>Dermatology</h3>
                                        <p>Advanced skin, hair, and nail treatments with expert dermatologists.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <a href="ent.php" class="department-card text-decoration-none">
                                    <div class="department-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/health/ENT.jpg"
                                            class="img-fluid" alt="ENT">
                                    </div>
                                    <div class="department-content">
                                        <div class="department-icon"><i class="fas fa-head-side-mask"></i></div>
                                        <h3>ENT (Ear, Nose & Throat)</h3>
                                        <p>Complete care for ear, nose, throat, and related disorders.</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row gy-4 justify-content-center">

                            <div class="col-lg-4 col-md-6">
                                <a href="surgery.php" class="department-card text-decoration-none">
                                    <div class="department-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/health/surgery.jpg"
                                            class="img-fluid" alt="General Surgery">
                                    </div>
                                    <div class="department-content">
                                        <div class="department-icon"><i class="fas fa-scalpel"></i></div>
                                        <h3>General & Laparoscopic Surgery</h3>
                                        <p>Minimally invasive and conventional surgeries with precision care.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <a href="gynaecology.php" class="department-card text-decoration-none">
                                    <div class="department-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/health/GYNAECOLOGY.jpg"
                                            class="img-fluid" alt="Gynaecology">
                                    </div>
                                    <div class="department-content">
                                        <div class="department-icon"><i class="fas fa-female"></i></div>
                                        <h3>Gynaecology & Obstetrics</h3>
                                        <p>Comprehensive women’s health, pregnancy, and childbirth care.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <a href="critical-care.php" class="department-card text-decoration-none">
                                    <div class="department-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/health/critical-care.jpg"
                                            class="img-fluid" alt="Critical Care">
                                    </div>
                                    <div class="department-content">
                                        <div class="department-icon"><i class="fas fa-procedures"></i></div>
                                        <h3>Critical Care</h3>
                                        <p>24/7 ICU and emergency services for life-saving treatment.</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Arrows -->
                <button class="carousel-control-prev" type="button" data-bs-target="#departmentsCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#departmentsCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>
    </section>


    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background py-5">
        <div class="container">

            <!-- Section Title -->
            <div class="container section-title text-center mb-4" data-aos="fade-up">
                <h2>Super Specialists</h2>
                <p>Our hospital offers advanced treatments with expert specialists in various medical fields.</p>
            </div>

            <!-- Bootstrap Carousel -->
            <div id="servicesCarousel" class="carousel slide position-relative" data-bs-ride="carousel">

                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row g-4 justify-content-center">

                            <div class="col-lg-4 col-md-6">
                                <a href="cardiology.php"
                                    class="service-card service-content d-block h-100 text-decoration-none p-4 shadow rounded">
                                    <div class="service-icon mb-3">
                                        <i class="fas fa-heartbeat fa-3x"></i>
                                    </div>
                                    <h3>Cardiology</h3>
                                    <p>Comprehensive heart care with advanced diagnostics, preventive screenings, and
                                        surgical treatments.</p>
                                    <ul class="service-features list-unstyled">
                                        <li><i class="fas fa-check-circle text-success"></i> Angioplasty & Bypass
                                            Surgery</li>
                                        <li><i class="fas fa-check-circle text-success"></i> Heart Health Screening</li>
                                        <li><i class="fas fa-check-circle text-success"></i> 24/7 Cardiac Emergency Care
                                        </li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <a href="joint-replacement.php"
                                    class="service-card service-content d-block h-100 text-decoration-none p-4 shadow rounded">
                                    <div class="service-icon mb-3">
                                        <i class="fas fa-bone fa-3x"></i>
                                    </div>
                                    <h3>Joint Replacement</h3>
                                    <p>Expert orthopedic surgeons offering knee, hip, and shoulder replacement using
                                        latest techniques.</p>
                                    <ul class="service-features list-unstyled">
                                        <li><i class="fas fa-check-circle text-success"></i> Knee & Hip Replacement</li>
                                        <li><i class="fas fa-check-circle text-success"></i> Minimally Invasive
                                            Procedures</li>
                                        <li><i class="fas fa-check-circle text-success"></i> Post-Surgery Rehabilitation
                                        </li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <a href="neurosurgery.php"
                                    class="service-card service-content d-block h-100 text-decoration-none p-4 shadow rounded">
                                    <div class="service-icon mb-3">
                                        <i class="fas fa-brain fa-3x"></i>
                                    </div>
                                    <h3>Neurosurgery</h3>
                                    <p>Advanced surgical solutions for brain, spine, and nervous system disorders.</p>
                                    <ul class="service-features list-unstyled">
                                        <li><i class="fas fa-check-circle text-success"></i> Brain & Spine Surgery</li>
                                        <li><i class="fas fa-check-circle text-success"></i> Neuro Trauma Management
                                        </li>
                                        <li><i class="fas fa-check-circle text-success"></i> Minimally Invasive
                                            Neurosurgery</li>
                                    </ul>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">

                            <div class="col-lg-4 col-md-6">
                                <a href="cosmetic-surgery.php"
                                    class="service-card service-content d-block h-100 text-decoration-none p-4 shadow rounded">
                                    <div class="service-icon mb-3">
                                        <i class="fas fa-user-md fa-3x"></i>
                                    </div>
                                    <h3>Plastic & Cosmetic Surgery</h3>
                                    <p>Reconstructive and aesthetic procedures to restore confidence and enhance
                                        appearance.</p>
                                    <ul class="service-features list-unstyled">
                                        <li><i class="fas fa-check-circle text-success"></i> Reconstructive Surgery</li>
                                        <li><i class="fas fa-check-circle text-success"></i> Cosmetic Enhancements</li>
                                        <li><i class="fas fa-check-circle text-success"></i> Scar Revision & Burn Care
                                        </li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <a href="spine-surgery.php"
                                    class="service-card service-content d-block h-100 text-decoration-none p-4 shadow rounded">
                                    <div class="service-icon mb-3">
                                        <i class="fas fa-x-ray fa-3x"></i>
                                    </div>
                                    <h3>Spine Surgery</h3>
                                    <p>Comprehensive care for spine conditions including minimally invasive procedures.
                                    </p>
                                    <ul class="service-features list-unstyled">
                                        <li><i class="fas fa-check-circle text-success"></i> Slip Disc & Spine Fixation
                                        </li>
                                        <li><i class="fas fa-check-circle text-success"></i> Scoliosis & Deformity
                                            Correction</li>
                                        <li><i class="fas fa-check-circle text-success"></i> Spinal Tumor Surgery</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <a href="urology.php"
                                    class="service-card service-content d-block h-100 text-decoration-none p-4 shadow rounded">
                                    <div class="service-icon mb-3">
                                        <i class="fas fa-procedures fa-3x"></i>
                                    </div>
                                    <h3>Urology</h3>
                                    <p>Complete urinary tract and kidney care with advanced diagnostics and surgeries.
                                    </p>
                                    <ul class="service-features list-unstyled">
                                        <li><i class="fas fa-check-circle text-success"></i> Kidney Stone Removal</li>
                                        <li><i class="fas fa-check-circle text-success"></i> Prostate & Bladder Surgery
                                        </li>
                                        <li><i class="fas fa-check-circle text-success"></i> Laser & Endoscopic
                                            Procedures</li>
                                    </ul>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Arrows -->
                <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>
    </section>

    <!-- Find A Doctor Section -->
    <section id="find-a-doctor" class="find-a-doctor section py-5">

        <!-- Section Title -->
        <div class="container section-title text-center mb-4" data-aos="fade-up">
            <h2>Find A Doctor</h2>
            <p>Meet our experienced doctors providing the best healthcare services.</p>
        </div>

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div id="doctorCarousel" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#doctorCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#doctorCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#doctorCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">

                    <!-- First Slide -->
                    <div class="carousel-item active">
                        <div class="row">
                            <!-- Doctor 1 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="doctor-card">
                                    <div class="doctor-image">
                                        <img src="https://apexhospital.org.in/wp-content/uploads/2025/09/abhishek1.jpg"
                                            class="img-fluid rounded" alt="Doctor">
                                    </div>
                                    <div class="doctor-info">
                                        <h5>Dr. Abhishek Jain</h5>
                                        <p class="specialty">MBBS, MS (ENT)</p>
                                        <p class="experience">5+ years experience</p>
                                        <div class="appointment-actions">
                                            <a href="http://localhost/apex2025/dr-abhishek-jain/"
                                                class="btn btn-outline-primary btn-sm">View Profile</a>
                                            <a href="https://apexhospital.org.in/appointment"
                                                class="btn btn-primary btn-sm">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Doctor 2 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="doctor-card">
                                    <div class="doctor-image">
                                        <img src="https://apexhospital.org.in/wp-content/uploads/2025/09/doctor-2.jpg"
                                            class="img-fluid rounded" alt="Doctor">
                                    </div>
                                    <div class="doctor-info">
                                        <h5>Dr. Twinkle Jain</h5>
                                        <p class="specialty">MBBS, DA (Anesthesiology)</p>
                                        <p class="experience">5+ years experience</p>
                                        <div class="appointment-actions">
                                            <a href="#" class="btn btn-outline-primary btn-sm">View Profile</a>
                                            <a href="https://apexhospital.org.in/appointment"
                                                class="btn btn-primary btn-sm">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Doctor 3 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="doctor-card">
                                    <div class="doctor-image">
                                        <img src="https://apexhospital.org.in/wp-content/uploads/2025/09/abhishek1.jpg"
                                            class="img-fluid rounded" alt="Doctor">
                                    </div>
                                    <div class="doctor-info">
                                        <h5>Dr. Vijay Raina</h5>
                                        <p class="specialty">MBBS, MS (General & Laparoscopic Surgery)</p>
                                        <p class="experience">5+ years experience</p>
                                        <div class="appointment-actions">
                                            <a href="#" class="btn btn-outline-primary btn-sm">View Profile</a>
                                            <a href="https://apexhospital.org.in/appointment"
                                                class="btn btn-primary btn-sm">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Slide -->
                    <div class="carousel-item">
                        <div class="row">
                            <!-- Doctor 4 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="doctor-card">
                                    <div class="doctor-image">
                                        <img src="https://apexhospital.org.in/wp-content/uploads/2025/09/abhishek1.jpg"
                                            class="img-fluid rounded" alt="Doctor">
                                    </div>
                                    <div class="doctor-info">
                                        <h5>Dr. Abhishek Aditya</h5>
                                        <p class="specialty">MBBS, MD (Internal Medicine)</p>
                                        <p class="experience">5+ years experience</p>
                                        <div class="appointment-actions">
                                            <a href="#" class="btn btn-outline-primary btn-sm">View Profile</a>
                                            <a href="https://apexhospital.org.in/appointment"
                                                class="btn btn-primary btn-sm">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Doctor 5 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="doctor-card">
                                    <div class="doctor-image">
                                        <img src="https://apexhospital.org.in/wp-content/uploads/2025/09/abhishek1.jpg"
                                            class="img-fluid rounded" alt="Doctor">
                                    </div>
                                    <div class="doctor-info">
                                        <h5>Dr. Dharmender Sorout</h5>
                                        <p class="specialty">MBBS, D Ortho (Orthopedics)</p>
                                        <p class="experience">5+ years experience</p>
                                        <div class="appointment-actions">
                                            <a href="#" class="btn btn-outline-primary btn-sm">View Profile</a>
                                            <a href="https://apexhospital.org.in/appointment"
                                                class="btn btn-primary btn-sm">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Doctor 6 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="doctor-card">
                                    <div class="doctor-image">
                                        <img src="https://apexhospital.org.in/wp-content/uploads/2025/09/abhishek1.jpg"
                                            class="img-fluid rounded" alt="Doctor">
                                    </div>
                                    <div class="doctor-info">
                                        <h5>Dr. Prashant Gupta</h5>
                                        <p class="specialty">MBBS, MD (Pathology)</p>
                                        <p class="experience">5+ years experience</p>
                                        <div class="appointment-actions">
                                            <a href="#" class="btn btn-outline-primary btn-sm">View Profile</a>
                                            <a href="https://apexhospital.org.in/appointment"
                                                class="btn btn-primary btn-sm">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Third Slide -->
                    <div class="carousel-item">
                        <div class="row">
                            <!-- Doctor 7 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="doctor-card">
                                    <div class="doctor-image">
                                        <img src="https://apexhospital.org.in/wp-content/uploads/2025/09/abhishek1.jpg"
                                            class="img-fluid rounded" alt="Doctor">
                                    </div>
                                    <div class="doctor-info">
                                        <h5>Dr. Shraddha Gupta</h5>
                                        <p class="specialty">MBBS, DO (Obstetrics & Gynaecology)</p>
                                        <p class="experience">5+ years experience</p>
                                        <div class="appointment-actions">
                                            <a href="#" class="btn btn-outline-primary btn-sm">View Profile</a>
                                            <a href="https://apexhospital.org.in/appointment"
                                                class="btn btn-primary btn-sm">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Balance space -->
                            <div class="col-lg-4 col-md-6 mb-4"></div>
                            <div class="col-lg-4 col-md-6 mb-4"></div>
                        </div>
                    </div>

                </div>

                <!-- Arrows -->
                <button class="carousel-control-prev" type="button" data-bs-target="#doctorCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#doctorCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

            </div>
        </div>
    </section>

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 data-aos="fade-up" data-aos-delay="200">Your Health is Our Priority</h2>
                    <p data-aos="fade-up" data-aos-delay="250">Comming Soon</p>

                    <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
                        <a href="https://apexhospital.org.in/appointment" class="btn-primary">Book Appointment</a>
                        <a href="https://apexhospital.org.in/doctors" class="btn-secondary">Find a Doctor</a>
                    </div>
                </div>
            </div>

            <div class="row features-row" data-aos="fade-up" data-aos-delay="400">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="icon-wrapper">
                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <h5>24/7 Emergency Care</h5>
                        <p>Comming Soon</p>
                        <a href="#" class="feature-link">
                            <span>Learn More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="icon-wrapper">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <h5>Easy Online Booking</h5>
                        <p>Comming Sonn</p>

                        <a href="https://apexhospital.org.in/appointment/" class="feature-link">
                            <span>Book Now</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="icon-wrapper">
                            <i class="bi bi-people"></i>
                        </div>
                        <h5>Expert Medical Team</h5>
                        <p>Comming Sonn</p>
                        <a href="https://apexhospital.org.in/doctors" class="feature-link">
                            <span>Meet Our Doctors</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="emergency-alert" data-aos="zoom-in" data-aos-delay="500">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="emergency-content">
                            <div class="emergency-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="emergency-text">
                                <h4>Medical Emergency?</h4>
                                <p>Call our 24/7 emergency hotline for immediate assistance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-end">
                        <a href="tel:911" class="emergency-btn">
                            <i class="bi bi-telephone-fill"></i>
                            Call +91 9416636394
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Call To Action Section -->

</main>

<?php get_footer(); ?>