@extends('layouts.front')

@section('meta-info')
<title>Faculty Profiles | Aeren College of Education</title>
<meta name="description" content="Meet our experienced and qualified faculty members at Aeren College of Education.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner faculty-bg d-flex align-items-center">
        <div data-aos="fade-up" data-aos-delay="200" class="text-center">
            <h1 class="text-white mb-3 fw-light">
                Our Faculty
            </h1>
            <p class="text-white lead">Experienced Educators, Mentors and Guides</p>
        </div>
    </div>
</section>

<!-- Faculty Grid Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Meet Our Faculty
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
            <p class="text-muted">Dedicated professionals committed to excellence in teacher education</p>
        </div>

        <div class="row g-4">

            <!-- Faculty 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="faculty-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="faculty-img mx-auto mb-3 rounded-circle overflow-hidden" style="width: 150px; height: 150px;">
                        <img src="assets/Images/common/avatar-icon.jpg"
                            alt="Dr. Rajesh Sharma" class="img-fluid h-100 w-100 object-fit-cover">
                    </div>
                    <h4 class="text-primary mb-1">Dr. Rajesh Sharma</h4>
                    <p class="text-secondary fw-semibold">Principal & Professor</p>
                    <p class="text-muted small mb-3">M.Ed, Ph.D in Education</p>
                    <div class="faculty-expertise mb-3">
                        <span class="badge bg-primary mb-1">Educational Psychology</span>
                        <span class="badge bg-primary mb-1">Curriculum Development</span>
                        <span class="badge bg-primary mb-1">Research Methodology</span>
                    </div>
                    <p class="text-muted small mb-3">20+ years of experience in teacher education and educational leadership</p>
                    <div class="faculty-qualification">
                        <p class="text-muted small mb-1"><strong>Qualification:</strong> M.Ed, Ph.D</p>
                        <p class="text-muted small mb-0"><strong>Experience:</strong> 22 Years</p>
                    </div>
                </div>
            </div>

            <!-- Faculty 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="faculty-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="faculty-img mx-auto mb-3 rounded-circle overflow-hidden" style="width: 150px; height: 150px;">
                        <img src="assets/Images/common/avatar-icon.jpg"
                            alt="Dr. Priya Mehta" class="img-fluid h-100 w-100 object-fit-cover">
                    </div>
                    <h4 class="text-primary mb-1">Dr. Priya Mehta</h4>
                    <p class="text-secondary fw-semibold">Vice Principal & Professor</p>
                    <p class="text-muted small mb-3">M.Ed, Ph.D in Educational Technology</p>
                    <div class="faculty-expertise mb-3">
                        <span class="badge bg-primary mb-1">Educational Technology</span>
                        <span class="badge bg-primary mb-1">ICT in Education</span>
                        <span class="badge bg-primary mb-1">Innovative Teaching</span>
                    </div>
                    <p class="text-muted small mb-3">Specialized in integrating technology in classroom teaching and learning</p>
                    <div class="faculty-qualification">
                        <p class="text-muted small mb-1"><strong>Qualification:</strong> M.Ed, Ph.D</p>
                        <p class="text-muted small mb-0"><strong>Experience:</strong> 18 Years</p>
                    </div>
                </div>
            </div>

            <!-- Faculty 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="faculty-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="faculty-img mx-auto mb-3 rounded-circle overflow-hidden" style="width: 150px; height: 150px;">
                        <img src="assets/Images/common/avatar-icon.jpg"
                            alt="Prof. Sunil Patil" class="img-fluid h-100 w-100 object-fit-cover">
                    </div>
                    <h4 class="text-primary mb-1">Prof. Sunil Patil</h4>
                    <p class="text-secondary fw-semibold">Head of Department</p>
                    <p class="text-muted small mb-3">M.A. (English), M.Ed, NET</p>
                    <div class="faculty-expertise mb-3">
                        <span class="badge bg-primary mb-1">Language Teaching</span>
                        <span class="badge bg-primary mb-1">Communication Skills</span>
                        <span class="badge bg-primary mb-1">Pedagogy of English</span>
                    </div>
                    <p class="text-muted small mb-3">Expert in language pedagogy and communication skills training</p>
                    <div class="faculty-qualification">
                        <p class="text-muted small mb-1"><strong>Qualification:</strong> M.A., M.Ed, NET</p>
                        <p class="text-muted small mb-0"><strong>Experience:</strong> 15 Years</p>
                    </div>
                </div>
            </div>

            <!-- Faculty 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="faculty-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="faculty-img mx-auto mb-3 rounded-circle overflow-hidden" style="width: 150px; height: 150px;">
                        <img src="assets/Images/common/avatar-icon.jpg"
                            alt="Dr. Anjali Deshpande" class="img-fluid h-100 w-100 object-fit-cover">
                    </div>
                    <h4 class="text-primary mb-1">Dr. Anjali Deshpande</h4>
                    <p class="text-secondary fw-semibold">Associate Professor</p>
                    <p class="text-muted small mb-3">M.Sc. (Mathematics), M.Ed, Ph.D</p>
                    <div class="faculty-expertise mb-3">
                        <span class="badge bg-primary mb-1">Mathematics Education</span>
                        <span class="badge bg-primary mb-1">Quantitative Methods</span>
                        <span class="badge bg-primary mb-1">Educational Research</span>
                    </div>
                    <p class="text-muted small mb-3">Specialized in mathematics pedagogy and educational research methodology</p>
                    <div class="faculty-qualification">
                        <p class="text-muted small mb-1"><strong>Qualification:</strong> M.Sc., M.Ed, Ph.D</p>
                        <p class="text-muted small mb-0"><strong>Experience:</strong> 12 Years</p>
                    </div>
                </div>
            </div>

            <!-- Faculty 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="faculty-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="faculty-img mx-auto mb-3 rounded-circle overflow-hidden" style="width: 150px; height: 150px;">
                        <img src="assets/Images/common/avatar-icon.jpg"
                            alt="Prof. Rohan Joshi" class="img-fluid h-100 w-100 object-fit-cover">
                    </div>
                    <h4 class="text-primary mb-1">Prof. Rohan Joshi</h4>
                    <p class="text-secondary fw-semibold">Assistant Professor</p>
                    <p class="text-muted small mb-3">M.A. (History), M.Ed, SET</p>
                    <div class="faculty-expertise mb-3">
                        <span class="badge bg-primary mb-1">Social Sciences</span>
                        <span class="badge bg-primary mb-1">Indian History</span>
                        <span class="badge bg-primary mb-1">Teaching Methodology</span>
                    </div>
                    <p class="text-muted small mb-3">Expert in social sciences education and innovative teaching methodologies</p>
                    <div class="faculty-qualification">
                        <p class="text-muted small mb-1"><strong>Qualification:</strong> M.A., M.Ed, SET</p>
                        <p class="text-muted small mb-0"><strong>Experience:</strong> 8 Years</p>
                    </div>
                </div>
            </div>

            <!-- Faculty 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="faculty-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="faculty-img mx-auto mb-3 rounded-circle overflow-hidden" style="width: 150px; height: 150px;">
                        <img src="assets/Images/common/avatar-icon.jpg"
                            alt="Dr. Sneha Kapoor" class="img-fluid h-100 w-100 object-fit-cover">
                    </div>
                    <h4 class="text-primary mb-1">Dr. Sneha Kapoor</h4>
                    <p class="text-secondary fw-semibold">Associate Professor</p>
                    <p class="text-muted small mb-3">M.A. (Psychology), M.Ed, Ph.D</p>
                    <div class="faculty-expertise mb-3">
                        <span class="badge bg-primary mb-1">Educational Psychology</span>
                        <span class="badge bg-primary mb-1">Child Development</span>
                        <span class="badge bg-primary mb-1">Counseling</span>
                    </div>
                    <p class="text-muted small mb-3">Specialized in child psychology and student counseling</p>
                    <div class="faculty-qualification">
                        <p class="text-muted small mb-1"><strong>Qualification:</strong> M.A., M.Ed, Ph.D</p>
                        <p class="text-muted small mb-0"><strong>Experience:</strong> 10 Years</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Faculty Statistics -->
