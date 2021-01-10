<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
         'imagePath' =>'for/assets/product10.jpg',
         'title'=> 'White Mens Jacket',
         'description' => 'super cool jacket for water proof , you wont regrett',
         'category' =>'male',
         'type' => 'Jacket',
         'price' => 45 ,
         'sale' => false
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' =>'for/assets/product3.jpg',
            'title'=> 'Grey yellow Jacket',
            'description' => 'super yellow cool jacket for water proof , you wont regrett',
            'category' =>'male',
            'type' => 'Jacket',
            'price' => 55 ,
            'sale' => false
           ]);
           $product->save();

           $product = new \App\Product([
            'imagePath' =>'for/assets/product12.jpg',
            'title'=> 'black Mens Jacket',
            'description' => 'super black cool jacket for water proof , you wont regrett',
            'category' =>'male',
            'type' => 'Jacket',
            'price' => 45,
            'sale' => false
           ]);
           $product->save();

           $product = new \App\Product([
            'imagePath' =>'for/assets/product14.jpg',
            'title'=> 'blue T-shirt',
            'description' => ' blue good Tshirt  , you wont regrett',
            'category' =>'male',
            'type' => 'T-shirt',
            'price' => 25 ,
            'sale' => true
           ]);
           $product->save();
    }
}
