@section('title', 'Expert Solar Asset Management Services by Enernew')

@extends('layouts.website')

@section('header')
    <div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
        <h1 class="text-white" data-aos="fade-right">Solar Asset Management Services</h1>
        <div class="hero__content text-white mb-3" data-aos="fade-right" data-aos-delay="200">
            Home > Solutions > Solar Asset Management Services
        </div>
    </div>
@endsection

@section('content')
    <div class="py-5 asset-management" style="background-image: url('./assets/images/4.png');    background-size: cover;">
        <div class="container my-5">
            <div class="row mb-5">
                <div class="col-12 col-md-5" data-aos="fade-up">
                    <div class="highlight mb-4 fs-4">
                        Holistic
                        <h2 class="bold">Asset Management Services</h2>
                        for Optimal Performance
                    </div>
                </div>
                <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <p data-aos="fade-up">{!! $seo->content !!}</p>
                </div>
            </div>
        </div>
    </div>


    @foreach ($seo->blocks as $item)
        @if ($item->type === 'Section 1')
            <div class="container">
                <div class="row">
                    <div class="col py-5">
                        <h2 class="highlight highlight--center mb-5" data-aos="fade-up">
                            {{ json_decode($item->data)[0]->content }}</h2>
                        <p data-aos="fade-up" data-aos-delay="200">{{ json_decode($item->data)[1]->content }}</p>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    <div class="py-5 cta"
        style="background-image: url('{{ asset('assets/images/asset-cta.png') }}');    background-size: cover;">
        <div class="container">
            <div class="row justify-content-center py-5">
                @forelse ($seo->blocks as $item)
                    @if ($item->type == 'Cards')
                        <?php $card = json_decode($item->data); ?>
                        <div class="col-12 col-md-4 d-flex justify-content-center mb-5" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="card card--asset">
                                <div class="card-body d-flex flex-column justify-content-center p-5">
                                    <h5 class="card-title mb-5">{{ $card[0]->content }}</h5>
                                    <p class="card-text">{{ $card[1]->content }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <p>No blocks found</p>
                @endforelse
            </div>
        </div>
    </div>
    @foreach ($seo->blocks as $item)
        @if ($item->type === 'Section 2')
            <div class="container">
                <div class="row py-5">
                    <div class="offset-md-3 col-12 col-md-5 py-5 text-center" data-aos="fade-up">
                        <i class="lh-lg">{{ json_decode($item->data)[0]->content }}</i>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    <div class="pb-5" style="background-image: url('{{ asset('assets/images/7.png') }}');background-size: cover;">
        <div class="container">
            @foreach ($seo->blocks as $item)
                @if ($item->type === 'Section 3')
                    <div class="row p-5">
                        <div class="col-12 mb-5">
                            <h2 class="highlight highlight--center mb-5" data-aos="fade-up">
                                {{ json_decode($item->data)[0]->content }}
                            </h2>
                            <p class="text-center" data-aos="fade-up" data-aos-delay="200">
                                {{ json_decode($item->data)[1]->content }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="row bg-white rounded-3 p-5">
                @forelse ($seo->blocks as $item)
                    @if ($item->type == 'Content')
                        @forelse (json_decode($item->data) as $section)
                            @if ($section->type == 'text')
                                <div data-aos="fade-up" class="col-12 mb-5">
                                    <h2 class="highlight highlight--center mb-5">
                                        {{ $section->content }}
                                    </h2>
                                </div>
                            @endif
                            @if ($section->type == 'image')
                                <div data-aos="fade-up"
                                    class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
                                    <img class="rounded-3 py-5" src="{{ $section->content }}"
                                        alt="Routine inspections and maintenance checks">
                                </div>
                            @endif
                            @if ($section->type == 'wysiwyg')
                                <div data-aos="fade-up" data-aos-delay="200"
                                    class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
                                    {!! $section->content !!}
                                </div>
                            @endif
                        @empty
                            <p>No data found</p>
                        @endforelse
                    @endif
                @empty
                    <p>No blocks found</p>
                @endforelse

                {{-- <div data-aos="fade-up" data-aos-delay="200"
                    class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
                    <h4 class="mb-4">Proactive Maintenance: </h4>
                    <p>Routine inspections and maintenance checks are conducted to identify potential issues before they
                        escalate, safeguarding continuous operation and extending asset longevity. Our proactive approach
                        ensures that minor concerns are addressed swiftly, preventing costly repairs and avoiding unexpected
                        downtime. By maintaining a regular maintenance schedule, we help our clients maximize the return on
                        their investment and ensure the long-term reliability of their solar assets.</p>
                </div>
                <div class="d-flex flex-column-reverse flex-md-row gap-4">
                    <div data-aos="fade-up" class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
                        <h4 class="mb-4">Real-Time Tracking Technology: </h4>
                        <p>We leverage cutting-edge technology to continuously monitor the park environment, facilitating
                            immediate responses to any anomalies and enhancing overall safety and security. This real-time
                            data allows us to anticipate potential disruptions and take corrective action before they impact
                            performance. Our integrated monitoring systems also provide stakeholders with instant access to
                            critical information, ensuring transparency and fostering confidence in the operational
                            integrity of our solar parks.</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200"
                        class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
                        <img class="rounded-3 py-5" src="{{ asset('assets/images/asset-2.png') }}"
                            alt="Real-Time Tracking Technology">
                    </div>
                </div>
                <div data-aos="fade-up" class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
                    <img class="rounded-3 py-5" src="{{ asset('assets/images/asset-3.png') }}"
                        alt="Emergency Response Capabilities">
                </div>
                <div data-aos="fade-up" data-aos-delay="200"
                    class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
                    <h4 class="mb-4">Emergency Response Capabilities: </h4>
                    <p>Our team is equipped to handle emergencies with precision, ensuring minimal disruption to energy
                        production and protecting valuable assets. With well-defined protocols and rapid deployment
                        strategies, we can quickly address any incident, minimizing potential damage and ensuring the safety
                        of all personnel on-site. Additionally, our continuous training programs ensure that our emergency
                        response teams are always prepared to act swiftly and effectively, maintaining the highest standards
                        of operational resilience.</p>
                </div> --}}
            </div>
        </div>
    </div>
    @foreach ($seo->blocks as $item)
        @if ($item->type === 'CTA')
            <div class="py-5 cta"
                style="background-image: url('{{ json_decode($item->data)[0]->content }}'); background-position-y: bottom;background-size: cover;">
                <div class="container">
                    <div class="row bg-white rounded-3 justify-content-center py-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-md-5 col text-center" data-aos="fade-up" data-aos-delay="200">
                            <i>{{ json_decode($item->data)[1]->content }}</i>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection
