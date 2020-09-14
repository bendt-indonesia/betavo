<?php

namespace App\DataViews;

class ProdukSubKategoriView {

	public static function option() {
		return [
			'Sub Kategori Produk',
			[
				'prioritas' => ['label' => 'Urutan ke'],
				'produk_kategori.nama_kategori' => ['label' => 'Produk_Kategori.nama_Kategori'],
				'nama_sub_kategori' => ['label' => 'Nama Sub Kategori'],
				'deskripsi' => ['label' => 'Deskripsi'],
				'is_active' => ['label' => 'Is Active'],
			],
			[
				'route' => [
					'store' => true,
					'update' => true,
					'destroy' => true,
				],
			],
		];
	}
}