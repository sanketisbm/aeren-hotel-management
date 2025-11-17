@extends('layouts.front')

@section('meta-info')
<title>B.Ed Program Details | Aeren College of Education</title>
<meta name="description" content="Bachelor of Education (B.Ed) program details - 2-year degree, eligibility, admission process, and syllabus download.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner bed-bg d-flex align-items-center">
        <div data-aos="fade-up" data-aos-delay="200" class="text-center">
            <h1 class="text-white mb-3 fw-light">
                Bachelor of Education (B.Ed)
            </h1>
            <p class="text-white lead">Shaping Future Educators Since 2005</p>
        </div>
    </div>
</section>

<!-- Course Overview Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-8">
                <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">
                    B.Ed Program Overview
                    <div class="position-absolute bottom-0 start-0 bg-primary rounded"
                        style="width: 80px; height: 5px;"></div>
                </h2>

                <p class="text-muted mb-4">
                    <strong>B.Ed</strong> This is a 2 years degree programs comprising 4 semesters and includes a lot of practicals to prepare you for being teacher in secondary and higher secondary education.
                </p>

                <div class="program-highlights mb-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="highlight-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="ti ti-clock"></i>
                                </div>
                                <div>
                                    <h6 class="text-primary mb-1">Duration</h6>
                                    <p class="text-muted small mb-0">2 Years (4 Semesters)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="highlight-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="ti ti-school"></i>
                                </div>
                                <div>
                                    <h6 class="text-primary mb-1">Level</h6>
                                    <p class="text-muted small mb-0">Undergraduate Degree</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="highlight-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="ti ti-certificate"></i>
                                </div>
                                <div>
                                    <h6 class="text-primary mb-1">Affiliation</h6>
                                    <p class="text-muted small mb-0">University of Mumbai</p>
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
                                    <h6 class="text-primary mb-1">Target Level</h6>
                                    <p class="text-muted small mb-0">Secondary & Higher Secondary</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="action-buttons d-flex gap-3 flex-wrap">
                    <a href="#" class="btn btn-primary btn-lg px-4 py-2">
                        <i class="ti ti-download me-2"></i>Download Syllabus
                    </a>
                    <a href="#" class="btn btn-outline-primary btn-lg px-4 py-2">
                        <i class="ti ti-file-download me-2"></i>Download Admission Form
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="program-card text-center p-4 rounded-4 shadow-sm bg-white">
                    <div class="program-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 80px; height: 80px;">
                        <i class="ti ti-book fs-2"></i>
                    </div>
                    <h4 class="text-primary mb-3">B.Ed Program</h4>
                    <div class="program-details">
                        <div class="detail-item mb-3">
                            <h6 class="text-primary mb-1">Course Duration</h6>
                            <p class="text-muted small mb-0">2 Years (4 Semesters)</p>
                        </div>
                        <div class="detail-item mb-3">
                            <h6 class="text-primary mb-1">Intake Capacity</h6>
                            <p class="text-muted small mb-0">100 Students per batch</p>
                        </div>
                        <div class="detail-item">
                            <h6 class="text-primary mb-1">Mode</h6>
                            <p class="text-muted small mb-0">Full-time Regular</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Syllabus Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-3">Program Syllabus</h2>
            <p class="text-muted">2-Year B.Ed Program Structure (4 Semesters)</p>
        </div>

        <div class="syllabus-tabs">
            <!-- Tabs Navigation -->
            <ul class="nav nav-pills justify-content-center mb-4" id="syllabusTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="sem1-tab" data-bs-toggle="pill" data-bs-target="#sem1" type="button" role="tab">
                        Semester I
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="sem2-tab" data-bs-toggle="pill" data-bs-target="#sem2" type="button" role="tab">
                        Semester II
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="sem3-tab" data-bs-toggle="pill" data-bs-target="#sem3" type="button" role="tab">
                        Semester III
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="sem4-tab" data-bs-toggle="pill" data-bs-target="#sem4" type="button" role="tab">
                        Semester IV
                    </button>
                </li>
            </ul>

            <!-- Tabs Content -->
            <div class="tab-content" id="syllabusTabsContent">
                <!-- Semester 1 -->
                <div class="tab-pane fade show active" id="sem1" role="tabpanel">
                    <div class="semester-content">
                        <div class="subjects-grid">
                            <div class="subject-item">
                                <i class="ti ti-book text-primary"></i>
                                <span>Knowledge and Curriculum</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-user text-primary"></i>
                                <span>Childhood And Growing Up</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-users text-primary"></i>
                                <span>Gender, School and Society</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-device-laptop text-primary"></i>
                                <span>Critical Understanding of ICT</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-clipboard-list text-primary"></i>
                                <span>Project Based Course 1</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Semester 2 -->
                <div class="tab-pane fade" id="sem2" role="tabpanel">
                    <div class="semester-content">
                        <h6 class="text-primary mb-3">Core Subjects</h6>
                        <div class="subjects-grid mb-4">
                            <div class="subject-item">
                                <i class="ti ti-brain text-primary"></i>
                                <span>Learning And Teaching</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-building text-primary"></i>
                                <span>Educational Management</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-school text-primary"></i>
                                <span>Pedagogy of School Subject I</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-clipboard-list text-primary"></i>
                                <span>Project Based Course 2</span>
                            </div>
                        </div>

                        <h6 class="text-primary mb-3">Choose One Pedagogy Subject</h6>
                        <div class="pedagogy-options">
                            <span class="pedagogy-option">Hindi</span>
                            <span class="pedagogy-option">Commerce</span>
                            <span class="pedagogy-option">Economics</span>
                            <span class="pedagogy-option">English</span>
                            <span class="pedagogy-option">History</span>
                            <span class="pedagogy-option">Mathematics</span>
                            <span class="pedagogy-option">Science</span>
                        </div>
                    </div>
                </div>

                <!-- Semester 3 -->
                <div class="tab-pane fade" id="sem3" role="tabpanel">
                    <div class="semester-content">
                        <h6 class="text-primary mb-3">Core Subjects</h6>
                        <div class="subjects-grid mb-4">
                            <div class="subject-item">
                                <i class="ti ti-chart-bar text-primary"></i>
                                <span>Assessment for Learning</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-language text-primary"></i>
                                <span>Language across The Curriculum</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-school text-primary"></i>
                                <span>Pedagogy of School Subject II</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-clipboard-list text-primary"></i>
                                <span>Project Based Course III</span>
                            </div>
                        </div>

                        <h6 class="text-primary mb-3">Choose One Pedagogy Subject</h6>
                        <div class="pedagogy-options mb-4">
                            <span class="pedagogy-option">English</span>
                            <span class="pedagogy-option">Hindi</span>
                            <span class="pedagogy-option">Marathi</span>
                            <span class="pedagogy-option">History</span>
                            <span class="pedagogy-option">Commerce</span>
                            <span class="pedagogy-option">Economics</span>
                            <span class="pedagogy-option">Science</span>
                            <span class="pedagogy-option">Mathematics</span>
                        </div>

                        <h6 class="text-primary mb-3">Elective Subjects</h6>
                        <div class="subjects-grid">
                            <div class="subject-item">
                                <i class="ti ti-peace text-primary"></i>
                                <span>Peace Education</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-home text-primary"></i>
                                <span>Education for Rural Development</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Semester 4 -->
                <div class="tab-pane fade" id="sem4" role="tabpanel">
                    <div class="semester-content">
                        <h6 class="text-primary mb-3">Core Subjects</h6>
                        <div class="subjects-grid mb-4">
                            <div class="subject-item">
                                <i class="ti ti-flag-india text-primary"></i>
                                <span>Contemporary India and Education</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-heart text-primary"></i>
                                <span>Creating an Inclusive School</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-book text-primary"></i>
                                <span>Reading and Reflecting on Texts</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-clipboard-list text-primary"></i>
                                <span>Project Based Course IV</span>
                            </div>
                        </div>

                        <h6 class="text-primary mb-3">Choose One Elective</h6>
                        <div class="subjects-grid mb-4">
                            <div class="subject-item">
                                <i class="ti ti-search text-primary"></i>
                                <span>Action Research</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-user-question text-primary"></i>
                                <span>Guidance and Counselling</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-trees text-primary"></i>
                                <span>Environmental Education</span>
                            </div>
                        </div>

                        <h6 class="text-primary mb-3">Choose One Audit Course</h6>
                        <div class="subjects-grid">
                            <div class="subject-item">
                                <i class="ti ti-theater text-primary"></i>
                                <span>Drama & Art in Education</span>
                            </div>
                            <div class="subject-item">
                                <i class="ti ti-user-circle text-primary"></i>
                                <span>Understanding the Self</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn btn-primary btn-lg">
                <i class="ti ti-download me-2"></i>Download Complete Syllabus
            </a>
        </div>
    </div>
</section>

<!-- Download Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Important Downloads
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
        </div>

        <div class="row g-4 justify-content-center">

            <div class="col-md-6 col-lg-4">
                <div class="download-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="download-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-book-download fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Syllabus</h5>
                    <p class="text-muted small mb-3">Complete B.Ed program syllabus as per University of Mumbai guidelines</p>
                    <a href="#" class="btn btn-primary">
                        <i class="ti ti-download me-2"></i>Download PDF
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="download-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="download-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-file-download fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Admission Form</h5>
                    <p class="text-muted small mb-3">Application form for B.Ed program admission</p>
                    <a href="#" class="btn btn-primary">
                        <i class="ti ti-download me-2"></i>Download Form
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="download-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="download-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-checklist fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Eligibility Checklist</h5>
                    <p class="text-muted small mb-3">Complete checklist for B.Ed admission eligibility</p>
                    <a href="#" class="btn btn-primary">
                        <i class="ti ti-download me-2"></i>Download Checklist
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection