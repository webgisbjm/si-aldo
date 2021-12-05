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

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
             <div data-aos="zoom-out" class="text-center text-lg-start mt-5 ml-5 p-3">
              <h1>SI-ALDO</h1>
              <h2>Sistem Informasi Pengelolaan Air Limbah Domestik</h2>
              <h2>Kota Banjarmasin</h2>
              <div class="text-center text-lg-start">
                <a href="#" class="btn btn-explore first scrollto rounded-pill mt-3 px-4 py-3 d-inline-block">Jelajahi Sekarang</a>
              </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2">
           <img src="#" class="img-fluid animated hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
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
@endpush