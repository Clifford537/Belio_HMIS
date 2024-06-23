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
        Schema::create('wards', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('description', 100)->nullable();
            $table->bigInteger('ward_type_id')->nullable()->index('fk_wards_ward_types');
            $table->integer('capacity')->nullable();
            $table->string('location', 100)->nullable();
            $table->boolean('status')->nullable()->default(true);
            $table->bigInteger('nurse_id')->nullable()->index('fk_wards_nurses');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wards');
    }
};
