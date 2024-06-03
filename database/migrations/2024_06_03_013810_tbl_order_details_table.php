<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order_details', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->unsignedInteger('product_id'); // `unsignedInteger` sẽ tương đương với `int(10)`
            $table->integer('product_quantity');
            $table->decimal('product_price', 10, 2);
            $table->decimal('total_price', 10, 2);
            $table->timestamps();

            $table->primary(['order_id', 'product_id']);

            $table->foreign('order_id')->references('order_id')->on('tbl_customer_order')->onDelete('cascade');
            $table->foreign('product_id')->references('product_id')->on('tbl_product')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_order_details');
    }
};
