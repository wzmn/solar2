@section("title", "About Enernew – Leading Clean Energy & Solar Power Solutions")

@extends("layouts.website")

@section("header")
<div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
    <h1 class="text-white">About Us</h1>
    <div class="hero__content text-white mb-3">Home > About Us</div>
</div>
@endsection


@section("content")
<div class="overview pt-5" style="background-size: cover;">
    <div class="container-fluid mt-5 position-relative">
        <div class="row mb-5">
            <div class="col mb-3" data-aos="fade-up">
                <img src="{{ asset('storage/assets/images/3.webp') }}" class="img-fluid">
                <div class="col-12 d-md-flex flex-wrap flex-md-nowrap justify-content-center">
                    <div class="icon">
                        <div class="icon__box" data-aos="fade-up">
                            <img src="./storage/assets/images/icon-14.png" class="img-fluid">
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
                            <img src="./storage/assets/images/icon-16.png" class="img-fluid">
                            <div>
                                <span class="bold">Partnered with </span>
                                <div class="d-flex justify-content-center align-items-center">
                                    <h4 class="mb-0" style="--to: 54;"></h4><div class="fs-4">+</div>
                                </div>
                                <span class="bold">Companies</span>
                            </div>
                        </div>
                    </div>
                    <div class="icon">
                        <div class="icon__box" data-aos="fade-up" data-aos-delay="200">
                            <img src="./storage/assets/images/ICON-17.png" class="img-fluid">
                            <div>
                                <span class="bold">Commissioned</span>
                                <div class="d-flex justify-content-center align-items-center">
                                    <h4 class="mb-0" style="--to: 100;"></h4><div class="fs-4">+</div>
                                </div>
                                <span class="bold">Megawatts</span>
                            </div>
                        </div>
                    </div>
                    <div class="icon">
                        <div class="icon__box" data-aos="fade-up" data-aos-delay="300">
                            <img src="./storage/assets/images/icon-18.png" class="img-fluid">
                            <div>
                                <span class="bold">Saved</span>
                                <div class="d-flex justify-content-center align-items-center">
                                    <h4 class="mb-0" style="--to: 85000;"></h4><div class="fs-4">+</div>
                                </div>
                                <span class="bold">Tons of Coal
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5" data-aos="fade-up" data-aos-delay="100">
                {{-- <h4 class="mb-4"></h4> --}}
                <h2 class="highlight fs-1">Leading the Way in Clean Energy at Enernew Solar Park</h2>
                <p class="text-justify">The demand for clean energy is surging among large commercial and industrial (C&I) entities.
                    In response, Enernew has introduced the Enernew Solar Park with a mission to achieve net
                    zero carbon emissions. Our state-of-the-art park provides a seamless opportunity for
                    customers to establish their own solar power plants for captive consumption. By offering
                    access to captive open-access power at significantly reduced electricity costs, we ensure an
                    efficient and cost-effective transition to <a href="https://enernew.in/" target="_blank" data-aos="fade-right" data-aos-delay="400" class="text-orange">renewable energy</a>.</p>
                <div class="overview__ul_title mb-3 bold">Benefits: </div>
                <ul class="overview__ul">
                    <li class="mb-3"><b>Significantly Lower Costs</b>: Enjoy much cheaper electricity compared
                        to DISCOM
                        rates.</li>
                    <li class="mb-3"><b>Regulatory Compliance</b>: Ensure adherence to renewable energy regulations effortlessly.</li>
                    <li class="mb-3"><b>Hassle-Free Setup</b>: Avoid land acquisition and simplify solar project setup with our streamlined ORM services.</li>
                    <li class="mb-3"><b>Asset Ownership</b>: Gain ownership of a Solar Power Plant and leverage the benefits of accelerated depreciation.</li>
                    <li class="mb-3"><b>Attractive Returns</b>: Experience high returns on investment and internal rate of return.</li>
                    <li class="mb-3"><b>Financial Exemptions</b>: Benefit from exemptions on additional surcharges and cross-subsidy surcharges.</li>
                    <li class="mb-3"><b>Trusted Expertise</b>: Backed by Sriram Cables, a leader in the Indian cable and power industry for over 45 years.</li>
                </ul>
            </div>
            <div class="col-lg-1 d-none d-lg-block"></div>

        </div>
    </div>
    <div class="container position-relative">
        <div class="row">

            <div class="col d-none d-md-block">
                <!-- <div class="sun__container">
                            <div class="sun position-sticky">
                                <img src="./images/outer.png" class="sun__outer">
                                <img src="./images/inner.png" class="sun__inner">
                            </div>
                        </div> -->
            </div>
        </div>
    </div>
