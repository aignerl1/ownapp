<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use Faker;


class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {
      // create and store some countries
      $faker = Faker\Factory::create();
      $limit = 10;
      for ($i = 1; $i <= $limit; $i++) {
          $country = new \App\Models\Country();
          $country->country = $faker->randomElement(['Austria', 'Germany', 'Italy', 'Croatia', 'France']);
          $country->population = $faker-> numberBetween(1000000, 50000000);
          $country->size = $faker-> numberBetween(50000, 100000);
          $country->language = $faker->randomElement(['German', 'German', 'Italian', 'Croatian', 'French']);
          $country->capital = $faker->randomElement(['Vienna', 'Berlin', 'Rome', 'Zagreb' ,'Paris']);
          $country->currency = $faker->randomElement(['Euro', 'Pfund']);
          $country->gdp = $faker-> numberBetween(100000, 800000);
          $country->is_eu_member= $faker->randomElement(['Ja', 'Nein']);
          $country->foundation_date = $faker->date();
          $country->save();
      }
  }
}  



