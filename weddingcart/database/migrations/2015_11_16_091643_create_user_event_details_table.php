<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserEventDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_event_details', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('attribute_code', 45)->nullable();
			$table->string('attribute_value', 1000)->nullable();
			$table->integer('user_event_id')->index('fk_user_role_event_details_user_role_events1');
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
			Schema::drop('wedding_events');
	}

}
