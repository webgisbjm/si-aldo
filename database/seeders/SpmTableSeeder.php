<?php

namespace Database\Seeders;

use App\Models\Spm;
use Illuminate\Database\Seeder;

class SpmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spms = [
            ['id' => 1, 'qty_house' => 4282, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 416, 'spaldt_target' => 3886, 'basic_realization' => 0, 'spalds_realization' => 36, 'spaldt_realization' => 44, 'kelurahans_id' => 1],
            ['id' => 2, 'qty_house' => 2696, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 1652, 'spaldt_target' => 1044, 'basic_realization' => 0, 'spalds_realization' => 52, 'spaldt_realization' => 261, 'kelurahans_id' => 2],
            ['id' => 3, 'qty_house' => 876, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 664, 'spaldt_target' => 212, 'basic_realization' => 0, 'spalds_realization' => 214, 'spaldt_realization' => 39, 'kelurahans_id' => 3],
            ['id' => 4, 'qty_house' => 849, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 275, 'spaldt_target' => 574, 'basic_realization' => 0, 'spalds_realization' => 161, 'spaldt_realization' => 386, 'kelurahans_id' => 4],
            ['id' => 5, 'qty_house' => 919, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 27, 'spaldt_target' => 892, 'basic_realization' => 0, 'spalds_realization' => 147, 'spaldt_realization' => 846, 'kelurahans_id' => 5],
            ['id' => 6, 'qty_house' => 570, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 310, 'spaldt_target' => 260, 'basic_realization' => 0, 'spalds_realization' => 30, 'spaldt_realization' => 42, 'kelurahans_id' => 6],
            ['id' => 7, 'qty_house' => 773, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 552, 'spaldt_target' => 221, 'basic_realization' => 0, 'spalds_realization' => 130, 'spaldt_realization' => 40, 'kelurahans_id' => 7],
            ['id' => 8, 'qty_house' => 491, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 66, 'spaldt_target' => 425, 'basic_realization' => 0, 'spalds_realization' => 0, 'spaldt_realization' => 284, 'kelurahans_id' => 8],
            ['id' => 9, 'qty_house' => 318, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 180, 'spaldt_target' => 138, 'basic_realization' => 0, 'spalds_realization' => 20, 'spaldt_realization' => 57, 'kelurahans_id' => 9],
            ['id' => 10, 'qty_house' => 834, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 519, 'spaldt_target' => 315, 'basic_realization' => 0, 'spalds_realization' => 57, 'spaldt_realization' => 1, 'kelurahans_id' => 10],
            ['id' => 11, 'qty_house' => 283, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 108, 'spaldt_target' => 175, 'basic_realization' => 0, 'spalds_realization' => 40, 'spaldt_realization' => 89, 'kelurahans_id' => 11],
            ['id' => 12, 'qty_house' => 2010, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 405, 'spaldt_target' => 1605, 'basic_realization' => 0, 'spalds_realization' => 20, 'spaldt_realization' => 535, 'kelurahans_id' => 12],
            ['id' => 13, 'qty_house' => 2203, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 1508, 'spaldt_target' => 695, 'basic_realization' => 0, 'spalds_realization' => 50, 'spaldt_realization' => 74, 'kelurahans_id' => 13],
            ['id' => 14, 'qty_house' => 327, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 309, 'spaldt_target' => 18, 'basic_realization' => 0, 'spalds_realization' => 50, 'spaldt_realization' => 8, 'kelurahans_id' => 14],
            ['id' => 15, 'qty_house' => 105, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 37, 'spaldt_target' => 68, 'basic_realization' => 0, 'spalds_realization' => 0, 'spaldt_realization' => 0, 'kelurahans_id' => 15],
            ['id' => 16, 'qty_house' => 4544, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 221, 'spaldt_target' => 4323, 'basic_realization' => 0, 'spalds_realization' => 37, 'spaldt_realization' => 41, 'kelurahans_id' => 16],
            ['id' => 17, 'qty_house' => 400, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 91, 'spaldt_target' => 309, 'basic_realization' => 0, 'spalds_realization' => 60, 'spaldt_realization' => 74, 'kelurahans_id' => 17],
            ['id' => 18, 'qty_house' => 274, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 231, 'spaldt_target' => 43, 'basic_realization' => 0, 'spalds_realization' => 118, 'spaldt_realization' => 36, 'kelurahans_id' => 18],
            ['id' => 19, 'qty_house' => 221, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 118, 'spaldt_target' => 103, 'basic_realization' => 0, 'spalds_realization' => 0, 'spaldt_realization' => 38, 'kelurahans_id' => 19],
            ['id' => 20, 'qty_house' => 2472, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 570, 'spaldt_target' => 1902, 'basic_realization' => 0, 'spalds_realization' => 32, 'spaldt_realization' => 0, 'kelurahans_id' => 20],
            ['id' => 21, 'qty_house' => 15, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 15, 'spaldt_target' => 0, 'basic_realization' => 0, 'spalds_realization' => 0, 'spaldt_realization' => 0, 'kelurahans_id' => 21],
            ['id' => 22, 'qty_house' => 40, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 0, 'spaldt_target' => 40, 'basic_realization' => 0, 'spalds_realization' => 0, 'spaldt_realization' => 60, 'kelurahans_id' => 22],
            ['id' => 23, 'qty_house' => 207, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 15, 'spaldt_target' => 192, 'basic_realization' => 0, 'spalds_realization' => 20, 'spaldt_realization' => 219, 'kelurahans_id' => 23],
            ['id' => 24, 'qty_house' => 89, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 49, 'spaldt_target' => 40, 'basic_realization' => 0, 'spalds_realization' => 180, 'spaldt_realization' => 48, 'kelurahans_id' => 24],
            ['id' => 25, 'qty_house' => 327, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 197, 'spaldt_target' => 130, 'basic_realization' => 0, 'spalds_realization' => 207, 'spaldt_realization' => 124, 'kelurahans_id' => 25],
            ['id' => 26, 'qty_house' => 96, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 75, 'spaldt_target' => 21, 'basic_realization' => 0, 'spalds_realization' => 73, 'spaldt_realization' => 14, 'kelurahans_id' => 26],
            ['id' => 27, 'qty_house' => 53, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 39, 'spaldt_target' => 14, 'basic_realization' => 0, 'spalds_realization' => 15, 'spaldt_realization' => 0, 'kelurahans_id' => 27],
            ['id' => 28, 'qty_house' => 236, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 160, 'spaldt_target' => 76, 'basic_realization' => 0, 'spalds_realization' => 118, 'spaldt_realization' => 25, 'kelurahans_id' => 28],
            ['id' => 29, 'qty_house' => 343, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 204, 'spaldt_target' => 139, 'basic_realization' => 0, 'spalds_realization' => 120, 'spaldt_realization' => 120, 'kelurahans_id' => 29],
            ['id' => 30, 'qty_house' => 347, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 101, 'spaldt_target' => 246, 'basic_realization' => 0, 'spalds_realization' => 0, 'spaldt_realization' => 202, 'kelurahans_id' => 30],
            ['id' => 31, 'qty_house' => 244, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 64, 'spaldt_target' => 180, 'basic_realization' => 0, 'spalds_realization' => 90, 'spaldt_realization' => 345, 'kelurahans_id' => 31],
            ['id' => 32, 'qty_house' => 53, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 53, 'spaldt_target' => 0, 'basic_realization' => 0, 'spalds_realization' => 45, 'spaldt_realization' => 156, 'kelurahans_id' => 32],
            ['id' => 33, 'qty_house' => 0, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 0, 'spaldt_target' => 0, 'basic_realization' => 0, 'spalds_realization' => 0, 'spaldt_realization' => 9, 'kelurahans_id' => 33],
            ['id' => 34, 'qty_house' => 179, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 40, 'spaldt_target' => 139, 'basic_realization' => 0, 'spalds_realization' => 50, 'spaldt_realization' => 174, 'kelurahans_id' => 34],
            ['id' => 35, 'qty_house' => 40, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 0, 'spaldt_target' => 40, 'basic_realization' => 0, 'spalds_realization' => 0, 'spaldt_realization' => 90, 'kelurahans_id' => 35],
            ['id' => 36, 'qty_house' => 207, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 0, 'spaldt_target' => 207, 'basic_realization' => 0, 'spalds_realization' => 0, 'spaldt_realization' => 252, 'kelurahans_id' => 36],
            ['id' => 37, 'qty_house' => 92, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 0, 'spaldt_target' => 92, 'basic_realization' => 0, 'spalds_realization' => 0, 'spaldt_realization' => 401, 'kelurahans_id' => 37],
            ['id' => 38, 'qty_house' => 144, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 60, 'spaldt_target' => 84, 'basic_realization' => 0, 'spalds_realization' => 50, 'spaldt_realization' => 51, 'kelurahans_id' => 38],
            ['id' => 39, 'qty_house' => 36, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 0, 'spaldt_target' => 36, 'basic_realization' => 0, 'spalds_realization' => 0, 'spaldt_realization' => 68, 'kelurahans_id' => 39],
            ['id' => 40, 'qty_house' => 74, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 0, 'spaldt_target' => 74, 'basic_realization' => 0, 'spalds_realization' => 0, 'spaldt_realization' => 25, 'kelurahans_id' => 40],
            ['id' => 41, 'qty_house' => 45, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 10, 'spaldt_target' => 35, 'basic_realization' => 0, 'spalds_realization' => 17, 'spaldt_realization' => 70, 'kelurahans_id' => 41],
            ['id' => 42, 'qty_house' => 190, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 190, 'spaldt_target' => 0, 'basic_realization' => 0, 'spalds_realization' => 62, 'spaldt_realization' => 0, 'kelurahans_id' => 42],
            ['id' => 43, 'qty_house' => 4508, 'year' => 2020, 'basic_target' => 4178, 'spalds_target' => 20, 'spaldt_target' => 310, 'basic_realization' => 1760, 'spalds_realization' => 105, 'spaldt_realization' => 203, 'kelurahans_id' => 43],
            ['id' => 44, 'qty_house' => 398, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 321, 'spaldt_target' => 77, 'basic_realization' => 0, 'spalds_realization' => 50, 'spaldt_realization' => 42, 'kelurahans_id' => 44],
            ['id' => 45, 'qty_house' => 4544, 'year' => 2020, 'basic_target' => 4507, 'spalds_target' => 37, 'spaldt_target' => 0, 'basic_realization' => 4192, 'spalds_realization' => 0, 'spaldt_realization' => 1, 'kelurahans_id' => 45],
            ['id' => 46, 'qty_house' => 2472, 'year' => 2020, 'basic_target' => 2395, 'spalds_target' => 32, 'spaldt_target' => 45, 'basic_realization' => 2363, 'spalds_realization' => 274, 'spaldt_realization' => 29, 'kelurahans_id' => 46],
            ['id' => 47, 'qty_house' => 341, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 319, 'spaldt_target' => 22, 'basic_realization' => 0, 'spalds_realization' => 235, 'spaldt_realization' => 12, 'kelurahans_id' => 47],
            ['id' => 48, 'qty_house' => 177, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 107, 'spaldt_target' => 70, 'basic_realization' => 0, 'spalds_realization' => 135, 'spaldt_realization' => 56, 'kelurahans_id' => 48],
            ['id' => 49, 'qty_house' => 505, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 111, 'spaldt_target' => 394, 'basic_realization' => 0, 'spalds_realization' => 71, 'spaldt_realization' => 1613, 'kelurahans_id' => 49],
            ['id' => 50, 'qty_house' => 4282, 'year' => 2020, 'basic_target' => 3146, 'spalds_target' => 36, 'spaldt_target' => 1100, 'basic_realization' => 4722, 'spalds_realization' => 37, 'spaldt_realization' => 1092, 'kelurahans_id' => 50],
            ['id' => 51, 'qty_house' => 736, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 733, 'spaldt_target' => 3, 'basic_realization' => 0, 'spalds_realization' => 156, 'spaldt_realization' => 76, 'kelurahans_id' => 51],
            ['id' => 52, 'qty_house' => 104, 'year' => 2020, 'basic_target' => 0, 'spalds_target' => 90, 'spaldt_target' => 14, 'basic_realization' => 0, 'spalds_realization' => 86, 'spaldt_realization' => 644, 'kelurahans_id' => 52],

        ];

        Spm::insert($spms);
    }
}
