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
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('user_send_fund_id');
            $table->integer('user_receive_fund_id');
            $table->float('user_send_fund_amount',13,5);
            $table->float('user_receive_fund_amount',13,5);
            $table->string('user_send_fund_account',1000);
            $table->string('user_receive_fund_account',1000);
            $table->float('user_total_pay',13,5);
            $table->string('user_transaction_id',3000);
            $table->string('user_contact',1000);
            $table->string('note',3000)->nullable();
            $table->integer('status')->default(0);
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
