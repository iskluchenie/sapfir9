<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('users')->insert([
            'name' => 'zloyleva',
            'first_name' => 'Oleh',
            'last_name' => 'Lev',
            'role' => 'admin',
            'gender' => 'male',
            'salary' => 3000,
            'email' => 'admin@test.com',
            'password' => bcrypt('123456789'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        for($i = 0; $i<10; $i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'role' => $faker->randomElement(['admin', 'user']),
                'gender' => $faker->randomElement(['male', 'female']),
                'salary' => $faker->numberBetween(300,4000),
                'email' => $faker->unique()->email,
                'password' => bcrypt('123456789'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
