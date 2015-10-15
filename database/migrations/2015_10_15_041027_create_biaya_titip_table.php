<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiayaTitipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_titip', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_berkas');
            $table->date('tgl_titip');
            $table->integer('biaya_titip');
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
        Schema::drop('biaya_titip');
    }
}
