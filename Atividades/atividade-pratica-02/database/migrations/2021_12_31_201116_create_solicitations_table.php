<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitations', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string('person', 255);
            $table->string('description', 255);
            $table->date('date');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('protocol_id');

            $table->foreign('user_id')
            ->references('id')
            ->on('users');

            $table->foreign('protocol_id')
            ->references('id')
            ->on('protocols');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitations');
    }
}
