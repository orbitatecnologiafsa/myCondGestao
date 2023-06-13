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
     * nome
telefone unique
cpf
bloco
numero
email
status_fk
created_at
updated_at

     */
    public function up()
    {
        Schema::create('moradores', function (Blueprint $table) {
            $table->id();
            $table->integer('telefone');
            $table->string('cpf')->unique();
            $table->integer('numero');
            $table->integer('status_fk');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moradores');
    }
};
