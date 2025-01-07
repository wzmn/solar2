@section('title', 'Careers at Enernew – Join Our Renewable Energy Team')

@extends('layouts.website')

@section('header')
    <div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
        <h1 class="text-white">Careers</h1>
        <div class="hero__content text-white mb-3">
            Home > Careers
        </div>
    </div>
@endsection

@section('content')
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

                @forelse ($seo->blocks as $item)
                    @if ($item->type == 'Content')
                        @forelse (json_decode($item->data) as $section)
                            @if ($section->type == 'image')
                                <div class="col-12 col-md-6 py-5">
                                    <img class="img-fluid rounded-3" src="{{ $section->content }}"
                                        alt="Routine inspections and maintenance checks">
                                </div>
                            @endif
                            @if ($section->type == 'wysiwyg')
                                <div data-aos="fade-up" data-aos-delay="200"
                                    class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
                                    {!! $section->content !!}</div>
                            @endif
                        @empty
                            <p>No data found</p>
                        @endforelse
                    @endif
                @empty
                    <p>No blocks found</p>
                @endforelse

                @forelse ($seo->blocks as $item)
                    @if ($item->type === 'Section 1')
                        <div class="col-12">
                            {!! json_decode($item->data)[0]->content !!}
                            <div class="career__cta_img rounded-3 mb-5">
                                <img src="{{ json_decode($item->data)[1]->content }}" class="img-fluid"
                                    alt="Enernew Team members">
                            </div>
                            <div class="text-center">
                                <a href="{{ json_decode($item->data)[2]->content }}" class="btn bg-orange">
                                    Explore Life@Enernew
                                </a>
                            </div>
                        </div>
                    @endif
                @empty
                    <p>No blocks found</p>
                @endforelse

            </div>
        </div>
    </div>
    <div style="background-image: url('{{ asset('assets/images/history-bg.png') }}');    background-size: cover;"
        id="whyjoinus">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 mb-5">
                    {!! $seo->content !!}
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="highlight mb-5 highlight--center" data-aos="fade-up">Job Openings</h2>
                    <div class="p-5 bg-white text-center rounded-3">
                        <div class="row">
                            <div class="col-12 col-md-8 offset-md-2 mb-5">Discover your true potential with Enernew. Explore
                                current opportunities to join our team and play a vital role in shaping the future of
                                renewable energy.</div>
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
                @if ($testimonials)
                    <div class="testimonials__grid_item col-lg-6 mb-5 offset-lg-3">
                        <img src="{{ asset('assets/images/test-bg.png') }}" class="bg">
                        <div class="content">
                            <div class="fs-7">{!! $testimonials->testimonial !!}</div>
                            <div>
                                <div class="bold fs-7">{{ $testimonials->name }}</div>
                                <div class="fs-7">{{ $testimonials->designation }}</div>
                            </div>

                            <div class="img">
                                @if ($testimonials->image)
                                    <img src="{{ Storage::disk('public')->url($testimonials->image) }}" alt=""
                                        class="img-fluid">
                                @else
                                    <img src="{{ asset('assets/images/testimonial-2.jpg') }}" alt=""
                                        class="img-fluid">
                                @endif;
                            </div>
                        </div>
                    </div>
                @endif
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
                            <img src="{{ asset('assets/images/icon-1.png') }}"
                                alt="Integrity in all business dealings Logo">
                            <div>Integrity in all business dealings</div>
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
        <img src="{{ asset('assets/images/career-4.png') }}" class="career__cta_bg"
            alt="Solar system installation company">
        <div class="container py-5">
            <div class="row my-5 py-5">
                <div class="col-12">
                    <h2 class="highlight mb-4 highlight--center text-white" data-aos="fade-up">Contact Information</h2>
                    <div class="text-white text-center" data-aos="fade-up">
                        For more information about career opportunities at Enernew, please reach out to our <br> dedicated
                        HR team at careers@enernew.in or call +91-8800222600
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
