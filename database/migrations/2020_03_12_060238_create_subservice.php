<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubservice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subservice', function (Blueprint $table) {
            $table->bigIncrements('SubServiceID');
            $table->string('SubServiceName');
            $table->string('SubServiceDescription')->nullable();
            $table->double('SubServicePrice');
            $table->integer('ServiceID');
            $table->integer('DetailServiceID');
            $table ->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subservice');
    }
}
