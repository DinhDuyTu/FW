<?php

use Illuminate\Database\Seeder;

class SizeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 60; $i++) { 
            DB::table('product_size')->insert([
                'product_id' => $i,
                'size_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('product_size')->insert([
                'product_id' => $i,
                'size_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('product_size')->insert([
                'product_id' => $i,
                'size_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('product_size')->insert([
                'product_id' => $i,
                'size_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('product_size')->insert([
                'product_id' => $i,
                'size_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
