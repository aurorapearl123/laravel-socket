<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
	            'name' => 'short',
	            'description' => 'Short Description',
            ]);
        App\Category::create([
	            'name' => 'pants',
	            'description' => 'Pants Description',
            ]);
    }
}
