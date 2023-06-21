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
        Schema::create('sindicos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cpf');
            $table->string('nome');
            $table->string('email_contato')->unique();
            $table->integer('telefone')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sindicos');
    }
};
