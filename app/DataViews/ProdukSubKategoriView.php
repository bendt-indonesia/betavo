<?php

namespace App\DataViews;

class ProdukSubKategoriView {

	public static function option() {
		return [
			'Sub Kategori Produk',
			[
				'sort_no' => ['label' => 'Sort_No'],
				'name' => ['label' => 'Name'],
				'description' => ['label' => 'Description'],
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