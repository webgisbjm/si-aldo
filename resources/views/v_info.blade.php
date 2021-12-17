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

@section('content')
<section id="gallery" class="gallery">
  <div class="container">
    <div class="section-title" data-aos="fade-right" data-aos-delay="100">
      <h2>Informasi Penanganan Air Limbah Domestik</h2>
      <p>INFOGRAFIS</p>
    </div>

  <div class="row no-gutters" data-aos="fade-left">

          @foreach ($info as $data)
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="{{ url('') }}{{ Storage::url('') }}{{ $data->idm }}/{{ $data->file_name }}" class="gallery-lightbox">
                {!! $data->content !!}
              </a>
            </div>
          </div>
          @endforeach
    
  </div>
</div>
</section><!-- End Gallery Section -->

@include('components.frontend.modal')
@endsection


@section('footer')
@include('components.frontend.footer')
@endsection

@push('after-script')
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/glightbox.min.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script>
  AOS.init();

 const galleryLightbox = GLightbox({
    selector: '.gallery-lightbox',
    touchNavigation: true,
    loop: true,
    openEffect: 'zoom',
    closeEffect: 'fade',
    cssEfects: {
      // This are some of the animations included, no need to overwrite
      fade: { in: 'fadeIn', out: 'fadeOut' },
      zoom: { in: 'zoomIn', out: 'zoomOut' }
    },
  });
</script>
@endpush