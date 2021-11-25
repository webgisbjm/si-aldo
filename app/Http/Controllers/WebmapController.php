<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Webmap;

class WebmapController extends Controller
{
    public function __construct()
    {
        $this->Webmap = new Webmap();
    }

    public function index()
    {
        $data = [
            'title'     => 'WebGIS SI-ALDO',
            'kecamatan' => $this->Webmap->dataKecamatan(),
            'kelurahan' => $this->Webmap->dataKelurahan(),
            'build'     => $this->Webmap->dataBuild(),
        ];

        return view('v_webmap', $data);
    }
}
