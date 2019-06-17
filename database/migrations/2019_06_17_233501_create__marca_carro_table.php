<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcaCarroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca_carro', function (Blueprint $table) {
            $table->integer('carroid')->unsigned();
            $table->integer('idmarca')->unsigned();
            $table->foreign('carroid')
                ->references('id')->on('carros')
                ->onDelete('cascade');
            $table->foreign('idmarca')
                ->references('idmarca')->on('marca')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_marca_carro');
    }
}
