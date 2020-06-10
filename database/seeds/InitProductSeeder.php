<?php

use Illuminate\Database\Seeder;

class InitProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            DB::table('products')->insert([
                'category_id' => 1,
                'name' => "Product Of Man",
                'product_code' => 'PrdM'.$i,
                'price' => 999999,
                'price_sale' => 888888,
                'quantity' => 11,
                'is_highlight' => 1,
                'detail' => 'If multiple parameters are supplied then isset() will return TRUE only if all of the parameters are considered set. Evaluation goes from left to right and stops as soon as an unset variable is encountered.',
                'description' => 'If multiple parameters are supplied then isset() will return TRUE only if all of the parameters are considered set. Evaluation goes from left to right and stops as soon as an unset variable is encountered.',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i=0; $i < 20; $i++) { 
            DB::table('products')->insert([
                'category_id' => 2,
                'name' => "Product Of Women",
                'product_code' => 'PrdM'.$i,
                'price' => 999999,
                'price_sale' => 888888,
                'quantity' => 11,
                'is_highlight' => 1,
                'detail' => 'If multiple parameters are supplied then isset() will return TRUE only if all of the parameters are considered set. Evaluation goes from left to right and stops as soon as an unset variable is encountered.',
                'description' => 'If multiple parameters are supplied then isset() will return TRUE only if all of the parameters are considered set. Evaluation goes from left to right and stops as soon as an unset variable is encountered.',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i=0; $i < 20; $i++) { 
            DB::table('products')->insert([
                'category_id' => 3,
                'name' => "Product Of Kid",
                'product_code' => 'PrdM'.$i,
                'price' => 999999,
                'price_sale' => 888888,
                'quantity' => 11,
                'is_highlight' => 1,
                'detail' => 'If multiple parameters are supplied then isset() will return TRUE only if all of the parameters are considered set. Evaluation goes from left to right and stops as soon as an unset variable is encountered.',
                'description' => 'If multiple parameters are supplied then isset() will return TRUE only if all of the parameters are considered set. Evaluation goes from left to right and stops as soon as an unset variable is encountered.',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
