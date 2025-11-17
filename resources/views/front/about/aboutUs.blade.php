@extends('layouts.front')

@section('meta-info')
<title>About Us | Aeren Education</title>
<meta name="description" content="Learn about Aeren Education, affiliated to University of Mumbai, providing quality education with excellence, ethics and purpose.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner about-bg d-flex align-items-center">
        <div data-aos="fade-up" data-aos-delay="200" class="text-center">
            <h1 class="text-white mb-3 fw-light">
                About Aeren Education
            </h1>
            <p class="text-white lead">Affiliated to the University of Mumbai | Educating with Excellence, Ethics and Purpose</p>
        </div>
    </div>
</section>

<!-- About Content Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">
                    About Aeren Education
                    <div class="position-absolute bottom-0 start-0 bg-primary rounded"
                        style="width: 80px; height: 5px;"></div>
                </h2>

                <p class="text-muted mb-4">
                    Aeren Education, formerly known as Raval College, is a reputed institution in Mumbai affiliated with the University of Mumbai. The college is committed to providing high-quality education that blends academic excellence with strong ethical values.
                </p>

                <p class="text-muted mb-4">
                    Supported by the Aeren Foundation, a government-recognized NGO established in 2003, Aeren Education focuses on creating a vibrant learning environment where students are encouraged to achieve academic success, develop leadership qualities, and contribute positively to society.
                </p>

                <p class="text-muted mb-4">
                    The college aims to nurture well-rounded individuals through value-based learning, personal growth, and holistic development — preparing them to excel in their careers and become responsible citizens.
                </p>
            </div>

            <div class="col-auto">
                <img src="https://istm.org.in/front-assets/images/banner/image-01.webp"
                            alt="Aeren Education Campus" class="rounded-4 shadow img-fluid mb-3">
            </div>

        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Why Choose Aeren Education
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
        </div>

        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <div class="why-card-v2 h-100">
                    <div class="why-icon-circle"><i class="ti ti-building fs-2"></i></div>
                    <h5>University of Mumbai Affiliation & Recognised Degrees</h5>
                    <p class="text-muted mb-0">Our programs are officially recognized and affiliated with the prestigious University of Mumbai.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="why-card-v2 h-100">
                    <div class="why-icon-circle"><i class="ti ti-users fs-2"></i></div>
                    <h5>Qualified and Experienced Faculty</h5>
                    <p class="text-muted mb-0">Dedicated to academic and personal mentorship of every student.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="why-card-v2 h-100">
                    <div class="why-icon-circle"><i class="ti ti-user-star fs-2"></i></div>
                    <h5>Student-Centric Approach</h5>
                    <p class="text-muted mb-0">Individual attention and guidance for holistic student development.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="why-card-v2 h-100">
                    <div class="why-icon-circle"><i class="ti ti-building-community fs-2"></i></div>
                    <h5>Modern Infrastructure</h5>
                    <p class="text-muted mb-0">Well-equipped, learning-friendly classrooms and facilities.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="why-card-v2 h-100">
                    <div class="why-icon-circle"><i class="ti ti-trophy fs-2"></i></div>
                    <h5>Active Cultural, Sports and Academic Clubs</h5>
                    <p class="text-muted mb-0">Comprehensive development through various extracurricular activities.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="why-card-v2 h-100">
                    <div class="why-icon-circle"><i class="ti ti-heart fs-2"></i></div>
                    <h5>Value-Based Learning</h5>
                    <p class="text-muted mb-0">Rooted in the ethos of Aeren Foundation for character building.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Legacy Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                            alt="Community Service" class="rounded-4 shadow img-fluid mt-4">
            </div>

            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">
                    Legacy of Aeren Foundation
                    <div class="position-absolute bottom-0 start-0 bg-primary rounded"
                        style="width: 80px; height: 5px;"></div>
                </h2>

                <p class="text-muted mb-4">
                    Established in 2003, the Aeren Foundation is a government-recognized organization committed to education, healthcare and community welfare.
                </p>

                <p class="text-muted">
                    Through its partnership, Aeren Education extends learning beyond academics—instilling empathy, responsibility and social awareness in every student.
                </p>

                <div class="mt-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="legacy-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                            style="width: 50px; height: 50px;">
                            <i class="ti ti-school"></i>
                        </div>
                        <div>
                            <h6 class="mb-1">Education Initiatives</h6>
                            <p class="text-muted small mb-0">Promoting quality education for all</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <div class="legacy-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                            style="width: 50px; height: 50px;">
                            <i class="ti ti-heartbeat"></i>
                        </div>
                        <div>
                            <h6 class="mb-1">Healthcare Support</h6>
                            <p class="text-muted small mb-0">Community health and wellness programs</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="legacy-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                            style="width: 50px; height: 50px;">
                            <i class="ti ti-users"></i>
                        </div>
                        <div>
                            <h6 class="mb-1">Community Welfare</h6>
                            <p class="text-muted small mb-0">Social development and empowerment</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection