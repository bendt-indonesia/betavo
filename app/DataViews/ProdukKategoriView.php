<?php

namespace App\DataViews;

class ProdukKategoriView {

	public static function option() {
		return [
			'Kategori Produk',
			[
				'prioritas' => ['label' => 'Urutan ke'],
				'nama_kategori' => ['label' => 'Nama Kategori'],
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