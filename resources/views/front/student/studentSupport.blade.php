@extends('layouts.front')

@section('meta-info')
<title>Student Support | Aeren College of Education</title>
<meta name="description" content="Comprehensive student support services at Aeren College of Education - counseling, mentorship, career guidance, and academic assistance.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner support-bg d-flex align-items-center">
        <div data-aos="fade-up" data-aos-delay="200" class="text-center">
            <h1 class="text-white mb-3 fw-light">
                Student Support
            </h1>
            <p class="text-white lead">Comprehensive Support for Your Academic Journey</p>
        </div>
    </div>
</section>

<!-- Support Services Overview -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-primary mb-4">
                    Student Support Services
                </h2>
                <p class="text-muted mb-4">
                    At Aeren College of Education, we believe in providing holistic support to our students throughout their academic journey. Our comprehensive support system ensures that every student receives the guidance and assistance they need to succeed.
                </p>
                <div class="support-stats">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="stat-item text-center">
                                <h3 class="text-primary fw-bold">100%</h3>
                                <p class="text-muted small mb-0">Student Support</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-item text-center">
                                <h3 class="text-primary fw-bold">24/7</h3>
                                <p class="text-muted small mb-0">Online Assistance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="support-image text-center">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Student Support" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Services Grid -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Our Support Services</h2>
            <p class="text-muted">Comprehensive assistance for academic and personal growth</p>
        </div>

        <div class="row g-4">
            <!-- Academic Support -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="service-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-school fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Academic Support</h5>
                    <ul class="text-muted small text-start">
                        <li class="mb-2">Regular academic counseling</li>
                        <li class="mb-2">Study skill workshops</li>
                        <li class="mb-2">Remedial classes</li>
                        <li class="mb-2">Library resources</li>
                        <li>Research guidance</li>
                    </ul>
                </div>
            </div>

            <!-- Career Guidance -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="service-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-briefcase fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Career Guidance</h5>
                    <ul class="text-muted small text-start">
                        <li class="mb-2">Career counseling sessions</li>
                        <li class="mb-2">Resume building workshops</li>
                        <li class="mb-2">Interview preparation</li>
                        <li class="mb-2">Job placement assistance</li>
                        <li>Industry interactions</li>
                    </ul>
                </div>
            </div>

            <!-- Personal Counseling -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="service-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-heart fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Personal Counseling</h5>
                    <ul class="text-muted small text-start">
                        <li class="mb-2">Individual counseling</li>
                        <li class="mb-2">Stress management</li>
                        <li class="mb-2">Time management</li>
                        <li class="mb-2">Personal development</li>
                        <li>Confidential support</li>
                    </ul>
                </div>
            </div>

            <!-- Financial Assistance -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="service-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-currency-rupee fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Financial Assistance</h5>
                    <ul class="text-muted small text-start">
                        <li class="mb-2">Scholarship information</li>
                        <li class="mb-2">Education loans guidance</li>
                        <li class="mb-2">Fee payment options</li>
                        <li class="mb-2">Financial aid counseling</li>
                        <li>Government schemes</li>
                    </ul>
                </div>
            </div>

            <!-- Technical Support -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="service-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-device-laptop fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Technical Support</h5>
                    <ul class="text-muted small text-start">
                        <li class="mb-2">Computer lab access</li>
                        <li class="mb-2">Software training</li>
                        <li class="mb-2">Online learning support</li>
                        <li class="mb-2">Digital resources</li>
                        <li>Technical troubleshooting</li>
                    </ul>
                </div>
            </div>

            <!-- Health & Wellness -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="service-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-heartbeat fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Health & Wellness</h5>
                    <ul class="text-muted small text-start">
                        <li class="mb-2">Health check-up camps</li>
                        <li class="mb-2">Yoga and meditation</li>
                        <li class="mb-2">Sports facilities</li>
                        <li class="mb-2">Mental health support</li>
                        <li>Wellness workshops</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Contact Support -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="contact-support text-center p-5 rounded-4 shadow-sm bg-white">
                    <h2 class="display-6 fw-bold text-primary mb-3">Need Immediate Support?</h2>
                    <p class="text-muted mb-4">Our student support team is here to help you with any questions or concerns.</p>
                    
                    <div class="contact-methods">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="contact-method">
                                    <i class="ti ti-phone text-primary fs-1 mb-2 d-block"></i>
                                    <h6 class="text-primary">Call Us</h6>
                                    <p class="text-muted small mb-0">+91 22 1234 5678</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contact-method">
                                    <i class="ti ti-mail text-primary fs-1 mb-2 d-block"></i>
                                    <h6 class="text-primary">Email Us</h6>
                                    <p class="text-muted small mb-0">support@aeren.edu.in</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contact-method">
                                    <i class="ti ti-clock text-primary fs-1 mb-2 d-block"></i>
                                    <h6 class="text-primary">Visit Us</h6>
                                    <p class="text-muted small mb-0">Mon - Fri: 9 AM - 5 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection