<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sales_details', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->bigInteger('sale_id')->unsigned();
          $table->bigInteger('medicine_id')->unsigned();
          $table->Integer('quantity');
          $table->Integer('total');
          $table->timestamps();
          $table->foreign('sale_id')->references('id')->on('sales')->onCascade('delete');
          $table->foreign('medicine_id')->references('id')->on('medicines')->onCascade('delete');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_details');
    }
}
