<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'MAIGA FAICAL',
            'username' => 'faicalmaiga',

            'email' =>'faicalmaiga78@gmail.com',

            'password' => Hash::make('Faical54@'),
        ]);
    }
}
