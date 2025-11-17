@extends('layouts.front')

@section('meta-info')
<title>Examination & Results | Aeren College of Education</title>
<meta name="description" content="Examination schedule, results, and academic performance details for Aeren College of Education B.Ed program.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner exam-bg d-flex align-items-center">
        <div data-aos="fade-up" data-aos-delay="200" class="text-center">
            <h1 class="text-white mb-3 fw-light">
                Examination & Results
            </h1>
            <p class="text-white lead">Academic Assessment and Performance</p>
        </div>
    </div>
</section>

<!-- Examination System -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">
                    Examination System
                    <div class="position-absolute bottom-0 start-0 bg-primary rounded"
                        style="width: 80px; height: 5px;"></div>
                </h2>
                <p class="text-muted mb-4">
                    Aeren College of Education follows the examination pattern and evaluation system prescribed by the University of Mumbai. Our assessment system ensures comprehensive evaluation of both theoretical knowledge and practical teaching skills.
                </p>
                
                <div class="exam-features">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="ti ti-calendar"></i>
                                </div>
                                <div>
                                    <h6 class="text-primary mb-1">Semester System</h6>
                                    <p class="text-muted small mb-0">4 Semesters over 2 years</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="ti ti-clipboard-check"></i>
                                </div>
                                <div>
                                    <h6 class="text-primary mb-1">Continuous Assessment</h6>
                                    <p class="text-muted small mb-0">Internal + External Exams</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="ti ti-school"></i>
                                </div>
                                <div>
                                    <h6 class="text-primary mb-1">Practical Evaluation</h6>
                                    <p class="text-muted small mb-0">Teaching practice assessment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 40px; height: 40px;">
                                    <i class="ti ti-certificate"></i>
                                </div>
                                <div>
                                    <h6 class="text-primary mb-1">University Pattern</h6>
                                    <p class="text-muted small mb-0">As per Mumbai University</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="exam-structure-card p-4 rounded-4 shadow-sm bg-white">
                    <h4 class="text-primary mb-4 text-center">Assessment Pattern</h4>
                    <div class="assessment-breakdown">
                        <div class="assessment-item d-flex justify-content-between align-items-center py-3 border-bottom">
                            <span class="text-muted">Internal Assessment</span>
                            <span class="fw-bold text-primary">40%</span>
                        </div>
                        <div class="assessment-item d-flex justify-content-between align-items-center py-3 border-bottom">
                            <span class="text-muted">University Theory Exam</span>
                            <span class="fw-bold text-primary">60%</span>
                        </div>
                        <div class="assessment-item d-flex justify-content-between align-items-center py-3 border-bottom">
                            <span class="text-muted">Practical Teaching</span>
                            <span class="fw-bold text-primary">Separate Evaluation</span>
                        </div>
                        <div class="assessment-item d-flex justify-content-between align-items-center py-3">
                            <span class="text-muted">Internship Assessment</span>
                            <span class="fw-bold text-primary">Grade Based</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Examination Schedule -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Examination Schedule 2024
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="schedule-card p-4 rounded-4 shadow-sm border h-100">
                    <h5 class="text-primary mb-4 text-center">Semester III (Odd Semester)</h5>
                    <div class="schedule-list">
                        <div class="schedule-item d-flex justify-content-between align-items-center py-2 border-bottom">
                            <span class="text-muted">Theory Exam Form Submission</span>
                            <span class="fw-semibold text-primary">Oct 15, 2024</span>
                        </div>
                        <div class="schedule-item d-flex justify-content-between align-items-center py-2 border-bottom">
                            <span class="text-muted">Hall Ticket Release</span>
                            <span class="fw-semibold text-primary">Nov 1, 2024</span>
                        </div>
                        <div class="schedule-item d-flex justify-content-between align-items-center py-2 border-bottom">
                            <span class="text-muted">Theory Examinations</span>
                            <span class="fw-semibold text-primary">Nov 15 - Dec 5, 2024</span>
                        </div>
                        <div class="schedule-item d-flex justify-content-between align-items-center py-2 border-bottom">
                            <span class="text-muted">Practical Examinations</span>
                            <span class="fw-semibold text-primary">Dec 10 - Dec 20, 2024</span>
                        </div>
                        <div class="schedule-item d-flex justify-content-between align-items-center py-2">
                            <span class="text-muted">Result Declaration</span>
                            <span class="fw-semibold text-primary">Jan 31, 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="schedule-card p-4 rounded-4 shadow-sm border h-100">
                    <h5 class="text-primary mb-4 text-center">Semester IV (Even Semester)</h5>
                    <div class="schedule-list">
                        <div class="schedule-item d-flex justify-content-between align-items-center py-2 border-bottom">
                            <span class="text-muted">Theory Exam Form Submission</span>
                            <span class="fw-semibold text-primary">March 15, 2025</span>
                        </div>
                        <div class="schedule-item d-flex justify-content-between align-items-center py-2 border-bottom">
                            <span class="text-muted">Hall Ticket Release</span>
                            <span class="fw-semibold text-primary">April 1, 2025</span>
                        </div>
                        <div class="schedule-item d-flex justify-content-between align-items-center py-2 border-bottom">
                            <span class="text-muted">Theory Examinations</span>
                            <span class="fw-semibold text-primary">April 15 - May 5, 2025</span>
                        </div>
                        <div class="schedule-item d-flex justify-content-between align-items-center py-2 border-bottom">
                            <span class="text-muted">Practical Examinations</span>
                            <span class="fw-semibold text-primary">May 10 - May 20, 2025</span>
                        </div>
                        <div class="schedule-item d-flex justify-content-between align-items-center py-2">
                            <span class="text-muted">Final Result Declaration</span>
                            <span class="fw-semibold text-primary">June 30, 2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Results Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Results
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
            <p class="text-muted">Check your academic performance and download mark sheets</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="result-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="result-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-file-download fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Download Marksheet</h5>
                    <p class="text-muted small mb-3">Access and download your semester mark sheets</p>
                    <a href="#" class="btn btn-primary btn-sm">
                        <i class="ti ti-download me-2"></i>Download
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="result-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="result-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-certificate fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Degree Certificate</h5>
                    <p class="text-muted small mb-3">Apply for final degree certificate after completion</p>
                    <a href="#" class="btn btn-primary btn-sm">
                        <i class="ti ti-file-certificate me-2"></i>Apply Now
                    </a>
                </div>
            </div>

            
        </div>
    </div>
