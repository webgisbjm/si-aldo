<?php

namespace App\Http\Requests;

use App\Models\Kecamatan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreKecamatanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('kecamatan_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:kecamatans',
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
