@extends('layouts.front')

@section('meta-info')
<title>Vision & Mission | Aeren Education</title>
<meta name="description" content="Discover the vision and mission of Aeren Education - committed to academic excellence, values, and social responsibility.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner vision-bg d-flex align-items-center">
        <div data-aos="fade-up" data-aos-delay="200">
            <h1 class="text-white mb-3 fw-light" class="text-center">
                Vision & Mission
            </h1>
            <p class="text-white lead">Guiding Principles for Educational Excellence</p>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-12">
                <div class="vision-card p-5 rounded-4 shadow-sm bg-white h-100 text-center">
                    <div class="vision-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                        style="width: 80px; height: 80px;">
                        <i class="ti ti-eye fs-2"></i>
                    </div>
                    <h2 class="text-primary mb-4">Our Vision</h2>
                    <p class="text-muted lead">
                        To be recognized as a leading college under the University of Mumbai that delivers academic excellence while instilling strong values, leadership qualities and a sense of social commitment among students.
                    </p>
                </div>
            </div>

            <div class="col-12">
                <div class="mission-card p-5 rounded-4 shadow-sm bg-white h-100">
                    <div class="mission-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                        style="width: 80px; height: 80px;">
                        <i class="ti ti-target-arrow fs-2"></i>
                    </div>
                    <h2 class="text-primary mb-4 text-center">Our Mission</h2>

                    <div class="mission-points">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start mb-4">
                                    <div class="point-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                                        style="width: 40px; height: 40px;">
                                        <i class="ti ti-school"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-primary mb-1">Quality Education</h6>
                                        <p class="text-muted small mb-0">Provide quality education that meets the highest academic standards of the University of Mumbai.</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start mb-4">
                                    <div class="point-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                                        style="width: 40px; height: 40px;">
                                        <i class="ti ti-brain"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-primary mb-1">Analytical Thinking</h6>
                                        <p class="text-muted small mb-0">Cultivate analytical thinking, creativity and professional competence through innovative teaching.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-start mb-4">
                                    <div class="point-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                                        style="width: 40px; height: 40px;">
                                        <i class="ti ti-users"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-primary mb-1">Student Engagement</h6>
                                        <p class="text-muted small mb-0">Encourage student engagement in co-curricular and community-service activities.</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start">
                                    <div class="point-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                                        style="width: 40px; height: 40px;">
                                        <i class="ti ti-heart"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-primary mb-1">Ethical Values</h6>
                                        <p class="text-muted small mb-0">Promote ethical values and inclusive growth, inspired by the Aeren Foundation's commitment to social upliftment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Values in Action Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Our Commitment in Action
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
            <p class="text-muted">How we bring our vision and mission to life every day</p>
        </div>

        <div class="row g-4">

            <div class="col-md-6 col-lg-3">
                <div class="action-card text-center p-4 rounded-4 shadow-sm border">
                    <div class="action-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 70px; height: 70px;">
                        <i class="ti ti-certificate fs-3"></i>
                    </div>
                    <h5 class="text-primary">Academic Excellence</h5>
                    <p class="text-muted small mb-0">Maintaining University of Mumbai's highest standards in curriculum and assessment.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="action-card text-center p-4 rounded-4 shadow-sm border">
                    <div class="action-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 70px; height: 70px;">
                        <i class="ti ti-users fs-3"></i>
                    </div>
                    <h5 class="text-primary">Leadership Development</h5>
                    <p class="text-muted small mb-0">Nurturing future leaders through various student-led initiatives and programs.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="action-card text-center p-4 rounded-4 shadow-sm border">
                    <div class="action-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 70px; height: 70px;">
                        <i class="ti ti-heart-handshake fs-3"></i>
                    </div>
                    <h5 class="text-primary">Community Service</h5>
                    <p class="text-muted small mb-0">Active participation in social initiatives reflecting our commitment to society.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="action-card text-center p-4 rounded-4 shadow-sm border">
                    <div class="action-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 70px; height: 70px;">
                        <i class="ti ti-shield-check fs-3"></i>
                    </div>
                    <h5 class="text-primary">Ethical Foundation</h5>
                    <p class="text-muted small mb-0">Building character through value-based education and ethical practices.</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection