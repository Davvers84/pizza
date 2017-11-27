<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoughsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doughs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('dough_name', 20);
            $table->integer('dough_base_size_inches')->default(10);
            $table->decimal('dough_extra_price',10, 2)->default(0.00);
            $table->boolean('dough_stuffed_crust')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doughs');
    }
}
