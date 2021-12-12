<?php

namespace Database\Seeders;

use App\Models\Risk;
use Illuminate\Database\Seeder;

class RisksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $risks = [
            ['id' => 1, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 1],
            ['id' => 2, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 2],
            ['id' => 3, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 3],
            ['id' => 4, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 4],
            ['id' => 5, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 5],
            ['id' => 6, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 6],
            ['id' => 7, 'year' => 2020, 'level' => 3, 'kelurahan_id' => 7],
            ['id' => 8, 'year' => 2020, 'level' => 4, 'kelurahan_id' => 8],
            ['id' => 9, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 9],
            ['id' => 10, 'year' => 2020, 'level' => 4, 'kelurahan_id' => 10],
            ['id' => 11, 'year' => 2020, 'level' => 3, 'kelurahan_id' => 11],
            ['id' => 12, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 12],
            ['id' => 13, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 13],
            ['id' => 14, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 14],
            ['id' => 15, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 15],
            ['id' => 16, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 16],
            ['id' => 17, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 17],
            ['id' => 18, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 18],
            ['id' => 19, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 19],
            ['id' => 20, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 20],
            ['id' => 21, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 21],
            ['id' => 22, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 22],
            ['id' => 23, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 23],
            ['id' => 24, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 24],
            ['id' => 25, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 25],
            ['id' => 26, 'year' => 2020, 'level' => 4, 'kelurahan_id' => 26],
            ['id' => 27, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 27],
            ['id' => 28, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 28],
            ['id' => 29, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 29],
            ['id' => 30, 'year' => 2020, 'level' => 3, 'kelurahan_id' => 30],
            ['id' => 31, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 31],
            ['id' => 32, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 32],
            ['id' => 33, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 33],
            ['id' => 34, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 34],
            ['id' => 35, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 35],
            ['id' => 36, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 36],
            ['id' => 37, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 37],
            ['id' => 38, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 38],
            ['id' => 39, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 39],
            ['id' => 40, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 40],
            ['id' => 41, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 41],
            ['id' => 42, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 42],
            ['id' => 43, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 43],
            ['id' => 44, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 44],
            ['id' => 45, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 45],
            ['id' => 46, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 46],
            ['id' => 47, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 47],
            ['id' => 48, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 48],
            ['id' => 49, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 49],
            ['id' => 50, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 50],
            ['id' => 51, 'year' => 2020, 'level' => 1, 'kelurahan_id' => 51],
            ['id' => 52, 'year' => 2020, 'level' => 2, 'kelurahan_id' => 52],

        ];

        Risk::insert($risks);
    }
}
