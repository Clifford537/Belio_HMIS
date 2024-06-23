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
        Schema::table('admissions', function (Blueprint $table) {
            $table->foreign(['admission_types_id'], 'fk_admissions_admission_type')->references(['id'])->on('admission_types')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['doctor_id'], 'fk_admissions_discharges')->references(['id'])->on('doctors')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['patient_id'], 'fk_admissions_patients')->references(['id'])->on('patients')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admissions', function (Blueprint $table) {
            $table->dropForeign('fk_admissions_admission_type');
            $table->dropForeign('fk_admissions_discharges');
            $table->dropForeign('fk_admissions_patients');
        });
    }
};
