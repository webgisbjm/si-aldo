<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Spm extends Model
{
    use HasFactory;

    public const YEAR_SELECT = [
        '2020' => '2020',
        '2021' => '2021',
        '2022' => '2022',
    ];

    public $table = 'spms';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'kelurahans_id',
        'qty_house',
        'year',
        'basic_target',
        'spalds_target',
        'spaldt_target',
        'basic_realization',
        'spalds_realization',
        'spaldt_realization',
        'created_at',
        'updated_at',
    ];

    public function kelurahans()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahans_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function dataSPM2020()
    {
        return DB::table('spms')
            ->where('year', '=', '2020')
            ->join('kelurahans', 'kelurahans.id', '=', 'spms.kelurahans_id')
            ->get();
    }

    public function dataSPM2021()
    {
        return DB::table('spms')
            ->where('year', '=', '2021')
            ->join('kelurahans', 'kelurahans.id', '=', 'spms.kelurahans_id')
            ->get();
    }

    public function dataSPM2022()
    {
        return DB::table('spms')
            ->where('year', '=', '2022')
            ->join('kelurahans', 'kelurahans.id', '=', 'spms.kelurahans_id')
            ->get();
    }
}
