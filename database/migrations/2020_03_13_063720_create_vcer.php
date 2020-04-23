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
            $table->bigIncrements('VcerID');
            $table->string('Vcername',50);
            $table->string('Identification', 50);
            $table->string('Address',128);
            $table->string('Phone',10);
            $table->integer('Age');
            $table->string('Image',255)->nullable();
            $table->string('Date')->comment("ngay lam")->nullable();
            $table->string('Time')->comment("thoi diem co the lam")->nullable();
            $table->string('Status')->comment('trang thai nhan vc')->nullable();
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
