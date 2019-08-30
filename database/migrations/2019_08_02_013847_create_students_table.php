<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('idNo')->unsigned()->nullable()->default(12)->unique();
            $table->string('name', 100)->nullable()->default('text');
        //    $table->integer('department')->unsigned()->nullable()->default(12);
        $table->string('department', 100)->nullable()->default('text');
            // $table->integer('department_id')->unsigned()->nullable();
            // $table->increments('department_id');
            $table->string('gender', 100)->nullable()->default('text');
            $table->integer('phone')->unsigned()->nullable()->default(12);
            $table->string('shift', 100)->nullable()->default('text');
            $table->string('type', 100)->nullable()->default('text');
            $table->integer('batchno')->unsigned()->nullable()->default(12);
            $table->mediumText('address')->nullable();
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
        Schema::dropIfExists('students');
    }
}
