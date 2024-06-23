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
        Schema::create('doctors', function (Blueprint $table) {
            $table->dateTime('date_of_birth');
            $table->string('gender', 100);
            $table->string('phone_number', 50)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('email', 50)->nullable();
            $table->bigInteger('specialization_id')->nullable()->unique('unq_doctors_specialization_id');
            $table->string('first_name', 300);
            $table->string('surname', 300);
            $table->string('other_names', 100)->nullable();
            $table->bigInteger('department_id')->nullable()->unique('unq_doctors_department_id');
            $table->string('lisence_number', 100)->nullable();
            $table->integer('years_of_experience')->nullable();
            $table->bigInteger('employment_status_id')->nullable()->unique('unq_doctors_employment_status_id');
            $table->bigInteger('shift_id')->nullable()->unique('unq_doctors_availabilty_id');
            $table->bigInteger('id', true);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
