<?php

use Illuminate\Database\Seeder;

class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 60; $i++) { 
            DB::table('color_product')->insert([
                'product_id' => $i,
                'color_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('color_product')->insert([
                'product_id' => $i,
                'color_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('color_product')->insert([
                'product_id' => $i,
                'color_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('color_product')->insert([
                'product_id' => $i,
                'color_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('color_product')->insert([
                'product_id' => $i,
                'color_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('color_product')->insert([
                'product_id' => $i,
                'color_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
