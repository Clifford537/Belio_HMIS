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
        Schema::create('theatres', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('name', 100)->nullable();
            $table->string('theatre_status', 100)->nullable();
            $table->string('location', 100)->nullable();
            $table->integer('capacity');
            $table->text('equipment_id')->nullable();
            $table->dateTime('operation_schedules')->nullable();
            $table->date('next_maintenance_date')->nullable();
            $table->date('last_maintenance_date')->nullable();
            $table->bigInteger('doctor_incharge')->nullable()->index('fk_theatre_management_doctors');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theatres');
    }
};
