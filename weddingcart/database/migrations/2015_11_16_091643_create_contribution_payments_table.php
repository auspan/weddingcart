<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContributionPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contribution_payments', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('paymentMode', 2);
			$table->integer('transactionId');
			$table->decimal('paymentAmount');
			$table->integer('wishlist_item_contribution_id')->index('fk_contribution_payments_item_contributions1_idx');
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
		Schema::drop('contribution_payments');
	}

}
