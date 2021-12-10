<?php

namespace App\Http\Controllers;

use App\Models\ContentPage;
use App\Models\ContentCategory;
use App\Models\ContentTag;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function __construct()
    {
        $this->ContentPage = new ContentPage();
    }

    public function index()
    {

        $data = [
            'title'     => 'Download Peraturan',
            'download'      => $this->ContentPage->download(),
            'category'      => $this->ContentPage->category(),
        ];

        return view('v_download', $data);
    }
}
