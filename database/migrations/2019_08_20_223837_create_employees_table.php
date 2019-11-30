<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othername')->nullable();
            $table->integer('institution_id')->unsigned();
            $table->integer('rank_id')->unsigned();
            $table->string('sex');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('place_of_residence');
            $table->string('nationality');
            $table->string('location');
            $table->string('date_employed');
            $table->string('image')->nullable();
            $table->timestamps();
            $table->foreign('institution_id')->references('id')->on('institutions');
            $table->foreign('rank_id')->references('id')->on('ranks');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
