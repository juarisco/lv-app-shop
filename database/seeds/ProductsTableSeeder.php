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
        factory(\App\Category::class,5)->create();
        factory(\App\Product::class, 100)->create();
        factory(\App\ProductImage::class,200)->create();
    }
}
