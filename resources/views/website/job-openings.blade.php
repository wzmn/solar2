@section("title", "Job Openings – Start Your Career in Renewable Energy")

@extends("layouts.website")


@section("header")
<div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
  <h1 class="text-white">Job Openings</h1>
  <div class="hero__content text-white mb-3">
    Home > Career > Job Openings
  </div>
</div>
@endsection

@section("content")
<div class="opening-component pb-5 pt-5 career" style="background: url('{{ asset('assets/images/history-bg.png') }}') no-repeat;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        {!! $seo->content !!}
        </div>
        <div class="accordion mt-5" id="accordion">
          @if (count($jobs)>0)
            @foreach ($jobs as $job)
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button fw-semibold {{ $loop->first ? '' : 'collapsed'}}" type="button" data-bs-toggle="collapse"
                    data-bs-target="#accord-{{$loop->index}}" aria-expanded="{{ $loop->first ? 'true' : 'false'}}" aria-controls="accord-{{$loop->index}}">
                    {{$job->title}}
                  </button>
                </h2>
                <div id="accord-{{$loop->index}}" class="accordion-collapse collapse {{ $loop->first ? 'show' : ''}}" data-bs-parent="#accordion">
                  <div class="accordion-body">
                    {!! $job->description !!}
                    <div>
                      <a class="btn bg-orange px-5 {{!$job->apply_link ? 'disabled' : ''}}" href="{{$job->apply_link}}">
                        Apply
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @else
              <h4>There are no Jobs to display</h4>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

