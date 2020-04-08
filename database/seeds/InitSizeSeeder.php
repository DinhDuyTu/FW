<?php

use Illuminate\Database\Seeder;

class InitSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            'size' => 'S',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('sizes')->insert([
            'size' => 'M',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('sizes')->insert([
            'size' => 'L',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('sizes')->insert([
            'size' => 'XL',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('sizes')->insert([
            'size' => 'XXL',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
