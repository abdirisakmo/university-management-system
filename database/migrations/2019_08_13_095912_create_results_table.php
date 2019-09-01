<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->integer('id');
            $table->string('course', 100)->nullable()->default('text');
            $table->string('department', 100)->nullable()->default('text');
            $table->integer('attendence')->unsigned()->nullable()->default(12);
            $table->integer('assignment')->unsigned()->nullable()->default(12);
            $table->integer('midexam')->unsigned()->nullable()->default(12);
            $table->integer('finalexam')->unsigned()->nullable()->default(12);
            $table->integer('result')->unsigned()->nullable()->default(12);
            $table->string('grade', 100)->nullable()->default('text');
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
        Schema::dropIfExists('results');
    }
}
