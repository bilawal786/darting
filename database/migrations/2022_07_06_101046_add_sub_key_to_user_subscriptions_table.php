<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubKeyToUserSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_subscriptions', function (Blueprint $table) {
            $table->longText('key')->nulable();
            $table->longText('paymentMethodId')->nulable();
            $table->string('price')->nulable();
            $table->string('card_holder_name')->nulable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_subscriptions', function (Blueprint $table) {
            $table->longText('key')->nulable();
            $table->longText('paymentMethodId')->nulable();
            $table->string('price')->nulable();
            $table->string('card_holder_name')->nulable();
        });
    }
}
