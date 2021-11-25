<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mapnav extends Model
{
    use HasFactory;

    public function dataKecamatan()
    {
        return DB::table('kecamatans')->get();
    }
}
