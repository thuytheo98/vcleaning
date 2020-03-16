<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address', 255);
            $table->string('payment',100)->comment('phuong thuc thanh toan');
            $table->date('date')->comment('ngay lap don');
            $table->date('start_time')->comment('ngay gio bat dau');
            $table->date('end_time')->comment('ngay gio ket thuc');
            $table->string('repeat',255)->comment('lap lai hang tuan');
            $table->double('total')->nullable();
            $table->integer('status');
            $table->integer('user_id');
            $table->integer('emp_id');
            $table->integer('vcer_id');
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
        Schema::dropIfExists('order');
    }
}
