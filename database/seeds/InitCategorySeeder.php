<?php

use Illuminate\Database\Seeder;

class InitCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Parent Cate
        DB::table('categories')->insert([
            'parent_id' => '0',
            'name' => 'Men ',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '0',
            'name' => 'Women ',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '0',
            'name' => 'Children ',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '0',
            'name' => 'Pages ',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '0',
            'name' => 'Blog ',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '0',
            'name' => 'Contact ',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // Children Cate 1
        DB::table('categories')->insert([
            'parent_id' => '1',
            'name' => 'Clothing ',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '1',
            'name' => 'Jewellery',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '1',
            'name' => 'Shoes',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '1',
            'name' => 'Eyewear',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '1',
            'name' => 'Watches',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '1',
            'name' => 'Accessories',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('categories')->insert([
            'parent_id' => '2',
            'name' => 'Clothing ',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '2',
            'name' => 'Jewellery',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '2',
            'name' => 'Shoes',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '2',
            'name' => 'Eyewear',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '2',
            'name' => 'Watches',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '2',
            'name' => 'Accessories',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'parent_id' => '3',
            'name' => 'Clothing ',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '3',
            'name' => 'Jewellery',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '3',
            'name' => 'Shoes',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '3',
            'name' => 'Eyewear',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '3',
            'name' => 'Watches',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'parent_id' => '3',
            'name' => 'Accessories',
            'description' => 'Category ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
