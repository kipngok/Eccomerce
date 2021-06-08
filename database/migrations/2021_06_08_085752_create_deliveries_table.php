<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('rider_id');
            $table->date('scheduled_date');
            $table->time('scheduled_time');
            $table->time('scheduled_by');
            $table->string('status');
            $table->string('dispatched_by');
            $table->date('dispatched_at');
            $table->time('delivery_time');
            $table->date('delivery_date');
            $table->string('notes',1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}
