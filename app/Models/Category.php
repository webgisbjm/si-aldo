<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Spatie\MediaLibrary\HasMedia;
// use Spatie\MediaLibrary\InteractsWithMedia;
// use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Category extends Model
// implements HasMedia
{
    use SoftDeletes;
    // use InteractsWithMedia;
    use HasFactory;

    public const TYPE_SELECT = [
        'MCK Plus'           => 'MCK Plus',
        'MCK Komunal'        => 'MCK Komunal',
        'MCK Umum'           => 'MCK Umum',
        'IPAL Komunal'       => 'IPAL Komunal',
        'IPAL'               => 'IPAL Perumda PALD',
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



    // public function registerMediaConversions(Media $media = null): void
    // {
    //     $this->addMediaConversion('thumb')->fit('crop', 50, 50);
    //     $this->addMediaConversion('preview')->fit('crop', 120, 120);
    // }

    // public function getIconAttribute()
    // {
    //     $file = $this->getMedia('icon')->last();
    //     if ($file) {
    //         $file->url       = $file->getUrl();
    //         $file->thumbnail = $file->getUrl('thumb');
    //         $file->preview   = $file->getUrl('preview');
    //     }

    //     return $file;
    // }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
