<?php

namespace App\Http\Requests;

use App\Models\ContentPage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContentPageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('content_page_edit');
    }

    public function rules()
    {
        return [
            'no' => [
                'nullable',
                'integer',
                'min:1',
                'max:2147483647',
            ],
            'year' => [
                'numeric',
                'min:1945',
                'max:2024',
            ],
            'title' => [
                'string',
                'required',
            ],
            'categories.*' => [
                'integer',
            ],
            'categories' => [
                'array',
            ],
            'tags.*' => [
                'integer',
            ],
            'tags' => [
                'array',
            ],
        ];
    }
}
