<?php

namespace App\Http\Requests;

use App\Models\Nsup;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNsupRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('nsup_edit');
    }

    public function rules()
    {
        return [
            'categories_id' => [
                'required',
                'integer',
            ],
            'kecamatans_id' => [
                'required',
                'integer',
            ],
            'kelurahans_id' => [
                'required',
                'integer',
            ],
            'years' => [
                'required',
            ],
            'lat' => [
                'string',
                'nullable',
            ],
            'lng' => [
                'string',
                'nullable',
            ],
        ];
    }
}
