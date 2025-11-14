<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
        name="description"
        content="Web site created using create-react-app" />

    @yield('meta-info')

    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />

    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link
        href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
        rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <link href="https://db.onlinewebfonts.com/c/be6ee7dae05b1862ef6f63d5e2145706?family=Monotype+Old+English+Text+W01" rel="stylesheet">

        <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/index.css" />
    <title>Aeren Education</title>
</head>

<body>
    <!-- Top Nav -->
    <div class="top-nav py-1 px-3 d-flex " style="background-color: var(--secondary); color: #fff;">
        <div class="container ">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="#" class="text-white text-decoration-none me-3">Committee</a>
                    <a href="#" class="text-white text-decoration-none me-3">IQAC</a>
                    <a href="#" class="text-white text-decoration-none me-3">Alumni</a>
                    <a href="#" class="text-white text-decoration-none">Contact Us</a>
                </div>
                <div>
                    <a href="#" class="text-white text-decoration-none me-3">Student Login</a>
                    <a href="#" class="text-white text-decoration-none me-3">Online Payment</a>
                    <a href="#" class="text-white text-decoration-none">Swayam NPTEL</a>
                </div>
            </div>

        </div>

    </div>

    <!-- Logo Section -->
    <div class="logo-section text-center py-3 border-bottom" style="background: #e6e7e8;">
        <img src="assets/Images/logo/AEREN.png" alt="Logo" class="img-fluid" style="max-height: 40px;">
        <div class="text-center mt-1">
            <h2 style="font-family: 'Monotype Old English'; font-size: 20px;">Hotel Management</h2>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container justify-content-end">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav w-100">

                    <!-- About ISBMU -->
                    <li class="nav-item dropdown megadrop">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDD" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About ISBMU
                        </a>
                        <div class="dropdown-menu megamenu" aria-labelledby="aboutDD" id="about">
                            <ul class="d-flex flex-wrap p-0 menu-list">
                                <li class="col-12">
                                    <ul class="inner-ul">
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="mission-values.php">Vision and Mission</a></li>
                                        <li><a href="dignitaries-messages.php">Messages of the Dignitaries</a></li>
                                        <li><a href="statues-and-ordinance.php">Statutes and Ordinances</a></li>
                                        <li><a href="recognition.php">Recognitions and Approvals</a></li>
                                        <li><a href="awards.php">Awards</a></li>
                                        <li><a href="media-coverage.php">Media Coverage</a></li>
                                        <li><a href="RTI.php">RTI</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <!-- Academics -->
                    <li class="nav-item dropdown megadrop">
                        <a class="nav-link dropdown-toggle" href="#" id="academicsDD" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Academics
                        </a>
                        <div class="dropdown-menu megamenu" aria-labelledby="academicsDD" id="academics">
                            <ul class="d-flex flex-wrap p-0 menu-list">
                                <li class="col-lg-6 col-md-6 col-12">
                                    <ul class="inner-ul">
                                        <li><a href="faculty-of-science.php">Faculty of Sciences</a></li>
                                        <li><a href="faculty-of-commerce-management.php">Faculty of Commerce and Management</a></li>
                                        <li><a href="faculty-of-arts-and-humanities.php">Faculty of Arts and Humanities</a></li>
                                        <li><a href="faculty-of-engineering-and-technology.php">Faculty of Engineering and Technology</a></li>
                                        <li><a href="faculty-of-health-and-allied-science.php">Faculty of Health and Allied Sciences</a></li>
                                        <li><a href="faculty-of-law.php">Faculty of Law</a></li>
                                        <li><a href="faculty-of-library-and-information-science.php">Faculty of Library & Information Sciences</a></li>
                                        <li><a href="research.php">Research</a></li>
                                    </ul>
                                </li>
                                <li class="col-lg-6 col-md-6 col-12">
                                    <ul class="inner-ul">
                                        <li><a href="academic-philosophy.php">Academic Philosophy</a></li>
                                        <li><a href="academic-partner.php">Academic Partners</a></li>
                                        <li><a href="online-resources.php">Online Resources</a></li>
                                        <li><a href="teaching-methodology-pedagogy.php">Teaching Methodology/Pedagogy</a></li>
                                        <li><a href="mooc-with-isbm.php">MOOC </a></li>
                                        <li><a href="mous-and-collaborations.php">MOUs & Collaborations</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Admissions -->
                    <li class="nav-item dropdown megadrop">
                        <a class="nav-link dropdown-toggle" href="#" id="admissionsDD" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admissions
                        </a>
                        <div class="dropdown-menu megamenu" aria-labelledby="admissionsDD" id="admissions">
                            <ul class="d-flex flex-wrap p-0 menu-list">
                                <li class="col-lg-6 col-md-6 col-12">
                                    <ul class="inner-ul">
                                        <h6 class="list-header">Programmes</h6>
                                        <li><a href="programmes-and-eligibilities.php">Programmes and Eligibilities</a></li>
                                        <li><a href="programmes-by-qualification.php">Programmes By Qualification</a></li>
                                        <li><a href="skill-development.php">Skill Development</a></li>
                                    </ul>
                                </li>
                                <li class="col-lg-6 col-md-6 col-12">
                                    <ul class="inner-ul">
                                        <h6 class="list-header">Apply To ISBMU</h6>
                                        <li><a href="pay-fees-online.php">Online Payment</a></li>
                                        <li><a href="payment-procedure-guidelines.php">Payment Procedure Guidelines</a></li>
                                        <li><a href="admission-procedure-guidelines.php">Admission Procedure Guidelines</a></li>
                                        <li><a href="admission-help-desk.php">Admission Helpdesk</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Student Services -->
                    <li class="nav-item dropdown megadrop">
                        <a class="nav-link dropdown-toggle" href="#" id="studentDD" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Student Services
                        </a>
                        <div class="dropdown-menu megamenu" aria-labelledby="studentDD" id="studentcorner">
                            <ul class="d-flex flex-wrap p-0 menu-list">
                                <li class="col-12">
                                    <ul class="inner-ul">
                                        <li><a href="faqs.php">FAQ</a></li>
                                        <li><a href="scholarship.php">Scholarship</a></li>
                                        <li><a href="anti-ragging-policy.php">Anti-Ragging Policy</a></li>
                                        <li><a href="download-form.php">Download Forms</a></li>
                                        <li><a href="https://isbmalumni.com/" target="_blank" rel="noopener">Alumni Portal</a></li>
                                        <li><a href="https://voterportal.eci.gov.in/" target="_blank" rel="noopener">Voter Portal</a></li>
                                        <li><a href="RTI.php">RTI</a></li>
                                        <li><a href="e-content.php">E-Content</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <!-- Placements -->
                    <li class="nav-item dropdown megadrop">
                        <a class="nav-link dropdown-toggle" href="#" id="placementDD" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Placements
                        </a>
                        <div class="dropdown-menu megamenu" aria-labelledby="placementDD" id="placement">
                            <ul class="d-flex flex-wrap p-0 menu-list">
                                <li class="col-lg-12 col-md-12 col-sm-12">
                                    <ul class="inner-ul">
                                        <li><a href="placement-cell">About Placements</a></li>
                                        <li><a href="career-counselling.php">Career Counselling</a></li>
                                        <li><a href="global-skills.php">Global Skills</a></li>
                                        <li><a href="recruiters.php">Recruiters</a></li>
                                        <li><a href="recruitment-and-training.php">Campus Recruitment & Interview Training</a></li>
                                        <li><a href="work-at-isbmu.php">Work at ISBM University</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Campus -->
                    <li class="nav-item dropdown megadrop">
                        <a class="nav-link dropdown-toggle" href="#" id="campusDD" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Campus
                        </a>
                        <div class="dropdown-menu megamenu" aria-labelledby="campusDD" id="campus">
                            <ul class="d-flex flex-wrap p-0 menu-list">
                                <li class="col-lg-12 col-md-12 col-sm-12">
                                    <ul class="inner-ul">
                                        <li><a href="campus-overview.php">Campus Overview</a></li>
                                        <li><a href="library.php">Library</a></li>
                                        <li><a href="laboratory.php">Laboratory</a></li>
                                        <li><a href="campus-infrastructure.php">Campus Infrastructure</a></li>
                                        <li><a href="extra-curricular.php">Extra Curricular</a></li>
                                        <li><a href="digitized-learning-system.php">Digitized Learning System</a></li>
                                        <li><a href="bus-routes-and-schedules.php">Bus Routes & Schedules</a></li>
                                        <li><a href="bus-transportation-fees.php">Bus Transportation Fees</a></li>
                                        <li><a href="hostel.php">Hostel</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- NAAC -->
                    <li class="nav-item dropdown megadrop">
                        <a class="nav-link dropdown-toggle" href="#" id="naacDD" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            NAAC
                        </a>
                        <div class="dropdown-menu megamenu" aria-labelledby="naacDD" id="naac">
                            <ul class="d-flex flex-wrap p-0 menu-list">
                                <li class="col-lg-12 col-md-12 col-sm-12">
                                    <ul class="inner-ul">
                                        <li><a href="naac.php">NAAC</a></li>
                                        <li><a href="stake-holder-feedback.php">Stake Holder Feedback</a></li>
                                        <li><a href="iqac.php">IQAC</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        @yield('main-body')
    </div>


    <!-- Footer -->
    <footer class="bg-primary text-white pt-5">
        <div class="container">
            <div class="row g-4">
                <!-- Company Info -->
                <div class="col-lg-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="logo" src="assets/Images/logo/AEREN.png" style="height: 100px;" alt="Logo" />
                    </div>
                    <p class="text-light mb-4">
                        Premier online & regular based education and training service initiative for students,
                        corporates and working professionals.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="ti ti-brand-facebook"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="ti ti-brand-twitter"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="ti ti-brand-instagram"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="ti ti-brand-linkedin"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="ti ti-brand-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6"></div>
                <div class="col-lg-2 col-md-6"></div>

                <!-- Contact Info -->
                <div class="col-lg-3">
                    <h5 class="fw-bold mb-4">Contact Info</h5>
                    <div class="text-light">
                        <div class="d-flex align-items-start mb-3">
                            <i class="ti ti-map-pin text-secondary mt-1 me-3"></i>
                            <span>Corporate Office, Education Hub, India</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="ti ti-phone text-secondary me-3"></i>
                            <span>+91 98765 43210</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="ti ti-mail text-secondary me-3"></i>
                            <span>info@aereneducation.com</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="ti ti-world text-secondary me-3"></i>
                            <span>www.aereneducation.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="border-light my-4" />

            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="text-light mb-3">© 2025 Aeren Education. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- <script type="text/javascript" src="assets/slick/slick.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Include AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false
        });
    </script>
</body>

</html>