<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_events', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_user_events_users1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('event_id', 'fk_user_role_events_events1')->references('id')->on('events')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_events', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_events_users1');
			$table->dropForeign('fk_user_role_events_events1');
		});
	}

}
