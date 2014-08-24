<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('posts', function($post_table){
            $post_table->increments('id');
            $post_table->string('content', 100);
            $post_table->string('tags', 200);
            $post_table->integer('author_id');
            //$user_table->string('remember_token', 100);->nullable();
            $post_table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
