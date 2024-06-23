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
        Schema::create('nurses', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('first_name', 100)->nullable();
            $table->string('surname', 100)->nullable();
            $table->string('other_names', 100)->nullable();
            $table->string('gender', 100)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('phone_number', 50)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('certification', 100)->nullable();
            $table->bigInteger('department_id')->nullable()->unique('unq_nurse_department_id');
            $table->bigInteger('shift_id')->nullable()->unique('fk_nurse_shifts');
            $table->string('email', 50)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nurses');
    }
};
