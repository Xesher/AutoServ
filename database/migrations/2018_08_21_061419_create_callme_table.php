<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('callme', function (Blueprint $table) {
            $table->increments('id');
            $table->text('brand');
            $table->text('model');
            $table->integer('year');
            $table->text('engine');
            $table->text('work');
            $table->integer('mileage');
            $table->text('spear');
            $table->text('phone');
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
        Schema::dropIfExists('callme');
    }
}
