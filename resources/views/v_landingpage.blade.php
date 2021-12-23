@extends('layouts.apps')

@push('after-style')
<link rel="stylesheet" href="{{ asset('css/aos.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
@endpush

@section('header')
<x-header></x-header>
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
  <button class="scrollToTopBtn"><i class="fas fa-chevron-up"></i></button>
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 pt-2 mb-10 pt-lg-0 order-2 order-lg-1 d-flex justify-content-center">
            <div data-aos="zoom-out" data-aos-delay="400" class="text-center text-lg-start mt-1 p-3 text-hero">
              <h1>SI-ALDO</h1>
              <h2>{{ trans('frontend.si-aldo') }}</h2>
              <h3>{{ trans('frontend.banjarmasin') }}</h3>
              <div class="text-center text-lg-start mb-10">
                <a href="#cta" class="btn btn-explore first scrollto rounded-pill mt-3 px-4 py-3 d-inline-block">{{ trans('frontend.explore_now') }}</a>
              </div>
            </div>
        </div>
        <div class="col-12 col-lg-7 order-1 order-lg-2 d-flex align-items-center">
           <img src="{{ asset('img/hero.png') }}" class="img-fluid animated hero-img" alt="banjarmasin smart city" data-aos="zoom-out" data-aos-delay="600">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->


<section id="cta">
  <div id="particles-js"></div>
    <div class="container text-center" data-aos="fade-up">
      <div class="section-header">
        <h3>{{ trans('frontend.digital_map') }}</h3>
      </div> 
      <div class="cta-img" data-tilt>
          <img src="{{  asset('img/landingpage/macbook.png') }}" style="width:35%" alt="peta-digital" class="img-fluid">
      </div>
      <div class="text-center my-20">
        <a href="{{ route('webmap') }}" class="btn-lg btn-success first rounded-full my-3 d-inline-block"><i class="fas fa-map"></i>&nbsp;{{ trans('frontend.open_map') }}</a>
      </div>         
    </div>
</section>

<section id="facts">
    <div class="container text-center" data-aos="fade-up">
      <header class="facts-header wow fadeInUp text-black">
        <em><h3>{{ trans('frontend.features') }}</h3></em>
      </header>

      <div class="row">
        <div class="col-md-4 box" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('img/landingpage/spasial.png') }}" alt="spasial" class="img-fluid zoom-image" />
          <h4 class="title">{{ trans('frontend.feature1') }}</h4>
          <p class="description">{{ trans('frontend.feature1_text') }}</p>
        </div>
        <div class="col-md-4 box" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('img/landingpage/data-inventory.png') }}" alt="inventory" class="img-fluid zoom-image" />
          <h4 class="title">{{ trans('frontend.feature2') }}</h4>
          <p class="description">{{ trans('frontend.feature2_text') }}</p>
        </div>
        <div class="col-md-4 box" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('img/landingpage/dashboard.png') }}" alt="visualize-data" class="img-fluid zoom-image" />
          <h4 class="title">{{ trans('frontend.feature3') }}</h4>
          <p class="description">{{ trans('frontend.feature3_text') }}</p>
        </div>
        <div class="col-md-4 box" data-aos="fade-up" data-aos-delay="300">
          <a href="{{ route('download') }}">
            <img src="{{ asset('img/landingpage/document.png') }}" alt="download-data" class="img-fluid zoom-image" />
          </a>          
          <h4 class="title">{{ trans('frontend.feature4') }}</h4>
          <p class="description">{{ trans('frontend.feature4_text') }}</p>
        </div>
        <div class="col-md-4 box" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('img/landingpage/route.png') }}" alt="route" class="img-fluid zoom-image" />
          <h4 class="title">{{ trans('frontend.feature5') }}</h4>
          <p class="description">{{ trans('frontend.feature5_text') }}</p>
        </div>
        <div class="col-md-4 box" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('img/landingpage/dynamic.png') }}" alt="route" class="img-fluid zoom-image" />
          <h4 class="title">{{ trans('frontend.feature6') }}</h4>
          <p class="description">{{ trans('frontend.feature6_text') }}</p>
        </div>
      </div>
    </div>
</section>

<section id="gallery">
  <div class="container text-center mb-4" data-aos="fade-up">
      <header class="facts-header wow fadeInUp text-black">
        <em><h3>{{ trans('frontend.gallery') }}</h3></em>
      </header>


  <div class="overflow-x-hidden px-4" id="carousel">
    <div class="container mx-auto"></div>
    <div class="d-flex -mx-4 flex-row relative owl-carousel owl-theme owl-loaded">
      <!-- START: GALLERY ROW 1 -->
      @foreach ($recommendations as $data)
      <div class="px-2 relative card group">
        <div
          class="rounded-xl overflow-hidden card-shadow relative" style="width: 300px; height: 250px">
          <div
            class="absolute opacity-0 group-hover:opacity-100 transition duration-200 d-flex items-center justify-content-center w-100 h-100 bg-black bg-opacity-35">
            <div
              class="bg-white text-black rounded-full d-flex items-center w-16 h-16 justify-content-center">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
          <img
            src="{{ Storage::url($data->url) }}"
            alt=""
            class="w-100 h-100 object-cover object-center"
          />
        </div>
        <a href="{{ url('/details') }}/{{ $data->build_id }}" class="stretched-link">
          <!-- fake children -->
        </a>
      </div>
      @endforeach
      <!-- END: GALLERY ROW 1 -->

    </div>
    <!-- </div> -->
  </div>
  </div>
</section>
<!-- END: JUST ARRIVED -->

@endsection

@section('faq')

@include('v_faq')

@endsection


@section('footer')
@include('components.frontend.footer')
@endsection

@push('after-script')
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/particle-app.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script>
          AOS.init();
        </script>
        <script src="{{ asset('js/glightbox.min.js') }}"></script>
        <script src="{{ asset('js/tilt.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>

        $('.owl-carousel').owlCarousel({
            nav:true,
            loop: true,
            autoWidth: true,
            lazyLoad: true,
            autoplay: true,
            autoplayHoverPause: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })

          // We select the element we want to target
          var target = document.querySelector("footer");

          var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
          var rootElement = document.documentElement;

          // Next we want to create a function that will be called when that element is intersected
          function callback(entries, observer) {
            // The callback will return an array of entries, even if you are only observing a single item
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                // Show button
                scrollToTopBtn.classList.add("showBtn");
              } else {
                // Hide button
                scrollToTopBtn.classList.remove("showBtn");
              }
            });
          }

          function scrollToTop() {
            rootElement.scrollTo({
              top: 0,
              behavior: "smooth"
            });
          }
          scrollToTopBtn.addEventListener("click", scrollToTop);

          // Next we instantiate the observer with the function we created above. This takes an optional configuration
          // object that we will use in the other examples.
          let observer = new IntersectionObserver(callback);
          // Finally start observing the target element
          observer.observe(target);
          
        </script>
@endpush