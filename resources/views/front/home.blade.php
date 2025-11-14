@extends('layouts.front')

@section('meta-info')
<title>Aeren College of Hotel Management | Empowering Leaders of Tomorrow</title>
<meta name="description" content="Aeren College of Hotel Management offers top-tier Hotel Management programs like MBA, PGDM, Global MBA, and PGDM for working professionals with 100% placement assistance.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section class="banner home-bg d-flex align-items-center text-center text-white">
    <div class="container" data-aos="fade-up" data-aos-delay="200">
        <h1 class="fw-bold mb-3">Empowering Futures Through Excellence in Hotel Management Education</h1>
    </div>
</section>

<!-- About Us -->
<!-- <section class="py-5 bg-light" id="about">
    <div class="container">
      
        <div class="heading-center section-header">
            <h2 class="heading-center title-left fw-bold text-blue ">About Aeren College of Hotel Management</h2>
            <span style="width:40%"></span><span class="title-border"></span>
        </div>

        <p class="text-muted">
            Aeren College of Hotel Management is a leading institution offering high-quality Hotel Management education
            tailored for students, entrepreneurs, and working professionals. Our programs are designed to
            provide practical insights, leadership skills, and global exposure required to excel in the
            ever-evolving business world.
        </p>
        <p class="text-muted">
            With a blend of academic rigor and industry interface, Aeren empowers individuals to achieve
            professional excellence while fostering innovation and strategic thinking.
        </p>
        <a href="about-us.php" class="btn btn-primary btn-lg mt-3">Learn More</a>
    </div>
</section> -->

<!-- About Aeren College of Hotel Management -->
<section class="py-5 bg-light" id="about">
    <div class="container">
        <div class="row g-4 align-items-center">

            <!-- Left Side Images -->
            <div class="col-lg-6">
                <div class="d-flex gap-3">
                    <div class="w-50">
                        <img src="assets/Images/banner/DEGREE-IN-HM.jpg" alt="Students Walking" class="img-fluid rounded-4 shadow-sm mb-3">
                    </div>
                    <div class="w-50 mt-4">
                        <img src="assets/Images/banner/Hotel-Management-girl.webp" alt="Students Learning" class="img-fluid rounded-4 shadow-sm">
                    </div>
                </div>
            </div>

            <!-- Right Side Content -->
            <div class="col-lg-6">
                <span class="text-uppercase fw-semibold text-primary small mb-2 d-block">Explore What Makes Us Exceptional</span>
                <h2 class="fw-bold mb-3 text-primary">About Aeren College of Hotel management</h2>

                <p class="text-muted">
                    Aeren College of Hotel Management is a leading institution offering high-quality education in the field of hospitality,
                    tailored for aspiring professionals, entrepreneurs, and working individuals. Our programs combine practical exposure with
                    theoretical excellence to prepare students for global opportunities in the hospitality industry.
                </p>
                <p class="text-muted">
                    With a blend of academic rigor, hands-on learning, and industry partnerships, Aeren empowers individuals to achieve
                    professional excellence while fostering creativity, innovation, and leadership.
                </p>

                <!-- Info Cards -->
                <div class="row g-3 mt-4">
                    <div class="col-sm-6">
                        <div class="border rounded-3 p-3 h-100 shadow-sm bg-white">
                            <h6 class="fw-bold text-dark mb-2"><i class="bi bi-mortarboard-fill text-primary me-2"></i>Industry-Relevant Courses</h6>
                            <p class="text-muted small mb-2">Programs designed to meet global hospitality standards.</p>
                            <a href="courses.php" class="text-primary small text-decoration-none">View More →</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="border rounded-3 p-3 h-100 shadow-sm bg-white">
                            <h6 class="fw-bold text-dark mb-2"><i class="bi bi-people-fill text-primary me-2"></i>Experienced Faculty</h6>
                            <p class="text-muted small mb-2">Guidance from industry experts and seasoned academicians.</p>
                            <a href="faculty.php" class="text-primary small text-decoration-none">View More →</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="border rounded-3 p-3 h-100 shadow-sm bg-white">
                            <h6 class="fw-bold text-dark mb-2"><i class="bi bi-building-check text-primary me-2"></i>State-of-the-Art Infrastructure</h6>
                            <p class="text-muted small mb-2">Modern kitchens, training restaurants, and smart classrooms.</p>
                            <a href="facilities.php" class="text-primary small text-decoration-none">View More →</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="border rounded-3 p-3 h-100 shadow-sm bg-white">
                            <h6 class="fw-bold text-dark mb-2"><i class="bi bi-globe2 text-primary me-2"></i>Global Career Opportunities</h6>
                            <p class="text-muted small mb-2">Opening doors to international hospitality careers.</p>
                            <a href="placements.php" class="text-primary small text-decoration-none">View More →</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Why Us -->
