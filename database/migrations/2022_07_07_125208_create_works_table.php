<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->longText('title1');
            $table->longText('title2');
            $table->longText('title3');
            $table->longText('title4');
            $table->longText('title5');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->longtext('descruption1');
            $table->longtext('descruption2');
            $table->longtext('descruption3');
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
        Schema::dropIfExists('works');
    }
}
