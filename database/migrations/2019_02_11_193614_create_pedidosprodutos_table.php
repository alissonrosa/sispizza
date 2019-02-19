<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosprodutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidosprodutos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pedido_id');
			$table->foreign('pedido_id')->references('id')->on('pedidos');
			$table->unsignedInteger('produto_id');
			$table->foreign('produto_id')->references('id')->on('produtos');
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
        Schema::dropIfExists('pedidosprodutos');
    }
}
