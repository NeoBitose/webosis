<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'title'=>'Pendaftaran Ketua OSIS',
            'deskripsi'=>'Dimasa pandemi tim KPO (Komisi Pemilihan Osis) memiliki tugas exstra karena masa pandemi di larang untuk berkumpul, jadi mau tidak mau semua kegiatan harus di selanggarakan dengan cara daring',
            'iframe'=>'https://www.youtube.com/embed/HM31D-298Ew',
            'link'=>'https://youtu.be/HM31D-298Ew'
        ]);
    }
}
