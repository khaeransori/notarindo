<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotarisListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_notaris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_notaris', 50)->unique();
            $table->tinyInteger('status');
            $table->date('registered');
            $table->date('expired');
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
        Schema::drop('list_notaris');
    }
}
