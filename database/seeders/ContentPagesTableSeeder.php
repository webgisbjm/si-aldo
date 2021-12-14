<?php

namespace Database\Seeders;

use App\Models\ContentPage;
use Illuminate\Database\Seeder;

class ContentPagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            ['id' => 1, 'no' => 22, 'year' => 2021, 'title' => 'Penyelenggaraan Perlindungan dan Pengelolaan Lingkungan Hidup', 'page_text' => '<p>Peraturan Pemerintah tentang Penyelenggaraan Perlindungan dan Pengelolaan Lingkungan Hidup</p>', 'excerpt' => 'https://peraturan.bpk.go.id/Home/Download/154526/PP%20Nomor%2022%20Tahun%202021.pdf', 'content_categories_id' => 2],
            ['id' => 2, 'no' => 185, 'year' => 2014, 'title' => 'Percepatan Penyediaan Air Minum dan Sanitasi', 'page_text' => '<p>Peraturan Presiden (PERPRES) tentang Percepatan Penyediaan Air Minum dan Sanitasi</p>', 'excerpt' => 'https://peraturan.bpk.go.id/Home/Download/67581/Perpres%20Nomor%20185%20Tahun%202014.pdf', 'content_categories_id' => 3],
            ['id' => 3, 'no' => '04/PRT/M/2017', 'year' => 2017, 'title' => 'Penyelenggaraan SPALD', 'page_text' => '<p>Peraturan Menteri Pekerjaan Umum dan Perumahan Rakyat tentang Penyelenggaraan Sistem Pengelolaan Air Limbah Domestik berlaku dari 23 Maret 2017</p>a', 'excerpt' => 'https://peraturan.bpk.go.id/Home/Download/95175/PermenPUPR04-2017.zip', 'content_categories_id' => 6],
            ['id' => 4, 'no' => 'P.68/Menlhk/Setjen/Kum.1/8/2016', 'year' => 2016, 'title' => 'Baku Mutu Air Limbah Domestik', 'page_text' => '<p>Peraturan Menteri Lingkungan Hidup dan Kehutanan Republik Indonesia No: P.68/Menlhk/Setjen/Kum.1/8/2016 tentang Baku Mutu Air Limbah Domestik.</p>', 'excerpt' => 'http://jdih.menlhk.co.id/uploads/files/P_68_2016_BAKU_MUTU_AIR_LIMBAH_DOMESTIK_menlhk_02112021092838.pdf', 'content_categories_id' => 4],
            ['id' => 5, 'no' => 5, 'year' => 2014, 'title' => 'Pengelolaan Air Limbah Domestik', 'page_text' => '<p>Perda tentang pengelolaan air limbah domestik</p>', 'excerpt' => 'https://peraturan.bpk.go.id/Home/Download/26648/Perda%205%202014.doc', 'content_categories_id' => 16],
        ];
        ContentPage::insert($contents);
    }
}
