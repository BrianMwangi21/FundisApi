<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('order_category');
            $table->string('order_description');
            $table->string('order_extra_description');
            $table->string('order_location_area');
            $table->string('order_location_street');
            $table->string('order_location_house');
            $table->string('order_phonenumber');
            $table->string('order_time');
            $table->string('order_status');
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
        Schema::dropIfExists('orders');
    }
}
