<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('time');
            $table->integer('shipping_price');
            $table->integer('total');
            $table->text('notes_transport');
            $table->text('notes_customer');
            $table->integer('payment')->comment('0: COD | 1: khach hang chuyen khoan truc tiep');
            $table->integer('status')->comment('0: chua giao| 1: da thanh toan| 2: da huy');
            $table->text('reason_cancel')->nullable();
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
        Schema::dropIfExists('order');
    }
}
