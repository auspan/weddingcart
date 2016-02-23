<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWishlistItemContributionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('wishlist_item_contributions', function(Blueprint $table)
		{
			$table->foreign('event_wishlist_item_id', 'fk_wishlist_item_contributions_user_event_wishlist_items1')->references('id')->on('user_event_wishlist_items')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('wishlist_item_contributions', function(Blueprint $table)
		{
			$table->dropForeign('fk_wishlist_item_contributions_user_event_wishlist_items1');
		});
	}

}
