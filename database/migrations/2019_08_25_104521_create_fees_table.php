<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('semester', 100)->nullable()->default('text');
            $table->integer('required')->unsigned()->nullable()->default(12);
            $table->integer('amount')->unsigned()->nullable()->default(12);
            $table->integer('blance')->unsigned()->nullable()->default(12);
            $table->integer('discount')->unsigned()->nullable()->default(12);
            $table->integer('add')->unsigned()->nullable()->default(12);
            $table->integer('drop')->unsigned()->nullable()->default(12);
            $table->integer('refund')->unsigned()->nullable()->default(12);
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
        Schema::dropIfExists('fees');
    }
}
