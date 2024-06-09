<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPedidosProdutosAddQuantidade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Adiciona a coluna quantidade na tabela pedido_produtos
        Schema::table('pedido_produtos', function (Blueprint $table) {
            $table->integer('quantidade')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Remove a coluna quantidade da tabela pedido_produtos
        Schema::table('pedido_produtos', function (Blueprint $table) {
            $table->dropColumn('quantidade');
        });
    }
}
