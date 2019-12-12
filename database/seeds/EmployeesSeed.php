<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Employee;

class EmployeesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1;$i< 50; $i++){
        Employee::insert([
            'nama'  => $faker->name,
            'jabatan' => $faker->jobTitle,
            'umur'  => $faker->numberBetween(25,40),
            'created_at' => now(),
        ]);
    }
}
}
