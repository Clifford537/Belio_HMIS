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
        Schema::table('radiologists', function (Blueprint $table) {
            $table->foreign(['department_id'], 'fk_radiologists_departments')->references(['id'])->on('departments')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('radiologists', function (Blueprint $table) {
            $table->dropForeign('fk_radiologists_departments');
        });
    }
};
