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
        Schema::create('admissions', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->dateTime('admission_date')->nullable();
            $table->bigInteger('doctor_id')->nullable()->index('fk_admissions_doctors');
            $table->char('reason_for_admission', 100)->nullable();
            $table->string('discharge_status', 100)->nullable();
            $table->bigInteger('admission_types_id')->nullable()->index('fk_admissions_admission_type');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
            $table->bigInteger('patient_id')->nullable()->unique('unq_admissions_patient_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
