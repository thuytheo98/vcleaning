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
        Schema::create('vcer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment("ten nv");
            $table->string('identification')->comment("CMND nv");
            $table->string('address')->comment("dia chi nv");
            $table->string('phone')->comment("so dien thoai nv");
            $table->integer('age')->comment("tuoi nv");
            $table->string('date')->comment("ngay lam");
            $table->string('time')->comment("thoi diem co the lam");
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
        Schema::dropIfExists('vcer');
    }
}
