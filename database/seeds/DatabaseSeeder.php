<?php

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
        $this->users();
        $this->call(ProductSeeder::class);
        $this->call(ConfigTableSeeder::class);
        $this->call(BendtSeeder::class);

    }

    public function users() {
        $now = \Carbon\Carbon::now();
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'sa@bendt.io',
            'password' => Hash::make('123456'),
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@betavoaudio.com',
            'password' => Hash::make('123456'),
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
