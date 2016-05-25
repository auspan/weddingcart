<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEventAttributesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('event_attributes', function(Blueprint $table)
		{
			$table->foreign('event_id', 'fk_eventAttributes_events1')->references('id')->on('events')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('event_attributes', function(Blueprint $table)
		{
			$table->dropForeign('fk_eventAttributes_events1');
		});
	}

}
