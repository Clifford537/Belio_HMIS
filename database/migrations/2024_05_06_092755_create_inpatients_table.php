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
        Schema::create('inpatients', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id'); // Assuming you have a 'patients' table
            $table->dateTime('admission_date');
            $table->dateTime('discharge_date')->nullable();
            $table->string('ward')->nullable();
            $table->string('room_number')->nullable();
            $table->string('bed_number')->nullable();
            $table->text('diagnosis')->nullable();
            $table->text('treatment_plan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inpatients');
    }
};