<section class="py-5" style="background: linear-gradient(135deg, var(--primary) 0%, #1a3d63 100%);">
    <div class="container">
        <div class="row g-4 text-center text-white">

            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <h2 class="display-4 fw-bold mb-2">15+</h2>
                    <p class="mb-0">Faculty Members</p>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <h2 class="display-4 fw-bold mb-2">180+</h2>
                    <p class="mb-0">Years Combined Experience</p>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <h2 class="display-4 fw-bold mb-2">8</h2>
                    <p class="mb-0">Ph.D Holders</p>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <h2 class="display-4 fw-bold mb-2">12+</h2>
                    <p class="mb-0">Research Publications</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Teaching Philosophy -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">
                    Our Teaching Philosophy
                    <div class="position-absolute bottom-0 start-0 bg-primary rounded"
                        style="width: 80px; height: 5px;"></div>
                </h2>
                <p class="text-muted mb-4">
                    At Aeren College of Education, our faculty believes in creating a nurturing environment that fosters critical thinking, creativity, and professional growth. We are committed to:
                </p>
                <ul class="text-muted">
                    <li class="mb-2">Student-centered learning approaches</li>
                    <li class="mb-2">Innovative and interactive teaching methodologies</li>
                    <li class="mb-2">Mentorship and personalized guidance</li>
                    <li class="mb-2">Continuous professional development</li>
                    <li>Research-oriented teaching practices</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="philosophy-visual text-center p-4">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="feature-card p-3 rounded-3 bg-white shadow-sm">
                                <i class="ti ti-users text-primary fs-1 mb-3 d-block"></i>
                                <h6 class="text-primary">Mentorship</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card p-3 rounded-3 bg-white shadow-sm">
                                <i class="ti ti-bulb text-primary fs-1 mb-3 d-block"></i>
                                <h6 class="text-primary">Innovation</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card p-3 rounded-3 bg-white shadow-sm">
                                <i class="ti ti-book text-primary fs-1 mb-3 d-block"></i>
                                <h6 class="text-primary">Research</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card p-3 rounded-3 bg-white shadow-sm">
                                <i class="ti ti-heart text-primary fs-1 mb-3 d-block"></i>
                                <h6 class="text-primary">Dedication</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection