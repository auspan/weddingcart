<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class WishlistItemContribution extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'wishlist_item_contributions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['contribution_amount', 'message', 'user_id', 'event_wishlist_item_id', 'created_by', 'updated_by'];

    // Relationships

    public function contributionPayment() {

        return $this->hasOne('weddingcart\ContributionPayment');
    }

    public function userEventWishlistItem() {

        return $this->belongsTo('weddingcart\UserEventWishlistItem', 'event_wishlist_item_id');
    }

    public function user() {
        
        return $this->belongsTo('weddingcart\Users');
    }
    
}
