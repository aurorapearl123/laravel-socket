<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

	    for($i = 0; $i < 30; $i++) {
	        App\Item::create([
	            'user_id' => 1,
	            'category_id' => rand(1,2),
	            'name' => $faker->lastName,
	            'description' => $faker->firstName,
                'model' => $faker->phoneNumber,
                'price' => rand(100,500),
                'group_size' => rand(1,5),
                'image_path' => ""
	        ]);
	    }
    }
}
