<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_events', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('event_id')->index('fk_user_role_events_events1_idx');
			$table->integer('user_id')->index('fk_user_events_users1_idx');
			$table->date('event_date')->nullable();
			$table->string('token')->nullable();
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
		Schema::drop('user_events');
	}

}
