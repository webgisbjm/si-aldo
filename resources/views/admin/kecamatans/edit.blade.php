@extends('layouts.admin')

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.2.0/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
@endsection


@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.kecamatan.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.kecamatans.update", [$kecamatan->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.kecamatan.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $kecamatan->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.kecamatan.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="color">{{ trans('cruds.kecamatan.fields.color') }}</label>
                <div class="input-group my-colorpicker2">
                    <input name="color" id="color" type="text" class="form-control @error('color') is-invalid @enderror" value="{{ old('color', $kecamatan->color) }}" required>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-square"></i></span>
                    </div>   
                </div>
                    @error('color')
                        <span class="text-danger">{{ $errors->first('color') }}</span>
                    @enderror
                {{-- <span class="help-block">{{ trans('cruds.kecamatan.fields.color_helper') }}</span> --}}
            </div>
            <div class="form-group">
                <label for="geojson">{{ trans('cruds.kecamatan.fields.geojson') }}</label>
                <textarea class="form-control {{ $errors->has('geojson') ? 'is-invalid' : '' }}" name="geojson" id="geojson">{{ old('geojson', $kecamatan->geojson) }}</textarea>
                @if($errors->has('geojson'))
                    <span class="text-danger">{{ $errors->first('geojson') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.kecamatan.fields.geojson_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger confirm_save" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.2.0/js/bootstrap-colorpicker.min.js"></script>
<script>
     
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })
</script>
    
@endsection