</section>

<!-- Grading System -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Grading System
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="grading-card p-4 rounded-4 shadow-sm bg-white">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Percentage Range</th>
                                    <th>Grade</th>
                                    <th>Grade Points</th>
                                    <th>Performance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>80% and above</td>
                                    <td>O</td>
                                    <td>10</td>
                                    <td>Outstanding</td>
                                </tr>
                                <tr>
                                    <td>75% - 79%</td>
                                    <td>A+</td>
                                    <td>9</td>
                                    <td>Excellent</td>
                                </tr>
                                <tr>
                                    <td>70% - 74%</td>
                                    <td>A</td>
                                    <td>8</td>
                                    <td>Very Good</td>
                                </tr>
                                <tr>
                                    <td>65% - 69%</td>
                                    <td>B+</td>
                                    <td>7</td>
                                    <td>Good</td>
                                </tr>
                                <tr>
                                    <td>60% - 64%</td>
                                    <td>B</td>
                                    <td>6</td>
                                    <td>Above Average</td>
                                </tr>
                                <tr>
                                    <td>55% - 59%</td>
                                    <td>C+</td>
                                    <td>5</td>
                                    <td>Average</td>
                                </tr>
                                <tr>
                                    <td>50% - 54%</td>
                                    <td>C</td>
                                    <td>4</td>
                                    <td>Pass</td>
                                </tr>
                                <tr>
                                    <td>Below 50%</td>
                                    <td>F</td>
                                    <td>0</td>
                                    <td>Fail</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Important Guidelines -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Examination Guidelines
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="guideline-card p-4 rounded-4 shadow-sm border h-100">
                    <h5 class="text-primary mb-3">For Students</h5>
                    <ul class="text-muted">
                        <li class="mb-2">Carry hall ticket and college ID to all examinations</li>
                        <li class="mb-2">Reach examination center 30 minutes before schedule</li>
                        <li class="mb-2">Follow dress code as prescribed by the university</li>
                        <li class="mb-2">Mobile phones and electronic devices are strictly prohibited</li>
                        <li class="mb-2">Maintain discipline and follow invigilator instructions</li>
                        <li>Check examination schedule regularly for updates</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="guideline-card p-4 rounded-4 shadow-sm border h-100">
                    <h5 class="text-primary mb-3">Result & Revaluation</h5>
                    <ul class="text-muted">
                        <li class="mb-2">Results are declared on college website and notice board</li>
                        <li class="mb-2">Apply for revaluation within 15 days of result declaration</li>
                        <li class="mb-2">Revaluation application fee: ₹500 per paper</li>
                        <li class="mb-2">Photocopy of answer script available on request</li>
                        <li class="mb-2">ATKT (Allow to Keep Term) rules as per university norms</li>
                        <li>Contact examination department for result-related queries</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection