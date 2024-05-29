<?php

use App\Models\City;
use App\Models\Gender;
use App\Models\Nationality;
use App\Models\Street;
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

        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Street::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Nationality::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Gender::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(City::class)->constrained()->cascadeOnDelete();
            $table->string('relative')->default('Shańaraq baslıǵı');
            $table->string('passport_number')->unique();
            $table->string('jshshir')->unique();
            $table->string('fio');
            $table->date('birthday');
            $table->integer('house_number')->nullable();
            $table->string('phone');
            $table->string('cadaster')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
