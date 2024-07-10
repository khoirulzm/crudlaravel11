<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_iD');

        // Create 50 students
        for ($i = 0; $i < 50; $i++) {
            Student::create([
                'name' => $faker->name,
                'dob' => $faker->date($format = 'Y-m-d', $max = '2010-01-01'),
                'school' => 'smkn 2 klaten',
                'description' => $faker->sentence,
            ]);
        }
    }
}
