<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pencalonan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencalonan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calon_id');
            $table->integer('sesi_id');
            $table->integer('user_id');
            $table->string('asas');
            $table->string('ulasan');
            $table->softDeletes();
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
        //
    }
}
