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
        Schema::create('discharges', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('admission_id')->nullable()->index('fk_discharge_admissions');
            $table->dateTime('discharge_date')->nullable();
            $table->string('discharge_instructions', 100)->nullable();
            $table->string('discharge_disposition', 1000)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discharges');
    }
};
