<?php

use Illuminate\Database\Seeder;

class InitColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'name' => 'Red',
            'color' => 'color_red',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('colors')->insert([
            'name' => 'Yellow',
            'color' => 'color_yellow',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('colors')->insert([
            'name' => 'Green',
            'color' => 'color_green',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('colors')->insert([
            'name' => 'Blue',
            'color' => 'color_blue',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('colors')->insert([
            'name' => 'White',
            'color' => 'color_white',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('colors')->insert([
            'name' => 'Black',
            'color' => 'color_black',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
