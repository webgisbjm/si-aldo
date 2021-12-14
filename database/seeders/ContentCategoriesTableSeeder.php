<?php

namespace Database\Seeders;

use App\Models\ContentCategory;
use Illuminate\Database\Seeder;

class ContentCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['id' => 1, 'name' => 'Undang-Undang', 'slug' => 'uu'],
            ['id' => 2, 'name' => 'Peraturan Pemerintah', 'slug' => 'pp'],
            ['id' => 3, 'name' => 'Peraturan Presiden', 'slug' => 'perpres'],
            ['id' => 4, 'name' => 'PermenLHK', 'slug' => 'permen-lhk'],
            ['id' => 5, 'name' => 'PermenLH', 'slug' => 'permen-lh'],
            ['id' => 6, 'name' => 'Permen PUPR', 'slug' => 'permen-pupr'],
            ['id' => 7, 'name' => 'Permen PU', 'slug' => 'permen-pu'],
            ['id' => 8, 'name' => 'Permenkes', 'slug' => 'permen-kes'],
            ['id' => 9, 'name' => 'Keputusan Presiden', 'slug' => 'keppres'],
            ['id' => 10, 'name' => 'KepmenLHK', 'slug' => 'kepmen-lhk'],
            ['id' => 11, 'name' => 'KepmenLH', 'slug' => 'kepmen-lh'],
            ['id' => 12, 'name' => 'Kepmen PUPR', 'slug' => 'kepmen-pupr'],
            ['id' => 13, 'name' => 'Kepmen PU', 'slug' => 'kepmen-pu'],
            ['id' => 14, 'name' => 'Kepmenkes', 'slug' => 'kepmen-kes'],
            ['id' => 15, 'name' => 'Perda Prov. Kalsel', 'slug' => 'perdaprov'],
            ['id' => 16, 'name' => 'Perda Kota Banjarmasin', 'slug' => 'perda'],
            ['id' => 17, 'name' => 'Petunjuk Teknis', 'slug' => 'juknis'],
        ];
        ContentCategory::insert($categories);
    }
}
