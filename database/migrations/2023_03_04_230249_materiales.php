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
        Schema::create('materiales', function (Blueprint $table) {
            $table->engine ="InnoDB";
            $table->id();
            $table->bigInteger('evento_id')->unsigned();
            $table->string('nombre_materiales');
            $table->string('tipo');
            $table->string('archivo');
            $table->timestamps();

            $table->foreign('evento_id')->references('id')
            ->on('eventos')->onDelete('cascade');
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
