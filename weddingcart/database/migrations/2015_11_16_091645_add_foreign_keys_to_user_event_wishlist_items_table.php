<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserEventWishlistItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_event_wishlist_items', function(Blueprint $table)
		{
			$table->foreign('product_id', 'fk_user_event_wishlist_items_products1')->references('id')->on('products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_event_role_id', 'fk_user_event_wishlist_items_user_event_rols1')->references('id')->on('user_events')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_event_wishlist_items', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_event_wishlist_items_products1');
			$table->dropForeign('fk_user_event_wishlist_items_user_event_roles1');
		});
	}

}
