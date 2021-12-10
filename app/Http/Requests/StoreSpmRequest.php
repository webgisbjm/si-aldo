<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreSpmRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('spm_create');
    }

    public function rules()
    {
        return [
            'kelurahans_id' => [
                'required',
                'integer',
            ],
            'qty_house' => [
                'numeric',
                'required',
            ],
            'basic_target' => [
                'integer',
                'min:0',
                'max:2147483647',
            ],
            'spalds_target' => [
                'integer',
                'min:0',
                'max:2147483647',
            ],
            'spaldt_target' => [
                'integer',
                'min:0',
                'max:2147483647',
            ],
            'basic_realization' => [
                'integer',
                'min:0',
                'max:2147483647',
            ],
            'spalds_realization' => [
                'integer',
                'min:0',
                'max:2147483647',
            ],
            'spaldt_realization' => [
                'integer',
                'min:0',
                'max:2147483647',
            ],
            'year' => [
                'required',
            ],
        ];
    }
}
