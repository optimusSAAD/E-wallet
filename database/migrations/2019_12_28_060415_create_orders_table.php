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
            $table->integer('users_id')->unsigned()->nullable();
            $table->foreign('users_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('fund_id')->nullable();
            $table->integer('receiving_fund_id')->nullable();
            $table->float('sending_fund_amount',8,3);
            $table->float(' ',8,3)->nullable();
            $table->string('sending_account_info');
            $table->string('receiving_account_info')->nullable();
            $table->string('contact',1000)->nullable();
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
