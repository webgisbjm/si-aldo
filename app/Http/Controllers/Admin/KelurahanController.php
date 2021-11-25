<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyKelurahanRequest;
use App\Http\Requests\StoreKelurahanRequest;
use App\Http\Requests\UpdateKelurahanRequest;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class KelurahanController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('kelurahan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Kelurahan::with(['kecamatans'])->select(sprintf('%s.*', (new Kelurahan())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'kelurahan_show';
                $editGate = 'kelurahan_edit';
                $deleteGate = 'kelurahan_delete';
                $crudRoutePart = 'kelurahans';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->addColumn('kecamatans_name', function ($row) {
                return $row->kecamatans ? $row->kecamatans->name : '';
            });

            // $table->editColumn('kecamatans.color', function ($row) {
            //     return $row->kecamatans ? (is_string($row->kecamatans) ? $row->kecamatans : $row->kecamatans->color) : '';
            // });

            $table->rawColumns(['actions', 'placeholder', 'kecamatans']);

            return $table->make(true);
        }

        return view('admin.kelurahans.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kelurahan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kecamatans = Kecamatan::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.kelurahans.create', compact('kecamatans'));
    }

    public function store(StoreKelurahanRequest $request)
    {
        $kelurahan = Kelurahan::create($request->all());

        return redirect()->route('admin.kelurahans.index');
    }

    public function edit(Kelurahan $kelurahan)
    {
        abort_if(Gate::denies('kelurahan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kecamatans = Kecamatan::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $kelurahan->load('kecamatans');

        return view('admin.kelurahans.edit', compact('kecamatans', 'kelurahan'));
    }

    public function update(UpdateKelurahanRequest $request, Kelurahan $kelurahan)
    {
        $kelurahan->update($request->all());

        return redirect()->route('admin.kelurahans.index');
    }

    public function show(Kelurahan $kelurahan)
    {
        abort_if(Gate::denies('kelurahan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kelurahan->load('kecamatans');

        return view('admin.kelurahans.show', compact('kelurahan'));
    }

    public function destroy(Kelurahan $kelurahan)
    {
        abort_if(Gate::denies('kelurahan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kelurahan->delete();

        return back();
    }

    public function massDestroy(MassDestroyKelurahanRequest $request)
    {
        Kelurahan::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function grab(Request $request)
    {
        abort_unless(Gate::allows('build_create'), 401);

        if (!$request->kecamatans_id) {
            $html = '<option value="">' . trans('global.pleaseSelect') . '</option>';
        } else {
            $html = '';
            $kelurahans = Kelurahan::where('kecamatans_id', $request->kecamatans_id)->get();
            foreach ($kelurahans as $kelurahan) {
                $html .= '<option value="' . $kelurahan->id . '">' . $kelurahan->name . '</option>';
            }
        }

        return response()->json(['html' => $html]);
    }

    // public function getKelurahan(Request $request)
    // {
    //     $kelurahans = DB::table("kelurahans")
    //         ->where("kecamatans_id", $request->kecamatans_id)
    //         ->pluck("name", "id");
    //     return response()->json($kelurahans);
    // }

    // public function select(Request $request)
    // {
    //     $kelurahans = [];
    //     $kecamatanID = $request->kecamatanID;
    //     if ($request->has('q')) {
    //         $search = $request->q;
    //         $kelurahans = Kelurahan::select("id", "name")
    //             ->where('kecamatans_id', $kecamatanID)
    //             ->Where('name', 'LIKE', "%$search%")
    //             ->get();
    //     } else {
    //         $kelurahans = Kelurahan::where('kecamatans_id', $kecamatanID)->limit(10)->get();
    //     }
    //     return response()->json($kelurahans);
    // }
}
