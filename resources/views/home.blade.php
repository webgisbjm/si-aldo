@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6"> <!--add class main-header-->
                   <h2 class="text-uppercase">{{ trans('global.dashboard') }}</h2>
                    <h6 class="mb-0">ADMIN PANEL</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">     
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#"><i class="pe-7s-home"></i></a></li>
                      <li class="breadcrumb-item">Admin</li>
                      <li class="breadcrumb-item active">{{ trans('global.dashboard') }}</li>
                    </ol>
                </div> <!--breadcrumb-->
            </div> <!--row-->
        </div> <!--page header-->
    </div> <!--container-fluid-->

                <div class="card-body">

                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                        <!-- Container-fluid starts-->
                        <div class="container-fluid general-widget">
                            <div class="row">
                                <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6 mb-5">
                                    <div class="card gradient-primary o-hidden">
                                        <div class="b-r-4 card-body">
                                            <div class="media static-top-widget">
                                                <div class="align-self-center text-center"><i class="fas fa-user-shield" style="font-size: 28px;"></i></div>
                                                <div class="media-body">
                                                    <span class="m-0 text-white text-center">{{ $settings1['chart_title'] }}</span>
                                                    <h4 class="mb-0 counter">{{ number_format($settings1['total_number']) }}</h4><i class="fas fa-user-shield icon-bg" style="font-size: 75px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6 mb-5">
                                    <div class="card gradient-secondary o-hidden">
                                        <div class="b-r-4 card-body">
                                            <div class="media static-top-widget">
                                                <div class="align-self-center text-center"><i class="fas fa-user-check" style="font-size: 28px;"></i></div>
                                                <div class="media-body">
                                                    <span class="m-0 text-white text-center">{{ $settings2['chart_title'] }}</span>
                                                    <h4 class="mb-0 counter">{{ number_format($settings2['total_number']) }}</h4><i class="fas fa-user-check icon-bg" style="font-size: 75px;"></i>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6 mb-5">
                                    <div class="card gradient-warning o-hidden">
                                        <div class="b-r-4 card-body">
                                            <div class="media static-top-widget">
                                                <div class="align-self-center text-center text-white">
                                                    <i class="fas fa-user-times" style="font-size: 28px;"></i>
                                                </div>
                                                <div class="media-body">
                                                    <span class="m-0 text-white">{{ $settings3['chart_title'] }}</span>
                                                    <h4 class="mb-0 counter text-white">{{ number_format($settings3['total_number']) }}</h4><i class="fas fa-user-times icon-bg text-white" style="font-size: 75px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6 mb-5">
                                    <div class="card gradient-info o-hidden">
                                        <div class="b-r-4 card-body">
                                            <div class="media static-top-widget">
                                                <div class="align-self-center text-center text-white">
                                                    <i class="far fa-map" style="font-size: 28px;"></i>
                                                </div>
                                                <div class="media-body">
                                                    <span class="m-0 text-white">Total Kelurahan</span>
                                                    <h4 class="mb-0 counter text-white">52</h4><i class="far fa-map icon-bg text-white" style="font-size: 75px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="{{ $chart4->options['column_class'] }} p-2" id="myChart">
                                    <h3 class="text-center">{!! $chart4->options['chart_title'] !!}</h3>
                                    {!! $chart4->renderHtml() !!}
                                </div>
                                
                                <div class="{{ $chart5->options['column_class'] }} p-2">
                                    <h3 class="text-center">{!! $chart5->options['chart_title'] !!}</h3>
                                    {!! $chart5->renderHtml() !!}
                                </div>
                                <div class="{{ $chart6->options['column_class'] }}">
                                    <h3>{!! $chart6->options['chart_title'] !!}</h3>
                                    {!! $chart6->renderHtml() !!}
                                </div>

                        {{-- Widget - latest entries --}}
                        <div class="{{ $settings7['column_class'] }}" style="overflow-x: auto;">
                            <h3>{{ $settings7['chart_title'] }}</h3>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        @foreach($settings7['fields'] as $key => $value)
                                            <th>
                                                {{ trans(sprintf('cruds.%s.fields.%s', $settings7['translation_key'] ?? 'pleaseUpdateWidget', $key)) }}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($settings7['data'] as $entry)
                                        <tr>
                                            @foreach($settings7['fields'] as $key => $value)
                                                <td>
                                                    @if($value === '')
                                                        {{ $entry->{$key} }}
                                                    @elseif(is_iterable($entry->{$key}))
                                                        @foreach($entry->{$key} as $subEentry)
                                                            <span class="label label-info">{{ $subEentry->{$value} }}</span>
                                                        @endforeach
                                                    @else
                                                        {{ data_get($entry, $key . '.' . $value) }}
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="{{ count($settings7['fields']) }}">{{ __('No entries found') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/poco/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/poco/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/poco/counter-custom.js') }}"></script>
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>{!! $chart4->renderJs() !!}{!! $chart5->renderJs() !!}{!! $chart6->renderJs() !!}

@endsection
