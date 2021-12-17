<?php

namespace Database\Seeders;

use App\Models\Ipal;
use Illuminate\Database\Seeder;

class IpalKelurahanTableSeeder extends Seeder
{
    public function run()
    {
        Ipal::findOrFail(1)->services()->sync([23, 32, 33, 35]);
        Ipal::findOrFail(2)->services()->sync([7, 8, 13, 14, 31, 36, 37]);
        Ipal::findOrFail(3)->services()->sync([44, 49, 50, 51]);
        Ipal::findOrFail(4)->services()->sync([2, 3, 9]);
        Ipal::findOrFail(5)->services()->sync([45, 47, 48]);
        Ipal::findOrFail(6)->services()->sync([2, 3, 9]);
    }
}
