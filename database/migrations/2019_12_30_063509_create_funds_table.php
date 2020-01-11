<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->string('image');
            $table->string('description',10000)->nullable();
            $table->float('available',10,2);
            $table->float('buy',10,3);
            $table->float('buyrate',10,3);
            $table->float('sellrate',10,3);
            $table->string('receive')->nullable();
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
        Schema::dropIfExists('funds');
    }
}
