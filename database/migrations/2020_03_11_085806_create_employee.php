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
            $table->bigIncrements('emp_id');
            $table->string('emp_name',100);
            $table->string('emp_phone',15);
            $table->string('emp_address',255);
            $table->string('emp_identification',50);
            $table->string('emp_gender',50);
            $table->date('emp_birthday');
            $table->string('emp_email', 128)->nullable();
            $table->string('emp_image',1000)->nullable();
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
