@section('title', 'B2B Solar Energy Solutions & Expert Solar System Installation')

@extends('layouts.website')

@section('header')
    <div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
        <h1 class="text-white" data-aos="fade-right">B2B Solar Solutions</h1>
        <div class="hero__content text-white mb-3" data-aos="fade-right" data-aos-delay="200">
            Home > Solutions > B2B Solar Solutions
        </div>
    </div>
@endsection

@section('content')
    <div class="py-5" style="background-image: url('./assets/images/4.png');    background-size: cover;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-5">
                    <div class="highlight mb-4 fs-4" data-aos="fade-up">
                        Comprehensive
                        <h2 class="bold">B2B Solar Solutions </h2>
                        for Your Business Success
                    </div>
                </div>
                <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    {!! $seo->content !!}
                </div>
            </div>
            <div class="row bg-white rounded-3 p-5" data-aos="fade-up">
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
                                <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
                                    <img class="rounded-3" src="{{ $section->content }}" alt="Rooftop Solar Solutions">
                                </div>
                            @endif
                            @if ($section->type == 'wysiwyg')
                                <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5"
                                    data-aos="fade-up" data-aos-delay="200">
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
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-5">
            <div class="col">
                <h2 class="highlight highlight--center mb-5" data-aos="fade-up">
                    Custom Solar Solutions for Design and Execution
                </h2>
            </div>
            <div class="col-12">
                <div class="row">
                    @forelse ($seo->blocks as $item)
                        @if ($item->type == 'Cards')
                            <?php $card = json_decode($item->data); ?>
                            <div class="col-md-3 col-12 solution_card" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ $card[0]->content }}" class="img-fluid rounded-3 mb-5">
                                <h4 class="mb-4">{{ $card[1]->content }}</h4>
                                <p class="text-justify">{!! $card[2]->content !!}</p>
                            </div>
                        @endif
                    @empty
                        <p>No blocks found</p>
                    @endforelse
                </div>
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
