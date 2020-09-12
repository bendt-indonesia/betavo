<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTableInformasiPerusahaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_brand');
            $table->string('nomor_telpon');
            $table->string('email');
            $table->text('jam_buka')->nullable();
            $table->text('deskripsi_singkat');
            $table->text('deskripsi_lengkap');
            $table->string('lokasi')->nullable();
            $table->string('link_tokopedia')->nullable();
            $table->string('link_bukalapak')->nullable();
            $table->string('link_shopee')->nullable();
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
        Schema::dropIfExists('informasi_perusahaan');
    }
}
