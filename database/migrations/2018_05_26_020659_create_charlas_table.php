<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharlasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charlas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->dateTime('fecha');
            $table->integer('sala_id')->unsigned();
            $table->foreign ('sala_id')->references('id')->on('salas');
            $table->integer('speaker_id')->unsigned();
            $table->foreign ('speaker_id')->references('id')->on('speakers');
            $table->timestamps();
        });

//        Schema::table('charlas', function($table) {
//            $table->foreign('user_id')->references('id')->on('salas');
//            $table->foreign('speaker_id')->references('id')->on('speakers');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charlas');
    }
}
