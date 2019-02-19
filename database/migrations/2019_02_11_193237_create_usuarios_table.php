<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nome',50);
			$table->string('telefone',15);
			$table->string('email',50);
			$table->string('rua',100);
			$table->string('bairro',100);
			$table->integer('numero');
			//$table->unsignedInteger('funcionario_id');
			//$table->foreign('funcionario_id')->references('id')->on('funcionario');

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
        Schema::dropIfExists('usuarios');
    }
}
