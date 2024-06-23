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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->dateTime('visit_date')->nullable();
            $table->string('medical_history', 600)->nullable();
            $table->string('diagnoses', 600)->nullable();
            $table->string('treatments', 600)->nullable();
            $table->string('lab_results', 600)->nullable();
            $table->string('imaging_studies', 600)->nullable();
            $table->string('progress_notes', 600)->nullable();
            $table->bigInteger('patient_id')->nullable()->index('fk_medical_records_patients');
            $table->bigInteger('nurse_id')->nullable()->index('fk_medical_records_nurses');
            $table->bigInteger('doctor_id')->nullable()->index('fk_medical_records_doctors');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_records');
    }
};
