<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<100;$i++){
            DB::table('products')->insert(
                [
                    'name' => join(' ',$faker->words(4)),
                    'price' => $faker->randomFloat(2,10,1000),
                    'description' => $faker->sentence(),
                    'amount' => $faker->numberBetween(0,1000),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
