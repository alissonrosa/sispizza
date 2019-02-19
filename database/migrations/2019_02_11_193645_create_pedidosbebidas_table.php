<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosbebidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidosbebidas', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('bebida_id');
			$table->foreign('bebida_id')->references('id')->on('bebidas');
			$table->unsignedInteger('pedido_id');
			$table->foreign('pedido_id')->references('id')->on('pedidos');
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
        Schema::dropIfExists('pedidosbebidas');
    }
}
