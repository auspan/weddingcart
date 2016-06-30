<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_events', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_event_id')->index('fk_wedding_events_user_events1_idx');
            $table->string('wedding_event',50)->nullable();
            $table->string('venue',255)->nullable();
            $table->dateTime('event_date');
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
        Schema::drop('wedding_events');
    }
}
