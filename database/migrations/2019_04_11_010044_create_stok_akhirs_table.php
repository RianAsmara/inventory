<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStokAkhirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_akhirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bulan');
            $table->string('tahun');
            $table->integer('stok_akhir');
            $table->integer('master_barang_id');
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
        Schema::dropIfExists('stok_akhirs');
    }
}
