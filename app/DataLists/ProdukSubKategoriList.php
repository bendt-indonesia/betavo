<?php

namespace App\DataLists;

class ProdukSubKategoriList {

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
			'nama_sub_kategori',
			'deskripsi',
			'image_url',
			'is_active',
	public static function common() {
		return [
			'id' => 'multi',
			'name' => 'like',
		];
	}

}