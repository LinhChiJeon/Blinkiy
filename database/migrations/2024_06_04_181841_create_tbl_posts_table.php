<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_posts', function (Blueprint $table) {
            $table->increments('post_id'); // auto-incrementing primary key
            $table->tinyText('post_title'); // tinytext
            $table->text('post_desc'); // text
            $table->longText('post_content'); // longtext
            $table->string('post_meta_keywords', 255); // varchar(255)
            $table->integer('post_status'); // int(11)
            $table->string('post_image', 200); // varchar(200)
            $table->integer('cate_post_id')->unsigned(); // int(10), unsigned for foreign key
            $table->string('post_slug', 255); // varchar(255)
            $table->foreign('cate_post_id')->references('cate_post_id')->on('tbl_category_post')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_posts');
    }
}
