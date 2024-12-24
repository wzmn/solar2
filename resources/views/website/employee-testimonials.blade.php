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
        @if ($testimonials)
            @foreach ($testimonials as $user)
                <div class="testimonials__grid_item col-lg-6 mb-5 @if ($loop->index === 2) offset-lg-3 @endif">
                    <img src="{{ asset('assets/images/test-bg.png') }}" class="bg">
                    <div class="content">
                        <div class="fs-7">{!! $user->testimonial !!}</div>
                        <div>
                            <div class="bold fs-7">{{$user->name}}</div>
                            <div class="fs-7">{{$user->designation}}</div>
                        </div>
                        
                        <div class="img">
                            @if ($user->image)
                                <img src="{{Storage::disk('public')->url($post->image)}}" alt="" class="img-fluid">
                            @else 
                            <img src="{{ asset('assets/images/testimonial-2.jpg') }}" alt="" class="img-fluid">
                            @endif;
                        </div>
                    </div>
                </div>
            @endforeach
        @endif;
    </div>
</div>
@endsection