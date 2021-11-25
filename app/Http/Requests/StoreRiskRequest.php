<?php

namespace App\Http\Requests;

use App\Models\Risk;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRiskRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('risk_create');
    }

    public function rules()
    {
        return [
            'year' => [
                'required',
            ],
            'kelurahan_id' => [
                'required',
                'integer',
            ],
            'level' => [
                'required',
            ],
        ];
    }
}
