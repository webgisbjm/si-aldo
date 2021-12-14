<?php

namespace Database\Seeders;

use App\Models\ContentTag;
use Illuminate\Database\Seeder;

class ContentTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['id' => 1, 'name' => 'Keciptakaryaan', 'slug' => 'ciptakarya'],
            ['id' => 2, 'name' => 'Lingkungan Hidup', 'slug' => 'lh'],
            ['id' => 3, 'name' => 'Perumahan dan Kawasan Permukiman', 'slug' => 'perkim'],
            ['id' => 4, 'name' => 'Air Limbah Domestik', 'slug' => 'ald'],
            ['id' => 5, 'name' => 'kesehatan', 'slug' => 'kesehatan'],
        ];
        ContentTag::insert($tags);
    }
}
