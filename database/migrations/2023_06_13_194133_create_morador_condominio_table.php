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
        Schema::create('morador_condominio', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('morador_id');
            $table->unsignedBigInteger('condominio_id');
        });

        Schema::table('morador_condominio', function (Blueprint $table) {
            $table->foreign('morador_id')->references('id')->on('moradores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('condominio_id')->references('id')->on('condominios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('morador_condominio');
    }
};
