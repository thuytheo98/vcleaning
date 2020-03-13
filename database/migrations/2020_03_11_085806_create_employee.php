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
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('phone',15);
            $table->string('address',255);
            $table->string('identification',50)->comment('CMND nhan vien');
            $table->string('gender',50);
            $table->date('birthday');
            $table->string('email');
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
