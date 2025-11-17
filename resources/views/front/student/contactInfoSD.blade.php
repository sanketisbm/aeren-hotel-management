@extends('layouts.front')

@section('meta-info')
<title>Contact Information | Aeren College of Education</title>
<meta name="description" content="Contact details for staff, departments, and administration at Aeren College of Education. Get in touch with the right person for your queries.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner contact-bg d-flex align-items-center" >
        <div data-aos="fade-up" data-aos-delay="200" class="text-center">
            <h1 class="text-white mb-3 fw-light">
                Contact Information
            </h1>
            <p class="text-white lead">Get in Touch with the Right Department</p>
        </div>
    </div>
</section>

<!-- Key Contacts -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Key Administrative Staff</h2>
            <p class="text-muted">Direct contacts for administrative queries and support</p>
        </div>

        <div class="row g-4">
            <!-- Principal -->
            <div class="col-md-6 col-lg-4">
                <div class="staff-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="staff-image mx-auto mb-3 rounded-circle overflow-hidden" style="width: 120px; height: 120px;">
                        <img src="assets/Images/common/avatar-icon.jpg"
                            alt="Dr. Rajesh Sharma" class="img-fluid h-100 w-100 object-fit-cover">
                    </div>
                    <h4 class="text-primary mb-1">Dr. Rajesh Sharma</h4>
                    <p class="text-secondary fw-semibold">Principal</p>
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="ti ti-phone text-primary me-2"></i>
                            <span>+91 22 1234 5678</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-mail text-primary me-2"></i>
                            <span>principal@aeren.edu.in</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-clock text-primary me-2"></i>
                            <span>Mon - Fri: 10 AM - 4 PM</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vice Principal -->
            <div class="col-md-6 col-lg-4">
                <div class="staff-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="staff-image mx-auto mb-3 rounded-circle overflow-hidden" style="width: 120px; height: 120px;">
                        <img src="assets/Images/common/avatar-icon.jpg"
                            alt="Dr. Priya Mehta" class="img-fluid h-100 w-100 object-fit-cover">
                    </div>
                    <h4 class="text-primary mb-1">Dr. Priya Mehta</h4>
                    <p class="text-secondary fw-semibold">Vice Principal</p>
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="ti ti-phone text-primary me-2"></i>
                            <span>+91 22 1234 5679</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-mail text-primary me-2"></i>
                            <span>viceprincipal@aeren.edu.in</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-clock text-primary me-2"></i>
                            <span>Mon - Fri: 10 AM - 4 PM</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Administrative Officer -->
            <div class="col-md-6 col-lg-4">
                <div class="staff-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="staff-image mx-auto mb-3 rounded-circle overflow-hidden" style="width: 120px; height: 120px;">
                        <img src="assets/Images/common/avatar-icon.jpg"
                            alt="Mr. Sunil Patil" class="img-fluid h-100 w-100 object-fit-cover">
                    </div>
                    <h4 class="text-primary mb-1">Mr. Sunil Patil</h4>
                    <p class="text-secondary fw-semibold">Administrative Officer</p>
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="ti ti-phone text-primary me-2"></i>
                            <span>+91 22 1234 5680</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-mail text-primary me-2"></i>
                            <span>admin@aeren.edu.in</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-clock text-primary me-2"></i>
                            <span>Mon - Sat: 9 AM - 5 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Departments Contact -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Department Contacts</h2>
            <p class="text-muted">Get in touch with specific departments for specialized queries</p>
        </div>

        <div class="row g-4">
            <!-- Admission Department -->
            <div class="col-md-6 col-lg-4">
                <div class="dept-card p-4 rounded-4 shadow-sm border h-100">
                    <div class="dept-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
                         style="width: 60px; height: 60px;">
                        <i class="ti ti-user-plus fs-3"></i>
                    </div>
                    <h5 class="text-primary mb-3 text-center">Admission Department</h5>
                    <div class="dept-contact">
                        <div class="contact-item">
                            <i class="ti ti-phone text-primary me-2"></i>
                            <span>+91 22 1234 5681</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-mail text-primary me-2"></i>
                            <span>admissions@aeren.edu.in</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-user text-primary me-2"></i>
                            <span>Mr. Rohan Joshi</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-clock text-primary me-2"></i>
                            <span>Mon - Sat: 9 AM - 5 PM</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Examination Department -->
            <div class="col-md-6 col-lg-4">
                <div class="dept-card p-4 rounded-4 shadow-sm border h-100">
                    <div class="dept-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
                         style="width: 60px; height: 60px;">
                        <i class="ti ti-clipboard-check fs-3"></i>
                    </div>
                    <h5 class="text-primary mb-3 text-center">Examination Department</h5>
                    <div class="dept-contact">
                        <div class="contact-item">
                            <i class="ti ti-phone text-primary me-2"></i>
                            <span>+91 22 1234 5682</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-mail text-primary me-2"></i>
                            <span>examination@aeren.edu.in</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-user text-primary me-2"></i>
                            <span>Dr. Anjali Deshpande</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-clock text-primary me-2"></i>
                            <span>Mon - Fri: 10 AM - 4 PM</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accounts Department -->
            <div class="col-md-6 col-lg-4">
                <div class="dept-card p-4 rounded-4 shadow-sm border h-100">
                    <div class="dept-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
                         style="width: 60px; height: 60px;">
                        <i class="ti ti-currency-rupee fs-3"></i>
                    </div>
                    <h5 class="text-primary mb-3 text-center">Accounts Department</h5>
                    <div class="dept-contact">
                        <div class="contact-item">
                            <i class="ti ti-phone text-primary me-2"></i>
                            <span>+91 22 1234 5683</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-mail text-primary me-2"></i>
                            <span>accounts@aeren.edu.in</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-user text-primary me-2"></i>
                            <span>Mr. Amit Verma</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-clock text-primary me-2"></i>
                            <span>Mon - Sat: 10 AM - 4 PM</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Library -->
            <div class="col-md-6 col-lg-4">
                <div class="dept-card p-4 rounded-4 shadow-sm border h-100">
                    <div class="dept-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
                         style="width: 60px; height: 60px;">
                        <i class="ti ti-library fs-3"></i>
                    </div>
                    <h5 class="text-primary mb-3 text-center">Library</h5>
                    <div class="dept-contact">
                        <div class="contact-item">
                            <i class="ti ti-phone text-primary me-2"></i>
                            <span>+91 22 1234 5684</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-mail text-primary me-2"></i>
                            <span>library@aeren.edu.in</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-user text-primary me-2"></i>
                            <span>Ms. Sneha Kapoor</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-clock text-primary me-2"></i>
                            <span>Mon - Sat: 8 AM - 6 PM</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Student Support -->
            <div class="col-md-6 col-lg-4">
                <div class="dept-card p-4 rounded-4 shadow-sm border h-100">
                    <div class="dept-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
                         style="width: 60px; height: 60px;">
                        <i class="ti ti-heart fs-3"></i>
                    </div>
                    <h5 class="text-primary mb-3 text-center">Student Support</h5>
                    <div class="dept-contact">
                        <div class="contact-item">
                            <i class="ti ti-phone text-primary me-2"></i>
                            <span>+91 22 1234 5685</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-mail text-primary me-2"></i>
                            <span>support@aeren.edu.in</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-user text-primary me-2"></i>
                            <span>Prof. Meera Singh</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-clock text-primary me-2"></i>
                            <span>Mon - Fri: 9 AM - 5 PM</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Placement Cell -->
            <div class="col-md-6 col-lg-4">
                <div class="dept-card p-4 rounded-4 shadow-sm border h-100">
                    <div class="dept-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
                         style="width: 60px; height: 60px;">
                        <i class="ti ti-briefcase fs-3"></i>
                    </div>
                    <h5 class="text-primary mb-3 text-center">Placement Cell</h5>
                    <div class="dept-contact">
                        <div class="contact-item">
                            <i class="ti ti-phone text-primary me-2"></i>
                            <span>+91 22 1234 5686</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-mail text-primary me-2"></i>
                            <span>placement@aeren.edu.in</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-user text-primary me-2"></i>
                            <span>Mr. Vikram Rao</span>
                        </div>
                        <div class="contact-item">
                            <i class="ti ti-clock text-primary me-2"></i>
                            <span>Mon - Fri: 10 AM - 4 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- General Contact Information -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="general-contact p-5 rounded-4 shadow-sm bg-white">
                    <h2 class="display-6 fw-bold text-primary mb-4 text-center">General Contact Information</h2>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="contact-method text-center p-4 rounded-3 border">
                                <i class="ti ti-phone-call text-primary fs-1 mb-3 d-block"></i>
                                <h5 class="text-primary mb-2">Phone</h5>
                                <p class="text-muted small mb-1">Main: +91 22 1234 5678</p>
                                <p class="text-muted small mb-0">Reception: +91 22 1234 5600</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-method text-center p-4 rounded-3 border">
                                <i class="ti ti-mail text-primary fs-1 mb-3 d-block"></i>
                                <h5 class="text-primary mb-2">Email</h5>
                                <p class="text-muted small mb-1">info@aeren.edu.in</p>
                                <p class="text-muted small mb-0">enquiry@aeren.edu.in</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-method text-center p-4 rounded-3 border">
                                <i class="ti ti-map-pin text-primary fs-1 mb-3 d-block"></i>
                                <h5 class="text-primary mb-2">Address</h5>
                                <p class="text-muted small mb-0">
                                    Aeren College of Education<br>
                                    123 Education Street<br>
                                    Mumbai, Maharashtra 400001
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-method text-center p-4 rounded-3 border">
                                <i class="ti ti-clock text-primary fs-1 mb-3 d-block"></i>
                                <h5 class="text-primary mb-2">Office Hours</h5>
                                <p class="text-muted small mb-1">Monday - Friday: 9 AM - 5 PM</p>
                                <p class="text-muted small mb-0">Saturday: 9 AM - 1 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Contact -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="emergency-contact text-center p-5 rounded-4" style="background:  var(--primary);">
                    <h3 class="text-white fw-bold mb-3">Emergency Contact</h3>
                    <p class="text-white mb-4">For urgent matters outside office hours</p>
                    <div class="emergency-info">
                        <div class="emergency-item">
                            <i class="ti ti-phone text-white fs-2 mb-2 d-block"></i>
                            <h4 class="text-white fw-bold">+91 98765 43210</h4>
                            <p class="text-white small mb-0">Available 24/7 for emergencies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection