<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        // $this->call(EventTableSeeder::class);
        // $this->call(EventAttributeTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        $this->call(WeddingEventTableSeeder::class);
    }
}
