<?php

$solutionsCount = 0;
$solutionsIndex = 0;
foreach (collect($seo->blocks) as $tabPill) {
    if ($tabPill->type === 'Solutions') {
        $solutionsCount++;
    }
}
?>

@section('title', 'Innovative Renewable Energy & Solar Power Park Solutions')

@extends('layouts.website')

@section('header')

    <div class="align-items-center col-12 d-flex hero justify-content-end">
        <div class="w-100">
            <video id="heroVideo" muted loop preload="none">
                <source src="{{ asset('assets/videos/hero.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="d-flex justify-content-between flex-column-reverse flex-md-row">
                <div class="col-12 col-md-6 show" id="hero__text_wrapper">
                    <h1 class="text-white text-shadow fs-xl hero__title">Enlightening Tomorrow's Energy Landscape</h1>
                    <div class="text-white hero__content mb-3">We are dedicated to unleashing the power of renewable energy
                        through transformative clean energy solutions, forging the path to the future of decarbonisation
                        projects.
                    </div>
                    <a href="/about-us" class="btn btn--black">Explore Our Solution</a>
                </div>
                <div class="align-items-end d-flex flex-column justify-content-center">
                    <div class="bg-red hero__play">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490 490"
                            style="enable-background:new 0 0 490 490;" xml:space="preserve">
                            <path d="M15.541,490V0l458.917,245.009L15.541,490z" />
                            <path d="M 15.541 490 V 0 l 453.459 -1 L 469 490 z" />
                        </svg>
                    </div>
                    <div class="bg-red hero__sound">
                        <svg version="1.1" id="sound" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 93.038 93.038"
                            style="enable-background:new 0 0 93.038 93.038;" xml:space="preserve">
                            <g>
                                <path
                                    d="M46.547,75.521c0,1.639-0.947,3.128-2.429,3.823c-0.573,0.271-1.187,0.402-1.797,0.402c-0.966,0-1.923-0.332-2.696-0.973
                                                            l-23.098-19.14H4.225C1.892,59.635,0,57.742,0,55.409V38.576c0-2.334,1.892-4.226,4.225-4.226h12.303l23.098-19.14
                                                            c1.262-1.046,3.012-1.269,4.493-0.569c1.481,0.695,2.429,2.185,2.429,3.823L46.547,75.521L46.547,75.521z M62.784,68.919
                                                            c-0.103,0.007-0.202,0.011-0.304,0.011c-1.116,0-2.192-0.441-2.987-1.237l-0.565-0.567c-1.482-1.479-1.656-3.822-0.408-5.504
                                                            c3.164-4.266,4.834-9.323,4.834-14.628c0-5.706-1.896-11.058-5.484-15.478c-1.366-1.68-1.24-4.12,0.291-5.65l0.564-0.565
                                                            c0.844-0.844,1.975-1.304,3.199-1.231c1.192,0.06,2.305,0.621,3.061,1.545c4.977,6.09,7.606,13.484,7.606,21.38
                                                            c0,7.354-2.325,14.354-6.725,20.24C65.131,68.216,64.007,68.832,62.784,68.919z M80.252,81.976
                                                            c-0.764,0.903-1.869,1.445-3.052,1.495c-0.058,0.002-0.117,0.004-0.177,0.004c-1.119,0-2.193-0.442-2.988-1.237l-0.555-0.555
                                                            c-1.551-1.55-1.656-4.029-0.246-5.707c6.814-8.104,10.568-18.396,10.568-28.982c0-11.011-4.019-21.611-11.314-29.847
                                                            c-1.479-1.672-1.404-4.203,0.17-5.783l0.554-0.555c0.822-0.826,1.89-1.281,3.115-1.242c1.163,0.033,2.263,0.547,3.036,1.417
                                                            c8.818,9.928,13.675,22.718,13.675,36.01C93.04,59.783,88.499,72.207,80.252,81.976z" />
                                <path
                                    d="M 46.547 75.521 c 0 1.639 -0.947 3.128 -2.429 3.823 c -0.573 0.271 -1.187 0.402 -1.797 0.402 c -0.966 0 -1.923 -0.332 -2.696 -0.973 l -23.098 -19.14 H 4.225 C 1.892 59.635 0 57.742 0 55.409 V 38.576 c 0 -2.334 1.892 -4.226 4.225 -4.226 h 12.303 l 23.098 -19.14 c 1.262 -1.046 3.012 -1.269 4.493 -0.569 c 1.481 0.695 2.429 2.185 2.429 3.823 L 46.547 75.521 z z z" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="carousel-indicators">
            <button type="button" data-slide-to="slide-0" data-title="Enlightening Tomorrow's Energy Landscape"
                data-content="At the forefront of advancing renewable energy through innovative clean energy solutions, charting a course for a transformative era in decarbonization."></button>
            <button type="button" data-slide-to="slide-1" data-title="Sustainable Energy for a Brighter Future"
                data-content="Striving to redefine sustainable energy with visionary clean energy solutions, creating a path toward a resilient and enduring future."></button>
            <button type="button" data-slide-to="slide-2" data-title="Illuminating the Future with Solar Innovation"
                data-content="Leading the charge in harnessing renewable energy through pioneering solutions, establishing new benchmarks for excellence in decarbonization."></button>
            {{-- <button type="button" data-slide-to="slide-3" data-title="Radiant Solar Futures"
            data-content="We are dedicated to unleashing the power of solar energy through transformative clean energy solutions, forging the path for the future of solar projects."></button> --}}
        </div>
    </div>
