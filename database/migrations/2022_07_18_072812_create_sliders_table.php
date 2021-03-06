<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('link1')->nullable();
            $table->string('link2')->nullable();
            $table->string('link3')->nullable();
            $table->string('image4');
            $table->string('image5');
            $table->string('image6');
            $table->string('link4')->nullable();
            $table->string('link5')->nullable();
            $table->string('link6')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
