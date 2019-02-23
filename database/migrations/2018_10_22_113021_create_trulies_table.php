<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use phpDocumentor\Reflection\DocBlock\Description;

class CreateTruliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trulies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('description')->nullable();
            $table->integer('trues')->default(0);
            $table->integer('lies')->default(0);
            $table->float('latitude', 10, 6);
            $table->float('longitude', 10, 6);
            $table->string('location');
            $table->boolean('status')->default(1);
            $table->boolean('deleteStatus')->default(0);
            $table->softDeletesTz();
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
        Schema::dropIfExists('trulies');
    }
}
