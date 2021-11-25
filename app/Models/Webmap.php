<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Webmap extends Model
{
    use HasFactory;

    public function dataKecamatan()
    {
        return DB::table('kecamatans')->get();
    }

    public function detailKecamatan($id)
    {
        return DB::table('kecamatans')->where($id, $id)->first();
    }

    public function dataKelurahan()
    {
        return DB::table('kelurahans')->get();
    }

    public function dataBuild()
    {
        return DB::table('builds')->get();
    }
}
