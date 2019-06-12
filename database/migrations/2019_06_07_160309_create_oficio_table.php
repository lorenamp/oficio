<?php

use
    Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficio', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('registro_id')->unsigned();
            $table->integer('respondio_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->string('area');
            $table->string('descripcion');
            $table->date('fecha_registro')->nullable();
            $table->date('fecha_respuesta')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps();
            $table->foreign('registro_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('respondio_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('status')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('oficio');

    }
}
