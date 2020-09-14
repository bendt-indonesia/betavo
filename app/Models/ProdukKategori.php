<?php

namespace App\Models;


class ProdukKategori extends BaseModel {

	protected $table = 'produk_kategori';

	protected $processed = ['slug','index'];

	const INDEX_KEY = 'prioritas';

	const SLUG_FROM_COLUMN = 'nama_kategori';

	protected $files = ['image_url'];

	const FILE_PATH = "/produk_kategori/";

	public function produk_sub_kategori() {
		return $this->hasMany(ProdukSubKategori::class,'id_kategori')->orderBy('prioritas');
	}

}
