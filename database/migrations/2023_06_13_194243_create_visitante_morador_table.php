<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitante_morador', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('morador_id');
            $table->unsignedBigInteger('visitante_id');
            $table->unsignedBigInteger('condominio_id');
            $table->string('codigo');
            $table->enum('status',['expirado','valido']);
        });

        Schema::table('visitante_morador',function(Blueprint $table){
            $table->foreign('condominio_id')->references('id')->on('condominios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('visitante_id')->references('id')->on('visitantes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('morador_id')->references('id')->on('moradores')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('morador_visitante');
    }
};
