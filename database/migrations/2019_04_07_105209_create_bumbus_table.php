<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBumbusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bumbus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tanggalMasuk');
            $table->string('namaSupplier');
            $table->double('anggaran');
            $table->string('namaBumbu');
            $table->string('kategori');
            $table->integer('stok');
            $table->integer('stokAkhir');
            $table->string('satuan');
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
        Schema::dropIfExists('bumbus');
    }
}
