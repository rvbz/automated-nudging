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
        DB::table('products')->insert([
            'name' => 'Popcorn',
            'price' => 7.00
        ]);

        DB::table('products')->insert([
            'name' => 'Hotdog',
            'price' => 6.50
        ]);

        DB::table('products')->insert([
            'name' => 'Nachos',
            'price' => 7.00
        ]);

        DB::table('products')->insert([
            'name' => 'Icecream',
            'price' => 4.50
        ]);

        DB::table('products')->insert([
            'name' => 'Candies',
            'price' => 4.00
        ]);

        DB::table('products')->insert([
            'name' => 'Soda',
            'price' => 5.50
        ]);

        DB::table('products')->insert([
            'name' => 'Icedrink',
            'price' => 8.00
        ]);

        DB::table('products')->insert([
            'name' => 'Water',
            'price' => 2.50
        ]);
    }
}
