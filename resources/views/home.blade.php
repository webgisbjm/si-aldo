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
                                <div class="col-sm-6 col-xl-3 col-lg-3 box-col-6 mb-5">
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
                                <div class="col-sm-6 col-xl-3 col-lg-3 box-col-6 mb-5">
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
                                <div class="col-sm-6 col-xl-3 col-lg-3 box-col-6 mb-5">
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
                                <div class="col-sm-6 col-xl-3 col-lg-3 box-col-6 mb-5">
                                    <div class="card gradient-info o-hidden">
                                        <div class="b-r-4 card-body">
                                            <div class="media static-top-widget">
                                                <div class="align-self-center text-center text-white">
                                                    <i class="far fa-map" style="font-size: 28px;"></i>
                                                </div>
                                                <div class="media-body">
                                                    <span class="m-0 text-white">Total Kelurahan</span>
                                                        @php
                                                        $kelurahanCount = DB::table('kelurahans')->count();
                                                        echo '<h4 class="mb-0 counter text-white">'. $kelurahanCount . '</h4>';
                                                        @endphp
                                                        <i class="far fa-map icon-bg text-white" style="font-size: 75px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card {{ $chart4->options['column_class'] }} p-2 m-2" id="myChart">
                                    <h3 class="text-center">{!! $chart4->options['chart_title'] !!}</h3>
                                    {!! $chart4->renderHtml() !!}
                                </div>
                                
                                <div class="card {{ $chart5->options['column_class'] }} p-2 m-2">
                                    <h3 class="text-center">{!! $chart5->options['chart_title'] !!}</h3>
                                    {!! $chart5->renderHtml() !!}
                                </div>
                                {{-- <div class="card {{ $chart6->options['column_class'] }} p-2 mx-2">
                                    <h3>{!! $chart6->options['chart_title'] !!}</h3>
                                    {!! $chart6->renderHtml() !!}
                                </div> --}}

                               <!-- /.col -->
                                <div class="col-md-5">
                                    <div class="card card-danger" style="border-radius:0px;">
                                    <div class="card-header" style="border-radius:0px;">
                                        <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseCard" aria-expanded="false" aria-controls="collapseCard">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        </div>
                                        <h6 class="card-title">Area Risiko Kerawanan Air Limbah Domestik</h6>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body collapse" id="collapseCard">
                                        <table class="table-bordered table-sm table-light">
                                            <thead class="bg-warning">
                                              <tr>
                                                <th width="5">No</th>
                                                <th class="px-5">Kelurahan</th>
                                                <th class="px-3">Level Risiko</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @php($i=0)
                                                @foreach(App\Models\Risk::where('level', '>', '2')->join('kelurahans', 'kelurahans.id', '=', 'risks.kelurahan_id')->orderBy('level', 'desc')->get() as $data)
                                                @php($i++)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->level == "3" ? "Tinggi" : "Sangat Tinggi"}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                    </div>
                                    <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->

                                <div class="col-md-7">
                                    <div class="card"  style="border-radius:0px;">
                                      <div class="card-header bg-success"  style="border-radius:0px;">
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseCard2" aria-expanded="false" aria-controls="collapseCard2">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                        <h3 class="card-title">Progress Capaian Layanan Air Limbah 2020 </h3>
                                        
                                      </div>
                                      <!-- /.card-header -->
                                      <div class="card-body collapse" id="collapseCard2">
                                        <h6>Akses Dasar / Akses Layak</h6>
                                        <div class="progress mb-4">
                            
                                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="{{ $avgbasic = number_format((($spm2020->sum('basic_realization') / $spm2020->sum('basic_target')) * 100),2) }}" aria-valuemin="0"
                                               aria-valuemax="100" style="width: {{ $avgbasic }}%">
                                          </div>
                                          <span class="text-end ml-1">{{ $avgbasic }} %</span>
                                        </div>
                                        <h6>Akses Aman SPALD-S</h6>
                                        <div class="progress mb-4">
                                          <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{ $avgspalds = number_format((($spm2020->sum('spalds_realization') / $spm2020->sum('spalds_target')) * 100),2) }}" aria-valuemin="0"
                                               aria-valuemax="100" style="width: {{ $avgspalds }}%">
                                          </div>
                                          <span class="text-end ml-1">{{ $avgspalds }} %</span>
                                        </div>
                                        <h6>Akses Aman SPALD-T</h6>
                                        <div class="progress mb-4">
                                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{{ $avgspaldt = number_format((($spm2020->sum('spaldt_realization') / $spm2020->sum('spaldt_target')) * 100),2) }}" aria-valuemin="0"
                                               aria-valuemax="100" style="width: {{ $avgspaldt }}%">
                                          </div>
                                          <span class="text-end ml-1">{{ $avgspaldt }} %</span>
                                        </div>

                                        <h6>Persentase Layanan (Rata-Rata)</h6>
                                        <div class="progress mb-3">
                                          <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="{{ (($avgspalds + $avgspaldt + $avgbasic) / 3 ) }}" aria-valuemin="0"
                                               aria-valuemax="100" style="width: {{ (($avgspalds + $avgspaldt + $avgbasic) / 3 ) }}%">
                                          </div>
                                          <span class="text-end ml-1">{{ (($avgspalds + $avgspaldt + $avgbasic) / 3 ) }} %</span>
                                        </div>
                                      </div>
                                      <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                  </div>

                                <div class="card bg-light bg-gradient p-2 my-2 col-md-10">
                                    <h3 class="text-center">
                                      Capaian SPALD-S
                                    </h3>
                                    <div class="chart-stage">
                                        <canvas id="spalds" width="100" height="100" aria-label="Capaian SPALD-S" role="img"></canvas>
                                        <select id="chartyear">
                                            <option value="spaldsa" selected>2020</option>
                                            {{-- <option value="spaldsb" selected>2021</option>
                                            <option value="spaldsc" selected>2022</option> --}}
                                       </select>
                                      
                                    </div>
                                </div>

                                <div class="card bg-light bg-gradient p-2 my-2 col-md-10">
                                    <h3 class="text-center">
                                      Capaian SPALD-T
                                    </h3>
                                    <div class="chart-stage">
                                      <canvas id="spaldt" width="100" height="100" aria-label="Capaian SPALD-T" role="img"></canvas>
                                    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.1/chart.min.js"></script>{!! $chart4->renderJs() !!}{!! $chart5->renderJs() !!}{!! $chart6->renderJs() !!}
