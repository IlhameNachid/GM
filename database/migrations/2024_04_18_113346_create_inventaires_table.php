<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventairesTable extends Migration
{
    public function up()
    {
        Schema::create('inventaires', function (Blueprint $table) {
            $table->bigIncrements('num_article')->unique();
            $table->string('Designation');
            $table->integer('num_inventaire')->unique()->unsigned();
            $table->enum('État', ['Bon', 'Passable', 'À retirer']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventaires');
    }
}