<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFArmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_arms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('f_arms');
            $table->String('desc');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('ammo_id')->nullable();
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
        Schema::dropIfExists('f_arms');
    }
}
