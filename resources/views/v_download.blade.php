@extends('layouts.apps')

@push('after-style')
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endpush

@section('header')
<x-header></x-header>
@endsection

@section('content')
<div class="container" style="font-family: 'Poppins', sans-serif">
    <div class="text-center my-3">
        <h3>Peraturan-Peraturan Tentang Air Limbah Domestik</h3>
    </div>
    <div class="table-responsive table-responsive-lg table-responsive-sm table-responsive-xl table-responsive-md overflow-auto">
        <table class="table table-bordered table-hover table-striped mb-none data-table" id="datatable">
            <thead class="bg-danger">
                <tr>
                    <th>Jenis Peraturan</th>
                    <th>Nomor dan Tahun</th>
                    <th>Judul</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($download as $data)
            <tr class="gradeX">
                <td>
                {{ $data->name ?? '' }}
                </td>
                <td class="center">{{ $data->no ?? '' }}&nbsp;Tahun&nbsp;{{ $data->year ?? '' }}</td>
                <td>{{ $data->title ?? '' }}</td>
                <td class="center">
                    <a class="btn btn-sm btn-primary" href="{{ $data->excerpt ?? '#' }}" target="_blank">
                        <i class="fa fa-download" aria-hidden="true"></i></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
</div>
</div>
@include('components.frontend.modal')
@endsection

@section('footer')
@include('components.frontend.footer')
@endsection

@push('after-script')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
    var table = $('#datatable').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>
@endpush

