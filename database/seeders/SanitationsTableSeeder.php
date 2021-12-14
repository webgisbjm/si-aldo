<?php

namespace Database\Seeders;

use App\Models\Sanitation;
use Illuminate\Database\Seeder;

class SanitationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sanitations = [
            ['id' => 1, 'year' => '2020', 'secure' => 4917, 'basic' => 35117, 'poor' => 605, 'kecamatan_id' => 1],
            ['id' => 2, 'year' => '2020', 'secure' => 1545, 'basic' => 39344, 'poor' => 1005, 'kecamatan_id' => 2],
            ['id' => 3, 'year' => '2020', 'secure' => 3531, 'basic' => 37782, 'poor' => 3650, 'kecamatan_id' => 3],
            ['id' => 4, 'year' => '2020', 'secure' => 1955, 'basic' => 24004, 'poor' => 613, 'kecamatan_id' => 4],
            ['id' => 5, 'year' => '2020', 'secure' => 618, 'basic' => 30476, 'poor' => 390, 'kecamatan_id' => 5],
        ];
        Sanitation::insert($sanitations);
    }
}