<script>
    let ctspms = document.getElementById('spalds').getContext('2d');
    let ctspmt = document.getElementById('spaldt').getContext('2d');
    
    spaldsa = {
            labels: [@foreach ($spm2020 as $data) "{{ $data->name }}", @endforeach ],
            datasets: [{
                type: 'bar',
                label: 'Target SPALD-S',
                data: [
                    @foreach ($spm2020 as $data) "{{ $data->spalds_target }}", @endforeach
                ],
                backgroundColor: 'rgba(255, 99, 132, 0.8)',
                borderColor: '#0f0',
                showLine: true,
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(200,10,10,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                order: 2,
            }, {
                type: 'line',
                label: 'Realisasi SPALD-S',
                data: [
                    @foreach ($spm2020 as $data) "{{ $data->spalds_realization }}", @endforeach
                ],
                borderColor: '#00f',
                showLine: true,
                fillColor: "rgba(151,187,205,0.8)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(200,10,10,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                order: 1,
            }],         
        };

        spaldsb = {
            labels: [@foreach ($spm2021 as $data) "{{ $data->name }}", @endforeach ],
            datasets: [{
                type: 'bar',
                label: 'Target SPALD-S',
                data: [
                    @foreach ($spm2021 as $data) "{{ $data->spalds_target }}", @endforeach
                ],
                backgroundColor: 'rgba(255, 99, 132, 0.8)',
                borderColor: '#0f0',
                showLine: true,
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(200,10,10,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                order: 2,
            }, {
                type: 'line',
                label: 'Realisasi SPALD-S',
                data: [
                    @foreach ($spm2021 as $data) "{{ $data->spalds_realization }}", @endforeach
                ],
                borderColor: '#00f',
                showLine: true,
                fillColor: "rgba(151,187,205,0.8)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(200,10,10,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                order: 1,
            }],         
        };

        spaldsc = {
            labels: [@foreach ($spm2022 as $data) "{{ $data->name }}", @endforeach ],
            datasets: [{
                type: 'bar',
                label: 'Target SPALD-S',
                data: [
                    @foreach ($spm2022 as $data) "{{ $data->spalds_target }}", @endforeach
                ],
                backgroundColor: 'rgba(255, 99, 132, 0.8)',
                borderColor: '#0f0',
                showLine: true,
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(200,10,10,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                order: 2,
            }, {
                type: 'line',
                label: 'Realisasi SPALD-S',
                data: [
                    @foreach ($spm2022 as $data) "{{ $data->spalds_realization }}", @endforeach
                ],
                borderColor: '#00f',
                showLine: true,
                fillColor: "rgba(151,187,205,0.8)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(200,10,10,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                order: 1,
            }],         
        };
        
    
        let spalds = new Chart(ctspms, {
        data: spaldsa,
        options: {
            tooltips: {
            displayColors: true,
            callbacks:{
                mode: 'x',
            },
            },
            responsive: true,
            legend: { position: 'bottom' },
            }
        });

          
        const chartyear = document.getElementById('chartyear');
        
        $("#chartyear").change(function() {
           spalds.destroy();
              
           spalds = new Chart(ctspms, {
            data: document.getElementById('chartyear').options[document.getElementById('chartyear').selectedIndex].value,
            });

            spalds.update();
        });


       

        dataspaldt = {
            labels: [@foreach ($spm2020 as $data) "{{ $data->name }}", @endforeach ],
            datasets: [{
                type: 'bar',
                label: 'Target SPALD-T',
                data: [
                    @foreach ($spm2020 as $data) "{{ $data->spaldt_target }}", @endforeach
                ],
                backgroundColor: 'rgba(255, 99, 132, 0.8)',
                borderColor: '#0f0',
                showLine: true,
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(200,10,10,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                order: 2,
            }, {
                type: 'line',
                label: 'Realisasi SPALD-T',
                data: [
                    @foreach ($spm2020 as $data) "{{ $data->spaldt_realization }}", @endforeach
                ],
                borderColor: '#00f',
                showLine: true,
                fillColor: "rgba(151,187,205,0.8)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(200,10,10,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                order: 1,
            }],         
        };

   let spaldt = new Chart(ctspmt, {
        data: dataspaldt,
        options: {
            responsive: true,
            }
    });
    </script>



@endsection
