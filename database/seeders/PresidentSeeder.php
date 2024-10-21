<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\President;
use App\Models\Country;
use Faker;

class PresidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 60;
 
        for ($i = 1; $i <= $limit; $i++) {
            $president = new President();
            $president->president_name = $faker->name();
            $president->save();
        }
    }
}
