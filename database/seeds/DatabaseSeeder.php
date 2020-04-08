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
        // $this->call(InitProductSeeder::class);
        // $this->call(InitCategorySeeder::class);
        // $this->call(InitColorSeeder::class);
        // $this->call(InitSizeSeeder::class);
        $this->call(SizeProductSeeder::class);
        $this->call(ColorProductSeeder::class);
    }
}
