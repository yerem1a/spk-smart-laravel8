<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyederhanaanAlternatifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyederhanaan_alternatif', function (Blueprint $table) {
            $table->id();
            $table->string('alternatif');
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('jumlah_tanggungan');
            $table->string('status');
            $table->string('pendidikan_terakhir');
            $table->bigInteger('penghasilan'); // Kolom penghasilan dengan presisi 15 digit dan 2 digit di belakang koma
            $table->bigInteger('pengeluaran');
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
        Schema::dropIfExists('penyederhanaan_alternatif');
    }
}
