<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	// $this->call(StudentTableSeeder::class);
         $this->call(UserTableseeder::class);
        // $this->call(BrandTableSeeder::class);
               // $this->call(CategoryTableSeeder::class);
    }
}
