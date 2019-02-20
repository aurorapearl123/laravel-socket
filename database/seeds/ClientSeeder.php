<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

	    for($i = 0; $i < 1000; $i++) {
	        App\Client::create([
	            'first_name' => $faker->firstName,
	            'middle_name' => $faker->lastName,
	            'last_name' => $faker->lastName,
	            'email' => $faker->email,
	            'phone' => $faker->phoneNumber
	        ]);
	    }
    }
}
