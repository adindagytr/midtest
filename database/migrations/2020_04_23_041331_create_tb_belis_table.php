<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbBelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_belis', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_beli');
            $table->string('nama_cust');
            $table->integer('id_pegawai')->unsigned();
            $table->foreign('id_pegawai')->references('id')->on('tb_pegawais');
            $table->integer('id_roti')->unsigned();
            $table->foreign('id_roti')->references('id')->on('tb_rotis');
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
        Schema::dropIfExists('tb_belis');
    }
}
