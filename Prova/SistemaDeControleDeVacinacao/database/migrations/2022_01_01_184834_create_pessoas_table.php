<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
 /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('pessoas', function (Blueprint $table) {
                
                $table->id();
                $table->timestamps();
                $table->string("nome", 100);
                $table->string("bairro", 100);
                $table->string("cidade", 100);
                $table->string("estado", 100);
                $table->date("data_nascimento");
                $table->string("cpf", 11);
                
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('pessoas');
        }
}
    