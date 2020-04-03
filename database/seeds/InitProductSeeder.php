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
        $faker = Faker\Factory::create();

        for ($i=0; $i < 20; $i++) { 
            $price1 = $faker->numberBetween(100000, 999999);
            $price_sale1 = $faker->numberBetween(100000, $price1);
            DB::table('products')->insert([
                'category_id' => 1,
                'name' => $faker->unique()->text(15),
                'product_code' => 'PrdM'.$i,
                'price' => $price1,
                'price_sale' => $price_sale1,
                'quantity' => $faker->numberBetween(10, 300),
                'is_highlight' => $faker->numberBetween(0, 1),
                'detail' => $faker->unique()->text(200),
                'description' => $faker->unique()->text(500),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i=0; $i < 20; $i++) { 
            $price2 = $faker->numberBetween(100000, 999999);
            $price_sale2 = $faker->numberBetween(100000, $price2);
            DB::table('products')->insert([
                'category_id' => 2,
                'name' => $faker->unique()->text(15),
                'product_code' => 'PrdW'.$i,
                'price' => $price2,
                'price_sale' => $price_sale2,
                'quantity' => $faker->numberBetween(10, 300),
                'is_highlight' => $faker->numberBetween(0, 1),
                'detail' => $faker->unique()->text(200),
                'description' => $faker->unique()->text(500),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i=0; $i < 20; $i++) { 
            $price3 = $faker->numberBetween(100000, 999999);
            $price_sale3 = $faker->numberBetween(100000, $price3);
            DB::table('products')->insert([
                'category_id' => 3,
                'name' => $faker->unique()->text(15),
                'product_code' => 'PrdK'.$i,
                'price' => $price3,
                'price_sale' => $price_sale3,
                'quantity' => $faker->numberBetween(10, 300),
                'is_highlight' => $faker->numberBetween(0, 1),
                'detail' => $faker->unique()->text(200),
                'description' => $faker->unique()->text(500),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
