<?php

use App\Models\Client;
use App\Models\Street;
use App\Models\Type;
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
        Schema::create('abroads', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Client::class)->constrained();
            $table->foreignIdFor(Street::class)->constrained();
            $table->foreignIdFor(Type::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abroads');
    }
};
