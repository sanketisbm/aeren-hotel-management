@extends('layouts.front')

@section('meta-info')
<title>Scholarships | Aeren College of Education</title>
<meta name="description" content="Scholarship opportunities at Aeren College of Education - merit-based, need-based, and government scholarships for B.Ed students.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner scholarship-bg d-flex align-items-center">
        <div data-aos="fade-up" data-aos-delay="200" class="text-center">
            <h1 class="text-white mb-3 fw-light">
                Scholarships
            </h1>
            <p class="text-white lead">Financial Support for Deserving Students</p>
        </div>
    </div>
</section>

<!-- Scholarship Overview -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-primary mb-4">
                    Scholarship Opportunities
                </h2>
                <p class="text-muted mb-4">
                    Aeren College of Education is committed to making quality education accessible to all deserving students. We offer various scholarship programs to support meritorious and economically challenged students in pursuing their B.Ed degree.
                </p>
                <div class="scholarship-stats">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="stat-item text-center">
                                <h3 class="text-primary fw-bold">50+</h3>
                                <p class="text-muted small mb-0">Scholarships Awarded</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-item text-center">
                                <h3 class="text-primary fw-bold">₹25L+</h3>
                                <p class="text-muted small mb-0">Financial Aid Provided</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="scholarship-image text-center">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Scholarship Opportunities" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scholarship Types -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Types of Scholarships</h2>
            <p class="text-muted">Various scholarship programs available for eligible students</p>
        </div>

        <div class="row g-4">
            <!-- Merit-based Scholarship -->
            <div class="col-md-6 col-lg-4">
                <div class="scholarship-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="scholarship-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-trophy fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Merit-based Scholarships</h5>
                    <p class="text-muted small mb-3">For students with outstanding academic performance</p>
                    <div class="scholarship-details">
                        <div class="detail-item">
                            <i class="ti ti-discount text-primary me-2"></i>
                            <span>Up to 100% tuition fee waiver</span>
                        </div>
                        <div class="detail-item">
                            <i class="ti ti-percentage text-primary me-2"></i>
                            <span>Minimum 75% in qualifying exam</span>
                        </div>
                        <div class="detail-item">
                            <i class="ti ti-certificate text-primary me-2"></i>
                            <span>Based on academic records</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-primary btn-sm mt-3">Learn More</a>
                </div>
            </div>

            <!-- Need-based Scholarship -->
            <div class="col-md-6 col-lg-4">
                <div class="scholarship-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="scholarship-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-heart fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Need-based Scholarships</h5>
                    <p class="text-muted small mb-3">For economically disadvantaged students</p>
                    <div class="scholarship-details">
                        <div class="detail-item">
                            <i class="ti ti-discount text-primary me-2"></i>
                            <span>Up to 50% tuition fee waiver</span>
                        </div>
                        <div class="detail-item">
                            <i class="ti ti-file-invoice text-primary me-2"></i>
                            <span>Income certificate required</span>
                        </div>
                        <div class="detail-item">
                            <i class="ti ti-users text-primary me-2"></i>
                            <span>Family income verification</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-primary btn-sm mt-3">Learn More</a>
                </div>
            </div>

            <!-- Government Scholarships -->
            <div class="col-md-6 col-lg-4">
                <div class="scholarship-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="scholarship-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-building fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Government Scholarships</h5>
                    <p class="text-muted small mb-3">State and central government schemes</p>
                    <div class="scholarship-details">
                        <div class="detail-item">
                            <i class="ti ti-discount text-primary me-2"></i>
                            <span>As per government norms</span>
                        </div>
                        <div class="detail-item">
                            <i class="ti ti-file-certificate text-primary me-2"></i>
                            <span>Caste/Tribe certificate required</span>
                        </div>
                        <div class="detail-item">
                            <i class="ti ti-checkbox text-primary me-2"></i>
                            <span>Online application process</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-primary btn-sm mt-3">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Government Scholarship Schemes -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Government Scholarship Schemes</h2>
            <p class="text-muted">Available for eligible students as per government guidelines</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="govt-scheme-card p-4 rounded-4 shadow-sm border h-100">
                    <div class="d-flex align-items-start">
                        <div class="scheme-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                             style="width: 50px; height: 50px;">
                            <i class="ti ti-users"></i>
                        </div>
                        <div>
                            <h5 class="text-primary mb-2">Post-Matric Scholarship</h5>
                            <p class="text-muted small mb-3">For SC/ST/OBC students pursuing higher education</p>
                            <ul class="text-muted small">
                                <li>Full tuition fee reimbursement</li>
                                <li>Maintenance allowance</li>
                                <li>Book and equipment grant</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="govt-scheme-card p-4 rounded-4 shadow-sm border h-100">
                    <div class="d-flex align-items-start">
                        <div class="scheme-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                             style="width: 50px; height: 50px;">
                            <i class="ti ti-user-plus"></i>
                        </div>
                        <div>
                            <h5 class="text-primary mb-2">EBC Scholarship</h5>
                            <p class="text-muted small mb-3">For Economically Backward Class students</p>
                            <ul class="text-muted small">
                                <li>Tuition fee concession</li>
                                <li>Exam fee reimbursement</li>
                                <li>Income limit: ₹8 Lakhs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="govt-scheme-card p-4 rounded-4 shadow-sm border h-100">
                    <div class="d-flex align-items-start">
                        <div class="scheme-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                             style="width: 50px; height: 50px;">
                            <i class="ti ti-gender-female"></i>
                        </div>
                        <div>
                            <h5 class="text-primary mb-2">Women's Scholarship</h5>
                            <p class="text-muted small mb-3">Special scholarships for female students</p>
                            <ul class="text-muted small">
                                <li>Additional fee concession</li>
                                <li>Special merit awards</li>
                                <li>Career guidance programs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="govt-scheme-card p-4 rounded-4 shadow-sm border h-100">
                    <div class="d-flex align-items-start">
                        <div class="scheme-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                             style="width: 50px; height: 50px;">
                            <i class="ti ti-disabled"></i>
                        </div>
                        <div>
                            <h5 class="text-primary mb-2">Divyangjan Scholarship</h5>
                            <p class="text-muted small mb-3">For students with disabilities</p>
                            <ul class="text-muted small">
                                <li>Full fee waiver</li>
                                <li>Special equipment support</li>
                                <li>Reader allowance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Process -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Scholarship Application Process</h2>
            <p class="text-muted">Simple steps to apply for scholarships</p>
        </div>

        <div class="process-steps">
            <div class="step-item">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h5 class="text-primary mb-2">Check Eligibility</h5>
                    <p class="text-muted small mb-0">Review the eligibility criteria for different scholarship schemes and ensure you meet the requirements.</p>
                </div>
            </div>
            <div class="step-item">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h5 class="text-primary mb-2">Collect Documents</h5>
                    <p class="text-muted small mb-0">Gather all required documents including academic records, income certificate, and category certificate.</p>
                </div>
            </div>
            <div class="step-item">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h5 class="text-primary mb-2">Submit Application</h5>
                    <p class="text-muted small mb-0">Fill the scholarship application form and submit it along with required documents before the deadline.</p>
                </div>
            </div>
            <div class="step-item">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h5 class="text-primary mb-2">Approval & Disbursement</h5>
                    <p class="text-muted small mb-0">After verification, approved scholarships will be disbursed directly to your fee account.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Required Documents -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Required Documents</h2>
            <p class="text-muted">Essential documents for scholarship application</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="doc-card p-4 rounded-4 shadow-sm border h-100">
                    <h5 class="text-primary mb-3">Academic Documents</h5>
                    <ul class="text-muted">
                        <li class="mb-2">10th and 12th Marksheets</li>
                        <li class="mb-2">Graduation Marksheets</li>
                        <li class="mb-2">Degree Certificate</li>
                        <li class="mb-2">MAH B.Ed CET Scorecard</li>
                        <li>Admission Receipt</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="doc-card p-4 rounded-4 shadow-sm border h-100">
                    <h5 class="text-primary mb-3">Personal Documents</h5>
                    <ul class="text-muted">
                        <li class="mb-2">Aadhar Card</li>
                        <li class="mb-2">Domicile Certificate</li>
                        <li class="mb-2">Income Certificate</li>
                        <li class="mb-2">Caste Certificate (if applicable)</li>
                        <li class="mb-2">Caste Validity Certificate</li>
                        <li>Non-Creamy Layer Certificate</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection