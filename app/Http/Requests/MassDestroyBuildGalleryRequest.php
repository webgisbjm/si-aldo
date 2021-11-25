<?php

namespace App\Http\Requests;

use App\Models\BuildGallery;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyBuildGalleryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('build_gallery_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:build_galleries,id',
        ];
    }
}
