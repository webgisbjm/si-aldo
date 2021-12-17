<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyBuildGalleryRequest;
use App\Http\Requests\StoreBuildGalleryRequest;
use App\Http\Requests\UpdateBuildGalleryRequest;
use App\Models\Build;
use App\Models\BuildGallery;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;

class BuildGalleryController extends Controller
{
    use MediaUploadingTrait;

    public function index(Build $build)
    {
        abort_if(Gate::denies('build_gallery_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (request()->ajax()) {
            $query = BuildGallery::where('build_id', $build->id);

            return DataTables::of($query)

                ->addColumn('placeholder', '&nbsp;')

                ->editColumn('id', function ($row) {
                    return $row->id ? $row->id : '';
                })

                ->editColumn('url', function ($row) {
                    return '<center><a href="' . Storage::url($row->url) . '"><img width="50%" height="auto" src="' . Storage::url($row->url) . '"  /></a></center>';
                })

                ->rawColumns(['placeholder', 'build', 'url'])

                ->make();
        }

        return view('admin.buildGalleries.index', compact('build'));
    }

    public function create(Build $build)
    {
        abort_if(Gate::denies('build_gallery_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.buildGalleries.create', compact('build'));
    }

    public function store(StoreBuildGalleryRequest $request, Build $build)
    {
        $files = $request->file('files');

        if ($request->hasFile('files')) {
            foreach ($files as $file) {

                $imgName = $file->getClientOriginalName();
                $path = $file->storeAs('public/gallery', $imgName);

                BuildGallery::create([
                    'build_id' => $build->id,
                    'url' => $path,
                ]);
            }
        }

        return redirect()->route('admin.builds.gallery.index', $build->id)->with('success', 'Foto Berhasil Ditambahkan');;
    }

    public function edit($id)
    {
        // abort_if(Gate::denies('build_gallery_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $buildGallery->load('build');

        // return view('admin.buildGalleries.edit', compact('buildGallery'));
    }

    public function update(UpdateBuildGalleryRequest $request, $id)
    {
        // $build->update($request->all());

        // if ($request->input('photo', false)) {
        //     if (!$buildGallery->photo || $request->input('photo') !== $buildGallery->photo->file_name) {
        //         if ($buildGallery->photo) {
        //             $buildGallery->photo->delete();
        //         }
        //         $buildGallery->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        //     }
        // } elseif ($buildGallery->photo) {
        //     $buildGallery->photo->delete();
        // }

        // return redirect()->route('admin.build-galleries.index');
    }

    public function show(BuildGallery $buildGallery)
    {
        // abort_if(Gate::denies('build_gallery_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $buildGallery->load('build');

        // return view('admin.buildGalleries.show', compact('buildGallery'));
    }

    public function destroy(BuildGallery $buildGallery)
    {
        abort_if(Gate::denies('build_gallery_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $buildGallery->delete();

        return back();
    }

    public function massDestroy(MassDestroyBuildGalleryRequest $request)
    {
        BuildGallery::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
