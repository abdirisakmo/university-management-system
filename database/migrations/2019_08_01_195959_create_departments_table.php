<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('department_id')->unsigned()->nullable()->default(12)->unique();
            $table->string('name', 100)->nullable()->default('text');
            $table->integer('code')->unsigned()->nullable()->default(12);
            $table->integer('credit')->unsigned()->nullable()->default(12);
            $table->integer('year')->unsigned()->nullable()->default(12);
            $table->mediumText('description')->nullable();
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
        Schema::dropIfExists('departments');
    }
}
