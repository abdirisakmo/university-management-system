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
            $table->bigIncrements('id');
            $table->string('name', 100)->nullable()->default('text');
            $table->string('gender', 100)->nullable()->default('text');
            $table->integer('phone')->unsigned()->nullable()->default(12);
            $table->integer('age')->unsigned()->nullable()->default(12);
            $table->string('type', 100)->nullable()->default('text');
            $table->string('shift', 100)->nullable()->default('text');
            $table->integer('money')->unsigned()->nullable()->default(12);
            $table->string('address', 100)->nullable()->default('text');
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
        Schema::dropIfExists('employees');
    }
}
