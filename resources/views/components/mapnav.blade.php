<header class="h-100 w-100 bg-white" style="box-sizing: border-box;">
    {{-- <!-- Navbar to show product name on mobile devices -->
    <nav class="navbar navbar-dark bg-dark navbar-expand d-md-none d-lg-none d-xl-none">
        <div class="container-fluid">
            
            <a class="navbar-brand" href="/">SIGambut</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-info-circle-fill"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}

    <!-- Navbar -->
    <div class="header-7-1" style="font-family: 'Poppins', sans-serif">
        <nav class="navbar navbar-expand-lg navbar-light" style="padding-top: 0.5rem; padding-bottom: 0.5rem">
            <div class="container-xxl d-flex gap-1">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/si-aldo.png') }}"
                        alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3 mb-3">
                        <li class="nav-item">
                            <a class="nav-link px-md-3" aria-current="page" href="{{ url("/") }}">{{ trans('frontend.home') }}</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link px-md-3 {{ request()->is('webmap') ? 'active' : '' }}" href={{ url("/webmap") }}>WebGIS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-decoration-none" href="#"
                                data-bs-toggle="dropdown">
                                Tools
                            </a>
                            <ul class="dropdown-menu nav-dropdown">
                                <li>
                                    <div
                                        class="dropdown-header-hover dropdown-item h-100 d-flex py-2 ps-2 align-items-center justify-content-start text-start">
                                        <a href="#" class="text-decoration-none" id="list-btn" data-tool="data-list" data-target=".navbar-collapse.in">Data Sarana</a>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="dropdown-header-hover dropdown-item h-100 d-flex py-2 ps-2 align-items-center justify-content-start text-start">
                                        <a href="#" class="text-decoration-none">{{ trans('frontend.manual-book') }}</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Kecamatan -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-decoration-none" href="#"
                                data-bs-toggle="dropdown">
                                Kecamatan
                            </a>
                            <ul class="dropdown-menu nav-dropdown">
                              @foreach($kecamatan as $data)
                              <li>
                                <div
                                    class="dropdown-header-hover dropdown-item h-100 d-flex py-2 ps-2 align-items-center justify-content-start text-start">
                                    <a href="/webmap/{{ $data->id }}" class="text-decoration-none" id="kecamatan{{ $data->id }}" data-tool="data-list" data-target=".navbar-collapse.in">{{ $data->name }}</a>
                                </div>
                            </li>
                              @endforeach
                            </ul>
                        </li>
                    </ul>

                    {{-- <div class="navbar-form ms-0 d-flex" role="search">
                        <span class="form-group has-feedback">
                          <input id="searchbox" type="search" class="form-control" placeholder="{{ trans('global.search') }}..."/>
                        </span>
                          <button id="search-button" type="button" class="btn btn-sm btn-primary">
                            <i class="fas fa-search"></i>
                          </button>
                    </div> --}}
                    

                




                    <!-- Right navbar links -->
                    @if(count(config('panel.available_languages', [])) > 1)
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown text-decoration-none">
                            <a class="nav-link" data-toggle="dropdown" href="#" data-bs-toggle="dropdown">
                                <i class="fas fa-globe" aria-hidden="true"></i>&nbsp;{{ strtoupper(app()->getLocale()) }}
                            </a>
                            <div class="dropdown-menu dropdown-header-hover dropdown-menu-right">
                                @foreach(config('panel.available_languages') as $langLocale => $langName)
                                    <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                    @endif
                </div>
            </div>
        </nav>
    </div>
    <!-- Layer control (for desktop) -->
    <div class="parent-container d-none d-lg-block" id="parentContainer">
        <!-- Injected by program -->
    </div>
    <!-- modal for basemap -->
    <div class="modal fade" id="basemapModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="basemapModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="basemapModalLabel">Pilih basemap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row row-cols-2 text-center">
                            <a href="#" id="basicMap" class="nav-link text-center">
                                <figure class="figure">
                                    <img src="">
                                    <figcaption class="figure-caption">Peta Satelit</figcaption>
                                </figure>
                            </a>
                            <a href="#" id="topoMap" class="nav-link text-center">
                                <figure class="figure">
                                    <img src="">
                                    <figcaption class="figure-caption">Peta Topografi</figcaption>
                                </figure>
                            </a>
                            <a href="#" id="greyMap" class="nav-link text-center">
                                <figure class="figure">
                                    <img src="">
                                    <figcaption class="figure-caption">Peta Topografi</figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>