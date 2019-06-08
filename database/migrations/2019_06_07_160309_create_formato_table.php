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
        Schema::create('formato', function (Blueprint $table) {
            $table->increments('oficio_id')->unsigned();
            $table->string('area');
            $table->string('descripcion');
            $table->date('fecha_crea')->nullable();
            $table->date('fecha_resp')->nullable();
            $table->timestamps();
            $table->foreign('oficio_id')->references('id')->on('usuario')
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
        Schema::dropIfExists('formato');
    }
}
