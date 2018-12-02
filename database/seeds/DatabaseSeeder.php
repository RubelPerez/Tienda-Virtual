<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;
use App\ProductImage;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      /*
      $this->call(CategoriesTableSeeder::class);
      $this->call(ProductsTableSeeder::class);
      $this->call(ProductImageTableSeeder::class);*/

$categories = factory(Category::class,5)->create();
$categories -> each(function($products){
$product = factory(Product::class,20)->make();
$products->products()->saveMany($product);


$product->each(function($p){
  $images = factory(ProductImage::class,5)->make();
  $p->imagenes()->saveMany($images);

});

});
/*

  $users = factory(App\User::class, 3)
           ->create()
           ->each(function ($user) {
                $user->posts()->save(factory(App\Post::class)->make());
            });
  */    
    }
}
