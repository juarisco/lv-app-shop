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
//        factory(\App\Category::class,5)->create();
//        factory(\App\Product::class, 100)->create();
//        factory(\App\ProductImage::class,200)->create();

        $categories = factory(\App\Category::class, 4)->create();

        $categories->each(function ($category) {
            $products = factory(\App\Product::class, 5)->make();
            $category->products()->saveMany($products);

            $products->each(function ($p) {
                $images = factory(\App\ProductImage::class, 3)->make();
                $p->images()->saveMany($images);
            });

        });


    }
}
