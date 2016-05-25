<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWishlistItemContributionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wishlist_item_contributions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('event_wishlist_item_id')->index('fk_wishlist_item_contributions_event_wishlist_items1_idx');
			$table->integer('user_id')->index('fk_wishlist_item_contributions_users1_idx');
			$table->decimal('contribution_amount')->nullable();
			$table->string('message', 1000)->nullable();
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
		Schema::drop('wishlist_item_contributions');
	}

}
