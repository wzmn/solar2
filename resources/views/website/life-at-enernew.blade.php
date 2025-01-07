@section('title', 'Life at Enernew – Embrace Innovation & Sustainability')

@extends ("layouts.website")


@section('header')
    <div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
        <h1 class="text-white">Life @ Enernew</h1>
        <div class="hero__content text-white mb-3">
            Home > Career > Life @ Enernew
        </div>
    </div>
@endsection

@section('content')
    <div class="rich-text-component pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-up" class="highlight text-center highlight--center mb-4">
                        Life @Enernew
                    </h1>
                    <div class="content" data-aos="fade-up">
                        {!! $seo->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @forelse ($seo->blocks as $item)
        @if ($item->type == 'Slider')
            <div class="slider-component pb-5 pt-3">
                <div class="slider mb-5">
                    <h2 class="text-center mb-5" data-aos="fade-up">
                        {{ $item->name }}
                    </h2>
                    <div class="swiper-container swiper">
                        <div class="swiper-wrapper">
                            @forelse (json_decode($item->data) as $section)
                                <div class="swiper-slide">
                                    <img src="{{ $section->content }}"
                                        alt="Slider Image" />
                                </div>
                            @empty
                                <p>No data found</p>
                            @endforelse
                        </div>
                        <div class="nav-box">
                            <!-- pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- scrollbar -->
                            <div class="swiper-scrollbar"></div>

                            <!-- buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @empty
        <p>No blocks found</p>
    @endforelse
@endsection

@section('scripts')
    <script src="{{ asset('assets/node_modules/swiper/swiper-bundle.min.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            window.addEventListener("resize", scrollBarWidth);


            var $swiperSelector = document.querySelectorAll(".swiper-container");
            $swiperSelector.forEach(function(elem, index) {
                var $this = elem;
                $this.classList.add("swiper-slider-" + index);
                console.log("swiper-slider-" + index)
                var dragSize = 86;
                var swiper = new Swiper(".swiper-slider-" + index, {
                    direction: "horizontal",
                    loop: true,
                    freeMode: false,
                    spaceBetween: 20,
                    breakpoints: {
                        1200: {
                            slidesPerView: 3,
                        },
                        768: {
                            slidesPerView: 2,
                        },
                        300: {
                            slidesPerView: 1,
                        },
                    },
                    pagination: {
                        el: ".swiper-pagination",
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    // scrollbar: {
                    //   el: ".swiper-scrollbar",
                    //   draggable: false,
                    //   //   dragSize: dragSize,
                    // },
                    on: {
                        beforeInit: function() {
                            dragSize =
                                845 / this.wrapperEl.querySelectorAll(".swiper-slide").length;
                        },
                    },
                });
            });

            function scrollBarWidth() {
                if (window.innerWidth < 768) {
                    return "250px";
                } else if (window.innerWidth < 1200 && window.innerWidth > 767) {
                    return "600px";
                } else {
                    return "845px";
                }
            }
        })
    </script>
@endsection
