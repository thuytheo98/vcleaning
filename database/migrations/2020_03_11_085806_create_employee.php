<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('EmpID');
            $table->string('EmpName',100);
            $table->string('EmpPhone',15);
            $table->string('EmpAddress',255);
            $table->string('EmpIdentification',50)->comment('CMND nhan vien');
            $table->string('EmpGender',50);
            $table->date('EmpBirthday');
            $table->string('EmpEmail');
            $table->string('username')->comment('ten tai khoan');
            $table->string('password');
            $table->integer('role')->comment('quyen truy cap');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
