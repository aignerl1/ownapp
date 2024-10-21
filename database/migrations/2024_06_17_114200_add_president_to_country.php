<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\President;
use App\Models\Country;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('countries', function (Blueprint $table) {
        $table->unsignedBigInteger('president_id')->nullable();
        $table->foreign('president_id')->references('id')->on('presidents');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('countries', function (Blueprint $table) {
          if (Schema::hasColumn('country', 'president_id')) {
            $table->dropForeign(['president_id']);
        }
        });
    }
};
