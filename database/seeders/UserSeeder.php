<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Mike',
            'email' => 'oliveira.mike2015@gmail.com',
            'password' => Hash::make('14563258Mk@'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Patrick',
            'email' => 'patrickbarbosa2121@gmail.com',
            'password' => Hash::make('Pa123456#'),
            'role' => 'normal',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
