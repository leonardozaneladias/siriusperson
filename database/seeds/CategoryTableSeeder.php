<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Category::class, 10)->create()->each(function ($category) {
            factory(App\Models\Product::class, 10)
                ->create([
                    'category_id' => $category->id
                ])->each(function ($product) use ($category) {
                    factory(\App\Models\Photo::class, 1)
                        ->create([
                            'product_id' => $product->id,
                            'url' => $category->id.'.jpg'
                        ]);
                });
        });
    }
}
