<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTableKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_kategori', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title',1000)->nullable();
            $table->string('meta_description',1000)->nullable();
            $table->string('meta_keywords', 1000)->nullable();

            $table->integer('prioritas')->unsigned();
            $table->string('nama_kategori');
            $table->string('deskripsi',1000)->nullable();

            $table->string('slug', 1000)->nullable();
            $table->text('image_url')->nullable();

            $table->boolean('is_active')->default(1);

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
        Schema::dropIfExists('produk_kategori');
    }
}
