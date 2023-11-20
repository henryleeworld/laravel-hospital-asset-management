<?php

namespace Database\Seeders;

use App\Models\Hospital;
use App\Models\User;
use Illuminate\Database\Seeder;

class HospitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $randomNumber = rand(123, 789);

            $hospital = Hospital::factory()->create([
                'name' => "Hospital $randomNumber",
            ]);

            $director = User::factory()->create([
                'name'           => "Director $randomNumber",
                'email'          => "director$randomNumber@gmail.com",
                'password'       => 'password',
                'hospital_id'    => $hospital->id,
                'remember_token' => null,
            ]);
            $director->roles()->sync(2);

            $doctor = User::factory()->create([
                'name'           => "Doctor $randomNumber",
                'email'          => "doctor$randomNumber@gmail.com",
                'password'       => 'password',
                'hospital_id'    => $hospital->id,
                'remember_token' => null,
            ]);
            $doctor->roles()->sync(2);
        }
    }
}
