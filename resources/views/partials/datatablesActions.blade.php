@can($viewGate)
    <a class="btn btn-xs btn-primary mt-2" href="{{ route('admin.' . $crudRoutePart . '.show', $row->id) }}" data-toggle="tooltip" title="{{ trans('global.view') }}">
        <i class="fas fa-eye"></i> {{ trans('global.view') }}
    </a>
@endcan
@can($editGate)
    <a class="btn btn-xs btn-success mt-2" href="{{ route('admin.' . $crudRoutePart . '.edit', $row->id) }}">
        <i class="fas fa-edit"></i> {{ trans('global.edit') }}
    </a>
@endcan
@can($deleteGate)
    <form action="{{ route('admin.' . $crudRoutePart . '.destroy', $row->id) }}" method="POST" style="display: inline-block;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-xs btn-danger show_confirm mt-2">
            <i class="fas fa-trash-alt"></i> {{ trans('global.delete') }}</button>
    </form>
@endcan

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          Swal.fire({
              title: '{{ trans('global.areYouSure') }}',
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: '{{ trans('global.yesDelete') }}',
              cancelButtonText: '{{ trans('global.cancel') }}'
          }).then((willDelete) => {
            if (willDelete.isConfirmed) {
              form.submit();

              Swal.fire(
                '{{ trans('global.deleted') }}',
                '{{ trans('global.deleteSuccess') }}',
                'success'
                )
            }
          });
      });
</script>