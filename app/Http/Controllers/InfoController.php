<?php

namespace App\Http\Controllers;

use App\Models\Infographic;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->Infographic = new Infographic();
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $data = [
            'title'     => 'Infografis',
            'info'      => $this->Infographic->cardInfo(),
        ];

        return view('v_info', $data);
    }

}
