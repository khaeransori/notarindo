<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiayaDetailPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_detail_pekerjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_detail');
            $table->integer('biaya_pekerjaan');
            $table->integer('id_notaris');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('biaya_detail_pekerjaan');
    }
}
