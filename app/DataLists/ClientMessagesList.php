<?php

namespace App\DataLists;

class ClientMessagesList {

	public static $mapping = [
	];

	public static $with_relations = [
		'index' => ,
		'common' => [],
	];

	public static function index() {
		return [
			'id',
	public static function common() {
		return [
			'id' => 'multi',
			'name' => 'like',
		];
	}

}