<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTableProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();

            $table->string('meta_title',1000)->nullable();
            $table->string('meta_description',1000)->nullable();
            $table->string('meta_keywords', 1000)->nullable();

            $table->integer("prioritas")->unsigned();
            $table->bigInteger('id_kategori')->unsigned()->nullable();

            $table->string('nama_produk');
            $table->text('deskripsi');

            $table->string('link_bukalapak',1000)->nullable();
            $table->string('link_shopee',1000)->nullable();
            $table->string('link_tokopedia',1000)->nullable();

            $table->string('image_url_1')->nullable();
            $table->string('image_url_2')->nullable();
            $table->string('image_url_3')->nullable();
            $table->string('image_url_4')->nullable();
            $table->string('image_url_5')->nullable();
            $table->string('youtube_video_url_1')->nullable();

            $table->string('slug')->unique();

            $table->timestamps();

            $table->boolean('is_active')->default(1);

            $table->foreign('id_kategori')->references('id')->on('produk_sub_kategori')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
