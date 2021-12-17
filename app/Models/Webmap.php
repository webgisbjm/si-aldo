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
        return DB::table('kecamatans')->where('id', $id)->first();
    }

    public function dataKelurahan()
    {
        return DB::table('kelurahans')->get();
    }

    public function dataKelurahanByKec($id)
    {
        return DB::table('kelurahans')
            ->where('kelurahans.kecamatans_id', $id)
            ->pluck('name');
    }

    public function dataCategory()
    {

        return DB::table('categories')->get();
    }

    public function dataBuild($id)
    {
        return DB::table('builds')
            ->where('builds.deleted_at', '=', null)
            ->where('builds.kecamatans_id', $id)
            ->leftjoin('categories', 'categories.id', '=', 'builds.categories_id')
            ->rightjoin('kecamatans', 'kecamatans.id', '=', 'builds.kecamatans_id')
            ->rightjoin('kelurahans', 'kelurahans.id', '=', 'builds.kelurahans_id')
            ->select('builds.*', 'builds.id as buildId', 'categories.*', 'kelurahans.id as kelID', 'kelurahans.name')
            ->get();
    }


    public function dataMCKUmum()
    {
        return DB::table('builds')
            ->where('builds.deleted_at', '=', null)
            ->leftjoin('categories', 'categories.id', '=', 'builds.categories_id')
            ->where('categories.type', '=', 'MCK Umum')
            ->rightjoin('kecamatans', 'kecamatans.id', '=', 'builds.kecamatans_id')
            ->rightjoin('kelurahans', 'kelurahans.id', '=', 'builds.kelurahans_id')
            ->select('builds.*', 'builds.id as buildId', 'categories.*', 'kelurahans.id as kelID', 'kelurahans.name')
            ->get();
    }

    public function dataMCKUmumKec($id)
    {
        return DB::table('builds')
            ->where('builds.deleted_at', '=', null)
            ->where('builds.kecamatans_id', $id)
            ->leftjoin('categories', 'categories.id', '=', 'builds.categories_id')
            ->where('categories.type', '=', 'MCK Umum')
            ->rightjoin('kecamatans', 'kecamatans.id', '=', 'builds.kecamatans_id')
            ->rightjoin('kelurahans', 'kelurahans.id', '=', 'builds.kelurahans_id')
            ->select('builds.*', 'builds.id as buildId', 'categories.*', 'kelurahans.id as kelID', 'kelurahans.name')
            ->get();
    }

    public function dataMCKKomunal()
    {
        return DB::table('builds')
            ->where('builds.deleted_at', '=', null)
            ->leftjoin('categories', 'categories.id', '=', 'builds.categories_id')
            ->where('categories.type', '=', 'MCK Komunal')
            ->rightjoin('kecamatans', 'kecamatans.id', '=', 'builds.kecamatans_id')
            ->rightjoin('kelurahans', 'kelurahans.id', '=', 'builds.kelurahans_id')
            ->select('builds.*', 'builds.id as buildId', 'categories.*', 'kelurahans.id as kelID', 'kelurahans.name')
            ->get();
    }

    public function dataMCKKomunalKec($id)
    {
        return DB::table('builds')
            ->where('builds.deleted_at', '=', null)
            ->where('builds.kecamatans_id', $id)
            ->leftjoin('categories', 'categories.id', '=', 'builds.categories_id')
            ->where('categories.type', '=', 'MCK Komunal')
            ->rightjoin('kecamatans', 'kecamatans.id', '=', 'builds.kecamatans_id')
            ->rightjoin('kelurahans', 'kelurahans.id', '=', 'builds.kelurahans_id')
            ->select('builds.*', 'builds.id as buildId', 'categories.*', 'kelurahans.id as kelID', 'kelurahans.name')
            ->get();
    }

    public function dataIPALKomunal()
    {
        return DB::table('builds')
            ->where('builds.deleted_at', '=', null)
            ->leftjoin('categories', 'categories.id', '=', 'builds.categories_id')
            ->where('categories.type', '=', 'IPAL Komunal')
            ->rightjoin('kecamatans', 'kecamatans.id', '=', 'builds.kecamatans_id')
            ->rightjoin('kelurahans', 'kelurahans.id', '=', 'builds.kelurahans_id')
            ->select('builds.*', 'builds.id as buildId', 'categories.*', 'kelurahans.id as kelID', 'kelurahans.name')
            ->get();
    }

    public function dataIPALKomunalKec($id)
    {
        return DB::table('builds')
            ->where('builds.deleted_at', '=', null)
            ->where('builds.kecamatans_id', $id)
            ->leftjoin('categories', 'categories.id', '=', 'builds.categories_id')
            ->where('categories.type', '=', 'IPAL Komunal')
            ->rightjoin('kecamatans', 'kecamatans.id', '=', 'builds.kecamatans_id')
            ->rightjoin('kelurahans', 'kelurahans.id', '=', 'builds.kelurahans_id')
            ->select('builds.*', 'builds.id as buildId', 'categories.*', 'kelurahans.id as kelID', 'kelurahans.name')
            ->get();
    }

    public function dataMCKPlus()
    {
        return DB::table('builds')
            ->where('builds.deleted_at', '=', null)
            ->join('categories', 'categories.id', '=', 'builds.categories_id')
            ->where('categories.type', '=', 'MCK Plus')
            ->join('kelurahans', 'kelurahans.id', '=', 'builds.kelurahans_id')
            ->select('builds.*', 'builds.id as buildId', 'categories.*', 'kelurahans.id as kelID', 'kelurahans.name')
            ->get();
    }

    public function dataMCKPlusKec($id)
    {
        return DB::table('builds')
            ->where('builds.deleted_at', '=', null)
            ->where('builds.kecamatans_id', $id)
            ->join('categories', 'categories.id', '=', 'builds.categories_id')
            ->where('categories.type', '=', 'MCK Plus')
            ->join('kelurahans', 'kelurahans.id', '=', 'builds.kelurahans_id')
            ->select('builds.*', 'builds.id as buildId', 'categories.*', 'kelurahans.id as kelID', 'kelurahans.name')
            ->get();
    }

    public function dataIPAL()
    {
        return DB::table('ipals')
            ->leftjoin('categories', 'categories.id', '=', 'ipals.categories_id')
            ->select('ipals.*', 'categories.*')
            ->join('kelurahans', 'kelurahans.id', '=', 'ipals.kelurahans_id')
            ->select('kelurahans.name as kelName', 'ipals.name as ipalName', 'ipals.id as ipaldId', 'ipals.lat', 'ipals.lng', 'ipals.lat', 'ipals.address', 'ipals.year', 'ipals.capacity', 'categories.*')
            ->get();
    }

    public function dataIPALKec($id)
    {
        return DB::table('ipals')
            ->leftjoin('categories', 'categories.id', '=', 'ipals.categories_id')
            ->join('kelurahans', 'kelurahans.id', '=', 'ipals.kelurahans_id')
            ->where('kelurahans.kecamatans_id', $id)
            ->select('ipals.*', 'categories.*')
            ->select('kelurahans.name as kelName', 'ipals.*', 'ipals.name as ipalName', 'categories.*')
            ->get();
    }

    public function dataKotaku()
    {
        return DB::table('nsups')
            ->where('nsups.deleted_at', '=', null)
            ->leftjoin('categories', 'categories.id', '=', 'nsups.categories_id')
            ->select('nsups.*', 'categories.*')
            ->join('kelurahans', 'kelurahans.id', '=', 'nsups.kelurahans_id')
            ->join('kecamatans', 'kecamatans.id', '=', 'nsups.kecamatans_id')
            ->get();
    }

    public function dataSanitasi($id)
    {
        return DB::table('sanitations')
            ->where('sanitations.kecamatan_id', $id)
            ->join('kecamatans', 'kecamatans.id', '=', 'sanitations.kecamatan_id')
            ->first();
    }

    public function dataAman($id)
    {
        return DB::table('secureds')
            ->where('secureds.kecamatan_id', $id)
            ->join('kecamatans', 'kecamatans.id', '=', 'secureds.kecamatan_id')
            ->first();
    }

    public function dataDensity($id)
    {
        return DB::table('densities')
            ->join('kelurahans', 'kelurahans.id', '=', 'densities.kelurahans_id')
            ->where('kelurahans.kecamatans_id', $id)
            ->get();
    }
}
