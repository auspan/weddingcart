<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('product_type')->nullable();
			$table->string('product_name', 50);
			$table->string('product_description', 45);
            $table->decimal('product_price', 8, 2);
			$table->string('product_image', 255)->nullable();
			$table->integer('parent_id')->nullable()->index('fk_products_products1_idx');
			$table->boolean('is_active');
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
		Schema::drop('products');
	}

}
