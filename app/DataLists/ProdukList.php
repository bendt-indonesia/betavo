<?php

namespace App\DataLists;

class ProdukList {

	public static $mapping = [
	];

	public static $with_relations = [
		'index' => [],
		'common' => [],
	];

	public static function index() {
		return [
			'id',
			'meta_title',
			'meta_description',
			'meta_keywords',
			'prioritas',
			'id_kategori',
			'nama_produk',
			'deskripsi',
			'link_bukalapak',
			'link_shopee',
			'link_tokopedia',
			'image_url_1',
			'image_url_2',
			'image_url_3',
			'image_url_4',
			'image_url_5',
			'youtube_video_url_1',
			'is_active',
	public static function common() {
		return [
			'id' => 'multi',
			'name' => 'like',
		];
	}

}