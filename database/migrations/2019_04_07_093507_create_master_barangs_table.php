<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_barangs', function (Blueprint $table) {
            $table->renameColumn('anggran', 'anggaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('master_barangs', function (Blueprint $table) {
            $table->renameColumn('anggaran', 'anggran');
        });
    }
}
