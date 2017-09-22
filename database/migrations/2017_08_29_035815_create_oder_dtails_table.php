<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oder_details', function (Blueprint $table) {
            $table->increments('od_id');
            $table->integer('od_qty');
            $table->integer('od_status');
            $table->integer('pro_id')->unsigned();
            $table->foreign('pro_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('o_id')->unsigned();
            $table->foreign('o_id')->references('id')->on('oders')->onDelete('cascade');
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
        Schema::dropIfExists('oder_details');
    }
}
