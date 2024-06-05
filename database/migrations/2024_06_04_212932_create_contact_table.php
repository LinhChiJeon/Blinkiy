<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('contact_id'); // auto-incrementing primary key
            $table->string('customer_name', 40);
            $table->string('customer_phone', 40);
            $table->string('email', 100);
            $table->string('contact_title');
            $table->text('contact_question');
            $table->tinyInteger('reply_status')->default(0);
            $table->string('reply_title')->nullable();
            $table->text('reply_content')->nullable();
            $table->timestamps(); // automatically adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
