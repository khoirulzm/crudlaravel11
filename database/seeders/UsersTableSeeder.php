<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin SMKN 1 KLATEN',
            'email' => 'smkn1klaten@example.com',
            'password' => Hash::make('password'),
            'school' => 'smkn 1 klaten',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin SMKN 2 KLATEN',
            'email' => 'smkn2klaten@example.com',
            'password' => Hash::make('password'),
            'school' => 'smkn 2 klaten',
        ]);
    }
}
