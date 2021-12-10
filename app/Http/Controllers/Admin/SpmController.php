<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroySpmRequest;
use App\Http\Requests\StoreSpmRequest;
use App\Http\Requests\UpdateSpmRequest;
use App\Models\Kelurahan;
use App\Models\Spm;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SpmController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('spm_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $spms = Spm::with(['kelurahans'])->get();

        return view('admin.spms.index', compact('spms'));
    }

    public function create()
    {
        abort_if(Gate::denies('spm_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kelurahans = Kelurahan::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.spms.create', compact('kelurahans'));
    }

    public function store(StoreSpmRequest $request)
    {
        $spm = Spm::create($request->all());

        return redirect()->route('admin.spms.index');
    }

    public function edit(Spm $spm)
    {
        abort_if(Gate::denies('spm_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kelurahans = Kelurahan::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $spm->load('kelurahans');

        return view('admin.spms.edit', compact('kelurahans', 'spm'));
    }

    public function update(UpdateSpmRequest $request, Spm $spm)
    {
        $spm->update($request->all());

        return redirect()->route('admin.spms.index');
    }

    public function show(Spm $spm)
    {
        abort_if(Gate::denies('spm_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $spm->load('kelurahans');

        return view('admin.spms.show', compact('spm'));
    }

    public function destroy(Spm $spm)
    {
        abort_if(Gate::denies('spm_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $spm->delete();

        return back();
    }

    public function massDestroy(MassDestroySpmRequest $request)
    {
        Spm::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
