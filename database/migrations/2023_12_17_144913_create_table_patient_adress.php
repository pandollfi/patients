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
        Schema::create('patient_address', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('patient_id');
            $table->string('zip_code', 8);
            $table->string('street', 200);
            $table->string('number', 5);
            $table->string('complement', 150)->nullable();
            $table->string('district', 50);
            $table->string('city', 50);
            $table->string('state', 2);
            $table->string('country',50)->nullable()->default('Brasil');
            $table->timestamps();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_address');
    }
};
