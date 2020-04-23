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
            $table->bigIncrements('OrderID');
            $table->string('OrderAddress', 255);
            $table->string('Payment',100);
            $table->date('Date')->comment('ngay lap don');
            $table->date('start_time')->comment('ngay gio bat dau');
            $table->date('end_time')->comment('ngay gio ket thuc');
            $table->string('repeat',255)->comment('lap lai hang tuan');
            $table->double('total')->nullable();
            $table->integer('status');
            $table->integer('user_id');
            $table->integer('ServiceID');
            $table->integer('EmpID');
            $table->integer('VcerID');
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
