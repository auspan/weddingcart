<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFieldsToUserEventWishlistItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_event_wishlist_items', function (Blueprint $table) {
            
            $table->string('product_name', 50)->nullable();
            $table->string('product_description', 45)->nullable();
            $table->boolean('is_active')->nullable();
            $table->binary('product_image', 65535)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_event_wishlist_items', function (Blueprint $table) {
            $table->dropColumn('product_name');
            $table->dropColumn('product_description');
            $table->dropColumn('is_active');
            $table->dropColumn('product_image');
        });
    }
}
