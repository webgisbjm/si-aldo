<?php

namespace Database\Seeders;

use App\Models\Secured;
use Illuminate\Database\Seeder;

class SecuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $secureds = [
            ['id' => 1, 'communal' => 1494, 'individual' => 429, 'mck_user' => 720, 'qty_sr_pdpal' => 2274, 'year' => '2020', 'kecamatan_id' => 1],
            ['id' => 2, 'communal' => 659, 'individual' => 50, 'mck_user' => 683, 'qty_sr_pdpal' => 153, 'year' => '2020', 'kecamatan_id' => 2],
            ['id' => 3, 'communal' => 1069, 'individual' => 492, 'mck_user' => 415, 'qty_sr_pdpal' => 1555, 'year' => '2020', 'kecamatan_id' => 3],
            ['id' => 4, 'communal' => 324, 'individual' => 29, 'mck_user' => 285, 'qty_sr_pdpal' => 1317, 'year' => '2020', 'kecamatan_id' => 4],
            ['id' => 5, 'communal' => 271, 'individual' => 76, 'mck_user' => 271, 'qty_sr_pdpal' => 0, 'year' => '2020', 'kecamatan_id' => 5],
        ];
        Secured::insert($secureds);
    }
}
