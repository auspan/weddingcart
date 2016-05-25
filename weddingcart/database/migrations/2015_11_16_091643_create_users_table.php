<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 45)->nullable();
			$table->string('email', 25)->unique('userEmail_UNIQUE');
			$table->dateTime('date_of_birth')->nullable();
			$table->integer('phone')->nullable();
			$table->string('password', 60)->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
			$table->string('salt', 20)->nullable();
			$table->boolean('is_active')->nullable();
			$table->boolean('is_logged_in')->nullable();
			$table->date('last_login')->nullable();
			$table->string('status', 45)->nullable();
			$table->string('first_name', 45)->nullable();
			$table->string('middle_name', 45)->nullable();
			$table->string('last_name', 45)->nullable();
			$table->text('about_user', 65535)->nullable();
			$table->binary('picture', 65535)->nullable();
			$table->timestamps();
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
