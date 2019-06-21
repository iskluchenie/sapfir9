<?php

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
       $this->call(TownsTableSeeders::class);
       $this->call(StreetsTableSeeders::class);
       $this->call(HousesTableSeeders::class);
       $this->call(EntrancesTableSeeders::class);
    }
}
