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
        Schema::table('beds', function (Blueprint $table) {
            $table->foreign(['bed_type_id'], 'fk_beds_bed_types')->references(['id'])->on('bed_types')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['patient_id'], 'fk_beds_patients')->references(['id'])->on('patients')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['ward_id'], 'fk_beds_wards')->references(['id'])->on('wards')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('beds', function (Blueprint $table) {
            $table->dropForeign('fk_beds_bed_types');
            $table->dropForeign('fk_beds_patients');
            $table->dropForeign('fk_beds_wards');
        });
    }
};
