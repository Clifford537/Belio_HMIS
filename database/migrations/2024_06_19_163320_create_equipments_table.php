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
        Schema::create('equipments', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('name', 100)->nullable();
            $table->string('type', 100)->nullable();
            $table->string('serial_number', 100)->nullable();
            $table->string('manufacturer', 100)->nullable();
            $table->string('model', 100)->nullable();
            $table->date('purchase_date')->nullable();
            $table->date('warranty_expiry_date')->nullable();
            $table->string('location', 100)->nullable();
            $table->string('status', 50)->nullable();
            $table->date('last_maintenance_date')->nullable();
            $table->date('next_maintenance_date')->nullable();
            $table->decimal('cost', 10, 0)->nullable();
            $table->text('notes')->nullable();
            $table->bigInteger('laboratory_id')->nullable()->index('fk_equipments_laboratories');
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');
    }
};
