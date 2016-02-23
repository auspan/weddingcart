<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventAttributesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_attributes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('event_id')->index('fk_eventattributes_events1_idx');
			$table->string('attribute_code', 3);
			$table->string('attribute_description', 45);
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
		Schema::drop('event_attributes');
	}

}
