<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'username' => [
                'string',
                'min:3',
                'max:12',
                'nullable',
            ],
            'email' => [
                'required',
                'unique:users',
            ],
            'phone' => [
                'string',
                'min:11',
                'max:14',
                'unique:users',
            ],
            'password' => [
                'required',
            ],
            'roles.*' => [
                'integer',
            ],
            'roles' => [
                'required',
                'array',
            ],
        ];
    }
}
