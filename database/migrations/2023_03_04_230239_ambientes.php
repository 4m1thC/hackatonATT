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
        Schema::create('ambientes', function (Blueprint $table) {
            $table->engine ="InnoDB";
            $table->id();
            $table->string('nombre_ambiente');
            $table->string('direccion');
            $table->text('descripcion');
            $table->timestamps();

            $table->foreignId('evento_id')
                ->nullable()
                ->constrained('eventos')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
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
