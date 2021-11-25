<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Ipal as IpalResource;
use App\Models\Ipal;
use Illuminate\Http\Request;

class IpalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Ipals = Ipal::all();

        $geoJSONdata = $Ipals->map(function ($Ipal) {
            return [
                'type'       => 'Feature',
                'properties' => new IpalResource($Ipal),
                'geometry'   => [
                    'type'        => 'Point',
                    'coordinates' => [
                        $Ipal->lng,
                        $Ipal->lat,
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
