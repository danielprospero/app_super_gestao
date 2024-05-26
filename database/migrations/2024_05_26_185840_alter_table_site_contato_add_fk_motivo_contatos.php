<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContatoAddFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //adicionar a coluna motivo_contatos_id
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->unsignedBigInteger('motivo_contatos_id');
        });

        //atribuir motivo_contatos_id a tabela site_contatos
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');

        //criar a fk e remover a coluna motivo_contato
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //adicionar a coluna motivo_contato
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->interger('motivo_contato');
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
        });

        //atribuir motivo_contato a tabela site_contatos
        DB::statement('update site_contatos set motivo_contato = motivo_contatos_id');

        //remover a fk e remover a coluna motivo_contatos_id
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->dropColumn('motivo_contatos_id');
        });
 
    }
}
