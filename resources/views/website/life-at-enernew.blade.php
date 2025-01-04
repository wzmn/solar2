@section("title", "Life at Enernew – Embrace Innovation & Sustainability")

@extends ("layouts.website")


@section("header")
<div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
  <h1 class="text-white">Life @ Enernew</h1>
  <div class="hero__content text-white mb-3">
    Home > Career > Life @ Enernew
  </div>
</div>
@endsection

@section("content")
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
<div class="slider-component pb-5 pt-3">
  <div class="slider mb-5">
    <h2 class="text-center mb-5" data-aos="fade-up">
      Diwali Celebration
    </h2>
    <div class="swiper-container swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/life-enernew/Diwali 1.jpeg') }}" alt="Enernew Diwali Celebration Photo" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/life-enernew/Diwali 2.jpeg') }}" alt="Enernew Diwali Celebration Group Photo" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/life-enernew/Diwali 3.jpeg') }}" alt="Enernew Diwali Celebration" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/life-enernew/Diwali 4.jpeg') }}" alt="Enernew Diwali Celebration Group Photo" />
        </div>
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
<div class="slider-component pb-5 pt-3">
  <div class="slider mb-5">
    <h2 class="text-center mb-5" data-aos="fade-up">
      REI - Expo
    </h2>
    <div class="swiper-container swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/life-enernew/Event 1.jpg') }}" alt="Renewable Energy India Expo Enernew Team" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/life-enernew/Event 2.jpg') }}" alt="Renewable Energy India Event photo" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/life-enernew/Event 3.jpg') }}" alt="Renewable Energy India Expo Enernew Team" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/life-enernew/Event 4.jpg') }}" alt="Renewable Energy India Event photo" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/life-enernew/Event 5.jpg') }}" alt="Renewable Energy India Expo Enernew Team" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/life-enernew/Event 6.jpg') }}" alt="Renewable Energy India Event photo" />
        </div>
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
<div class="slider-component pb-5 pt-3">
  <div class="slider mb-5">
    <h2 class="text-center mb-5" data-aos="fade-up">
      Yoga Day Celebration
    </h2>
    <div class="swiper-container swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/yoga-1.png') }}" alt="Enernew Yoga Day Celebration" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/yoga-2.png') }}" alt="Enernew Yoga Day Celebration" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/yoga-3.png') }}" alt="Enernew Yoga Day Celebration" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/yoga-1.png') }}" alt="Enernew Yoga Day Celebration" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/yoga-2.png') }}" alt="Enernew Yoga Day Celebration" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/images/yoga-3.png') }}" alt="Enernew Yoga Day Celebration" />
        </div>
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

@endsection

@section('scripts')
<script src="{{ asset('assets/node_modules/swiper/swiper-bundle.min.js') }}"></script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    window.addEventListener("resize", scrollBarWidth);


    var $swiperSelector = document.querySelectorAll(".swiper-container");
    $swiperSelector.forEach(function (elem, index) {
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
          beforeInit: function () {
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