<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\JenisPekerjaan as JenisPekerjaan;

class JenisPekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_pekerjaan')->truncate();

        JenisPekerjaan::create(Array(
            'nama_pekerjaan'=>'Balik Nama Jual Beli',
            'jenis_akta'=>'Akta Jual Beli',
            'jenis_aktor'=>'PPAT',
            'hapus'=>'0',
            'id_notaris'=>'1'
        ));

        JenisPekerjaan::create(Array(
            'nama_pekerjaan'=>'Pembuatan CV',
            'jenis_akta'=>'Akta Pendirian',
            'jenis_aktor'=>'Notaris',
            'hapus'=>'0',
            'id_notaris'=>'1'
        ));

    }
}
