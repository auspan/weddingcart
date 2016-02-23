<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserEventRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_event_roles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('role');
			$table->integer('user_id')->index('fk_user_event_roles_users1_idx');
			$table->integer('user_event_id')->index('fk_user_event_roles_user_events1_idx');
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
		Schema::drop('user_event_roles');
	}

}
