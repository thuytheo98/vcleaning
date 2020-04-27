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
            $table->bigIncrements('order_id');
            $table->string('order_address', 255);
            $table->string('order_payment',100);
            $table->date('order_date')->comment('ngay lap don');
            $table->date('order_start_time')->comment('ngay gio bat dau');
            $table->date('order_end_time')->comment('ngay gio ket thuc');
            $table->string('order_repeat',255)->comment('lap lai hang tuan');
            $table->double('order_total');
            $table->integer('order_status')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('emp_id')->nullable();
            $table->integer('vcer_id')->nullable();
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
