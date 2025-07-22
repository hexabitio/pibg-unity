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
        Schema::create('master_configs', function (Blueprint $table) {
            $table->string('id', length: 16);
            $table->string('description', length: 128);
            $table->string('value_type', length: 2);
            $table->string('value_string', length: 254)->nullable();
            $table->integer('value_integer')->nullable();
            $table->decimal('value_decimal')->nullable();
            $table->boolean('value_boolean')->nullable();
            $table->dateTime('value_datetime')->nullable();
            $table->timestamps();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_configs');
    }
};
