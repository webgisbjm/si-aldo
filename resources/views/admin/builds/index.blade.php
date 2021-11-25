@extends('layouts.admin')
@section('content')
@can('build_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success mt-2" href="{{ route('admin.builds.create') }}">
                <i class="fas fa-plus"></i> {{ trans('global.create') }}
            </a>
            <button class="btn btn-warning mt-2" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Build', 'route' => 'admin.builds.parseCsvImport'])
            <a class="btn btn-info mt-2" href="{{ route('admin.builds.map') }}">
                <i class="far fa-map"></i> {{ trans('global.map') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.build.title_singular') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Build">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th width="10">
                        {{ trans('cruds.build.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.categories') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.address') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.kecamatans') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.kelurahans') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.lat') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.lng') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.year') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.status') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.funded') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}" style="width:40px;">
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($categories as $key => $item)
                                <option value="{{ $item->type }}">{{ $item->type }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <select class="search" id="kecamatan">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($kecamatans as $key => $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="search" id="kelurahan">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($kelurahans as $key => $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <select class="search" strict="true">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach(App\Models\Build::YEAR_SELECT as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="search" strict="true">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach(App\Models\Build::STATUS_RADIO as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="search" strict="true">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach(App\Models\Build::FUNDED_SELECT as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('build_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.builds.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.builds.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
        { data: 'id', name: 'id' },
        { data: 'categories_type', name: 'categories.type' },
        { data: 'address', name: 'address' },
        { data: 'kecamatans_name', name: 'kecamatans.name' },
        { data: 'kelurahans_name', name: 'kelurahans.name' },
        { data: 'lat', name: 'lat' },
        { data: 'lng', name: 'lng' },
        { data: 'year', name: 'year' },
        { data: 'status', name: 'status'},
        { data: 'funded', name: 'funded' },
        { data: 'actions', name: '{{ trans('global.actions') }}' }
            ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-Build').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
});

</script>
@endsection
