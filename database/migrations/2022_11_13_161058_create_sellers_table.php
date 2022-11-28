<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('dirciption', 1000);
            $table->string('course', 20);
            $table->string('year', 20);
            $table->double('price', 10,2);
            $table->double('myId', 10,0);
            $table->string('minimum', 50);
            $table->string('address', 100);
            $table->string('img', 400);
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
        Schema::dropIfExists('sellers');
    }
};
