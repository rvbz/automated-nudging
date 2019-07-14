<?php

use Illuminate\Database\Seeder;

class NudgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nudges')->insert([
            'name' => 'Visual products'
        ]);

        DB::table('nudges')->insert([
            'name' => 'At checkout'
        ]);

        DB::table('nudges')->insert([
            'name' => 'Discount'
        ]);
    }
}
