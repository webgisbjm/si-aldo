@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.spm.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.spms.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="kelurahans_id">{{ trans('cruds.spm.fields.kelurahans') }}</label>
                <select class="form-control select2 {{ $errors->has('kelurahans') ? 'is-invalid' : '' }}" name="kelurahans_id" id="kelurahans_id" required>
                    @foreach($kelurahans as $id => $entry)
                        <option value="{{ $id }}" {{ old('kelurahans_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('kelurahans'))
                    <span class="text-danger">{{ $errors->first('kelurahans') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.spm.fields.year') }}</label>
                <select class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}" name="year" id="year" required>
                    <option value disabled {{ old('year', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Spm::YEAR_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('year', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('year'))
                    <span class="text-danger">{{ $errors->first('year') }}</span>
                @endif
                
            </div>
            <div class="form-group">
                <label for="qty_house">{{ trans('cruds.spm.fields.qty_house') }}</label>
                <input class="form-control {{ $errors->has('qty_house') ? 'is-invalid' : '' }}" type="number" name="qty_house" id="qty_house" value="{{ old('qty_house', '') }}">
                @if($errors->has('qty_house'))
                    <span class="text-danger">{{ $errors->first('qty_house') }}</span>
                @endif
  
            </div>
            <div class="form-group">
                <label for="basic_target">{{ trans('cruds.spm.fields.basic_target') }}</label>
                <input class="form-control {{ $errors->has('basic_target') ? 'is-invalid' : '' }}" type="number" name="basic_target" id="basic_target" value="{{ old('basic_target', '') }}" step="1">
                @if($errors->has('basic_target'))
                    <span class="text-danger">{{ $errors->first('basic_target') }}</span>
                @endif
         
            </div>
            
            <div class="form-group">
                <label for="spalds_target">{{ trans('cruds.spm.fields.spalds_target') }}</label>
                <input class="form-control {{ $errors->has('spalds_target') ? 'is-invalid' : '' }}" type="number" name="spalds_target" id="spalds_target" value="{{ old('spalds_target', '') }}" step="1" >
                @if($errors->has('spalds_target'))
                    <span class="text-danger">{{ $errors->first('spalds_target') }}</span>
                @endif
         
            </div>

            <div class="form-group">
                <label for="spaldt_target">{{ trans('cruds.spm.fields.spaldt_target') }}</label>
                <input class="form-control {{ $errors->has('spaldt_target') ? 'is-invalid' : '' }}" type="number" name="spaldt_target" id="spaldt_target" value="{{ old('spaldt_target', '') }}" step="1" >
                @if($errors->has('spaldt_target'))
                    <span class="text-danger">{{ $errors->first('spaldt_target') }}</span>
                @endif
         
            </div>

            <div class="form-group">
                <label for="basic_realization">{{ trans('cruds.spm.fields.basic_realization') }}</label>
                <input class="form-control {{ $errors->has('basic_realization') ? 'is-invalid' : '' }}" type="number" name="basic_realization" id="basic_realization" value="{{ old('basic_realization', '') }}" step="1" >
                @if($errors->has('basic_realization'))
                    <span class="text-danger">{{ $errors->first('basic_realization') }}</span>
                @endif
         
            </div>
            
            <div class="form-group">
                <label for="spalds_realization">{{ trans('cruds.spm.fields.spalds_realization') }}</label>
                <input class="form-control {{ $errors->has('spalds_realization') ? 'is-invalid' : '' }}" type="number" name="spalds_realization" id="spalds_realization" value="{{ old('spalds_realization', '') }}" step="1" >
                @if($errors->has('spalds_realization'))
                    <span class="text-danger">{{ $errors->first('spalds_realization') }}</span>
                @endif
         
            </div>

            <div class="form-group">
                <label for="spaldt_realization">{{ trans('cruds.spm.fields.spaldt_realization') }}</label>
                <input class="form-control {{ $errors->has('spaldt_realization') ? 'is-invalid' : '' }}" type="number" name="spaldt_realization" id="spaldt_realization" value="{{ old('spaldt_realization', '') }}" step="1" >
                @if($errors->has('spaldt_realization'))
                    <span class="text-danger">{{ $errors->first('spaldt_realization') }}</span>
                @endif
         
            </div>
            
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
