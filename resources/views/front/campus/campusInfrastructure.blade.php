@extends('layouts.front')

@section('meta-info')
<title>Campus Infrastructure | Aeren College of Education</title>
<meta name="description" content="Explore the state-of-the-art infrastructure at Aeren College of Education - modern facilities designed for comprehensive learning and development.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner infrastructure-bg d-flex align-items-center" class="text-center">
        <div data-aos="fade-up" data-aos-delay="200" >
            <h1 class="text-white mb-3 fw-light">
                Campus Infrastructure
            </h1>
            <p class="text-white lead">Modern Facilities for Comprehensive Education</p>
        </div>
    </div>
</section>

<!-- Academic Facilities -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Academic Facilities</h2>
            <p class="text-muted">State-of-the-art learning environments</p>
        </div>

        <div class="row g-4">
            <!-- Smart Classrooms -->
            <div class="col-md-6 col-lg-4">
                <div class="facility-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="facility-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-device-laptop fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Smart Classrooms</h5>
                    <p class="text-muted small mb-0">Classrooms equipped with Audio-Visual facilities, projectors, and digital learning tools for interactive teaching.</p>
                </div>
            </div>

            <!-- Computer Lab -->
            <div class="col-md-6 col-lg-4">
                <div class="facility-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="facility-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-cpu fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Computer Laboratory</h5>
                    <p class="text-muted small mb-0">Modern computer lab with latest hardware, software, and high-speed internet for practical learning and research.</p>
                </div>
            </div>

            <!-- Science Labs -->
            <div class="col-md-6 col-lg-4">
                <div class="facility-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="facility-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-microscope fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Science Laboratories</h5>
                    <p class="text-muted small mb-0">Well-equipped science labs with modern apparatus for practical experiments and scientific research.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Library Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="infra-image text-center">
                    <img src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Library" class="img-fluid rounded-4 shadow">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-primary mb-4">
                    Well-Stocked Library
                </h2>
                <p class="text-muted mb-4">
                    Our library is a treasure trove of knowledge with an extensive collection of books, journals, periodicals, and digital resources. The peaceful reading environment and dedicated study areas make it the perfect place for academic research and self-study.
                </p>
                <div class="library-features">
                    <div class="feature-item d-flex align-items-start mb-3">
                        <i class="ti ti-book text-primary me-3 mt-1"></i>
                        <div>
                            <h6 class="text-primary mb-1">Extensive Collection</h6>
                            <p class="text-muted small mb-0">Thousands of books across various disciplines</p>
                        </div>
                    </div>
                    <div class="feature-item d-flex align-items-start mb-3">
                        <i class="ti ti-device-desktop text-primary me-3 mt-1"></i>
                        <div>
                            <h6 class="text-primary mb-1">Digital Resources</h6>
                            <p class="text-muted small mb-0">Access to online journals and e-books</p>
                        </div>
                    </div>
                    <div class="feature-item d-flex align-items-start">
                        <i class="ti ti-users text-primary me-3 mt-1"></i>
                        <div>
                            <h6 class="text-primary mb-1">Reading Areas</h6>
                            <p class="text-muted small mb-0">Comfortable seating and study spaces</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Practical Training Facilities -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Practical Training Facilities</h2>
            <p class="text-muted">Hands-on learning environments</p>
        </div>

        <div class="row g-4">
            <!-- Kitchen Lab -->
            <div class="col-md-6">
                <div class="facility-card p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="d-flex align-items-start">
                        <div class="facility-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                             style="width: 60px; height: 60px;">
                            <i class="ti ti-tools-kitchen fs-3"></i>
                        </div>
                        <div>
                            <h5 class="text-primary mb-3">Kitchen for Quantity Cooking</h5>
                            <p class="text-muted small mb-0">
                                Professional kitchen setup designed for quantity cooking training. Equipped with commercial-grade appliances, storage facilities, and workspace to teach large-scale food preparation and management.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cooking & Baking Lab -->
            <div class="col-md-6">
                <div class="facility-card p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="d-flex align-items-start">
                        <div class="facility-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                             style="width: 60px; height: 60px;">
                            <i class="ti ti-cookie fs-3"></i>
                        </div>
                        <div>
                            <h5 class="text-primary mb-3">Lab for Cooking and Baking</h5>
                            <p class="text-muted small mb-0">
                                Specialized laboratory for cooking and baking with modern ovens, cooking stations, and baking equipment. Perfect for learning culinary arts and food preparation techniques.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Restaurant Setup -->
            <div class="col-md-6">
                <div class="facility-card p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="d-flex align-items-start">
                        <div class="facility-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                             style="width: 60px; height: 60px;">
                            <i class="ti ti-building fs-3"></i>
                        </div>
                        <div>
                            <h5 class="text-primary mb-3">Restaurant Setup</h5>
                            <p class="text-muted small mb-0">
                                Complete restaurant setup for practical training in hospitality management. Includes dining area, service stations, and management systems to simulate real restaurant operations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guest Rooms -->
            <div class="col-md-6">
                <div class="facility-card p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="d-flex align-items-start">
                        <div class="facility-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                             style="width: 60px; height: 60px;">
                            <i class="ti ti-bed fs-3"></i>
                        </div>
                        <div>
                            <h5 class="text-primary mb-3">Guest Rooms</h5>
                            <p class="text-muted small mb-0">
                                Comfortable guest accommodation facilities for visiting faculty, parents, and special guests. Well-maintained rooms with essential amenities for short-term stays.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sports & Recreation -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2">
                <h2 class="display-6 fw-bold text-primary mb-4">
                    Play Ground & Sports Facilities
                </h2>
                <p class="text-muted mb-4">
                    Our spacious playground and sports facilities provide students with opportunities for physical fitness, team building, and recreational activities. The well-maintained grounds host various sports events and regular physical education classes.
                </p>
                <div class="sports-features">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="sport-item text-center">
                                <i class="ti ti-ball-football text-primary fs-1 mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">Outdoor Sports</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="sport-item text-center">
                                <i class="ti ti-run text-primary fs-1 mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">Athletics</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="infra-image text-center">
                    <img src="https://images.unsplash.com/photo-1536922246289-88c42f957773?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Play Ground" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Facilities -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Additional Facilities</h2>
            <p class="text-muted">Comprehensive amenities for complete campus experience</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="additional-card text-center p-4 rounded-4 shadow-sm border h-100">
                    <i class="ti ti-coffee text-primary fs-1 mb-3 d-block"></i>
                    <h5 class="text-primary mb-3">Cafeteria</h5>
                    <p class="text-muted small mb-0">Hygienic and spacious cafeteria serving nutritious meals and snacks throughout the day.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="additional-card text-center p-4 rounded-4 shadow-sm border h-100">
                    <i class="ti ti-first-aid-kit text-primary fs-1 mb-3 d-block"></i>
                    <h5 class="text-primary mb-3">Medical Room</h5>
                    <p class="text-muted small mb-0">Well-equipped medical room with first aid facilities and regular health check-up camps.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="additional-card text-center p-4 rounded-4 shadow-sm border h-100">
                    <i class="ti ti-wifi text-primary fs-1 mb-3 d-block"></i>
                    <h5 class="text-primary mb-3">Wi-Fi Campus</h5>
                    <p class="text-muted small mb-0">High-speed Wi-Fi connectivity across the campus for seamless digital learning.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection