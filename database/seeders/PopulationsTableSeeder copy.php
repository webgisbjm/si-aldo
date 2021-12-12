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
        $populations = [
            ['id' => 1, 'name' => 'Mantuil', 'area' => 0, 'population' => 0, 'density' => 0, 'year' => 0, 'kelurahans_id' => 1],
            ['id' => 2, 'name' => 'Kelayan Selatan', 'kelurahans_id' => 2],
            ['id' => 3, 'name' => 'Kelayan Timur', 'kelurahans_id' => 3],
            ['id' => 4, 'name' => 'Tanjung Pagar', 'kelurahans_id' => 4],
            ['id' => 5, 'name' => 'Pemurus Dalam', 'kelurahans_id' => 5],
            ['id' => 6, 'name' => 'Pemurus Baru', 'kelurahans_id' => 6],
            ['id' => 7, 'name' => 'Murung Raya', 'kelurahans_id' => 7],
            ['id' => 8, 'name' => 'Kelayan Dalam', 'kelurahans_id' => 8],
            ['id' => 9, 'name' => 'Kelayan Tengah', 'kelurahans_id' => 9],
            ['id' => 10, 'name' => 'Pekauman', 'kelurahans_id' => 10],
            ['id' => 11, 'name' => 'Kelayan Barat', 'kelurahans_id' => 11],
            ['id' => 12, 'name' => 'Basirih Selatan', 'kelurahans_id' => 12],
            ['id' => 13, 'name' => 'Pekapuran Raya', 'kelurahans_id' => 13],
            ['id' => 14, 'name' => 'Karang Mekar', 'kelurahans_id' => 14],
            ['id' => 15, 'name' => 'Kebun Bunga', 'kelurahans_id' => 15],
            ['id' => 16, 'name' => 'Sungai Lulut', 'kelurahans_id' => 16],
            ['id' => 17, 'name' => 'Kuripan', 'kelurahans_id' => 17],
            ['id' => 18, 'name' => 'Sungai Bilu', 'kelurahans_id' => 18],
            ['id' => 19, 'name' => 'Pengambangan', 'kelurahans_id' => 19],
            ['id' => 20, 'name' => 'Benua Anyar', 'kelurahans_id' => 20],
            ['id' => 21, 'name' => 'Pemurus Luar', 'kelurahans_id' => 21],
            ['id' => 22, 'name' => 'Teluk Tiram', 'kelurahans_id' => 22],
            ['id' => 23, 'name' => 'Telawang', 'kelurahans_id' => 23],
            ['id' => 24, 'name' => 'Telaga Biru', 'kelurahans_id' => 24],
            ['id' => 25, 'name' => 'Pelambuan', 'kelurahans_id' => 25],
            ['id' => 26, 'name' => 'Belitung Selatan', 'kelurahans_id' => 26],
            ['id' => 27, 'name' => 'Belitung Utara', 'kelurahans_id' => 27],
            ['id' => 28, 'name' => 'Basirih', 'kelurahans_id' => 28],
            ['id' => 29, 'name' => 'Kuin Cerucuk', 'kelurahans_id' => 29],
            ['id' => 30, 'name' => 'Kuin Selatan', 'kelurahans_id' => 30],
            ['id' => 31, 'name' => 'Kelayan Luar', 'kelurahans_id' => 31],
            ['id' => 32, 'name' => 'Kertak Baru Ilir', 'kelurahans_id' => 32],
            ['id' => 33, 'name' => 'Mawar', 'kelurahans_id' => 33],
            ['id' => 34, 'name' => 'Teluk Dalam', 'kelurahans_id' => 34],
            ['id' => 35, 'name' => 'Kertak Baru Ulu', 'kelurahans_id' => 35],
            ['id' => 36, 'name' => 'Pekapuran Laut', 'kelurahans_id' => 36],
            ['id' => 37, 'name' => 'Sungai Baru', 'kelurahans_id' => 37],
            ['id' => 38, 'name' => 'Gadang', 'kelurahans_id' => 38],
            ['id' => 39, 'name' => 'Antasan Besar', 'kelurahans_id' => 39],
            ['id' => 40, 'name' => 'Pasar Lama', 'kelurahans_id' => 40],
            ['id' => 41, 'name' => 'Seberang Mesjid', 'kelurahans_id' => 41],
            ['id' => 42, 'name' => 'Melayu', 'kelurahans_id' => 42],
            ['id' => 43, 'name' => 'Kuin Utara', 'kelurahans_id' => 43],
            ['id' => 44, 'name' => 'Pangeran', 'kelurahans_id' => 44],
            ['id' => 45, 'name' => 'Sungai Miai', 'kelurahans_id' => 45],
            ['id' => 46, 'name' => 'Antasan Kecil Timur', 'kelurahans_id' => 46],
            ['id' => 47, 'name' => 'Surgi Mufti', 'kelurahans_id' => 47],
            ['id' => 48, 'name' => 'Sungai Jingah', 'kelurahans_id' => 48],
            ['id' => 49, 'name' => 'Alalak Utara', 'kelurahans_id' => 49],
            ['id' => 50, 'name' => 'Alalak Selatan', 'kelurahans_id' => 50],
            ['id' => 51, 'name' => 'Alalak Tengah', 'kelurahans_id' => 51],
            ['id' => 52, 'name' => 'Sungai Andai', 'kelurahans_id' => 52],

        ];

        Density::insert($populations);
    }
}
