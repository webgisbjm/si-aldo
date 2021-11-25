<?php

namespace App\Http\Requests;

use App\Models\BuildGallery;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBuildGalleryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('build_gallery_edit');
    }

    public function rules()
    {
        return [];
    }
}
