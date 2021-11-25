@extends('layouts.admin')

@section('styles')
    <x-leaflet></x-leaflet>

@endsection


@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.build.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.builds.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="categories_id">{{ trans('cruds.build.fields.categories') }}</label>
                <select class="form-control select2 {{ $errors->has('categories') ? 'is-invalid' : '' }}" name="categories_id" id="categories_id" required>
                    @foreach($categories as $id => $entry)
                        <option value="{{ $id }}" {{ old('categories_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('categories'))
                    <span class="text-danger">{{ $errors->first('categories') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.build.fields.categories_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address">{{ trans('cruds.build.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', '') }}" required>
                @if($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.build.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="kecamatans_id">{{ trans('cruds.build.fields.kecamatans') }}</label>
                <select class="form-control select2 {{ $errors->has('kecamatans') ? 'is-invalid' : '' }}" name="kecamatans_id" id="kecamatans_id" required>
                    @foreach($kecamatans as $id => $kecamatan)
                        <option value="{{ $id }}" {{ old('kecamatans_id') == $id ? 'selected' : '' }}>{{ $kecamatan }}</option>
                    @endforeach
                </select>
                @if($errors->has('kecamatans'))
                    <span class="text-danger">{{ $errors->first('kecamatans') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.build.fields.kecamatans_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="kelurahans_id">{{ trans('cruds.build.fields.kelurahans') }}</label>
                <select class="form-control select2 {{ $errors->has('kelurahans_id') ? 'is-invalid' : '' }}" name="kelurahans_id" id="kelurahans_id" required>
                        <option value="" selected>{{ trans('global.pleaseSelect') }}</option>
                </select>
                @if($errors->has('kelurahans_id'))
                    <span class="text-danger">{{ $errors->first('kelurahans_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.build.fields.kelurahans_helper') }}</span>
            </div>

            <label>{{ trans('cruds.maps.drag') }}</label>
            <div id="mapid" class="mb-3 mx-auto" style="min-height: 250px"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lat" class="control-label">{{ trans('cruds.build.fields.lat') }}</label>
                        <input class="form-control {{ $errors->has('lat') ? 'is-invalid' : '' }}" type="text" name="lat" id="lat" value="{{ old('lat', request('lat')) }}">
                        @if($errors->has('lat'))
                            <span class="text-danger">{{ $errors->first('lat') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.build.fields.lat_helper') }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lng" class="control-label">{{ trans('cruds.build.fields.lng') }}</label>
                        <input class="form-control {{ $errors->has('lng') ? 'is-invalid' : '' }}" type="text" name="lng" id="lng" value="{{ old('lng', request('lng')) }}">
                        @if($errors->has('lng'))
                            <span class="text-danger">{{ $errors->first('lng') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.build.fields.lng_helper') }}</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.build.fields.year') }}</label>
                <select class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}" name="year" id="year">
                    <option value disabled {{ old('year', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Build::YEAR_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('year', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('year'))
                    <span class="text-danger">{{ $errors->first('year') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.build.fields.year_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.build.fields.status') }}</label>
                @foreach(App\Models\Build::STATUS_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('status') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="status_{{ $key }}" name="status" value="{{ $key }}" {{ old('status', 'Aktif') === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="status_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('status'))
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.build.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.build.fields.funded') }}</label>
                <select class="form-control {{ $errors->has('funded') ? 'is-invalid' : '' }}" name="funded" id="funded">
                    <option value disabled {{ old('funded', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Build::FUNDED_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('funded', 'APBD') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('funded'))
                    <span class="text-danger">{{ $errors->first('funded') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.build.fields.funded_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
                <a href="{{ url()->previous() }}" class="btn btn-link">{{ trans('global.cancel') }}</a>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
    <script type="text/javascript">
        $("#kecamatans_id").change(function(){
            $.ajax({
                url: "{{ route('admin.kelurahans.grab') }}?kecamatans_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#kelurahans_id').html(data.html);
                }
            });
        });
    </script>

    <x-coordinate></x-coordinate>
@endsection

