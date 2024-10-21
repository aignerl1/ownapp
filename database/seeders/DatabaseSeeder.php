<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() {
      $this->call(PresidentSeeder::class);
      $this->call(CountriesTableSeeder3::class);
      $this->call(UserTableSeeder::class);
  }
  
}
