<?php

namespace App\Http\Requests;

use App\Models\Kelurahan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateKelurahanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('kelurahan_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:kelurahans,name,' . request()->route('kelurahan')->id,
            ],
            'kecamatans_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
