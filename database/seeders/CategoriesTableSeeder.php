<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['id' => 1, 'type' => 'MCK Plus', 'layer' => 'mckplus'],
            ['id' => 2, 'type' => 'MCK Komunal', 'layer' => 'mckkomunal'],
            ['id' => 3, 'type' => 'MCK Umum', 'layer' => 'mckumum'],
            ['id' => 4, 'type' => 'IPAL Komunal', 'layer' => 'ipalkomunal'],
            ['id' => 5, 'type' => 'IPAL', 'layer' => 'ipal'],
            ['id' => 6, 'type' => 'Septiktank Komunal', 'layer' => 'septikkomunal'],
        ];

        Category::insert($categories);
    }
}
