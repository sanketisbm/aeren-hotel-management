@extends('layouts.front')

@section('meta-info')
<title>Campus Overview | Aeren College of Education</title>
<meta name="description" content="Discover the vibrant campus life at Aeren College of Education - cultural events, seminars, industry visits, and placement opportunities.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner campus-overview-bg d-flex align-items-center" class="text-center">
        <div data-aos="fade-up" data-aos-delay="200">
            <h1 class="text-white mb-3 fw-light">
                Campus Overview
            </h1>
            <p class="text-white lead">Where Education Meets Experience</p>
        </div>
    </div>
</section>

<!-- Annual Day -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-primary mb-4">
                    Annual Day Celebration
                </h2>
                <p class="text-muted mb-4">
                    Annual day at Aeren College is a vibrant and colourful cultural extravaganza. All talented students get an opportunity to display their special talents. The enthusiastic student leaders and various committees of students exhibit excellent team spirit and coordination to put together an evening for the students, of the students, by the students.
                </p>
                <div class="event-highlights">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="highlight-item text-center">
                                <i class="ti ti-trophy text-primary fs-1 mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">Talent Showcase</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="highlight-item text-center">
                                <i class="ti ti-users text-primary fs-1 mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">Student Leadership</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="campus-image text-center">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Annual Day Celebration" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cultural Week -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2">
                <h2 class="display-6 fw-bold text-primary mb-4">
                    Cultural Week
                </h2>
                <p class="text-muted mb-4">
                    This is a five day long event. The students and teachers work hand in hand to make these days entertaining, educating and memorable for everyone. The range of activities encompass Vocal and Instrumental Music, folk and western dances, art exhibition, stand up comedies, dramatics and literary activities. The format of these activities is mostly competitive and the winners receive accolades and appreciation from everyone.
                </p>
                <div class="cultural-activities">
                    <div class="row g-2">
                        <div class="col-6">
                            <span class="activity-tag">Music</span>
                        </div>
                        <div class="col-6">
                            <span class="activity-tag">Dance</span>
                        </div>
                        <div class="col-6">
                            <span class="activity-tag">Drama</span>
                        </div>
                        <div class="col-6">
                            <span class="activity-tag">Art Exhibition</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="campus-image text-center">
                    <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Cultural Week" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Seminars & Workshops -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Seminars & Workshops</h2>
            <p class="text-muted">Bridging the gap between textbooks and real world</p>
        </div>
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="text-muted mb-4">
                    Education should not be limited to classrooms and textbooks. We at Aeren College try to bridge the gap between textbooks and real world. We invite industry experts to give us expert lectures and practical tips throughout the year. The workshops and seminars help us for enrichment of the curriculum and fill up student life with life lessons and memories of college life. Guest faculties and students representatives keep our seminar calendar full of variety and purpose.
                </p>
                <div class="workshop-benefits">
                    <div class="benefit-item d-flex align-items-start mb-3">
                        <i class="ti ti-user-check text-primary me-3 mt-1"></i>
                        <div>
                            <h6 class="text-primary mb-1">Industry Experts</h6>
                            <p class="text-muted small mb-0">Learn from professionals and industry leaders</p>
                        </div>
                    </div>
                    <div class="benefit-item d-flex align-items-start mb-3">
                        <i class="ti ti-tools text-primary me-3 mt-1"></i>
                        <div>
                            <h6 class="text-primary mb-1">Practical Skills</h6>
                            <p class="text-muted small mb-0">Hands-on workshops for real-world application</p>
                        </div>
                    </div>
                    <div class="benefit-item d-flex align-items-start">
                        <i class="ti ti-calendar text-primary me-3 mt-1"></i>
                        <div>
                            <h6 class="text-primary mb-1">Regular Sessions</h6>
                            <p class="text-muted small mb-0">Year-round learning opportunities</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="campus-image text-center">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Seminars & Workshops" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Placement Cell -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-primary mb-4">
                    Placement Cell
                </h2>
                <p class="text-muted mb-4">
                    Placement cell of the college is the most vibrant and happening part of any student's life. Everyone who enrols for a college degree aspires to find a suitable occupation and a respectable position in the society. Our students are our biggest wealth. Our ex-students who are currently holding big titles in prestigious companies are our real wealth. They play a very important role in placing our final year students in the job market.
                </p>
                <p class="text-muted mb-4">
                    The placement cell provides hand holding to final year students in preparing their resume, preparing for interview, tips for facing interviews, soft skills needed to get a job and retain the jobs.
                </p>
                <div class="placement-support">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="support-item text-center p-3 rounded-3 bg-light">
                                <i class="ti ti-file text-primary mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">Resume Building</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="support-item text-center p-3 rounded-3 bg-light">
                                <i class="ti ti-user-search text-primary mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">Interview Prep</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="campus-image text-center">
                    <img src="https://images.unsplash.com/photo-1551836026-d5cbc859282f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Placement Cell" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industry Visits -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4">Industry & Field Visits</h2>
            <p class="text-muted">Connecting classroom learning with real-world experience</p>
        </div>
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2">
                <p class="text-muted mb-4">
                    To make our educational efforts come closer to real life and make our students more job ready, we organize field trips and Industrial visits relevant to their course syllabus. Manufacturing units of international companies, wholesale trader's markets, stock exchanges, television production studios, new paper printing presses, recording studios etc appear on our list of places visited in the past.
                </p>
                <p class="text-muted mb-4">
                    The trips include short day trips in and around our home city and also 2 to 7 days trips to far off destinations.
                </p>
                <div class="visit-types">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="visit-item text-center p-3 rounded-3 border">
                                <i class="ti ti-building-factory text-primary mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">Manufacturing Units</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="visit-item text-center p-3 rounded-3 border">
                                <i class="ti ti-device-tv text-primary mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">Media Studios</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="campus-image text-center">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Industry Visits" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection