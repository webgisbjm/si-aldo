<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const TYPE_SELECT = [
        'MCK Plus'           => 'MCK Plus',
        'MCK Komunal'        => 'MCK Komunal',
        'MCK Umum'           => 'MCK Umum',
        'IPAL Komunal'       => 'IPALD Komunal',
        'IPAL'               => 'IPALD Perumda PALD',
        'Septiktank Komunal' => 'Septiktank Komunal (KOTAKU)',
    ];

    public $table = 'categories';

    // protected $appends = [
    //     'icon',
    // ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'type',
        'layer',
        'icon',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getIcon()
    {
        if (substr($this->icon, 0, 5) == "https") {
            return $this->icon;
        }

        if ($this->icon) {
            return asset($this->icon);
        }

        return 'https://via.placeholder.com/32x37.png?text=No+Icon';
    }


    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
