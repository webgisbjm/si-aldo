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

    public function dataCategory()
    {

        return DB::table('categories')->get();
    }

    public function dataBuild()
    {
        return DB::table('builds')
            ->leftjoin('categories', 'categories.id', '=', 'builds.categories_id')
            ->rightjoin('kecamatans', 'kecamatans.id', '=', 'builds.kecamatans_id')
            ->rightjoin('kelurahans', 'kelurahans.id', '=', 'builds.kelurahans_id')
            ->get();
    }

    public function dataIPAL()
    {
        return DB::table('ipals')
            ->leftjoin('categories', 'categories.id', '=', 'ipals.categories_id')
            ->select('ipals.*', 'categories.*')
            ->join('kelurahans', 'kelurahans.id', '=', 'ipals.kelurahans_id')
            ->get();
    }
}
