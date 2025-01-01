@section('title', 'Utility Scale Solar Power Park Solutions & Development')

@extends('layouts.website')

@section('header')
    <div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
        <h1 class="text-white" data-aos="fade-right">Utility Scale Solar Power Park Solutions</h1>
        <div class="hero__content text-white mb-3" data-aos="fade-right" data-aos-delay="200">
            Home > Solutions > Utility Scale Solar Solutions
        </div>
    </div>
@endsection

@section('content')
    <div class="py-5" style="background-image: url('./assets/images/4.png');    background-size: cover;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-5" data-aos="fade-up">
                    <div class="highlight mb-4 fs-4">
                        Integrated
                        <h2 class="bold">Utility Scale Solar Solutions</h2>
                        for Captive Customers
                    </div>
                </div>
                <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    {!! $seo->content !!}
                </div>
            </div>
            <div class="row bg-white rounded-3 p-5">
                @forelse ($seo->blocks as $item)
                    @if ($item->type == "Content")
                      @forelse (json_decode($item->data) as $section)
                          @if ($section->type == 'text')
                              <div data-aos="fade-up" class="col-12 mb-5">
                                  <h2 class="highlight highlight--center mb-5">
                                      {{ $section->content }}
                                  </h2>
                              </div>
                          @endif
                          @if ($section->type == 'image')
                              <div data-aos="fade-up" class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
                                  <img class="rounded-3" src="{{ $section->content }}" />
                              </div>
                          @endif
                          @if ($section->type == 'wysiwyg')
                              <div data-aos="fade-up" class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5"
                                  data-aos-delay="200">
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
    @foreach ($seo->blocks as $item)
        @if ($item->type === 'CTA')
            <div class="py-5 cta"
                style="background-image: url('{{ json_decode($item->data)[0]->content }}'); background-size: cover;">
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
