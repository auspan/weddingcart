<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserEventWishlistItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_event_wishlist_items', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_event_role_id')->index('fk_user_event_wishlist_items_user_event_roles1_idx');
			$table->decimal('product_price');
			$table->integer('product_id')->index('fk_user_event_wishlist_items_products1_idx')->nullable();
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
		Schema::drop('user_event_wishlist_items');
	}

}
