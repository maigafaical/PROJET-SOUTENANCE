<?php

 namespace Database\Seeders;

 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class UserSeeder extends Seeder
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
            'username' => 'faicalmaiga',

            'roles_id' => 1,
            'password' => Hash::make('Faical54@'),
            ]);


            DB::table('users')->insert([
                'name' => 'NGUILA STEVIE ROSE',
                'username' => 'stevierose',
                'email' =>'stevierosenguila2023@gmail.com',
                'username' => 'stevierose',
                
                'roles_id' => 2,
                'password' => Hash::make('steve03@'),
                ]);

                DB::table('users')->insert([
                    'name' => 'JOYEUSE SARAH',
                    'username' => 'joys',
                    'email' =>'joysarah15@gmail.com',
                    'username' => 'joys',
                    
                    'roles_id' => 3,
                    'password' => Hash::make('joys07@'),
                    ]);    
    }
}
