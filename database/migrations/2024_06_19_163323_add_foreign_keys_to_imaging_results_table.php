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
        Schema::table('imaging_results', function (Blueprint $table) {
            $table->foreign(['technician_id'], 'fk_imaging_results_technicians_0')->references(['id'])->on('technicians')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('imaging_results', function (Blueprint $table) {
            $table->dropForeign('fk_imaging_results_technicians_0');
        });
    }
};
