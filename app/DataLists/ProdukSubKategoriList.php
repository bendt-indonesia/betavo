<?php

namespace App\DataLists;

class ProdukSubKategoriList {

	public static $mapping = [
	];

	public static $with_relations = [
		'index' => ,
		'common' => [],
	];

	public static function index() {
		return [
			'id' => 'multi',
			'sort_no' => 'like',
			'name' => 'like',
			'slug' => 'like',
			'image_url' => 'like',
			'description' => 'like',
			'is_active' => 'like',
		];
	}

	public static function common() {
		return [
			'id' => 'multi',
			'name' => 'like',
		];
	}

}