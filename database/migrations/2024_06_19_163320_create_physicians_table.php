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
        Schema::create('physicians', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('first_name', 100)->nullable();
            $table->string('surname', 100)->nullable();
            $table->string('other_names', 100)->nullable();
            $table->string('specialty', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('clinic_hospital', 100)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
            $table->bigInteger('procedure_id')->nullable()->index('fk_referring_physician');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('physicians');
    }
};
