<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
			'product_type' => 1,
			'product_name' => 'Electronics',
            'product_description' => 'Electronics',
            'is_active' => 1,
            'created_by' => '999999',
			'updated_by' => '999999'
		]);

        DB::table('products')->insert([
            'product_type' => 2,
            'product_name' => 'Furniture',
            'product_description' => 'Furniture',
            'is_active' => 1,
            'created_by' => '999999',
            'updated_by' => '999999'
        ]);

        DB::table('products')->insert([
            'product_type' => 3,
            'product_name' => 'Travel',
            'product_description' => 'Travel',
            'is_active' => 1,
            'created_by' => '999999',
            'updated_by' => '999999'
        ]);

        DB::table('products')->insert([
            'product_type' => 1,
            'product_name' => 'Television',
            'product_description' => '40 inch LED Television',
            'is_active' => 1,
            'product_image' => 'tv.jpg',
            'product_price' => 40000,
            'parent_id' => 1,
            'created_by' => '999999',
            'updated_by' => '999999'
        ]);

        DB::table('products')->insert([
            'product_type' => 1,
            'product_name' => 'Washing Machine',
            'product_description' => 'Front Loading Fully Automatic',
            'is_active' => 1,
            'product_image' => 'washing.jpg',
            'product_price' => 30000,
            'parent_id' => 1,
            'created_by' => '999999',
            'updated_by' => '999999'
        ]);
        DB::table('products')->insert([
            'product_type' => 2,
            'product_name' => 'Sofa',
            'product_description' => '7 Seater Sofa',
            'is_active' => 1,
            'product_image' => 'sofa.jpg',
            'product_price' => 32000,
            'parent_id' => 2,
            'created_by' => '999999',
            'updated_by' => '999999'
        ]);
        DB::table('products')->insert([
            'product_type' => 2,
            'product_name' => 'Wardrobe',
            'product_description' => 'Wardrobe',
            'is_active' => 1,
            'product_image' => 'wardrobe.jpg',
            'product_price' => 14000,
            'parent_id' => 2,
            'created_by' => '999999',
            'updated_by' => '999999'
        ]);

        DB::table('products')->insert([
            'product_type' => 3,
            'product_name' => 'Swiss Holiday',
            'product_description' => 'Swiss Holiday',
            'is_active' => 1,
            'product_image' => 'swiss.jpg',
            'product_price' => 140000,
            'parent_id' => 3,
            'created_by' => '999999',
            'updated_by' => '999999'
        ]);

    }
}
