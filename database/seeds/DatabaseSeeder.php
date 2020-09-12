p<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'test@test.com',
            'password' => Hash::make('betavo2020'),
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
