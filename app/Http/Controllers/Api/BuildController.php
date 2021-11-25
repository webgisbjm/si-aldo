<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Build as BuildResource;
use App\Models\Build;
use Illuminate\Http\Request;

class BuildController extends Controller
{
    /**
     * Get Build listing on Leaflet JS geoJSON data structure.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $Builds = Build::all();

        $geoJSONdata = $Builds->map(function ($Build) {
            return [
                'type'       => 'Feature',
                'properties' => new BuildResource($Build),
                'geometry'   => [
                    'type'        => 'Point',
                    'coordinates' => [
                        $Build->lng,
                        $Build->lat,
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
