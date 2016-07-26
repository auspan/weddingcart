<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWeddingEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_wedding_events', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_event_id')->index('fk_user_wedding_events_user_events1_idx');
            $table->integer('wedding_event_id')->index('fk_user_wedding_events_wedding_events1_idx');
            $table->string('venue',255)->nullable();
            $table->dateTime('event_date')->nullable();
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
        Schema::drop('user_wedding_events');
    }
}
