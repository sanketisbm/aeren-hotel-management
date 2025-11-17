@extends('layouts.front')

@section('meta-info')
<title>Eligibility Criteria | Aeren College of Education</title>
<meta name="description" content="Check eligibility criteria for B.Ed program at Aeren College of Education - educational qualifications, minimum marks, and reservation requirements.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner eligibility-bg d-flex align-items-center">
        <div data-aos="fade-up" data-aos-delay="200" class="text-center">
            <h1 class="text-white mb-3 fw-light">
                Eligibility Criteria
            </h1>
            <p class="text-white lead">Requirements for B.Ed Program Admission</p>
        </div>
    </div>
</section>

<!-- Main Eligibility Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="eligibility-card p-5 rounded-4 shadow-sm bg-white">

                    <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3 text-center"> Bachelor of Education (B.Ed) Eligibility
                        <div class="position-absolute bg-primary rounded"
                            style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                        </div>
                    </h2>

                    <!-- General Eligibility -->
                    <div class="eligibility-section mb-5">
                        <h4 class="text-primary mb-3">General Eligibility</h4>
                        <p class="text-muted mb-4">
                            Candidates who have completed graduation or post-graduation with at least <strong>50% marks</strong> (45% for ST, SC, OBC, VJNT candidates) from any recognized University are eligible to apply.
                        </p>
                        <p class="text-muted mb-4">
                            Candidates who have completed B.Com, Management, Engineering, Computer Science, Technology, Agriculture, BBI, Pharmacy, Law, Fine Arts, Performing Arts, Music, Dance, Drama with <strong>55% marks</strong> (50% for reserved category candidates) at graduation or post-graduation are also eligible to apply.
                        </p>
                    </div>

                    <!-- Admission Process -->
                    <div class="admission-section mb-5">
                        <h4 class="text-primary mb-3">Admission Process</h4>
                        <p class="text-muted">
                            Admission to Bachelor of Education (B Ed), a 2 years Degree Program is done through a common entrance exam MAHB.Ed.CET conducted by State Common Entrance Test Cell, Government of Maharashtra.
                        </p>
                    </div>

                    <!-- Detailed Eligibility -->
                    <div class="detailed-eligibility">
                        <h4 class="text-primary mb-3">Detailed Eligibility Criteria</h4>
                        <p class="text-muted mb-3">
                            Applicants must be a graduate/post-graduate in any relevant field from a recognized University with at least:
                        </p>
                        <div class="eligibility-list">
                            <div class="eligibility-item">
                                <i class="ti ti-circle-check text-primary me-2"></i>
                                <span><strong>50% Marks</strong> for Open Category domiciled in state of Maharashtra.</span>
                            </div>
                            <div class="eligibility-item">
                                <i class="ti ti-circle-check text-primary me-2"></i>
                                <span><strong>45% marks</strong> for Reserved Class candidates belonging to State of Maharashtra having caste Certificate, Caste validity and Non Creamy layer Certificate if applicable.</span>
                            </div>
                            <div class="eligibility-item">
                                <i class="ti ti-circle-check text-primary me-2"></i>
                                <span><strong>50% Marks</strong> in Qualifying Degree from the University outside the State of Maharashtra.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Summary -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3"> Eligibility at a Glance
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="summary-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="summary-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 70px; height: 70px;">
                        <i class="ti ti-user fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Open Category</h5>
                    <div class="percentage-display mb-3">
                        <span class="display-4 fw-bold text-primary">50%</span>
                    </div>
                    <p class="text-muted small mb-0">Minimum marks required for Maharashtra domicile candidates</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="summary-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="summary-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 70px; height: 70px;">
                        <i class="ti ti-users fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Reserved Category</h5>
                    <div class="percentage-display mb-3">
                        <span class="display-4 fw-bold text-primary">45%</span>
                    </div>
                    <p class="text-muted small mb-0">For ST, SC, OBC, VJNT candidates from Maharashtra</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="summary-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="summary-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 70px; height: 70px;">
                        <i class="ti ti-certificate fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Special Streams</h5>
                    <div class="percentage-display mb-3">
                        <span class="display-4 fw-bold text-primary">55%</span>
                    </div>
                    <p class="text-muted small mb-0">For professional degrees (50% for reserved categories)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Important Notes -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="notes-card p-4 rounded-4 shadow-sm border">
                    <h4 class="text-primary mb-4 text-center">Important Notes</h4>
                    <div class="notes-list">
                        <div class="note-item d-flex align-items-start mb-3">
                            <i class="ti ti-clipboard-check text-primary me-2 mt-1 flex-shrink-0"></i>
                            <p class="text-muted mb-0">Admission is through MAH B.Ed CET entrance exam only</p>
                        </div>
                        <div class="note-item d-flex align-items-start mb-3">
                            <i class="ti ti-file-certificate text-primary me-2 mt-1 flex-shrink-0"></i>
                            <p class="text-muted mb-0">Reserved category candidates must provide valid caste certificates</p>
                        </div>
                        <div class="note-item d-flex align-items-start mb-3">
                            <i class="ti ti-building text-primary me-2 mt-1 flex-shrink-0"></i>
                            <p class="text-muted mb-0">Degree must be from a UGC recognized university</p>
                        </div>
                        <div class="note-item d-flex align-items-start">
                            <i class="ti ti-calendar text-primary me-2 mt-1 flex-shrink-0"></i>
                            <p class="text-muted mb-0">There is no upper age limit for B.Ed admission</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection