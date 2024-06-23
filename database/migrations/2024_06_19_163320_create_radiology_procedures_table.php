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
        Schema::create('radiology_procedures', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('patient_id')->nullable()->unique('fk_radiology_procedure');
            $table->date('procedure_date')->nullable();
            $table->string('description', 100)->nullable();
            $table->string('procedure_results', 100)->nullable();
            $table->decimal('procedure_cost', 10, 0)->nullable();
            $table->bigInteger('insurance_id')->nullable()->unique('unq_radiology_procedure_insurance_id');
            $table->string('procedure_location', 100)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
            $table->bigInteger('theatre_id')->nullable()->unique('unq_radiology_procedure_theatre_id');
            $table->bigInteger('doctor_id')->nullable()->index('fk_radiology_procedures');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('radiology_procedures');
    }
};
