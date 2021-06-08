<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->integer('place_id');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('location_description')->nullable();
            $table->string('discount');
            $table->string('discount_code');
            $table->string('subtotal');
            $table->string('tax')->nullable();
            $table->string('total');
            $table->string('payment_gateway')->nullable();
            $table->string('status')->nullable();
            $table->string('is_paid');
            $table->integer('rider_id');
            $table->string('affiliate_code')->nullable();
            $table->integer('store_id');


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
