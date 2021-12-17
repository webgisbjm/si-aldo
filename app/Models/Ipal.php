<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Ipal extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    public const YEAR_SELECT = [
        '2001' => '2001',
        '2008' => '2008',
        '2009' => '2009',
        '2010' => '2010',
        '2011' => '2011',
        '2014' => '2014',
        '2019' => '2019',
        '2020' => '2020',
        '2021' => '2021',
        '2022' => '2022',
        '2023' => '2023',
        '2024' => '2024',
    ];

    public $table = 'ipals';

    protected $appends = [
        'photos',
        'coordinate', 'map_popup_content',

    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'kelurahans_id',
        'categories_id',
        'name',
        'address',
        'lat',
        'lng',
        'capacity',
        'year',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function kelurahans()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahans_id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function services()
    {
        return $this->belongsToMany(Kelurahan::class);
    }


    public function getPhotosAttribute()
    {
        $files = $this->getMedia('photos');
        $files->each(function ($item) {
            $item->url = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
            $item->preview = $item->getUrl('preview');
        });

        return $files;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */

    /**
     * Get outlet name_link attribute.
     *
     * @return string
     */
    public function getNameLinkAttribute()
    {
        $title = __('global.show_detail_title');
        $link = '<a href="' . route('admin.ipals.show', $this) . '"';
        $link .= ' title="' . $title . '">';
        $link .= $this->id;
        $link .= '</a>';

        return $link;
    }

    public function getCoordinateAttribute()
    {
        if ($this->lat && $this->lng) {
            return $this->lat . ', ' . $this->lng;
        }
    }

    public function getMapPopupContentAttribute()
    {
        $mapPopupContent = '';
        $mapPopupContent .= '<div class="my-2"><strong>' . __('global.id_build') . ':</strong><br>' . $this->name_link . '</div>';
        $mapPopupContent .= '<div class="my-2"><strong>' . __('global.coordinates') . ':</strong><br>' . $this->coordinate . '</div>';

        return $mapPopupContent;
    }

    public function ipalgallery($id)
    {
        return DB::table('ipals')
            ->join('media', 'media.model_id', '=', 'ipals.id')
            ->where('ipals.id', $id)
            ->where('media.model_type', '=', 'App\Models\Ipal')
            ->select('media.file_name', 'media.id as idm', 'ipals.id as id')
            ->get();
    }
}
