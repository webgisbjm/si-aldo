<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Nsup as NsupResource;
use App\Models\Nsup;
use Illuminate\Http\Request;

class NsupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Nsups = Nsup::all();

        $geoJSONdata = $Nsups->map(function ($Nsup) {
            return [
                'type'       => 'Feature',
                'properties' => new NsupResource($Nsup),
                'geometry'   => [
                    'type'        => 'Point',
                    'coordinates' => [
                        $Nsup->lng,
                        $Nsup->lat,
                    ],
                ],
            ];
        });

        return response()->json([
            'type'     => 'FeatureCollection',
            'features' => $geoJSONdata,
        ]);
    }
}
