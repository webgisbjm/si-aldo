<?php

namespace App\Http\Requests;

use App\Models\Build;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBuildRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('build_edit');
    }

    public function rules()
    {
        return [
            'categories_id' => [
                'required',
                'integer',
            ],
            'address' => [
                'string',
                'required',
            ],
            'kecamatans_id' => [
                'required',
                'integer',
            ],
            'kelurahans_id' => [
                'required',
                'integer',
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
