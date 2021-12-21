<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPostTagTableAddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_tag', function (Blueprint $table) {
            //
            $table->foreignId('post_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('tag_id')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unique(['post_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_tag', function (Blueprint $table) {
            //
            $table->dropConstrainedForeignId('post_id');
            $table->dropConstrainedForeignId('tag_id');
        });
    }
}
