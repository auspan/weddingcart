<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserEventDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_event_details', function(Blueprint $table)
		{
			$table->foreign('user_event_id', 'fk_user_role_event_details_user_role_events1')->references('id')->on('user_events')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_event_details', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_role_event_details_user_role_events1');
		});
	}

}
