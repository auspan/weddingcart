<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToWeddingEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wedding_events', function(Blueprint $table)
        {
            $table->foreign('user_event_id', 'fk_wedding_events_user_events1')->references('id')->on('user_events')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wedding_events', function(Blueprint $table)
        {
            $table->dropForeign('fk_wedding_events_user_events1');
        });
    }
}
