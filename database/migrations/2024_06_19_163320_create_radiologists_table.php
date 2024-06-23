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
        Schema::create('radiologists', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('name', 100)->nullable();
            $table->string('specialization', 100)->nullable();
            $table->string('phone_number', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->bigInteger('department_id')->nullable()->index('fk_radiologists_departments');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('radiologists');
    }
};
