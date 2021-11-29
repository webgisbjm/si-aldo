@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.category.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.categories.update", [$category->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required">{{ trans('cruds.category.fields.type') }}</label>
                <select class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type" required>
                    <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Category::TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('type', $category->type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <span class="text-danger">{{ $errors->first('type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="layer">{{ trans('cruds.category.fields.layer') }}</label>
                <input class="form-control {{ $errors->has('layer') ? 'is-invalid' : '' }}" type="text" name="layer" id="layer" value="{{ old('layer', $category->layer) }}" required>
                @if($errors->has('layer'))
                    <span class="text-danger">{{ $errors->first('layer') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.layer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="icon">{{ trans('cruds.category.fields.icon') }}</label>
                <input type="file" name="icon" class="form-control" value="{{ old('icon') }}">
                @if($errors->has('icon'))
                    <span class="text-danger">{{ $errors->first('icon') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.icon_helper') }}</span>
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