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
        Schema::create('permohonan_ppids', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal');
            $table->string('email');
            $table->integer('nik');
            $table->integer('kontak');
            $table->string('alamat');
            $table->string('permintaan_informasi',2000);
            $table->string('tujuan',2000);
            $table->string('upload_ktp');
            $table->string('upload_tanda_tangan');
            $table->string('cara_mendapatkan');
            $table->string('cara_memberikan');
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
        Schema::dropIfExists('permohonan_ppids');
    }
};
