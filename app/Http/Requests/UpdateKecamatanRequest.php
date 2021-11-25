<?php

namespace App\Http\Requests;

use App\Models\Kecamatan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateKecamatanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('kecamatan_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:kecamatans,name,' . request()->route('kecamatan')->id,
            ],
            'color' => [
                'string',
                'min:4',
                'max:7',
                'required',
            ],
        ];
    }
}
