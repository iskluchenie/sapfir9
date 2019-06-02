<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();
        $products = DB::table('products')->get()->random(random_int(1,20));

        $products->map(function ($el) use($user){
            DB::table('carts')->insert([
                'user_id' => $user->id,
                'product_id' => $el->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

    }
}
