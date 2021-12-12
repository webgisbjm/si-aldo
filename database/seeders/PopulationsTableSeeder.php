<?php

namespace Database\Seeders;

use App\Models\Density;
use Illuminate\Database\Seeder;

class PopulationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $densities = [
            ['id' => 1, 'area' => 12.24, 'population' => 15691, 'density' => 1282, 'year' => 2020, 'kelurahans_id' => 1],
            ['id' => 2, 'area' => 1.09, 'population' => 13467, 'density' => 12355, 'year' => 2020, 'kelurahans_id' => 2],
            ['id' => 3, 'area' => 0.37, 'population' => 19819, 'density' => 53565, 'year' => 2020, 'kelurahans_id' => 3],
            ['id' => 4, 'area' => 0.30, 'population' => 10738, 'density' => 35793, 'year' => 2020, 'kelurahans_id' => 4],
            ['id' => 5, 'area' => 0.20, 'population' => 23227, 'density' => 116135, 'year' => 2020, 'kelurahans_id' => 5],
            ['id' => 6, 'area' => 0.35, 'population' => 16771, 'density' => 47917, 'year' => 2020, 'kelurahans_id' => 6],
            ['id' => 7, 'area' => 0.66, 'population' => 13718, 'density' => 20785, 'year' => 2020, 'kelurahans_id' => 7],
            ['id' => 8, 'area' => 4.77, 'population' => 10181, 'density' => 2134, 'year' => 2020, 'kelurahans_id' => 8],
            ['id' => 9, 'area' => 3.93, 'population' => 7561, 'density' => 1924, 'year' => 2020, 'kelurahans_id' => 9],
            ['id' => 10, 'area' => 4.37, 'population' => 9343, 'density' => 2138, 'year' => 2020, 'kelurahans_id' => 10],
            ['id' => 11, 'area' => 1.38, 'population' => 6310, 'density' => 4573, 'year' => 2020, 'kelurahans_id' => 11],
            ['id' => 12, 'area' => 8.66, 'population' => 17122, 'density' => 1977, 'year' => 2020, 'kelurahans_id' => 12],
            ['id' => 13, 'area' => 1.49, 'population' => 16477, 'density' => 11088, 'year' => 2020, 'kelurahans_id' => 13],
            ['id' => 14, 'area' => 1.19, 'population' => 12973, 'density' => 10902, 'year' => 2020, 'kelurahans_id' => 14],
            ['id' => 15, 'area' => 0.7, 'population' => 12753, 'density' => 18219, 'year' => 2020, 'kelurahans_id' => 15],
            ['id' => 16, 'area' => 0.57, 'population' => 17648, 'density' => 30961, 'year' => 2020, 'kelurahans_id' => 16],
            ['id' => 17, 'area' => 7.2, 'population' => 14948, 'density' => 2076, 'year' => 2020, 'kelurahans_id' => 17],
            ['id' => 18, 'area' => 1.63, 'population' => 10495, 'density' => 6439, 'year' => 2020, 'kelurahans_id' => 18],
            ['id' => 19, 'area' => 1.12, 'population' => 11939, 'density' => 10660, 'year' => 2020, 'kelurahans_id' => 19],
            ['id' => 20, 'area' => 0.9, 'population' => 8593, 'density' => 9548, 'year' => 2020, 'kelurahans_id' => 20],
            ['id' => 21, 'area' => 2.13, 'population' => 12563, 'density' => 5898, 'year' => 2020, 'kelurahans_id' => 21],
            ['id' => 22, 'area' => 0.52, 'population' => 11199, 'density' => 21537, 'year' => 2020, 'kelurahans_id' => 22],
            ['id' => 23, 'area' => 1.30, 'population' => 10414, 'density' => 8011, 'year' => 2020, 'kelurahans_id' => 23],
            ['id' => 24, 'area' => 1.99, 'population' => 16030, 'density' => 8055, 'year' => 2020, 'kelurahans_id' => 24],
            ['id' => 25, 'area' => 1.64, 'population' => 25925, 'density' => 15808, 'year' => 2020, 'kelurahans_id' => 25],
            ['id' => 26, 'area' => 0.64, 'population' => 14655, 'density' => 22899, 'year' => 2020, 'kelurahans_id' => 26],
            ['id' => 27, 'area' => 0.69, 'population' => 7375, 'density' => 10689, 'year' => 2020, 'kelurahans_id' => 27],
            ['id' => 28, 'area' => 0.66, 'population' => 22357, 'density' => 33874, 'year' => 2020, 'kelurahans_id' => 28],
            ['id' => 29, 'area' => 2.16, 'population' => 17390, 'density' => 8051, 'year' => 2020, 'kelurahans_id' => 29],
            ['id' => 30, 'area' => 3.48, 'population' => 11619, 'density' => 3339, 'year' => 2020, 'kelurahans_id' => 30],
            ['id' => 31, 'area' => 0.48, 'population' => 5029, 'density' => 10579, 'year' => 2020, 'kelurahans_id' => 31],
            ['id' => 32, 'area' => 0.46, 'population' => 2865, 'density' => 6257, 'year' => 2020, 'kelurahans_id' => 32],
            ['id' => 33, 'area' => 0.48, 'population' => 5384, 'density' => 11154, 'year' => 2020, 'kelurahans_id' => 33],
            ['id' => 34, 'area' => 1.75, 'population' => 26988, 'density' => 15466, 'year' => 2020, 'kelurahans_id' => 34],
            ['id' => 35, 'area' => 0.79, 'population' => 1628, 'density' => 2055, 'year' => 2020, 'kelurahans_id' => 35],
            ['id' => 36, 'area' => 0.46, 'population' => 5409, 'density' => 11652, 'year' => 2020, 'kelurahans_id' => 36],
            ['id' => 37, 'area' => 0.41, 'population' => 5694, 'density' => 13957, 'year' => 2020, 'kelurahans_id' => 37],
            ['id' => 38, 'area' => 0.29, 'population' => 6831, 'density' => 23230, 'year' => 2020, 'kelurahans_id' => 38],
            ['id' => 39, 'area' => 0.54, 'population' => 6125, 'density' => 11282, 'year' => 2020, 'kelurahans_id' => 39],
            ['id' => 40, 'area' => 0.53, 'population' => 6731, 'density' => 12652, 'year' => 2020, 'kelurahans_id' => 40],
            ['id' => 41, 'area' => 0.22, 'population' => 6014, 'density' => 26714, 'year' => 2020, 'kelurahans_id' => 41],
            ['id' => 42, 'area' => 0.23, 'population' => 8781, 'density' => 37983, 'year' => 2020, 'kelurahans_id' => 42],
            ['id' => 43, 'area' => 2.97, 'population' => 11795, 'density' => 3971, 'year' => 2020, 'kelurahans_id' => 43],
            ['id' => 44, 'area' => 0.92, 'population' => 9251, 'density' => 10055, 'year' => 2020, 'kelurahans_id' => 44],
            ['id' => 45, 'area' => 1.23, 'population' => 14321, 'density' => 11643, 'year' => 2020, 'kelurahans_id' => 45],
            ['id' => 46, 'area' => 4.69, 'population' => 10331, 'density' => 2203, 'year' => 2020, 'kelurahans_id' => 46],
            ['id' => 47, 'area' => 1.73, 'population' => 16327, 'density' => 9438, 'year' => 2020, 'kelurahans_id' => 47],
            ['id' => 48, 'area' => 1.52, 'population' => 12379, 'density' => 8144, 'year' => 2020, 'kelurahans_id' => 48],
            ['id' => 49, 'area' => 1.47, 'population' => 21627, 'density' => 14712, 'year' => 2020, 'kelurahans_id' => 49],
            ['id' => 50, 'area' => 0.85, 'population' => 13662, 'density' => 16073, 'year' => 2020, 'kelurahans_id' => 50],
            ['id' => 51, 'area' => 1.64, 'population' => 9878, 'density' => 6023, 'year' => 2020, 'kelurahans_id' => 51],
            ['id' => 52, 'area' => 6.47, 'population' => 31312, 'density' => 4840, 'year' => 2020, 'kelurahans_id' => 52],
        ];

        Density::insert($densities);
    }
}