@endsection


@section('content')
    <div class="overview pt-5"
        style="background-image: url('./assets/images/2.webp');    background-position: 70%;    background-size: cover;">
        <div class="container-fluid mt-5 position-relative">
            <div class="row mb-5">
                <div class="col-lg-5 col mb-3">
                    @foreach ($seo->blocks as $overview)
                        @if ($overview->type === 'Overview')
                            <?php $data = json_decode($overview->data); ?>
                            <img src="{{ $data[3]->content }}" class="img-fluid"
                                alt="Off-Site Captive Open Access Solar Parks">
                        @endif
                    @endforeach
                    <div class="d-md-flex flex-wrap flex-md-nowrap justify-content-center icon_wrapper animate"
                        data-aos="fade-up" data-aos-offset="400">
                        <div class="icon">
                            <div class="icon__box" data-aos="fade-up">
                                <img src="./assets/images/icon-14.png" class="img-fluid" alt="Company Founded">
                                <div>
                                    <span class="bold">Founded in </span>
                                    <h4 class="mb-0" style="--to: 2018;"></h4>
                                    <span class="bold">
                                        &nbsp;
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="icon">
                            <div class="icon__box" data-aos="fade-up" data-aos-delay="100">
                                <img src="./assets/images/icon-16.png" class="img-fluid" alt="Company Partners">
                                <div>
                                    <span class="bold">Partnered with </span>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h4 class="mb-0" style="--to: 54;"></h4>
                                        <div class="fs-4">+</div>
                                    </div>
                                    <span class="bold">Companies</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon">
                            <div class="icon__box" data-aos="fade-up" data-aos-delay="200">
                                <img src="./assets/images/ICON-17.png" class="img-fluid" alt="Company Commissioned">
                                <div>
                                    <span class="bold">Commissioned</span>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h4 class="mb-0" style="--to: 100;"></h4>
                                        <div class="fs-4">+</div>
                                    </div>
                                    <span class="bold">Megawatts</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon">
                            <div class="icon__box" data-aos="fade-up" data-aos-delay="300">
                                <img src="./assets/images/icon-18.png" class="img-fluid" alt="Energy Saved">
                                <div>
                                    <span class="bold">Saved</span>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h4 class="mb-0" style="--to: 85000;"></h4>
                                        <div class="fs-4">+</div>
                                    </div>
                                    <span class="bold">Tons of Coal
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    @foreach ($seo->blocks as $overviewContent)
                        @if ($overviewContent->type === 'Overview')
                            <?php $data = json_decode($overviewContent->data); ?>
                            <h2 class="highlight" data-aos="fade-up" data-aos-delay="100">{{ $data[0]->content }}</h2>
                            {!! $data[1]->content !!}
                            <a href="{{ $data[2]->content }}" class="btn btn--orange">Explore Our Solution</a>
                        @endif
                    @endforeach
                    {{-- <h2 class="highlight" data-aos="fade-up" data-aos-delay="100">Overview</h2>
                    <p class="text-justify">
                        In the ever-evolving landscape of renewable energy, Enernew stands as a pioneering force dedicated
                        to delivering innovative and sustainable energy solutions. Founded by the visionaries behind Sriram
                        Cables, Enernew has recently unveiled its latest venture, committed to pushing the boundaries of
                        green energy.

                    </p>
                    <p class="text-justify">
                        Specializing in Off-Site Captive Open Access Solar Parks and On-Site C&I Solar Projects, Enernew
                        caters to conglomerates spanning various sectors of the economy. With a stellar track record of
                        successfully executing over 100 MWp+ Solar projects, Enernew is not just leading but reshaping the
                        journey towards a greener future.
                    </p>
                    <p class="text-justify">
                        We empower industries to transcend traditional energy constraints by leveraging cutting-edge
                        renewable technologies, including wind, Battery Energy Storage Systems (BESS), and advanced
                        wind-solar hybrids, to create a future where power needs are met sustainably and efficiently.
                    </p>
                    <p class="text-justify">
                        Beyond mere business ambitions, Enernew's mission is rooted in catalyzing sustainable development
                        through clean energy solutions. By harnessing the inexhaustible potential of solar power, Enernew
                        not only meets the energy demands of its diverse clientele but also champions environmental
                        conservation efforts. Through cutting-edge technologies and meticulous project management practices,
                        Enernew is steadfast in its commitment to achieving net-zero emissions, ensuring that each project
                        contributes meaningfully to global sustainability goals.
                    </p>
                    <a href="/about-us" class="btn btn--orange">Explore Our Solution</a> --}}
                </div>
                <div class="col d-none d-lg-block col-sm-1">

                    <div class="sun__container">
                        <div class="sun position-sticky">
                            <img src="./assets/images/outer.png" class="sun__outer" alt="Solar Energy">
                            <img src="./assets/images/inner.png" class="sun__inner" alt="Solar Energy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container position-relative">
            <div class="row">


            </div>
        </div>
    </div>
    <div class="solutions pb-5" style="background-image: url('./assets/images/4.png');    background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center mt-5 mb-5 highlight highlight--center" data-aos="fade-up">Our Solutions</h2>
                </div>
            </div>
            <div class="row bg-white pt-5">
                <div class="col">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3 gap-2 justify-content-center" id="pills-tab"
                        role="tablist">

                        @foreach (collect($seo->blocks) as $tabPill)
                            @if ($tabPill->type === 'Solutions')
                                <?php $data = json_decode($tabPill->data); ?>
                                <li class="nav-item" role="presentation">
                                    <button class="btn btn--green @if ($solutionsIndex === 0) active @endif"
                                        id="pills-{{ $tabPill->id }}-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-{{ $tabPill->id }}" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">{{ $tabPill->name }}</button>
                                </li>
                                <?php $solutionsIndex++; ?>
                            @endif
                        @endforeach

                        <?php $solutionsIndex = 0; ?>
                    </ul>
                </div>
            </div>
            <div class="row bg-white p-5 rounded mb-5">
                <div class="col mb-5">
                    <div class="row">
                        <div class="tab-content" id="solutions-tabContent">
                            @foreach ($seo->blocks as $tabContent)
                                @if ($tabContent->type === 'Solutions')
                                    <?php $data = json_decode($tabContent->data); ?>
                                    <div class="tab-pane col-12 fade show @if ($solutionsIndex === 0) active @endif"
                                        id="pills-{{ $tabContent->id }}" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <div class="d-flex flex-lg-row flex-column-reverse gap-3">
                                            <div class="col">
                                                <div class="h3">{{ $data[1]->content }}</div>
                                                <p>{{ $data[2]->content }}</p>

                                                <div class="accordion" id="solutions-accordion1">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                                aria-expanded="false" aria-controls="collapseThree">
                                                                {{ $data[3]->content }}
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#solutions-tabContent">
                                                            <div class="accordion-body">
                                                                {{ $data[4]->content }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                {{ $data[5]->content }}
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#solutions-tabContent">
                                                            <div class="accordion-body">
                                                                {{ $data[6]->content }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                {{ $data[7]->content }}
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#solutions-tabContent">
                                                            <div class="accordion-body">
                                                                {{ $data[8]->content }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="{{ $data[9]->content }}" class="btn btn--orange">Explore Our
                                                        Solution</a>
                                                </div>
                                            </div>
                                            <div class="col align-items-start d-md-flex mb-4">
                                                <img src="{{ $data[0]->content }}" class="img-fluid"
                                                    alt="Solar Power Park Developer">
                                            </div>

                                        </div>
                                    </div>
                                    <?php $solutionsIndex++; ?>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @foreach ($seo->blocks as $tabContent)
        @if ($tabContent->type === 'Content 1')
            <?php $data = json_decode($tabContent->data); ?>
            <div class="lets_talk py-5 ">
                <div class="container">
                    <div class="row">
                        <div class="col mb-5">
                            <h3 class="highlight highlight--center text-center mb-5" data-aos="fade-up">
                                {{ $data[0]->content }}
                            </h3>
                            {!! $data[1]->content !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-5">
                            <img src="{{ $data[2]->content }}" class="rounded-3 img-fluid"
                                alt="50 MW Solar Power Park in Bikaner, Rajasthan">
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    <div class="our-projects pb-5 pt-5" style="background-image: url('./assets/images/7.png');background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center mb-5 highlight highlight--center" data-aos="fade-up">Our Projects</h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div id="projects2" class="mb-3 carousel-dark carousel slide" data-bs-interval="false">
                        <div class="carousel-inner">
                            @forelse ($projects as $item)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <h3>{{ $item->client }}</h3>
                                    <div class="bold">{{ $item->title }}</div>
                                    <div class="fs-6 mb-3 projects__content">{!! $item->description !!}</div>
                                    <a href="#" class="projects__read_more d-inline-flex align-items-center">
                                        <span class="projects__icon">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18"
                                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                xml:space="preserve">

                                                <path
                                                    d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216 v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />

                                            </svg>
                                        </span>
                                        <span class="d-flex align-items-center h-100">Explore
                                            more</span>
                                    </a>
                                </div>
                            @empty
                                <p>No Projects found.</p>
                            @endforelse
                        </div>
                        <button class="carousel-control-prev d-none d-md-flex" type="button" data-bs-target="#projects"
                            data-bs-slide="prev">
                            <svg height="15" viewBox="-111 0 475 475.46667" width="15"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m237.964844 475.464844-237.730469-237.730469 237.730469-237.734375 15.070312 15.066406-222.667968 222.667969 222.667968 222.664063zm0 0" />
                            </svg>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next d-none d-md-flex" type="button" data-bs-target="#projects"
                            data-bs-slide="next">
                            <svg version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/20
                         00/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15"
                                viewBox="0 0 511.949 511.949" xml:space="preserve">
                                <g>
                                    <path
                                        d="M386.235,248.308L140.902,2.975c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76
                                                                               l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.053,4.267,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213
                                                                               l245.333-245.333C390.395,259.188,390.395,252.468,386.235,248.308z" />
                                </g>

                            </svg>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div id="projects" class="carousel slide" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/images/projects/Railway-Single.webp" class="d-block w-100"
                                    alt="India’s First Solar-Powered Running Coaches">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/projects/Banswara-Collage.webp" class="d-block w-100"
                                    alt="Banswara Syntex - Single-Site Rooftop Solar Project">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/projects/Pragati-Power-Collage.webp" class="d-block w-100"
                                    alt="Pragati Power Rooftop Solar Project">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/projects/Jindal-Collage.webp" class="d-block w-100"
                                    alt="Jindal Saw Ground-Mounted Solar Power Project">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/projects/JTEKT-Collage.webp" class="d-block w-100"
                                    alt="JTEKT Corporation turnkey EPC- solar power project">
                            </div>
                        </div>
                        <!-- <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#projects" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#projects" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#projects" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    <button type="button" data-bs-target="#projects" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                                    <button type="button" data-bs-target="#projects" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                                </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clients pt-5" style="background-image: url('./assets/images/8.webp');">
        <div class="container">
            @foreach ($seo->blocks as $tabContent)
                @if ($tabContent->type === 'Our Clients')
                    <?php $data = json_decode($tabContent->data); ?>
                    <div class="row pb-5">
                        <div class="col-12 col-sm-5 d-flex justify-content-center flex-column mb-5">
                            <h2 data-aos="fade-up" class="highlight">Our Clients</h2>
                            {!! $data[0]->content !!}
                            {{-- <p data-aos="fade-up" data-aos-delay="100" class="text-justify">We take pride in serving a
                                diverse
                                and prestigious clientele
                                that spans various industries and sectors. From large corporations and government agencies
                                to
                                educational institutions and residential communities, our clients trust us to deliver
                                reliable,
                                innovative, and sustainable <a href="https://enernew.in/b2b-solar-solutions"
                                    target="_blank" data-aos="fade-right" data-aos-delay="400" class="text-orange">solar
                                    energy solutions</a>.
                                Our commitment to excellence and customer
                                satisfaction has enabled us to build strong, long-lasting relationships with each of our
                                valued
                                partners.
                            </p> --}}
                        </div>
                        <div class="col"></div>

                        <div class="col-12 col-sm-6 clients__grid">
                            @if ($data[1]->type === 'image')
                                <img src="{{ $data[1]->content }}" class="img-fluid" data-aos="fade-left"
                                    alt="Jindal Saw Client Logo">
                            @endif
                            @if (isset($data[2]->type) && $data[2]->type === 'image')
                                <img src="{{ $data[2]->content }}" class="img-fluid" data-aos="fade-left"
                                    alt="Jindal Saw Client Logo">
                            @endif
                            @if (isset($data[3]->type) && $data[3]->type === 'image')
                                <img src="{{ $data[3]->content }}" class="img-fluid" data-aos="fade-left"
                                    alt="Jindal Saw Client Logo">
                            @endif
                            @if (isset($data[4]->type) && $data[4]->type === 'image')
                                <img src="{{ $data[4]->content }}" class="img-fluid" data-aos="fade-left"
                                    alt="Jindal Saw Client Logo">
                            @endif
                            @if (isset($data[5]->type) && $data[5]->type === 'image')
                                <img src="{{ $data[5]->content }}" class="img-fluid" data-aos="fade-left"
                                    alt="Jindal Saw Client Logo">
                            @endif
                            @if (isset($data[6]->type) && $data[6]->type === 'image')
                                <img src="{{ $data[6]->content }}" class="img-fluid" data-aos="fade-left"
                                    alt="Jindal Saw Client Logo">
                            @endif
                            @if (isset($data[7]->type) && $data[7]->type === 'image')
                                <img src="{{ $data[7]->content }}" class="img-fluid" data-aos="fade-left"
                                    alt="Jindal Saw Client Logo">
                            @endif
                            @if (isset($data[8]->type) && $data[8]->type === 'image')
                                <img src="{{ $data[8]->content }}" class="img-fluid" data-aos="fade-left"
                                    alt="Jindal Saw Client Logo">
                            @endif
                            {{-- <img src="./assets/images/c2.png" class="img-fluid" data-aos="fade-left"
                                data-aos-delay="100" alt="NTPC Client Logo">
                            <img src="./assets/images/c4.png" class="img-fluid" data-aos="fade-left"
                                data-aos-delay="200" alt="HSIL Client Logo">
                            <img src="./assets/images/c5.png" class="img-fluid" data-aos="fade-left"
                                data-aos-delay="300" alt="OM Logistics Client Logo">
                            <img src="./assets/images/c6.png" class="img-fluid" data-aos="fade-left"
                                data-aos-delay="400" alt="Banswara Syntex Client Logo">
                            <img src="./assets/images/c7.png" class="img-fluid" data-aos="fade-left"
                                data-aos-delay="500" alt="JTEKT Client Logo">
                            <img src="./assets/images/c8.png" class="img-fluid" alt="SECI Client Logo">
                            <img src="./assets/images/c9.png" class="img-fluid" alt="India Oil Client Logo"> --}}
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="row mt-5 justify-content-center pt-5">
                <div class="col-9 mb-5">
                    <div id="clients" class="carousel carousel-dark slide flex-column" data-bs-interval="false">
                        <h2 class="text-center mb-3 highlight highlight--center" data-aos="fade-up">Client Testimonials
                        </h2>
                        <div class="carousel-inner" data-aos="fade-up" data-aos-delay="100">
                            @foreach ($testimonials as $item)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="d-flex justify-content-center flex-column align-items-center pb-5 gap-2">
                                        <svg width="50" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 57 57" xml:space="preserve">

                                            <g>
                                                <circle style="fill:#3b9d30;" cx="18.5" cy="31.5" r="5.5" />
                                                <path style="fill:#3b9d30;"
                                                    d="M18.5,38c-3.584,0-6.5-2.916-6.5-6.5s2.916-6.5,6.5-6.5s6.5,2.916,6.5,6.5S22.084,38,18.5,38z M18.5,27c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5s4.5-2.019,4.5-4.5S20.981,27,18.5,27z" />
                                            </g>
                                            <g>
                                                <circle style="fill:#3b9d30;" cx="35.5" cy="31.5" r="5.5" />
                                                <path style="fill:#3b9d30;"
                                                    d="M35.5,38c-3.584,0-6.5-2.916-6.5-6.5s2.916-6.5,6.5-6.5s6.5,2.916,6.5,6.5S39.084,38,35.5,38z M35.5,27c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5s4.5-2.019,4.5-4.5S37.981,27,35.5,27z" />
                                            </g>
                                            <path style="fill:#3b9d30;"
                                                d="M13,32c-0.553,0-1-0.447-1-1c0-7.72,6.28-14,14-14c0.553,0,1,0.447,1,1s-0.447,1-1,1 c-6.617,0-12,5.383-12,12C14,31.553,13.553,32,13,32z" />
                                            <path style="fill:#3b9d30;"
                                                d="M30,32c-0.553,0-1-0.447-1-1c0-7.72,6.28-14,14-14c0.553,0,1,0.447,1,1s-0.447,1-1,1 c-6.617,0-12,5.383-12,12C31,31.553,30.553,32,30,32z" />
                                        </svg>
                                        <i class="text-center mb-3">“{!! $item->testimonial !!}”
                                        </i>
                                        <h2 class="h2 mb-0">- {{ $item->name }}</h2>
                                        <p>{{ $item->company }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="carousel-indicators">
                            @foreach ($testimonials as $item)
                                <button type="button" data-bs-target="#clients" data-bs-slide-to="{{ $loop->index }}"
                                    class="{{ $loop->first ? 'active' : '' }}" aria-current="true"
                                    aria-label="Slide 1"></button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lets_talk py-5 ">
        <div class="container">
            <div class="row">
                <div class="col mb-5">
                    <h2 class="highlight highlight--center text-center mb-5" data-aos="fade-up">Let's talk</h2>
                </div>
            </div>
            <div class="border p-5 row mb-5">
                <div
                    class="col-12 col-md-4 flex-column justify-content-center d-flex py-5 align-items-center border-end border-sm-none">
                    <div class="mb-5">
                        <h3 class="highlight" data-aos="fade-up">Our Email</h3>
                        <span><a href="mailto:contact@enernew.in">contact@enernew.in</a></span>
                    </div>
                    <div>
                        <h3 class="highlight" data-aos="fade-up">Phone No.</h3>
                        <span><a href="tel:+91 88 00 222 600">+91 88 00 222 600</a></span>
                    </div>
                </div>
                <div class="col d-none d-lg-block"></div>
                <div class="col-12 col-md-7">
                    <form class="lets_talk__form" name="Home Form">
                        <h4>Drop a line</h4>
                        <div class="d-grid lets_talk__form_input_group mb-3">
                            @csrf
                            <label for="Name">
                                <input type="text" placeholder="Name*" name="name" id="Name" required>
                            </label>
                            <label for="email">
                                <input name="email" id="email" type="email" placeholder="Email Address*"
                                    required>
                            </label>
                            <label for="phone">
                                <input name="phone" id="phone" type="phone" placeholder="Phone No.*" required>
                            </label>
                            <label for="reason">
                                <input name="reason" id="reason" type="select" placeholder="Reason for Contact*"
                                    required>
                            </label>
                            <label for="zip">
                                <input name="zip" autocomplete="off" id="zip" type="zip"
                                    placeholder="Zipcode/Pincode*" required>
                            </label>
                            <label for="city">
                                <input name="city" id="city" type="text" placeholder="City*" required>
                            </label>
                            <label for="state">
                                <input name="state" id="state" type="text" placeholder="State*" required>
                            </label>
                            <label for="country">
                                <input name="country" id="country" type="text" placeholder="Country*" required>
                            </label>
                            <textarea name="message" id="message" id="" placeholder="Your Message" rows="30"></textarea>
                            <div class="message_box"></div>
                        </div>
                        <button type="submit" class="btn btn--orange">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="knowledge-center pb-5" style="background-color: #e6e6e6;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="mb-5 mt-5 text-center highlight highlight--center" data-aos="fade-up">Knowledge
                        Center</h2>
                </div>
            </div>
            <div class="row mb-5">
                <div href="/knowledge-center/why-off-site-solar-parks-are-the-future-of-renewable-energy"
                    class="col-12 col-md-4 d-flex justify-content-center mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="./assets/images/blogs/blog-1-home.webp" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column justify-content-around">
                            <h5 class="card-title highlight mb-3" data-aos="fade-up">Why Off-Site Solar Parks are the
                                Future of Renewable
                                Energy</h5>
                            <p class="card-text">In the heart of the renewable energy revolution, off-site solar parks are
                                emerging as a beacon of innovation and sustainability ...</p>
                            <a href="/knowledge-center/why-off-site-solar-parks-are-the-future-of-renewable-energy"
                                data-aos="fade-right" data-aos-delay="400" class="text-orange">Read More</a>
                        </div>
                    </div>
                </div>
                <div href="/knowledge-center/embracing-sustainability-with-solar-energy-and-its-environmental-benefits"
                    class="col-12 col-md-4 d-flex justify-content-center mb-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <img src="./assets/images/blogs/blog-2-home.webp" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column justify-content-around">
                            <h5 class="card-title highlight mb-3" data-aos="fade-up">Embracing Sustainability with Solar
                                Energy and Its Environmental Benefits</h5>
                            <p class="card-text">Transitioning to sustainable practices is crucial for preserving our
                                planet for future generations...</p>
                            <a href="/knowledge-center/embracing-sustainability-with-solar-energy-and-its-environmental-benefits"
                                data-aos="fade-right" data-aos-delay="500" class="text-orange">Read More</a>
                        </div>
                    </div>
                </div>
                <div href="/knowledge-center/choosing-the-right-green-energy-path-a-comparison-of-captive-and-third-party-ppas"
                    class="col-12 col-md-4 d-flex justify-content-center mb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="./assets/images/blogs/blog-3-home.webp" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column justify-content-around">
                            <h5 class="card-title highlight mb-3" data-aos="fade-up">Choosing the Right Green Energy Path:
                                A Comparison of Captive and Third-Party PPAS</h5>
                            <p class="card-text">As experience with other renewable technologies show, lack of social
                                acceptance and incongruity...</p>
                            <a href="knowledge-center/choosing-the-right-green-energy-path-a-comparison-of-captive-and-third-party-ppas"
                                data-aos="fade-right" data-aos-delay="600" class="text-orange">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            [...document.querySelectorAll("div[href]")].map(s => s.addEventListener('click', (event) => {
                window.open(event.currentTarget.getAttribute('href'))
            }))


            window.vid = document.getElementById("heroVideo");
            let hero = document.querySelector('.hero__bg');
            let hero__text_wrapper = document.querySelector('#hero__text_wrapper');
            let hero__title = document.querySelector('.hero__title');
            let hero__content = document.querySelector('.hero__content');

            function showHeroText(title, text) {
                clearTimeout(window.hero_interval);
                window.hero_interval = setTimeout(() => {
                    hero__text_wrapper.classList.add('show')
                    hero__title.innerText = title
                    hero__content.innerText = text
                }, 1000);
            }

            [...document.querySelectorAll('[data-slide-to]')].map(s => {
                s.addEventListener('click', e => {
                    $this = e.target;
                    hero.classList.remove(...['slide-0', 'slide-1', 'slide-2', 'slide-3'])
                    hero.classList.add($this.getAttribute('data-slide-to'))
                    hero__text_wrapper.classList.remove('show');
                    showHeroText($this.getAttribute('data-title'), $this.getAttribute(
                        'data-content'));
                })
            })

            let hero__play = document.querySelector('.hero__play');

            hero__play.addEventListener("click", (event) => {
                if (vid.readyState != 4) {
                    vid.load();
                }
                playVideo(vid)
            })

            const playVideo = (video) => {
                if (video.classList.contains('playing')) {
                    video.classList.remove('playing')
                    video.pause()
                } else {
                    video.classList.add('playing')
                    video.play()
                }
            }
            vid.addEventListener("canplay", (event) => {
                $parent = event.target;
                let hero__sound = document.querySelector('.hero__sound');
                hero__sound.addEventListener('click', () => {
                    if ($parent.muted) {
                        $parent.classList.add('sound')
                        $parent.muted = false;
                    } else {
                        $parent.classList.remove('sound')
                        $parent.muted = true;
                    }

                })
            });
        })
        // window.addEventListener("load", () => {if (vid) {vid.load()}});
    </script>
@endsection
