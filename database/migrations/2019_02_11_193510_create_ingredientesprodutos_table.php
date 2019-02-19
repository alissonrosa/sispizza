<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientesprodutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientesprodutos', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('produto_id');
			$table->foreign('produto_id')->references('id')->on('produtos');
			$table->unsignedInteger('ingrediente_id');
			$table->foreign('ingrediente_id')->references('id')->on('ingredientes');
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
        Schema::dropIfExists('ingredientesprodutos');
    }
}
