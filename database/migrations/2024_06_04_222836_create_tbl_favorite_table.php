<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(): void
    {
        if (!Schema::hasTable('tbl_favorite')) {
            Schema::create('tbl_favorite', function (Blueprint $table) {
                $table->integer('customer_id')->unsigned();
                $table->integer('product_id')->unsigned();
                $table->timestamps();
                $table->primary(['customer_id','product_id']);  
                $table->foreign('customer_id')->references('customer_id')->on('tbl_customers')->onDelete('cascade');
                $table->foreign('product_id')->references('product_id')->on('tbl_product')->onDelete('cascade');
                });
        }
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_favorite');
    }
};