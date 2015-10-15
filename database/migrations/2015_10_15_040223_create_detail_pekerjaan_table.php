<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pekerjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pekerjaan');
            $table->string('langkah_pekerjaan', 50);
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
        Schema::drop('detail_pekerjaan');
    }
}
