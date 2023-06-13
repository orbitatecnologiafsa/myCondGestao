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
        Schema::create('condominios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('cnpj')->unique();
            $table->integer('telefone')->unique();
            $table->string('email')->unique();
            $table->string('rua');
            $table->string('cep');
            $table->string('bairro');
            $table->string('cidade');
            $table->integer('numero');
            $table->enum('status', ['ativo', 'bloqueado'])->default('ativo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condominios');
    }
};
