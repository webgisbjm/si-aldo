@extends('layouts.admin')
@section('content')
@can('spm_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success mt-2" href="{{ route('admin.spms.create') }}">
                <i class="fas fa-plus"></i> {{ trans('global.create') }}
            </a>
            <button class="btn btn-warning mt-2" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Spm', 'route' => 'admin.spms.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.spm.title_singular') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Spm">
                <thead class="text-center">
                    <tr>
                        <th width="10" rowspan="2" class="align-middle">

                        </th>
                        <th rowspan="2" class="align-middle">
                            {{ trans('cruds.spm.fields.id') }}
                        </th>
                        <th rowspan="2" class="align-middle">
                            {{ trans('cruds.spm.fields.kelurahans') }}
                        </th>
                        <th rowspan="2" class="align-middle">
                            {{ trans('cruds.spm.fields.year') }}
                        </th>
                        <th rowspan="2" class="align-middle">
                            {{ trans('cruds.spm.fields.qty_house') }}
                        </th>
                        <th colspan="2">
                            AKSES DASAR
                        </th>
                        <th colspan="2">
                            SPALD-S
                        </th>
                        <th colspan="2">
                            SPALD-T
                        </th>
                        <th rowspan="2">
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                        <th>TARGET</th>
                        <th>REALISASI</th>
                        <th>TARGET</th>
                        <th>REALISASI</th>
                        <th>TARGET</th>
                        <th>REALISASI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($spms as $key => $spm)
                        <tr data-entry-id="{{ $spm->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $spm->id ?? '' }}
                            </td>
                            <td>
                                {{ $spm->kelurahans->name ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Spm::YEAR_SELECT[$spm->year] ?? '' }}
                            </td>
                            <td>
                                {{ $spm->qty_house ?? '' }}
                            </td>
                            <td>
                                {{ $spm->basic_target ?? '' }}
                            </td>
                            <td>
                                {{ $spm->basic_realization ?? '' }}
                            </td>
                            <td>
                                {{ $spm->spalds_target ?? '' }}
                            </td>
                            <td>
                                {{ $spm->spalds_realization ?? '' }}
                            </td>
                            <td>
                                {{ $spm->spaldt_target ?? '' }}
                            </td>
                            <td>
                                {{ $spm->spaldt_realization ?? '' }}
                            </td>                           
                            <td>
                                @can('spm_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.spms.show', $spm->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('spm_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.spms.edit', $spm->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('spm_delete')
                                    <form action="{{ route('admin.spms.destroy', $spm->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('spm_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.spms.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  });
  let table = $('.datatable-Spm:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
