<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Webmap;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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
            'ipal'      => $this->Webmap->dataIpal(),
            'category'  => $this->Webmap->dataCategory(),

        ];

        return view('v_webmap', $data);
    }
}
