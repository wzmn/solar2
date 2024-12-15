@section("title", "Careers at Enernew – Join Our Renewable Energy Team")

@extends("layouts.website")

@section("header")
<div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
  <h1 class="text-white">Careers</h1>
  <div class="hero__content text-white mb-3">
    Home > Careers
  </div>
</div>
@endsection

@section("content")
<div style="background-image: url('{{ asset('assets/images/7.png') }}');    background-size: cover;">
    <div class="container py-5">
        <div class="row">
            <div class="col mb-5">
                <h2 class="highlight mb-4 highlight--center" data-aos="fade-up">Explore Careers at Enernew</h2>
                <div class="text-center">
                    Join Us in Shaping a Sustainable Future
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                <div class="fs-5 mb-2">
                    Company Introduction
                </div>
                <div>
                Welcome to Enernew, where our mission transcends traditional energy solutions. We are dedicated to pioneering sustainable innovations that redefine the future of power. Our values of integrity, innovation, and community empowerment drive us to deliver excellence in every endeavor. We are committed to creating a cleaner, greener world for future generations. With a focus on <a href="https://enernew.in" target="_blank" data-aos="fade-right" data-aos-delay="400" class="text-orange">renewable energy</a>, we push the boundaries of what’s possible, constantly exploring new technologies to meet the evolving needs of our planet. Join us in shaping a future where clean energy is accessible and sustainable for all.
                </div>
            </div>
            <div class="col-12 col-md-6 py-5">   
                <img src="{{ asset('assets/images/career-1.png') }}" class="img-fluid rounded-3" alt="Shaping a Sustainable Future">
            </div>

            <div class="col-12 col-md-6 py-5 mb-5">
                <img src="{{ asset('assets/images/life-enernew/Diwali 3.jpeg') }}" class="img-fluid rounded-3" alt="Enernew Work Culture Group Photo">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
                <div class="fs-5 mb-2">Work Culture and Environment</div>
                <div>At Enernew, we cultivate a dynamic and inclusive work environment that thrives on collaboration and creativity. Our culture fosters a deep sense of purpose as we work toward a common goal of sustainability. We encourage continuous learning and personal growth, supported by a culture of respect and appreciation. Our team enjoys a balance of challenging projects and opportunities to make a tangible impact on the world. Here, every voice is heard, and every contribution is valued, creating a workplace where innovation flourishes. We believe that diversity in thought and background is key to driving the innovative solutions we champion.</div>
            </div>

            <div class="col-12">
                <div class="fs-5 mb-2 text-center">What Sets Us Apart</div>
                <div class="text-center mb-5">We invite you to embark on a journey of impactful work and personal fulfillment. Enernew offers competitive benefits and opportunities for advancement, but more importantly, we provide a platform for you to contribute to something larger than yourself. We pride ourselves on creating an environment where every team member's ideas and contributions are valued and can lead to meaningful change. Our commitment to sustainability extends to our workplace practices, promoting a healthy work-life balance and fostering a culture of innovation. By joining us, you'll be part of a team that's not just changing the energy landscape, but also creating a legacy of positive change for future generations.</div>
                <div class="career__cta_img rounded-3 mb-5">
                    <img src="{{ asset('assets/images/career-3.png') }}" class="img-fluid" alt="Enernew Team members">
                </div>
                <div class="text-center">
                    <a href="/life-at-enernew" class="btn bg-orange">
                        Explore Life@Enernew
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background-image: url('{{ asset('assets/images/history-bg.png') }}');    background-size: cover;"  id="whyjoinus">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="text-center mb-4 bold">Why Join Us?</div>
                <div class="text-center">At Enernew, we believe in the power of collective action to drive meaningful change. Join us to work alongside passionate individuals who share your vision for a sustainable future. Experience the satisfaction of contributing to groundbreaking projects that make a lasting impact on communities and the environment alike. By becoming part of our team, you'll have the opportunity to grow both professionally and personally in a supportive and forward-thinking environment. Together, we can build a career that not only fulfills your ambitions but also leaves a lasting, positive imprint on the world. Your journey with us is not just a job—it's a chance to be part of a movement towards a brighter, more sustainable future.</div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="highlight mb-5 highlight--center" data-aos="fade-up">Job Openings</h2>
                <div class="p-5 bg-white text-center rounded-3">
                    <div class="row">
                        <div class="col-12 col-md-8 offset-md-2 mb-5">Discover your true potential with Enernew. Explore current opportunities to join our team and play a vital role in shaping the future of renewable energy.</div>
                        <div>
                            <a href="/job-openings" class="btn bg-orange">Explore Current Openings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col">
            <h2 class="highlight mb-5 highlight--center" data-aos="fade-up">Employee Testimonials</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="testimonials__grid_item col-lg-6 offset-lg-3 mb-5">
                <img src="{{ asset('assets/images/test-bg.png') }}" class="bg">
                <div class="content">
                    <div class="fs-7">Working at Enernew has been incredibly rewarding. The company's dedication to renewable energy and sustainability has greatly contributed to my professional growth. I am thankful for the continuous learning opportunities and the positive work environment.</div>
                    <div>
                        <div class="bold fs-7">Divya Patel</div>
                        <div class="fs-7">Sales Project Coordinator</div>
                    </div>
                    <div class="img">
                        <img src="{{ asset('assets/images/testimonial-1.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="/employee-testimonials" class="btn bg-orange">Explore More</a>
            </div>
        </div>
    </div>
</div>
<div class="vision bg-grey" id="vision">
    <div class="container mt-5">
        <div class="row">
            <div class="col mt-5">
                <h2 data-aos="fade-up" class="highlight mb-4 highlight--center">Our Values</h2>
                <div data-aos="fade-up" class="text-center">
                    The Core Values of the company are:
                </div>
                <div class="vision__grid my-5">
                    <div class="vision__grid_item" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('assets/images/icon-1.png') }}" alt="Integrity in all business dealings Logo">
                        <div>Integrity in all  business dealings</div>
                    </div>
                    <div class="vision__grid_item" data-aos="fade-left" data-aos-delay="200">
                        <img src="{{ asset('assets/images/icon-2.png') }}" alt="Embracing innovation Logo">
                        <div>High ethical and professional standards</div>
                    </div>
                    <div class="vision__grid_image">
                        <div class="">
                            <img src="{{ asset('assets/images/cross.png') }}" class="img-fluid" data-aos="zoom-in">
                        </div>
                    </div>
                    <div class="vision__grid_item" data-aos="fade-right" data-aos-delay="300">
                        <img src="{{ asset('assets/images/icon-3.png') }}">
                        An innovative and pragmatic approach
                    </div>
                    <div class="vision__grid_item" data-aos="fade-right" data-aos-delay="400">
                        <img src="{{ asset('assets/images/icon-4.png') }}">
                        Continuous development of people
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="career position-relative">
    <img src="{{ asset('assets/images/career-4.png') }}" class="career__cta_bg" alt="Solar system installation company">
    <div class="container py-5">
        <div class="row my-5 py-5">
            <div class="col-12">
                <h2 class="highlight mb-4 highlight--center text-white" data-aos="fade-up">Contact Information</h2>
                <div class="text-white text-center" data-aos="fade-up">
                    For more information about career opportunities at Enernew, please reach out to our <br> dedicated HR team at careers@enernew.in or call +91-8800222600
                </div>
            </div>
        </div>
    </div>
</div>
@endsection