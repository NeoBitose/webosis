<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([           

            'nama_web' =>'Osis Smakensa',
            'link_web' =>'http://smkn1bws.sch.id',
            'title_ketos'=>'ketua Osis Dan Wakil Ketua Osis',
            'logo_osis'=>'logo_osis.png',
            'logo_smk'=>'logo_smk.png',
            'instagram'=>'osissmkn1bondowoso',
            'facebook'=>'facebook.com',
            'whatsapp'=>'087843951122',
            'maps'=>'https://maps.app.goo.gl/AtPhzLo6bCTHqtZn8',
            'email'=>'osis.smkn1bws@gmail.com',
        ]);
    }
}
