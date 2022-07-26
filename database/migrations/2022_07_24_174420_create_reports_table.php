<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('klaster_id');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->integer('stok_barang');
            $table->integer('jml_transaksi');
            $table->integer('jml_terjual');
            $table->float('rtpenjual');
            $table->string('cluster');
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
        Schema::dropIfExists('reports');
    }
};
