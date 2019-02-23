<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrulieactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trulieactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trulie_id')->unsigned();
            $table->foreign('trulie_id')->references('id')->on('trulies');
            $table->string('trulietype');
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
        Schema::dropIfExists('trulieactions');
    }
}
