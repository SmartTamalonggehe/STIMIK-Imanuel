<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetBergerakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_bergerak', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_id')->constrained('jenis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('jenis_barang'); // Roda 4 roda 2 lainnya
            $table->string('nama');
            $table->string('type');
            $table->string('merk');
            $table->integer('jmlh');
            $table->text('ket')->nullable();
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
        Schema::dropIfExists('asset_bergerak');
    }
}
