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
        Schema::create('patients', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('gender', 100);
            $table->string('phone_number', 50)->nullable();
            $table->string('address', 50);
            $table->string('email', 50)->nullable();
            $table->string('blood_group', 10)->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('surname', 100)->nullable();
            $table->string('other_names', 100)->nullable();
            $table->string('emergency_contact_name', 100)->nullable();
            $table->string('emergency_contact_phone', 100)->nullable();
            $table->string('status', 100)->nullable()->default('1');
            $table->bigInteger('insurance_id')->nullable()->index('fk_patients_insurances');
            $table->bigInteger('nurse_id')->nullable()->index('fk_patients_nurses');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
            $table->bigInteger('doctor_id')->nullable()->index('fk_patients_doctors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
