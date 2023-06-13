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
        Schema::create('sindico_condominio', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('condominio_id');
            $table->unsignedBigInteger('sindico_id');
        });

        Schema::table('sindico_condominio',function(Blueprint $table){
            $table->foreign('condominio_id')->references('id')->on('condominios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sindico_id')->references('id')->on('sindicos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sindico_condominio');
    }
};
