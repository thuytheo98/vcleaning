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
            $table->bigIncrements('vcer_id');
            $table->string('vcer_name',50);
            $table->string('vcer_identification', 50);
            $table->string('vcer_address',128);
            $table->string('vcer_phone',10);
            $table->integer('vcer_age');
            $table->string('vcer_image',255)->nullable();
            $table->string('vcer_date')->comment("ngay lam")->nullable();
            $table->string('vcer_time')->comment("thoi diem co the lam")->nullable();
            $table->string('vcer_experience')->comment('kinh nghiem')->nullable();
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
