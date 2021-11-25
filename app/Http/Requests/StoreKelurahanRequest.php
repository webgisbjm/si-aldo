<?php

namespace App\Http\Requests;

use App\Models\Kelurahan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreKelurahanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('kelurahan_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:kelurahans',
            ],
            'kecamatans_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
