<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            'title'=>'OSIS SMAKENSA Bondowoso',
            'deskripsi'=>'Tekan tombol dibawah untuk link Pendaftaran Pengurus OSIS Periode 2020-2021.',
            'periode'=>'2021',
            'link_pendaftaran'=>'http://s.id/Pendaftaran_Osis',
            'ilustrasi'=>'header.png',
        ]);
    }
}
