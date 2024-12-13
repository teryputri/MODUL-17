<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Database\DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@admin',
            'password' => bcrypt('adminadmin'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
