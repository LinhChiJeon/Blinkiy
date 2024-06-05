<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCategoryPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category_post', function (Blueprint $table) {
            $table->increments('cate_post_id'); // Tự động tăng và là khóa chính
            $table->text('cate_post_name', 255); // Dùng text thay vì tinyText
            $table->integer('cate_post_status'); // int(11)
            $table->string('cate_post_slug', 255);
            $table->string('cate_post_desc', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_category_post');
    }
}
