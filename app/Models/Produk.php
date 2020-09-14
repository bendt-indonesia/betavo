<?php

namespace App\Models;


class Produk extends BaseModel {

	protected $table = 'produk';

	protected $with = ['produk_sub_kategori'];

	protected $processed = ['slug','index'];

	const INDEX_KEY = 'prioritas';

	const SLUG_FROM_COLUMN = 'nama_produk';

	protected $files = ['image_url_1','image_url_2','image_url_3','image_url_4','image_url_5'];

	const FILE_PATH = "/produk/";

	public function produk_sub_kategori() {
		return $this->belongsTo(ProdukSubKategori::class,'id_kategori');
	}

}