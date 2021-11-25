<?php

namespace App\Http\Requests;

use App\Models\Sanitation;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSanitationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sanitation_create');
    }

    public function rules()
    {
        return [
            'kecamatan_id' => [
                'required',
                'integer',
            ],
            'secure' => [
                'required',
                'integer',
                'min:0',
                'max:2147483647',
            ],
            'basic' => [
                'required',
                'integer',
                'min:0',
                'max:2147483647',
            ],
            'poor' => [
                'required',
                'integer',
                'min:0',
                'max:2147483647',
            ],
        ];
    }
}
