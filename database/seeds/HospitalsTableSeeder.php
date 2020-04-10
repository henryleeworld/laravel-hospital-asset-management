<?php

use App\Hospital;
use App\User;
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

            $hospital = factory(Hospital::class)->create([
                'name' => "Hospital $randomNumber",
            ]);

            $director = factory(User::class)->create([
                'name'           => "Director $randomNumber",
                'email'          => "director$randomNumber@gmail.com",
                'password'       => bcrypt('password'),
                'hospital_id'    => $hospital->id,
                'remember_token' => null,
            ]);
            $director->roles()->sync(2);

            $doctor = factory(User::class)->create([
                'name'           => "Doctor $randomNumber",
                'email'          => "doctor$randomNumber@gmail.com",
                'password'       => bcrypt('password'),
                'hospital_id'    => $hospital->id,
                'remember_token' => null,
            ]);
            $doctor->roles()->sync(2);
        }
    }
}
