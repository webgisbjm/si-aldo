<?php

namespace Database\Seeders;

use App\Models\Ipal;
use Illuminate\Database\Seeder;

class IpalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ipals = [
            [
                'id' => 1, 'name' => 'IPAL Lambung Mangkurat', 'address' => 'Jl. Lambung Mangkurat Komp. DPRD II RT.14 No.67', 'lat' => '-3.325697', 'lng' => '114.59',
                'capacity' => 1000, 'year' => 2001, 'kelurahans_id' => 32, 'categories_id' => 5
            ],
            [
                'id' => 2, 'name' => 'IPAL Pekapuran', 'address' => 'Jl. Pasar Pagi Nomor 89 RT. 02', 'lat' => '-3.328403', 'lng' => '114.596',
                'capacity' => 2500, 'year' => 2008, 'kelurahans_id' => 31, 'categories_id' => 5
            ],
            [
                'id' => 3, 'name' => 'IPAL HKSN ', 'address' => 'Jl. HKSN No. 09 Rt. 08', 'lat' => '-3.280801', 'lng' => '114.578',
                'capacity' => 5000, 'year' => 2009, 'kelurahans_id' => 49, 'categories_id' => 5
            ],
            [
                'id' => 4, 'name' => 'IPAL Basirih', 'address' => 'Jl. Garuda VI Perumnas BLB RT.02 RW.01', 'lat' => '-3.352729', 'lng' => '114.583',
                'capacity' => 2000, 'year' => 2010, 'kelurahans_id' => 12, 'categories_id' => 5
            ],
            [
                'id' => 5, 'name' => 'IPAL Sungai Andai', 'address' => 'Jl. Komplek Perumnas Sungai Andai', 'lat' => '-3.292426', 'lng' => '114.616',
                'capacity' => 3000, 'year' => 2011, 'kelurahans_id' => 52, 'categories_id' => 5
            ],
            [
                'id' => 6, 'name' => 'IPAL Tanjung Pagar ', 'address' => 'Jl. Gerilya Komplek Mahatama', 'lat' => '-3.355064', 'lng' => '114.603',
                'capacity' => 2000, 'year' => 2011, 'kelurahans_id' => 4, 'categories_id' => 5
            ],
            [
                'id' => 7, 'name' => 'IPAL Sultan Adam', 'address' => 'Jl. Sultan Adam', 'lat' => '-3.299', 'lng' => '114.604',
                'capacity' => 2000, 'year' => null, 'kelurahans_id' => 47, 'categories_id' => 5
            ],
        ];

        Ipal::insert($ipals);
    }
}
