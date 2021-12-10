@extends('layouts.apps')

@push('after-style')
<link rel="stylesheet" href="{{ asset('css/aos.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />
@endpush

@section('header')
<x-header></x-header>
@endsection

@section('hero')
<!-- ======= Hero Section ======= -->
<section id="hero">
  <button class="scrollToTopBtn"><i class="fas fa-chevron-up"></i></button>
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 pt-2 pt-lg-0 order-2 order-lg-1 d-flex justify-content-center">
            <div data-aos="zoom-out" data-aos-delay="400" class="text-center text-lg-start mt-1 ml-5 p-3 text-hero">
              <h1>SI-ALDO</h1>
              <h2>Sistem Informasi Air Limbah Domestik</h2>
              <h3>Kota Banjarmasin</h3>
              <div class="text-center text-lg-start">
                <a href="#" class="btn btn-explore first scrollto rounded-pill mt-3 px-4 py-3 d-inline-block">Jelajahi Sekarang</a>
              </div>
            </div>
        </div>
        <div class="col-12 col-lg-7 order-1 order-lg-2 d-flex align-items-center">
           <img src="{{ asset('img/hero.png') }}" class="img-fluid animated hero-img" alt="banjarmasin smart city" data-aos="zoom-out" data-aos-delay="600">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->
@endsection

@section('content')



@endsection


@section('footer')
@include('components.frontend.footer')
@endsection

@push('after-script')
    <script src="{{ asset('js/purecounter.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script>
          AOS.init();
        </script>
        <script src="{{ asset('js/glightbox.min.js') }}"></script>
        <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
        <script>
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