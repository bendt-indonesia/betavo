<?php

namespace App\Models;


class ProdukSubKategori extends BaseModel {

	protected $table = 'produk_sub_kategori';

	protected $processed = ['slug','index'];

	const INDEX_KEY = 'prioritas';

	const SLUG_FROM_COLUMN = 'nama_sub_kategori';

	protected $files = ['image_url'];

	const FILE_PATH = "/produk_sub_kategori/";

	public function produk_kategori() {
		return $this->belongsTo(ProdukKategori::class,'id_kategori');
	}

	public function produk() {
		return $this->hasMany(Produk::class,'id_kategori')->orderBy('prioritas');
	}

}
