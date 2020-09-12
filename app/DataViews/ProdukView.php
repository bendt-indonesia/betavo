<?php

namespace App\DataViews;

class ProdukView {

	public static function option() {
		return [
			'List Produk',
			[
				'prioritas' => ['label' => 'Prioritas'],
				'produk_sub_kategori.nama_sub_kategori' => ['label' => 'Produk_Sub_Kategori.nama_Sub_Kategori'],
				'link_bukalapak' => ['label' => 'Nama Sub Kategori'],
				'link_shopee' => ['label' => 'Nama Sub Kategori'],
				'link_tokopedia' => ['label' => 'Nama Sub Kategori'],
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