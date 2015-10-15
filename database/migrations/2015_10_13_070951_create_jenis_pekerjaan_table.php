<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_pekerjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pekerjaan', 50);
            $table->string('jenis_akta', 50);
            $table->string('jenis_aktor', 10);
            $table->tinyInteger('hapus');
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
        Schema::drop('jenis_pekerjaan');
    }
}
