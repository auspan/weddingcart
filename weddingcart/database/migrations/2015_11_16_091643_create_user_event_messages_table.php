<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserEventMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_event_messages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('text', 45)->nullable();
			$table->integer('userevent_id')->index('fk_user_event_messages_user_role_events1_idx');
			$table->integer('user_id')->index('fk_user_event_messages_users1_idx');
			$table->timestamps();
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_event_messages');
	}

}
