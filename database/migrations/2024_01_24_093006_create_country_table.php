<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
      Schema::create('countries', function (Blueprint $table) {
          // the primary key is always the id
          $table->id('id');
          // insert all fields of the table here
          $table->string('country', 130);
          $table->integer('population');
          $table->mediumInteger('size');
          $table->string('language', 130);
          $table->string('capital', 100);
          $table->string('currency', 50);
          $table->integer('gdp');
          $table->enum('is_eu_member', ['Ja', 'Nein'])->default('Ja');
          $table->date('foundation_date');
          // the timestamps to store creation and last update
          $table->timestamps();
      });
  }
   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};