<?php

namespace App\DataViews;

class ClientMessagesView {

	public static function option() {
		return [
			'Pesan Pengunjung',
			[
				'id' => ['label' => 'Id'],
				'name' => ['label' => 'Name'],
				'email' => ['label' => 'Email'],
				'message' => ['label' => 'Message'],
				'origin' => ['label' => 'Origin'],
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