</div>
<div class="history d-flex flex-column"
    style="background-image: url('{{ asset('storage/assets/images/history-bg.png') }}');    background-size: cover;">
    <div class="container">
        <div class="row mt-5">
            <div class="col mt-5">
                <h2 data-aos="fade-up" class="highlight mb-5">Our History</h2>
                <h5 data-aos="fade-up">Leaders in Precision Cable Manufacturing and Innovation</h5>
                <div class="row history__grid mb-5">
                    <div class="col-12">
                        <p class="history__grid_item text-justify" data-aos="fade-up">Sriram Cables operates from a cutting-edge manufacturing facility in Chopanki Industrial Area, Bhiwadi (Rajasthan), strategically located near Delhi. Spanning 40,000 square meters, our ISO 9001 and ISO 14001 certified facility houses state-of-the-art machinery capable of producing a wide array of cables, including Low Voltage and High Voltage cables up to 132 KV Voltage Grade.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="history__grid_item text-justify" data-aos="fade-up">We specialize in HT/LT-XLPE/PVC
                            Power,
                            Control, Telecom,
                            Signalling, Axle Counter, Aerial
                            Bunched, Instrumentation, Flexible, Mining, Fire Retardant Low Smoke, and HR
                            Insulated
                            Cables. These find applications across diverse sectors such as Railways,
                            Telecommunications,
                            Automobiles, Power Generation, Steel Plants, Chemicals, Fertilizers, Space Research,
                            Nuclear
                            Power, Petrochemicals, Electronics, Defence, and more.</p>
                        <p class="history__grid_item history__grid_item--half text-justify" data-aos="fade-up">Equipped with
                            the
                            latest technology
                            including a
                            state-of-the-art C.C.V line from M/s
                            Troester, Germany, we ensure superior quality through Dry-Cured/Dry-Cooled and
                            Rotating
                            Caterpillar technologies. Our dedicated team of 1000 professionals, comprising
                            Managers,
                            Technicians, Engineers, and other experts, is committed to delivering excellence in
                            every
                            product.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="history__grid__gallery history__grid_item--half">
                            <img src="{{ asset('storage/assets/images/small-3.png') }}" class="img-fluid" data-aos="fade-up" data-aos-delay="50">
                            <img src="{{ asset('storage/assets/images/small-2.png') }}" class="img-fluid" data-aos="fade-up" data-aos-delay="150">
                            <img src="{{ asset('storage/assets/images/small-4.png') }}" class="img-fluid" data-aos="fade-up" data-aos-delay="250">
                            <img src="{{ asset('storage/assets/images/small-1.png') }}" class="img-fluid" data-aos="fade-up" data-aos-delay="350" alt="Sriram Cables Manufacturing building">
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="history__grid_item history__grid_item--half text-justify" data-aos="fade-up">At Sriram
                            Cables,
                            we uphold rigorous
                            quality and safety
                            standards, continuously improving
                            through stringent Quality Assurance Plans, Procedures, and Work Instructions. Our
                            advanced
                            testing facilities utilize cutting-edge equipment to conduct performance tests
                            according
                            to
                            international standards, ensuring reliability, superiority, and customer
                            satisfaction in
                            every product.</p>

                    </div>

                    <div class="history__grid_item history__grid__image mb-3">
                        <img src="{{ asset('storage/assets/images/medium.png') }}" class="img-fluid" data-aos="fade-up" data-aos-delay="150">
                    </div>
                    <div class="col-md-6">
                        <div class="history__grid_item history__grid_item--half" data-aos="fade-up">
                            <div class="mb-3">
                                <b class="">Empowering Innovation with Premier Global Technologies</b>
                            </div>
                            <p class="mb-5">Our laboratory features state-of-the-art equipment sourced from
                                global leaders:
                            </p>
                            <ul class="mb-5">
                                <li class="mb-3">Haefely of Switzerland provides shielded room solutions and
                                    Partial
                                    Discharge
                                    Detection systems.</li>
                                <li class="mb-3">Hypotonic of USA delivers High Voltage Testing solutions.</li>
                                <li class="mb-3">Mitutoyo of Japan supplies advanced measurement and
                                    instrumentation imagery.
                                </li>
                            </ul>
                            <img src="{{ asset('storage/assets/images/clients.png') }}" class="img-fluid mb-4">
                            <div>
                                <b>We are confident to touch more new milestones in the years to come.</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="history__grid__gallery history__grid_item history__grid_item--half">
                            <img src="{{ asset('storage/assets/images/small-5.png') }}" class="img-fluid" data-aos="fade-up" data-aos-delay="150">
                            <img src="{{ asset('storage/assets/images/small-6.png') }}" class="img-fluid" data-aos="fade-up" data-aos-delay="250">
                            <img src="{{ asset('storage/assets/images/small-7.png') }}" class="img-fluid" data-aos="fade-up" data-aos-delay="350">
                            <img src="{{ asset('storage/assets/images/small-8.png') }}" class="img-fluid" data-aos="fade-up" data-aos-delay="450">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="timeline py-5" id="history">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center highlight highlight--center" data-aos="fade-up">Since 2005</h2>
                <div class="row">
                    <div id="timelineCarousel" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button class="carousel-control-prev" type="button" data-bs-target="#timelineCarousel"
                                data-bs-slide="prev">
                                <svg height="15" viewBox="-111 0 475 475.46667" width="15"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m237.964844 475.464844-237.730469-237.730469 237.730469-237.734375 15.070312 15.066406-222.667968 222.667969 222.667968 222.664063zm0 0" />
                                </svg>
                            </button>
                            <button data-bs-target class="d-none d-md-block"></button>
                            <button data-bs-target class="d-none d-lg-block"></button>
                            <button type="button" data-bs-target="#timelineCarousel" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="2003"></button>
                            <button type="button" data-bs-target="#timelineCarousel" data-bs-slide-to="1"
                                aria-label="2005"></button>
                            <button type="button" data-bs-target="#timelineCarousel" data-bs-slide-to="2"
                                aria-label="2007"></button>
                            <button data-bs-target class="d-none d-md-block"></button>
                            <button data-bs-target class="d-none d-lg-block"></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#timelineCarousel"
                                data-bs-slide="next">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15"
                                    viewBox="0 0 511.949 511.949" style="enable-background:new 0 0 511.949 511.949;"
                                    xml:space="preserve">
                                    <g>
                                        <path
                                            d="M386.235,248.308L140.902,2.975c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76
                                                   l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.053,4.267,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213
                                                   l245.333-245.333C390.395,259.188,390.395,252.468,386.235,248.308z" />
                                    </g>

                                </svg>
                            </button>
                        </div>
                        <div class="carousel-inner mb-5">
                            <div class="carousel-item flex-column flex-md-row active">
                                <div class="col-md-4 col-12 mb-4">
                                    <img src="{{ asset('storage/assets/images/slide-1.png') }}" class="img-fluid" data-aos="fade-up">
                                </div>
                                <div class="col-md-8 col-12" data-aos="fade-up">
                                    <h4>Sriram Cables</h4>
                                    <p class=" text-justify">In 2005, we established our state-of-the-art manufacturing facility in
                                        Chopanki
                                        Industrial Area, Bhiwadi (Rajasthan), strategically located near Delhi.
                                        Spanning
                                        40,000 square meters, our facility is certified with ISO 9001 and ISO
                                        14001
                                        standards, showcasing our commitment to quality and environmental
                                        stewardship.
                                        Equipped with cutting-edge machinery, we specialize in producing Low
                                        Voltage and
                                        High Voltage cables up to 66 KV Voltage Grade, ensuring reliability and
                                        performance
                                        in every product.</p>
                                    <a href="#" class="timeline__readmore">
                                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m4.59 59.41a2 2 0 0 0 2.83 0l24.58-24.58 24.59 24.58a2 2 0 0 0 2.83-2.83l-24.59-24.58 24.58-24.59a2 2 0 0 0 -2.83-2.83l-24.58 24.59-24.59-24.58a2 2 0 0 0 -2.82 2.82l24.58 24.59-24.58 24.59a2 2 0 0 0 0 2.82z" />
                                        </svg>
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item flex-column flex-md-row">
                                <div class="col-md-4 col-12 mb-4">
                                    <img src="{{ asset('storage/assets/images/slide-1.png') }}" class="img-fluid" data-aos="fade-up">
                                </div>
                                <div class="col-md-8 col-12" data-aos="fade-up">
                                    <h4>Sriram Cables</h4>
                                    <p>In 2005, we established our state-of-the-art manufacturing facility in
                                        Chopanki
                                        Industrial Area, Bhiwadi (Rajasthan), strategically located near Delhi.
                                        Spanning
                                        40,000 square meters, our facility is certified with ISO 9001 and ISO
                                        14001
                                        standards, showcasing our commitment to quality and environmental
                                        stewardship.
                                        Equipped with cutting-edge machinery, we specialize in producing Low
                                        Voltage and
                                        High Voltage cables up to 66 KV Voltage Grade, ensuring reliability and
                                        performance
                                        in every product.</p>
                                    <a href="#" class="timeline__readmore">
                                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m4.59 59.41a2 2 0 0 0 2.83 0l24.58-24.58 24.59 24.58a2 2 0 0 0 2.83-2.83l-24.59-24.58 24.58-24.59a2 2 0 0 0 -2.83-2.83l-24.58 24.59-24.59-24.58a2 2 0 0 0 -2.82 2.82l24.58 24.59-24.58 24.59a2 2 0 0 0 0 2.82z" />
                                        </svg>
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item flex-column flex-md-row">
                                <div class="col-md-4 col-12 mb-4">
                                    <img src="{{ asset('storage/assets/images/slide-1.png') }}" class="img-fluid" data-aos="fade-up">
                                </div>
                                <div class="col-md-8 col-12" data-aos="fade-up">
                                    <h4>Sriram Cables</h4>
                                    <p>In 2005, we established our state-of-the-art manufacturing facility in
                                        Chopanki
                                        Industrial Area, Bhiwadi (Rajasthan), strategically located near Delhi.
                                        Spanning
                                        40,000 square meters, our facility is certified with ISO 9001 and ISO
                                        14001
                                        standards, showcasing our commitment to quality and environmental
                                        stewardship.
                                        Equipped with cutting-edge machinery, we specialize in producing Low
                                        Voltage and
                                        High Voltage cables up to 66 KV Voltage Grade, ensuring reliability and
                                        performance
                                        in every product.</p>
                                    <a href="#" class="timeline__readmore">
                                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m4.59 59.41a2 2 0 0 0 2.83 0l24.58-24.58 24.59 24.58a2 2 0 0 0 2.83-2.83l-24.59-24.58 24.58-24.59a2 2 0 0 0 -2.83-2.83l-24.58 24.59-24.59-24.58a2 2 0 0 0 -2.82 2.82l24.58 24.59-24.58 24.59a2 2 0 0 0 0 2.82z" />
                                        </svg>
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="founders" class="founders d-none" style="background-image: url('{{ asset('storage/assets/images/7.png') }}');    background-size: cover;">
    <div class="container py-5">
        <div class="row">
            <div class="col my-5">
                <h2 class="highlight mb-4" data-aos="fade-up">Visionaries of Clean Energy</h2>
                <h5 data-aos="fade-up">Meet the Leaders of Enernew</h5>
                <p data-aos="fade-up">Explore the realm of renewable energy with Ashutosh Garg, the visionary
                    founder of Enernew and driving force behind its groundbreaking initiatives. With an unwavering
                    commitment to sustainability and a passion for innovation, Ashutosh Garg leads Enernew in
                    redefining the clean energy landscape.</p>
                <p data-aos="fade-up">Supporting him is Anil Garg, whose extensive expertise and leadership in
                    renewable energy
                    strategy propel Enernew forward. Together, they navigate the complexities of diverse
                    sectors, delivering impactful solutions and setting new standards in clean energy
                    innovation.</p>
                <p data-aos="fade-up">At the helm of Enernew's strategic initiatives is Sunil Garg, leveraging
                    his profound market
                    insights to steer the company towards achieving net zero emissions. Their collective vision
                    and relentless pursuit of excellence underscore Enernew's mission to drive transformative
                    change in sustainable energy solutions.</p>
            </div>
            <div class="col-12">
                <div class="row mb-5">
                    <div class="col-sm-4 text-center mb-5" data-aos="fade-up">
                        <img src="{{ asset('storage/assets/images/person-1.png') }}" class="img-fluid rounded-3 mb-3 founder-image">
                        <div class="text-center fs-4">
                            Mr. Ashutosh Garg
                        </div>
                        <div class="fs-6 text-center">
                            Vice President (Solar)
                        </div>
                    </div>
                    <div class="col-sm-4 text-center mb-5" data-aos="fade-up">
                        <img src="{{ asset('storage/assets/images/person-2.png') }}" class="img-fluid rounded-3 mb-3 founder-image">
                        <div class="text-center fs-4">
                            Mr. Anil Garg
                        </div>
                        <div class="fs-6 text-center">
                            Vice President (Wind)
                        </div>
                    </div>
                    <div class="col-sm-4 text-center mb-5" data-aos="fade-up">
                        <img src="{{ asset('storage/assets/images/person-3.png') }}" class="img-fluid rounded-3 mb-3 founder-image">
                        <div class="text-center fs-4">
                            Mr. Sunil Garg
                        </div>
                        <div class="fs-6 text-center">
                            Vice President (Water)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vision" id="vision">
    <div class="container my-5">
        <div class="row mb-5">
            <div class="col mt-5">
                <h2 data-aos="fade-up" class="highlight mb-4">Vision, Mission, and Core Values</h2>
                <div data-aos="fade-up">
                    Rooted deeply within our culture are the principles that shape our journey:
                </div>
                <div class="vision__grid my-5">
                    <div class="vision__grid_item" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('storage/assets/images/icon-1.png') }}" alt="Integrity in all business dealings Logo">
                        <div>Embodying integrity in every business interaction</div>
                    </div>
                    <div class="vision__grid_item" data-aos="fade-left" data-aos-delay="200">
                        <img src="{{ asset('storage/assets/images/icon-2.png') }}" alt="Embracing innovation Logo">
                        <div>Embracing innovation and a pragmatic approach</div>
                    </div>
                    <div class="vision__grid_image">
                        <div class="">
                            <img src="{{ asset('storage/assets/images/cross.png') }}" class="img-fluid" data-aos="zoom-in">
                        </div>
                    </div>
                    <div class="vision__grid_item" data-aos="fade-right" data-aos-delay="300">
                        <img src="{{ asset('storage/assets/images/icon-3.png') }}">
                        Upholding the highest ethical and professional standards
                    </div>
                    <div class="vision__grid_item" data-aos="fade-right" data-aos-delay="400">
                        <img src="{{ asset('storage/assets/images/icon-4.png') }}">
                        Cultivating continuous development and growth of our people
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="work_with_us flex-column flex-md-row" id="whyus">
    <div class="bg-1 d-flex justify-content-center p-5 "
        style="background-image: url('{{ asset('storage/assets/images/4.png') }}');    background-size: cover;    background-position: 30px 430px;">
        <div class="align-items-center col-12 col-sm-5 d-flex my-5">
            <h2 class="highlight" data-aos="fade-up">
                Why Choose Us?
            </h2>
        </div>
    </div>
    <div class="bg-2" style="background-image: url('{{ asset('storage/assets/images/bg-2.png') }}');    background-size: cover;">
        <div class="infra py-5 my-5">
            <!-- <img src="https://placehold.co/640x480" class="infra__image"> -->
            <div class="infra__item_wrapper">
                <div class="infra__item" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('storage/assets/images/why-1.png') }}" class="img-fluid">
                    <div class="text-white">Pioneering Green Energy Innovation</div>
                </div>                
                <div class="infra__item" data-aos="fade-up" data-aos-delay="600">
                    <img src="{{ asset('storage/assets/images/why-6.png') }}" class="img-fluid">
                    <div class="text-white">Comprehensive Excellence in Project Delivery</div>
                </div>                

                <div class="infra__item" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('storage/assets/images/why-2.png') }}" class="img-fluid">
                    <div class="text-white">Relentless Pursuit of Net-Zero Emissions</div>
                </div>
                <div class="infra__item" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('storage/assets/images/why-3.png') }}" class="img-fluid">
                    <div class="text-white">Ready-to-Implement Infrastructure</div>
                </div>
                <div class="infra__item" data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('storage/assets/images/why-4.png') }}" class="img-fluid">
                    <div class="text-white">Legacy of Expertise: Sriram Cables’ Proven Team</div>
                </div>
                <!-- <div class="infra__item" data-aos="fade-up" data-aos-delay="500">
                    <img src="{{ asset('storage/assets/images/why-5.png') }}" class="img-fluid">
                    <div class="text-white">Dedicated Customer Support</div>
                </div> -->

            </div>
        </div>
    </div>
</div>
@endsection


@section("scripts")
<script>
    
</script>
@endsection