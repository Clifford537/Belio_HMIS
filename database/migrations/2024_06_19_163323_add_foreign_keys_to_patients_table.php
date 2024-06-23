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
        Schema::table('patients', function (Blueprint $table) {
            $table->foreign(['doctor_id'], 'fk_patients_doctors')->references(['id'])->on('doctors')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['insurance_id'], 'fk_patients_insurances')->references(['id'])->on('insurances')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['nurse_id'], 'fk_patients_nurses')->references(['id'])->on('nurses')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropForeign('fk_patients_doctors');
            $table->dropForeign('fk_patients_insurances');
            $table->dropForeign('fk_patients_nurses');
        });
    }
};
