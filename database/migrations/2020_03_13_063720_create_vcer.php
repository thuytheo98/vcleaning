<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVcer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vcers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('identification', 50);
            $table->string('address',128);
            $table->string('phone',10);
            $table->integer('age');
            $table->string('date')->comment("ngay lam")->nullable();
            $table->string('time')->comment("thoi diem co the lam")->nullable();
            $table->string('status')->comment('trang thai nhan vc');
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
        Schema::dropIfExists('vcers');
    }
}
