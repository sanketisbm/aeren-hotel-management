@extends('layouts.front')

@section('meta-info')
<title>Admission Process | Aeren College of Education</title>
<meta name="description" content="Complete admission process for Aeren College of Education - B.Ed program admission procedure, eligibility, and important dates.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner admission-bg d-flex align-items-center">
        <div data-aos="fade-up" data-aos-delay="200" class="text-center">
            <h1 class="text-white mb-3 fw-light">
                Admission Process
            </h1>
            <p class="text-white lead">Your Journey to Becoming an Educator Starts Here</p>
        </div>
    </div>
</section>

<!-- Admission Overview -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-8">
                <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">
                    Admission Procedure
                    <div class="position-absolute bottom-0 start-0 bg-primary rounded"
                        style="width: 80px; height: 5px;"></div>
                </h2>
                <p class="text-muted mb-4">
                    Admission to the B.Ed program at Aeren College of Education is conducted through a transparent and systematic process as per the guidelines of University of Mumbai and Government of Maharashtra.
                </p>

                <div class="admission-highlights">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="highlight-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="ti ti-clipboard-check"></i>
                                </div>
                                <div>
                                    <h6 class="text-primary mb-1">Entrance Based</h6>
                                    <p class="text-muted small mb-0">MAH B.Ed CET Score</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="highlight-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="ti ti-calendar"></i>
                                </div>
                                <div>
                                    <h6 class="text-primary mb-1">Academic Year</h6>
                                    <p class="text-muted small mb-0">2024-2026</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="highlight-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="ti ti-users"></i>
                                </div>
                                <div>
                                    <h6 class="text-primary mb-1">Intake Capacity</h6>
                                    <p class="text-muted small mb-0">100 Seats</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="highlight-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="ti ti-building"></i>
                                </div>
                                <div>
                                    <h6 class="text-primary mb-1">Reservation</h6>
                                    <p class="text-muted small mb-0">As per Govt. Norms</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="info-card p-4 rounded-4 shadow-sm bg-primary text-white">
                    <h4 class="mb-3">Quick Links</h4>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-light btn-lg">
                            <i class="ti ti-download me-2"></i>Download Brochure
                        </a>
                        <a href="#" class="btn btn-light btn-lg">
                            <i class="ti ti-file-download me-2"></i>Application Form
                        </a>
                        <a href="#" class="btn btn-light btn-lg">
                            <i class="ti ti-checklist me-2"></i>Eligibility Criteria
                        </a>
                        <a href="#" class="btn btn-light btn-lg">
                            <i class="ti ti-calendar me-2"></i>Important Dates
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Step by Step Process -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-5">
                    <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Admission Process Steps
                        <div class="position-absolute bottom-0 start-0 bg-primary rounded"
                            style="width: 80px; height: 5px;"></div>
                    </h2>
                </div>

                <div class="process-steps">
                    <div class="step-item">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h5 class="text-primary mb-2">Check Eligibility</h5>
                            <p class="text-muted mb-0">Verify that you meet the minimum eligibility criteria for B.Ed program</p>
                            <ul class="text-muted small mt-2">
                                <li>Bachelor's Degree with minimum 50% marks</li>
                                <li>Valid MAH B.Ed CET score</li>
                                <li>Meet reservation category requirements if applicable</li>
                            </ul>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h5 class="text-primary mb-2">Appear for MAH B.Ed CET</h5>
                            <p class="text-muted mb-0">Register and appear for Maharashtra B.Ed Common Entrance Test</p>
                            <ul class="text-muted small mt-2">
                                <li>Online registration on cetcell.mahacet.org</li>
                                <li>Download admit card</li>
                                <li>Appear for entrance exam</li>
                            </ul>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h5 class="text-primary mb-2">Check Merit List</h5>
                            <p class="text-muted mb-0">Wait for merit list declaration based on CET scores</p>
                            <ul class="text-muted small mt-2">
                                <li>Merit list published on college website</li>
                                <li>Separate merit lists for different categories</li>
                                <li>Check your rank and score</li>
                            </ul>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h5 class="text-primary mb-2">Document Verification</h5>
                            <p class="text-muted mb-0">Submit required documents for verification at college</p>
                            <ul class="text-muted small mt-2">
                                <li>All original educational certificates</li>
                                <li>CET scorecard and admit card</li>
                                <li>Category certificate (if applicable)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h5 class="text-primary mb-2">Fee Payment & Admission</h5>
                            <p class="text-muted mb-0">Complete admission formalities and fee payment</p>
                            <ul class="text-muted small mt-2">
                                <li>Pay tuition fee and other charges</li>
                                <li>Submit completed application form</li>
                                <li>Collect admission confirmation letter</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-5">
                    <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Required Documents
                        <div class="position-absolute bottom-0 start-0 bg-primary rounded"
                            style="width: 80px; height: 5px;"></div>
                    </h2>
                </div>

                <div class="row g-4">
                    <div class="col-12">
                        <div class="doc-card p-4 rounded-4 shadow-sm border">
                            <h5 class="text-primary mb-3">Academic Documents</h5>
                            <ul class="text-muted">
                                <li class="mb-2">10th Standard Marksheet & Passing Certificate</li>
                                <li class="mb-2">12th Standard Marksheet & Passing Certificate</li>
                                <li class="mb-2">Bachelor's Degree Marksheets (All Years/Semesters)</li>
                                <li class="mb-2">Bachelor's Degree Certificate/Provisional Certificate</li>
                                <li>Master's Degree Marksheets & Certificate (if applicable)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="doc-card p-4 rounded-4 shadow-sm border">
                            <h5 class="text-primary mb-3">Other Documents</h5>
                            <ul class="text-muted">
                                <li class="mb-2">MAH B.Ed CET Scorecard</li>
                                <li class="mb-2">MAH B.Ed CET Admit Card</li>
                                <li class="mb-2">Transfer Certificate / School Leaving Certificate</li>
                                <li class="mb-2">Migration Certificate (if from other university)</li>
                                <li class="mb-2">Category Certificate (SC/ST/OBC/EWS etc.)</li>
                                <li class="mb-2">Non-Creamy Layer Certificate (if applicable)</li>
                                <li class="mb-2">Income Certificate (if applicable)</li>
                                <li class="mb-2">Aadhar Card Copy</li>
                                <li>Passport Size Photographs (4 copies)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection