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
            ['id' => 1, 'type' => 'MCK Plus', 'layer' => 'mckplus', 'icon' => null],
            ['id' => 2, 'type' => 'MCK Komunal', 'layer' => 'mckkomunal', 'icon' => null],
            ['id' => 3, 'type' => 'MCK Umum', 'layer' => 'mckumum', 'icon' => null],
            ['id' => 4, 'type' => 'IPAL Komunal', 'layer' => 'ipalkomunal', 'icon' => null],
            ['id' => 5, 'type' => 'IPAL', 'layer' => 'ipal', 'icon' => null],
            ['id' => 6, 'type' => 'Septiktank Komunal', 'layer' => 'septikkomunal', 'icon' => null],
        ];

        Category::insert($categories);
    }
}
