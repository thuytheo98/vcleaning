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
            $table->bigIncrements('id');
            $table->string('name')->comment('ten dich vu di kem');
            $table->string('description')->comment('mo ta ve dich vu kem theo')->nullable();
            $table->double('price');
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
