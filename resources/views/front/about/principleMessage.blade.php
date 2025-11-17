@extends('layouts.front')

@section('meta-info')
<title>Principle's Message | Aeren Education</title>
<meta name="description" content="Message from the Principle of Aeren Education - inspiring leadership and vision for quality education.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner principle-bg d-flex align-items-center">
        <div data-aos="fade-up" data-aos-delay="200" class="text-center">
            <h1 class="text-white mb-3 fw-light">
                Principle's Message
            </h1>
            <p class="text-white lead">Words of Inspiration and Vision</p>
        </div>
    </div>
</section>

<!-- Principle Message Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-4 text-center">
                <div class="principle-photo mb-4">
                    <img src="assets/Images/common/avatar-icon.jpg"
                         alt="Mr. Unkown - Principle" 
                         class="rounded-4 shadow img-fluid"
                         style="max-height: 400px; width: 100%; object-fit: cover;">
                </div>
                <h4 class="text-primary mb-1">Mr. Unkown</h4>
                <p class="text-secondary fw-semibold">Principle</p>
                <p class="text-muted small">Aeren Education</p>
            </div>

            <div class="col-lg-8">
                <div class="message-card p-5 rounded-4 shadow-sm bg-white">
                    <div class="message-icon mb-4">
                        <i class="ti ti-quote fs-1 text-primary opacity-25"></i>
                    </div>
                    
                    <div class="message-content">
                        <p class="text-muted lead mb-4">
                            It gives me immense pleasure to welcome you to Aeren Education, an institution that stands as a beacon of quality education and value-based learning. Our journey began with a simple yet powerful vision - to create an educational environment where academic excellence meets character building.
                        </p>

                        <p class="text-muted mb-4">
                            In today's rapidly evolving world, education must transcend beyond textbooks and examinations. At Aeren, we believe in nurturing not just competent professionals but responsible citizens who will contribute positively to society. Our affiliation with the University of Mumbai ensures that we maintain the highest academic standards while our value system, inspired by the Aeren Foundation, helps shape well-rounded individuals.
                        </p>

                        <p class="text-muted mb-4">
                            I am proud of our dedicated faculty members who work tirelessly to provide personalized attention and mentorship to each student. Our infrastructure is designed to foster learning, creativity, and innovation. Through various co-curricular activities, sports, and community service initiatives, we ensure holistic development of our students.
                        </p>

                        <p class="text-muted">
                            As we move forward, our commitment remains unwavering - to provide education that empowers, enlightens, and enables our students to face the challenges of tomorrow with confidence and competence. I invite you to join us in this transformative educational journey.
                        </p>

                        <div class="signature mt-5">
                            <p class="text-primary fw-bold mb-1">Warm regards,</p>
                            <h5 class="text-primary">Mr. Unkown</h5>
                            <p class="text-muted small">Principle, Aeren Education</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection