<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_sub_kategori', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title',1000)->nullable();
            $table->string('meta_description',1000)->nullable();
            $table->string('meta_keywords', 1000)->nullable();

            $table->integer('prioritas')->unsigned();

            $table->string('nama_sub_kategori')->unique();
            $table->bigInteger('id_kategori')->unsigned()->nullable();

            $table->text('lampiran')->nullable();
            $table->string('slug', 1000)->nullable();

            $table->timestamps();

            $table->foreign('id_kategori')->references('id')->on('produk_kategori')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_sub_kategori');
    }
}
