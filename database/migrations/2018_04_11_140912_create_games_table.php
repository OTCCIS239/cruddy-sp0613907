<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            //table collumns go here. run 'php artisan migrate' to integrate
            //$table->string('name')->nullable();
            //$table->string('price')->default('9.99');
            $table->string('name');
            $table->string('description');
            $table->double('price');
            $table->binary('cover_photo');
            $table->boolean('xbox')->default('0');
            $table->boolean('ps4')->default('0');
            $table->boolean('nentendo')->default('0');
            $table->boolean('pc')->default('0');
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
        Schema::dropIfExists('games');
    }
}
