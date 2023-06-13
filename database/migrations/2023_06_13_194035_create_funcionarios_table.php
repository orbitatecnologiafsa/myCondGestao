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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email')->unique();
            $table->unsignedBigInteger('funcao_id');
            $table->integer('telefone')->unique();
            $table->string('email_login')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('nome');
            $table->string('cpf')->unique();
        });

        Schema::table('funcionarios',function(Blueprint $table){
            $table->foreign('funcao_id')->references('id')->on('funcoes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
};
