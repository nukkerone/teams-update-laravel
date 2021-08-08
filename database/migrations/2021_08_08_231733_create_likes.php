<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_comment_likes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_comment_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->unique(['project_comment_id', 'user_id']);
            $table->foreign('project_comment_id')->references('id')->on('project_comments');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('comment_comment_likes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comment_comment_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->unique(['comment_comment_id', 'user_id']);
            $table->foreign('comment_comment_id')->references('id')->on('comment_comments');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_comment_likes');
        Schema::dropIfExists('project_comment_likes');
    }
}
