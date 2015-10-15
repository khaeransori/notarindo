<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\ListNotaris as ListNotaris;

class ListNotarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('list_notaris')->truncate();

        ListNotaris::create(Array(
            'nama_notaris'=>'Velani Mutia W, SH',
            'status'=>'1',
            'registered'=>'2015-10-13',
            'expired'=>'2015-11-13'
        ));

        ListNotaris::create(Array(
            'nama_notaris'=>'Sriyati Sartopo Putri, SH',
            'status'=>'1',
            'registered'=>'2015-10-13',
            'expired'=>'2015-11-13'
        ));

    }
}
