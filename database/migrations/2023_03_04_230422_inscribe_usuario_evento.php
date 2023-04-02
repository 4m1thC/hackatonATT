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
        Schema::create('inscribe_usuario_eventos', function (Blueprint $table) {
            $table->id();

            $table->string('estado_asistencia');

            $table->foreignId('usuario_id')
                ->nullable()
                ->unsigned()
                ->constrained('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();


            $table->foreignId('evento_id')
                ->nullable()
                ->unsigned()
                ->constrained('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
