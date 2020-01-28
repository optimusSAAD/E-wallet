<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charges', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->integer('fund_id')->unsigned()->nullable();
            $table->foreign('fund_id')
                ->references('id')->on('funds')
                ->onDelete('cascade');
            $table->float('amount_to',10 ,3);
            $table->float('amount_from',10 ,3);
            $table->float('sending_rate',10,3);
            $table->float('discount_rate',10,3)->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('charges');
    }
}
