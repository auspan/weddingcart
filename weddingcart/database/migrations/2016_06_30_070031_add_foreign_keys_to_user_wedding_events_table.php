<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToUserWeddingEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_wedding_events', function(Blueprint $table)
        {
            $table->foreign('user_event_id', 'fk_user_wedding_events_user_events1')->references('id')->on('user_events')->onUpdate('NO ACTION')->onDelete('NO ACTION');

            $table->foreign('wedding_event_id', 'fk_user_wedding_events_wedding_events1')->references('id')->on('wedding_events')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_wedding_events', function(Blueprint $table)
        {
            $table->dropForeign('fk_user_wedding_events_user_events1');
            $table->dropForeign('fk_user_wedding_events_wedding_events1');
        });
    }
}
