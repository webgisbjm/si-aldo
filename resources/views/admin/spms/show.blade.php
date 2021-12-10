@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.spm.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.spms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <h3>{{ trans('cruds.spm.title') }}  {{ App\Models\Spm::YEAR_SELECT[$spm->year] ?? '' }}</h3>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.spm.fields.id') }}
                        </th>
                        <td>
                            {{ $spm->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spm.fields.kelurahans') }}
                        </th>
                        <td>
                            {{ $spm->kelurahans->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spm.fields.qty_house') }}
                        </th>
                        <td>
                            {{ $spm->qty_house}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spm.fields.basic_target') }}
                        </th>
                        <td>
                            {{ $spm->basic_target }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spm.fields.basic_realization') }}
                        </th>
                        <td>
                            {{ $spm->basic_realization }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spm.fields.spalds_target') }}
                        </th>
                        <td>
                            {{ $spm->spalds_target }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spm.fields.spalds_realization') }}
                        </th>
                        <td>
                            {{ $spm->spalds_realization }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spm.fields.spaldt_target') }}
                        </th>
                        <td>
                            {{ $spm->spaldt_target }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spm.fields.spaldt_realization') }}
                        </th>
                        <td>
                            {{ $spm->spaldt_realization }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.spms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