<section class="py-5">
    <div class="container">
        <div class="heading-center section-header">
            <h2 class="heading-center title-left fw-bold text-blue ">Why Choose Aeren College of Hotel Management?</h2>
            <span style="width:40%"></span><span class="title-border"></span>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="p-4 border rounded shadow-sm h-100 hover-shadow">
                    <i class="ti ti-school fs-1 text-secondary mb-3"></i>
                    <h5 class="fw-bold">Expert Faculty</h5>
                    <p class="text-muted">Learn from experienced educators and industry professionals dedicated to nurturing leadership and innovation.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 border rounded shadow-sm h-100 hover-shadow">
                    <i class="ti ti-world fs-1 text-secondary mb-3"></i>
                    <h5 class="fw-bold">Global Learning</h5>
                    <p class="text-muted">Experience a curriculum with international case studies and exposure to global business trends.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 border rounded shadow-sm h-100 hover-shadow">
                    <i class="ti ti-briefcase fs-1 text-secondary mb-3"></i>
                    <h5 class="fw-bold">Career-Focused Approach</h5>
                    <p class="text-muted">Our placement cell ensures career guidance, internships, and recruitment from top corporates.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Programs -->
<section class="py-5 bg-light" id="programs">
    <div class="container">
        <div class="heading-center section-header text-center mb-5">
            <h2 class="fw-bold text-blue">Our Hotel Management Programs</h2>
            <span class="title-border mx-auto"></span>
        </div>

        <div class="row g-4">
            @php
            $programs = [
            [
            'title' => 'Doctor of Philosophy (Ph.D.) in Hotel Management and Catering Technology',
            'desc' => 'A Doctor of Philosophy (Ph.D.) in Hotel Management and Catering Technology is a research-oriented program designed to provide advanced knowledge and expertise in hospitality management.',
            'image' => 'program-1.jpg'
            ],
            [
            'title' => 'Master of Hotel Management and Catering Technology (Proposed)',
            'desc' => 'A postgraduate program that focuses on developing the skills and knowledge required to manage and operate hotels, resorts, and other hospitality businesses.',
            'image' => 'program-2.jpg'
            ],
            [
            'title' => 'Bachelor of Hotel Management and Catering Technology (BHMCT)',
            'desc' => 'Starting with the basics of hotel management, the course sails into more detailed and professional aspects of catering and hospitality.',
            'image' => 'program-3.jpg'
            ],
            [
            'title' => 'Diploma in Hotel Management and Catering Technology (DHMCT)',
            'desc' => 'This program provides candidates with the skills, knowledge, and attitudes needed to occupy key operational positions in the hotel industry.',
            'image' => 'program-4.jpg'
            ]
            ];
            @endphp

            @foreach($programs as $program)
            <div class="col-lg-3 col-md-6">
                <div class="card shadow-sm border-0 h-100 hover-shadow">
                    <img src="{{ asset('assets/Images/banner/' . $program['image']) }}"
                        class="card-img-top rounded-top"
                        alt="{{ $program['title'] }}">

                    <div class="card-body">
                        <h5 class="fw-bold text-secondary mb-2">{{ $program['title'] }}</h5>
                        <p class="text-muted small">{{ $program['desc'] }}</p>
                        <a href="#" class="btn btn-outline-primary btn-sm mt-2">
                            Know More <i class="ti ti-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- News & Media -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="heading-center section-header">
            <h2 class="heading-center title-left fw-bold text-blue ">News & Media</h2>
            <span style="width:40%"></span><span class="title-border"></span>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card shadow-sm border-0 hover-shadow">
                    <img src="images/media/news1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h6 class="fw-bold">Aeren Launches Global MBA Program</h6>
                        <p class="text-muted">A step forward in international education and global leadership training.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm border-0 hover-shadow">
                    <img src="images/media/news2.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h6 class="fw-bold">Campus Drive 2025 – 50+ Recruiters</h6>
                        <p class="text-muted">Top corporates join Aeren for placement drives and talent acquisition.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Placement -->
<section class="py-5 bg-light text-center">
    <div class="container">
        <div class="heading-center section-header">
            <h2 class="heading-center title-left fw-bold text-blue ">Placement Excellence</h2>
            <span style="width:40%"></span><span class="title-border"></span>
        </div>
        <p class="text-muted mb-5">Our placement team ensures corporate connections, internships, and top-tier job opportunities.</p>
        <div class="row justify-content-center">
            <div class="logo-content d-flex flex-wrap justify-content-center align-items-center rank-card-container">
                <div class="col-12 p-4"><img src="assets/images/companylogo2/aquaplast.webp" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/aurobindo.webp" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/apb_company.jfif" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/bsa_corporation_limited_company.jfif" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/chemfield_cellulose_logo.jfif" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/dabur.webp" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/dbpower.jfif" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/digiSafari_company2.jfif" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/Gujarat Ambuja Exports Limited 2.webp" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/hira-logo1.webp" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/kalpataru.webp" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/nitika.jfif" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/nsdc.webp" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/securitylab.webp" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/Struc_sompany4.jfif" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/tmc.webp" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/tuliplab_logo.jfif" class="img-fluid mb-3" alt=""></div>
                <div class="col-12 p-4"><img src="assets/images/companylogo2/vrize.webp" class="img-fluid mb-3" alt=""></div>
            </div>
        </div>
    </div>
