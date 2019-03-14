<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
			$table->string('cpf',14);
            $table->string('salario');
            $table->string('ch');
<<<<<<< HEAD
=======
			$table->unsignedInteger('usuario_id')->nullable();
			$table->foreign('usuario_id')->references('id')->on('usuarios');
>>>>>>> master
            $table->timestamps();

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });

        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('name');
            $table->string('telefone');
            $table->string('email');
            $table->string('rua');
            $table->string('bairro');
            $table->string('numero');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('funcionarios');
        Schema::dropIfExists('usuarios');
    }
}
