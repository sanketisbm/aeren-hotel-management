@extends('layouts.front')

@section('meta-info')
<title>Student Life | Aeren College of Education</title>
<meta name="description" content="Experience vibrant student life at Aeren College of Education with diverse activities, cultural events, and holistic development opportunities.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner studentlife-bg d-flex align-items-center">
        <div data-aos="fade-up" data-aos-delay="200" class="text-center">
            <h1 class="text-white mb-3 fw-light">
                Student Life
            </h1>
            <p class="text-white lead">Beyond Academics: Building Memories and Skills</p>
        </div>
    </div>
</section>

<!-- Student Activities -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Student Activities & Clubs</h2>
            <p class="text-muted">Engage in diverse activities that complement your academic journey</p>
        </div>

        <div class="row g-4">
            <!-- Cultural Club -->
            <div class="col-md-6 col-lg-4">
                <div class="activity-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="activity-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-music fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Cultural Club</h5>
                    <p class="text-muted small mb-0">Explore music, dance, drama, and artistic expressions through various cultural events and competitions.</p>
                </div>
            </div>

            <!-- Sports Club -->
            <div class="col-md-6 col-lg-4">
                <div class="activity-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="activity-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-trophy fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Sports Club</h5>
                    <p class="text-muted small mb-0">Participate in various sports activities, inter-college tournaments, and fitness programs.</p>
                </div>
            </div>

            <!-- Literary Club -->
            <div class="col-md-6 col-lg-4">
                <div class="activity-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="activity-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-book fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Literary Club</h5>
                    <p class="text-muted small mb-0">Enhance your communication skills through debates, elocution, creative writing, and reading sessions.</p>
                </div>
            </div>

            <!-- Social Service Club -->
            <div class="col-md-6 col-lg-4">
                <div class="activity-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="activity-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-heart fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Social Service Club</h5>
                    <p class="text-muted small mb-0">Engage in community service, awareness campaigns, and social outreach programs.</p>
                </div>
            </div>

            <!-- Eco Club -->
            <div class="col-md-6 col-lg-4">
                <div class="activity-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="activity-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-seeding fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Eco Club</h5>
                    <p class="text-muted small mb-0">Promote environmental awareness, sustainability practices, and green initiatives on campus.</p>
                </div>
            </div>

            <!-- Photography Club -->
            <div class="col-md-6 col-lg-4">
                <div class="activity-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
                    <div class="activity-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-camera fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Photography Club</h5>
                    <p class="text-muted small mb-0">Capture campus life, events, and create visual stories through photography and videography.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events & Celebrations -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="events-image text-center">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="College Events" class="img-fluid rounded-4 shadow">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-primary mb-4">
                    Events & Celebrations
                </h2>
                <p class="text-muted mb-4">
                    Our campus comes alive with various events and celebrations throughout the academic year, creating memorable experiences and fostering community spirit.
                </p>
                <div class="events-features">
                    <div class="feature-item d-flex align-items-start mb-3">
                        <i class="ti ti-calendar-event text-primary me-3 mt-1"></i>
                        <div>
                            <h6 class="text-primary mb-1">Annual Fest</h6>
                            <p class="text-muted small mb-0">Grand cultural festival showcasing talent and creativity</p>
                        </div>
                    </div>
                    <div class="feature-item d-flex align-items-start mb-3">
                        <i class="ti ti-school text-primary me-3 mt-1"></i>
                        <div>
                            <h6 class="text-primary mb-1">Teachers' Day</h6>
                            <p class="text-muted small mb-0">Special celebrations to honor and appreciate our faculty</p>
                        </div>
                    </div>
                    <div class="feature-item d-flex align-items-start mb-3">
                        <i class="ti ti-flag text-primary me-3 mt-1"></i>
                        <div>
                            <h6 class="text-primary mb-1">National Events</h6>
                            <p class="text-muted small mb-0">Celebrations of national importance and cultural diversity</p>
                        </div>
                    </div>
                    <div class="feature-item d-flex align-items-start">
                        <i class="ti ti-award text-primary me-3 mt-1"></i>
                        <div>
                            <h6 class="text-primary mb-1">Achievement Ceremonies</h6>
                            <p class="text-muted small mb-0">Recognizing and celebrating student accomplishments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Student Development -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Holistic Development</h2>
            <p class="text-muted">Nurturing skills beyond the classroom</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="development-card text-center p-4 rounded-4 shadow-sm border h-100">
                    <i class="ti ti-users text-primary fs-1 mb-3 d-block"></i>
                    <h5 class="text-primary mb-3">Leadership Skills</h5>
                    <p class="text-muted small mb-0">Opportunities to develop leadership qualities through club activities and student committees.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="development-card text-center p-4 rounded-4 shadow-sm border h-100">
                    <i class="ti ti-microphone text-primary fs-1 mb-3 d-block"></i>
                    <h5 class="text-primary mb-3">Communication Skills</h5>
                    <p class="text-muted small mb-0">Regular platforms for public speaking, debates, and interpersonal communication practice.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="development-card text-center p-4 rounded-4 shadow-sm border h-100">
                    <i class="ti ti-brain text-primary fs-1 mb-3 d-block"></i>
                    <h5 class="text-primary mb-3">Critical Thinking</h5>
                    <p class="text-muted small mb-0">Activities designed to enhance analytical thinking and problem-solving abilities.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection