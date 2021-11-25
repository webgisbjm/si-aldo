<?php

namespace App\Http\Requests;

use App\Models\Infographic;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInfographicRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('infographic_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
        ];
    }
}
