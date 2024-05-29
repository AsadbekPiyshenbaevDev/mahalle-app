<?php

use App\Models\Client;
use App\Models\Employmenttype;
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
        Schema::create('empoyments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Client::class)->constrained();
            $table->foreignIdFor(Employmenttype::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empoyments');
    }
};
