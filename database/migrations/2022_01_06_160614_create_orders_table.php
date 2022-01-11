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
            $table->integer('total_price')->nullable();
            $table->integer('shipping_fee')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->integer('pay_way')->nullable(); //1.信用卡 2.網路ATM 3.超商代碼
            $table->integer('ship_way')->nullable(); //1.黑貓宅配 2.超商店到店
            $table->integer('status')->nullable(); //1.未付款 2.已付款 3.已出貨 4.已取消
            $table->integer('order_number')->nullable(); //金流方紀錄的訂單編號
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
