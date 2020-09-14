<?php

namespace App\DataLists;

class ProdukKategoriList {

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
			'nama_kategori',
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