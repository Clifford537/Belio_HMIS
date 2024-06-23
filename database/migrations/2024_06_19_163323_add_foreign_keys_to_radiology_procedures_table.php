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
        Schema::table('radiology_procedures', function (Blueprint $table) {
            $table->foreign(['insurance_id'], 'fk_insurance')->references(['id'])->on('insurances')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['patient_id'], 'fk_radiology_procedure')->references(['id'])->on('patients')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['doctor_id'], 'fk_radiology_procedures')->references(['id'])->on('doctors')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('radiology_procedures', function (Blueprint $table) {
            $table->dropForeign('fk_insurance');
            $table->dropForeign('fk_radiology_procedure');
            $table->dropForeign('fk_radiology_procedures');
        });
    }
};
