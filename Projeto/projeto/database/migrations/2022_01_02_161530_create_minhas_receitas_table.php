<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinhasReceitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minhas_receitas', function (Blueprint $table) {
            $table->increments('id')->key;
            $table->timestamps();
            $table->string('nome');
            $table->decimal('tempo');
            $table->integer('qnt_pessoas');
            $table->string('ingredientes');
            $table->string('modo_de_preparo');
            $table->string('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('minhas_receitas');
    }
}
