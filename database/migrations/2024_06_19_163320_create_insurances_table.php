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
        Schema::create('insurances', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('insurance_company', 100)->nullable();
            $table->integer('policy_number')->nullable();
            $table->date('coverage_start_date')->nullable();
            $table->date('coverage_end_date')->nullable();
            $table->string('billing_information', 100)->nullable();
            $table->bigInteger('patient_id')->nullable()->unique('unq_insurances_patient_id');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurances');
    }
};
