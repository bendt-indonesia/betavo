<?php

namespace App\Models;


class Produk extends BaseModel {

	protected $table = 'produk';

	protected $with = [produk_sub_kategori[;

	protected $files = [image_url_1	protected $files = [,	protected $files = [image_url_2	protected $files = [,	protected $files = [image_url_3	protected $files = [,	protected $files = [image_url_4	protected $files = [,	protected $files = [image_url_5	protected $files = [

	const FILE_PATH = "/produk/";

	public function produk_sub_kategori() {
		return $this->belongsTo(ProdukSubCategory::class);
	}

}