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
        Schema::create('beds', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('bed_number', 100);
            $table->string('occupancy_status', 100)->nullable()->default('1');
            $table->bigInteger('ward_id')->nullable()->index('fk_beds_wards');
            $table->bigInteger('bed_type_id')->nullable()->index('fk_beds_bed_types');
            $table->bigInteger('patient_id')->nullable()->index('fk_beds_patients');
            $table->string('bedside_equipment', 100)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beds');
    }
};
