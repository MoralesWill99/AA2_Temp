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
        Schema::table('Clientes', function (Blueprint $table) {
            $table->string('contrasena')->after('Direccion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Clientes', function (Blueprint $table) {
            $table->dropColumn('contrasena');
        });
    }
};