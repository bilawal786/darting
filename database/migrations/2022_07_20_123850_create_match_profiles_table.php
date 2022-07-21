<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('status')->nullable(); // 0 accept nd 1 reject
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
        Schema::dropIfExists('match_profiles');
    }
}