</section>


<!-- Newsletters, Events & Circulars -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-label">Updates</div>
            <h2 class="display-6 fw-bold text-primary">Newsletters, Events & Circulars</h2>
        </div>

        <div class="row g-4">
            {{-- Newsletters --}}
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 updates-card-v2">
                    <div class="card-header border-0 bg-transparent d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Newsletters</h4>
                        <i class="ti ti-news fs-4"></i>
                    </div>
                    <div class="card-body">
                        <div class="newsletter-slider">
                            @foreach($newsletters as $item)
                            <div class="update-item-v2">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="fw-semibold mb-1">{{ $item['name'] }}</h6>
                                        <small class="text-muted d-block mb-1">
                                            {{ \Carbon\Carbon::parse($item['date'])->format('d M Y') }}
                                        </small>
                                    </div>
                                    <i class="bi bi-envelope-paper text-primary"></i>
                                </div>
                                <a href="{{ $item['pdf'] }}" target="_blank" class="small text-primary">
                                    Explore More
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Events --}}
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 updates-card-v2">
                    <div class="card-header border-0 bg-transparent d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Events</h4>
                        <i class="ti ti-calendar-event fs-4"></i>
                    </div>
                    <div class="card-body">
                        <div class="events-slider">
                            @foreach($events as $item)
                            <div class="update-item-v2">
                                <div class="update-img-wrapper">
                                    <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}">
                                </div>
                                <h6 class="fw-semibold mt-2 mb-1">{{ $item['name'] }}</h6>
                                <small class="text-muted">
                                    {{ \Carbon\Carbon::parse($item['date'])->format('d M Y') }}
                                </small>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Circulars --}}
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 updates-card-v2">
                    <div class="card-header border-0 bg-transparent d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Circulars & Notices</h4>
                        <i class="ti ti-file-description fs-4"></i>
                    </div>
                    <div class="card-body">
                        <div class="circulars-slider">
                            @foreach($circulars as $item)
                            <div class="update-item-v2">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="fw-semibold mb-1">{{ $item['name'] }}</h6>
                                        <small class="text-muted d-block mb-1">
                                            {{ \Carbon\Carbon::parse($item['date'])->format('d M Y') }}
                                        </small>
                                    </div>
                                    <i class="bi bi-file-earmark-pdf text-danger"></i>
                                </div>
                                <a href="{{ $item['pdf'] }}" target="_blank" class="small text-primary">
                                    Explore More
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FAQs -->
<section class="py-5">
    <div class="container">
        <div class="heading-center section-header">
            <h2 class="heading-center title-left fw-bold text-blue ">Frequently Asked Questions</h2>
            <span style="width:40%"></span><span class="title-border"></span>
        </div>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ans1">
                        What is the eligibility for MBA and PGDM programs?
                    </button>
                </h2>
                <div id="ans1" class="accordion-collapse collapse show">
                    <div class="accordion-body">Candidates must have a bachelor’s degree from a recognized university. Work experience is preferred for executive programs.</div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ans2">
                        Is placement support available for all programs?
                    </button>
                </h2>
                <div id="ans2" class="accordion-collapse collapse">
                    <div class="accordion-body">Yes, all Hotel Management students receive career counseling, interview preparation, and placement assistance.</div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ans3">
                        Are classes available online?
                    </button>
                </h2>
                <div id="ans3" class="accordion-collapse collapse">
                    <div class="accordion-body">Yes, Aeren Education offers both online and blended learning options for flexible access to education.</div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function() {
        $('.logo-content').slick({
            dots: true,
            autoplay: true,
            infinite: true,
            speed: 3000, // Adjust speed for faster sliding
            autoplaySpeed: 0, // Set to 0 for continuous movement
            slidesToShow: 4,
            slidesToScroll: 1,
            cssEase: 'linear', // Smooth linear transition
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.news-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            infinite: true,
            autoplaySpeed: 3000,
            arrows: true,
            dots: false,
            responsive: [{
                breakpoint: 992, // below lg
                settings: {
                    slidesToShow: 1
                }
            }]
        });

         // Vertical sliders
        $('.newsletter-slider').slick({
            vertical: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            dots: true,
            infinite: true,
        });

        $('.events-slider').slick({
            vertical: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            dots: true,
            infinite: true,
        });

        $('.circulars-slider').slick({
            vertical: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            dots: true,
            infinite: true,
        });
    });
</script>
@endsection