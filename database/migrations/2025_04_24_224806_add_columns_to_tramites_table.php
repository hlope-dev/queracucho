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
        Schema::table('tramites', function (Blueprint $table) {
            $table->string('titulo')->after('id');
            $table->text('descripcion')->after('titulo');
            $table->date('fecha_limite')->after('descripcion');
            $table->foreignId('user_id')->constrained()->after('fecha_limite');
            $table->integer('publicado')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tramites', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('titulo');
            $table->dropColumn('descripcion');
            $table->dropColumn('fecha_limite');
            $table->dropColumn('user_id');
            $table->dropColumn('publicado');
        });
    }
};
