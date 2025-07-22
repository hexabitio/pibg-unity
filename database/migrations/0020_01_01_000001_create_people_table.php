<?php

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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 254);
            $table->string('email', length: 254)->nullable();
            $table->string('phone', length: 16)->nullable();
            $table->string('address1', length: 254)->nullable();
            $table->string('address2', length: 254)->nullable();
            $table->string('address3', length: 254)->nullable();
            $table->string('city', length: 254)->nullable();
            $table->string('state', length: 254)->nullable();
            $table->string('postcode', length: 16)->nullable();
            $table->boolean('is_alumni')->default(false);
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
