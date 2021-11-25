<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\StoreSecuredRequest;
use App\Http\Requests\UpdateSecuredRequest;
use App\Models\Kecamatan;
use App\Models\Sanitation;
use App\Models\Secured;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecuredController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('secured_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $secureds = Secured::with(['kecamatan'])->get();

        return view('admin.secureds.index', compact('secureds'));
    }

    public function create()
    {
        abort_if(Gate::denies('secured_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kecamatans = Kecamatan::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.secureds.create', compact('kecamatans'));
    }

    public function store(StoreSecuredRequest $request)
    {
        $secured = Secured::create($request->all());

        return redirect()->route('admin.secureds.index');
    }

    public function edit(Secured $secured)
    {
        abort_if(Gate::denies('secured_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kecamatans = Kecamatan::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $secured->load('kecamatan');

        return view('admin.secureds.edit', compact('kecamatans', 'secured'));
    }

    public function update(UpdateSecuredRequest $request, Secured $secured)
    {
        $secured->update($request->all());

        return redirect()->route('admin.secureds.index');
    }

    public function show(Secured $secured)
    {
        abort_if(Gate::denies('secured_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $secured->load('kecamatan');

        return view('admin.secureds.show', compact('secured'));
    }
}
