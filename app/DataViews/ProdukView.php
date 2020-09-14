<?php

namespace App\DataViews;

class ProdukView {

	public static function option() {
		return [
			'List Produk',
			[
				'prioritas' => ['label' => 'Urutan ke'],
				'produk_sub_kategori.nama_sub_kategori' => ['label' => 'Sub Kategori'],
				'link_bukalapak' => ['label' => 'Link Bukalapak'],
				'link_shopee' => ['label' => 'Link Shopee'],
				'link_tokopedia' => ['label' => 'Link Tokopedia'],
				'is_active' => ['label' => 'Is Active'],
				'updated_at' => ['label' => 'Last Update'],
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