<?php

namespace Database\Seeders;

use App\Models\Build;
use Illuminate\Database\Seeder;

class BuildsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $builds = [
            [
                'id' => 1, 'address' => 'Jl. Tanjung Keramat RT. 07 RW. 03', 'lat' => '-3.345970', 'lng' => '114.562431',
                'status' => 'Aktif', 'funded' => 'APBD', 'categories_id' => 2, 'kecamatans_id' => 2, 'kelurahans_id' => 28
            ],
            [
                'id' => 2, 'address' => 'Jl. Veteran Gg. Dahlia RT. 25', 'lat' => '-3.319153', 'lng' => '114.610736',
                'status' => 'Aktif', 'funded' => 'APBD', 'categories_id' => 2, 'kecamatans_id' => 5, 'kelurahans_id' => 18
            ],
            [
                'id' => 3, 'address' => 'Gg. Tumaritis RT. 23 RW. 01', 'lat' => '-3.336031', 'lng' => '114.613651',
                'status' => 'Aktif', 'funded' => 'APBD', 'categories_id' => 2, 'kecamatans_id' => 5, 'kelurahans_id' => 14
            ],
            [
                'id' => 4, 'address' => 'Jl. AES Nasution Gg. 4 Samudin RT. 28', 'lat' => '-3.318691', 'lng' => '114.596504',
                'status' => 'Aktif', 'funded' => 'APBD', 'categories_id' => 2, 'kecamatans_id' => 4, 'kelurahans_id' => 38
            ],
            [
                'id' => 5, 'address' => 'Jl. Melayu Laut RT. 05 RW. 11', 'lat' => '-3.31695', 'lng' => '114.60397',
                'status' => 'Aktif', 'funded' => 'APBD', 'categories_id' => 2, 'kecamatans_id' => 4, 'kelurahans_id' => 42
            ],
            [
                'id' => 6, 'address' => 'Jl. Komplek Nusa Indah Gg. 1 RT. 22', 'lat' => '-3.335804', 'lng' => '114.58939',
                'status' => 'Aktif', 'funded' => 'APBD', 'categories_id' => 2, 'kecamatans_id' => 4, 'kelurahans_id' => 42
            ],
            [
                'id' => 21, 'address' => 'Jl. Alalak Utara, Gg. Keluarga', 'lat' => '-3.26915', 'lng' => '114.57186',
                'status' => 'Aktif', 'funded' => 'APBD', 'categories_id' => 4, 'kecamatans_id' => 1, 'kelurahans_id' => 49
            ],
            [
                'id' => 22, 'address' => 'Gang Nusa Indah', 'lat' => '-3.320667', 'lng' => '114.614706',
                'status' => 'Aktif', 'funded' => 'APBD', 'categories_id' => 4, 'kecamatans_id' => 5, 'kelurahans_id' => 17
            ],

        ];

        Build::insert($builds);
    }
}
