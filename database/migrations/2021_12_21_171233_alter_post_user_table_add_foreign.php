<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPostUserTableAddForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_user', function (Blueprint $table) {
            //
            $table->foreignId('post_id')->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('user_id')->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_user', function (Blueprint $table) {
            //
        });
    }
}
