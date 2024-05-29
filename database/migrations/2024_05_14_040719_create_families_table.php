<?php

use App\Models\City;
use App\Models\Country;
use App\Models\Gender;
use App\Models\House;
use App\Models\Nationality;
use App\Models\Relative;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Nationality::class)->constrained();
            $table->foreignIdFor(House::class)->constrained();
            $table->foreignIdFor(Relative::class)->constrained();
            $table->foreignIdFor(City::class)->constrained();
            $table->foreignIdFor(Country::class)->constrained();
            $table->foreignIdFor(Gender::class)->constrained();
            $table->string('passport_number')->unique();
            $table->string('jshshir')->unique()->nullable();
            $table->string('fio');
            $table->date('birthday');
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
