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
        Schema::table('users', function (Blueprint $table) {
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->integer('telefono');
            $table->string('direccion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('primer_apellido');
            $table->dropColumn('segundo_apellido');
            $table->dropColumn('telefono');
            $table->dropColumn('direccion');
        });
    }
};
