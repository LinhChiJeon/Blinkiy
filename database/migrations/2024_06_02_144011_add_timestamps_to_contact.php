<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToContact extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('contact', 'created_at')) {
            Schema::table('contact', function (Blueprint $table) {
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::table('contact', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
}
