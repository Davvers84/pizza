<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('dough_id')->unsigned();
            $table->foreign('dough_id')->references('id')->on('doughs');
            $table->string('pizza_name', 32);
            $table->decimal('pizza_base_price', 10,2)->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pizzas');
    }
}
