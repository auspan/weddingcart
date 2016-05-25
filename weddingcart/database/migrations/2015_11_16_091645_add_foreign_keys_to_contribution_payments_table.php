<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContributionPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contribution_payments', function(Blueprint $table)
		{
			$table->foreign('wishlist_item_contribution_id', 'fk_contribution_payments_wishlist_item_contributions1')->references('id')->on('wishlist_item_contributions')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contribution_payments', function(Blueprint $table)
		{
			$table->dropForeign('fk_contribution_payments_wishlist_item_contributions1');
		});
	}

}
