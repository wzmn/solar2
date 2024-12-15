@section("title", "Employee Testimonials at Enernew – Hear from Our Team")

@extends("layouts.website")

@section("header")
<div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
    <h1 class="text-white">Testimonials</h1>
    <div class="hero__content text-white mb-3">
        Home > Careers > Employee Testimonials
    </div>
</div>
@endsection

@section("content")
<div class="container my-5 testimonials">
    <div class="row mb-5">
        <div class="col-12">
            <h1 data-aos="fade-up" class="highlight text-center highlight--center mb-4 pb-3">
                Employee Testimonials
            </h1>
            <div class="content" data-aos="fade-up">
                <p>
                    Gain insight into the experiences of our team members at <a href="https://enernew.in" target="_blank" data-aos="fade-right" data-aos-delay="400" class="text-orange">Enernew</a>. Hear firsthand accounts of personal and professional growth in an environment that fosters innovation and collaboration. Discover how our employees contribute to impactful projects and embrace supportive mentorship, shaping their <a href="https://enernew.in/careers" target="_blank" data-aos="fade-right" data-aos-delay="400" class="text-orange">careers</a>. These stories and experiences serve as an inspiring testament to our collective journey towards sustainability.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        
            
                <div class="testimonials__grid_item col-lg-6 mb-5">
                    <img src="{{ asset('assets/images/test-bg.png') }}" class="bg">
                    <div class="content">
                        <div class="fs-7">Joining Enernew has been a career-defining decision. Working at Enernew has been a transformative experience. I'm inspired by our shared commitment to innovation and sustainability..</div>
                        <div>
                            <div class="bold fs-7">Rahul Kumar</div>
                            <div class="fs-7">Senior Executive</div>
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/images/testimonial-2.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="testimonials__grid_item col-lg-6 mb-5">
                    <img src="{{ asset('assets/images/test-bg.png') }}" class="bg">
                    <div class="content">
                        <div class="fs-7">As a Senior Design Engineer at Enernew, I’m thrilled by the opportunity to work on cutting-edge Solar park developent projects. The role challenges me with innovative solar projects while offering a supportive and dynamic team environment. It’s a privilege to contribute to a Renewable energy future.</div>
                        <div>
                            <div class="bold fs-7">Satyam Srivastava</div>
                            <div class="fs-7">Senior Design Engineer</div>
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/images/testimonial-3.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="testimonials__grid_item col-lg-6 mb-5 offset-lg-3">
                    <img src="{{ asset('assets/images/test-bg.png') }}" class="bg">
                    <div class="content">
                        <div class="fs-7">Since I joined Enernew as a Solar Site Engineer, it has been an amazing journey. The company's commitment to innovative solar technology and sustainable practices is evident in every project we take on. I am proud to be part of a team that is working towards a greener future. The leadership values our input and encourages continuous learning, which helped me to grow professionally.</div>
                        <div>
                            <div class="bold fs-7">Arvind Kumar</div>
                            <div class="fs-7">Site Engineer</div>
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/images/testimonial-4.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            
    </div>
</div>
@endsection