<?php

use App\Admin;
use App\Cart;
use App\Customer;
use App\Product;
use App\ProductAttribute;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Admin::class, 5)->create();
        factory(Customer::class, 30)->create()->each(function($customer) {
            $customer->carts()->save(factory(Cart::class)->make());
        });

        DB::table('categories')->insert([
            'name' => 'Men\'s Fashion'
        ]);

        DB::table('categories')->insert([
            'name' => 'Women\'s Fashion'
        ]);

        // Men's Fashion Subcategories
        DB::table('subcategories')->insert([
            'category_id' => '1',
            'name' => 'Casual Tops'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '1',
            'name' => 'Shirts'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '1',
            'name' => 'Pants'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '1',
            'name' => 'Jeans'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '1',
            'name' => 'Jackets & Coats'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '1',
            'name' => 'Sneakers'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '1',
            'name' => 'Formal Shoes'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '1',
            'name' => 'Boots'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '1',
            'name' => 'Bags'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '1',
            'name' => 'Accessories'
        ]);

        // Women's Fashion Subcategory
        DB::table('subcategories')->insert([
            'category_id' => '2',
            'name' => 'Dresses'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '2',
            'name' => 'Tops'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '2',
            'name' => 'Pants & Leggings'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '2',
            'name' => 'Jacket & Coats'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '2',
            'name' => 'Flat Shoes'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '2',
            'name' => 'Sandals'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '2',
            'name' => 'Sneakers'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '2',
            'name' => 'Bags'
        ]);

        DB::table('subcategories')->insert([
            'category_id' => '2',
            'name' => 'Accessories'
        ]);


        // Order Status Types
        DB::table('order_statuses')->insert([
            'name' => 'Processing Order'
        ]);

        DB::table('order_statuses')->insert([
            'name' => 'Order Ready'
        ]);

        DB::table('order_statuses')->insert([
            'name' => 'Order Dispatched'
        ]);

        DB::table('order_statuses')->insert([
            'name' => 'Order Received'
        ]);

        factory(Product::class, 30)->create()->each(function($product) {
            $product->product_attributes()->saveMany(factory(ProductAttribute::class, 3)->make());
        });

    }
}
