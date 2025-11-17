@extends('layouts.front')

@section('meta-info')
<title>Awards & Recognition | Aeren Education</title>
<meta name="description" content="Discover the awards, accolades and recognition received by Aeren Education for excellence in teacher education.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner awards-bg d-flex align-items-center">
        <div data-aos="fade-up" data-aos-delay="200" class="text-center">
            <h1 class="text-white mb-3 fw-light">
                Awards & Recognition
            </h1>
            <p class="text-white lead">Celebrating Excellence in Education</p>
        </div>
    </div>
</section>

<!-- Awards Grid Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Our Accolades
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
            <p class="text-muted">Recognized for our commitment to quality education and institutional excellence</p>
        </div>

        <div class="row g-4">

            <!-- Award 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="award-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="award-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 80px; height: 80px;">
                        <i class="ti ti-trophy fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Best Education College 2023</h5>
                    <p class="text-muted small mb-3">Awarded by Maharashtra Education Society for excellence in teacher education and infrastructure</p>
                    <span class="badge bg-primary">2023</span>
                </div>
            </div>

            <!-- Award 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="award-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="award-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 80px; height: 80px;">
                        <i class="ti ti-award fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Innovative Teaching Practices</h5>
                    <p class="text-muted small mb-3">Recognized by University of Mumbai for implementing innovative teaching methodologies</p>
                    <span class="badge bg-primary">2022</span>
                </div>
            </div>

            <!-- Award 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="award-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="award-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 80px; height: 80px;">
                        <i class="ti ti-star fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Green Campus Initiative</h5>
                    <p class="text-muted small mb-3">Awarded for environmental sustainability and eco-friendly campus practices</p>
                    <span class="badge bg-primary">2022</span>
                </div>
            </div>

            <!-- Award 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="award-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="award-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 80px; height: 80px;">
                        <i class="ti ti-medal fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Outstanding Placement Record</h5>
                    <p class="text-muted small mb-3">Recognized for achieving 95% placement rate for B.Ed graduates</p>
                    <span class="badge bg-primary">2021</span>
                </div>
            </div>

            <!-- Award 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="award-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="award-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 80px; height: 80px;">
                        <i class="ti ti-crown fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Community Service Excellence</h5>
                    <p class="text-muted small mb-3">Awarded for outstanding contribution to community development programs</p>
                    <span class="badge bg-primary">2021</span>
                </div>
            </div>

            <!-- Award 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="award-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="award-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 80px; height: 80px;">
                        <i class="ti ti-shield-check fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">ISO 9001:2015 Certified</h5>
                    <p class="text-muted small mb-3">Quality Management System certification for educational services</p>
                    <span class="badge bg-primary">2020</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Recognition Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Our Recognitions
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
        </div>

        <div class="row g-4 align-items-center">

            <div class="col-lg-6">
                <div class="recognition-list">
                    <div class="d-flex align-items-start mb-4">
                        <div class="recognition-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                             style="width: 50px; height: 50px;">
                            <i class="ti ti-building"></i>
                        </div>
                        <div>
                            <h5 class="text-primary mb-1">University of Mumbai Affiliation</h5>
                            <p class="text-muted mb-0">Permanently affiliated institution maintaining highest academic standards</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="recognition-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                             style="width: 50px; height: 50px;">
                            <i class="ti ti-certificate"></i>
                        </div>
                        <div>
                            <h5 class="text-primary mb-1">NCTE Recognition</h5>
                            <p class="text-muted mb-0">Recognized by National Council for Teacher Education for B.Ed program</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="recognition-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                             style="width: 50px; height: 50px;">
                            <i class="ti ti-building-community"></i>
                        </div>
                        <div>
                            <h5 class="text-primary mb-1">Government of Maharashtra Approved</h5>
                            <p class="text-muted mb-0">Approved by State Government for teacher education programs</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="recognition-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                             style="width: 50px; height: 50px;">
                            <i class="ti ti-license"></i>
                        </div>
                        <div>
                            <h5 class="text-primary mb-1">NAAC Accreditation</h5>
                            <p class="text-muted mb-0">In process of accreditation by National Assessment and Accreditation Council</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="recognition-visual text-center">
                    <div class="trophy-display bg-primary rounded-4 p-5 text-white">
                        <i class="ti ti-trophy fs-1 mb-3 d-block"></i>
                        <h4 class="mb-3">Proud Legacy of Excellence</h4>
                        <p class="mb-0">Multiple awards and recognitions celebrating our commitment to quality education</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Certificates Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Certifications & Accreditations
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
        </div>

        <div class="row g-4 justify-content-center">

            <div class="col-md-4">
                <div class="certificate-card text-center p-4 rounded-4 shadow-sm bg-white">
                    <div class="certificate-icon mx-auto mb-3 text-primary">
                        <i class="ti ti-license fs-1"></i>
                    </div>
                    <h5 class="text-primary mb-3">ISO Certification</h5>
                    <p class="text-muted small mb-0">ISO 9001:2015 Certified for Quality Management in Education</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="certificate-card text-center p-4 rounded-4 shadow-sm bg-white">
                    <div class="certificate-icon mx-auto mb-3 text-primary">
                        <i class="ti ti-school fs-1"></i>
                    </div>
                    <h5 class="text-primary mb-3">University Affiliation</h5>
                    <p class="text-muted small mb-0">Permanent Affiliation with University of Mumbai</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="certificate-card text-center p-4 rounded-4 shadow-sm bg-white">
                    <div class="certificate-icon mx-auto mb-3 text-primary">
                        <i class="ti ti-shield-check fs-1"></i>
                    </div>
                    <h5 class="text-primary mb-3">NCTE Approval</h5>
                    <p class="text-muted small mb-0">Approved by National Council for Teacher Education</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection