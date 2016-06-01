<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;
use Auth;

class UserEventWishlistItem extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_event_wishlist_items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_event_id', 'product_price', 'product_id', 'created_by', 'updated_by','product_name','product_description','product_image','message'];

    // Relationships

    public function userEvent() {

        return $this->belongsTo('weddingcart\UserEvent');
    }


    public function wishlistItemContributions() {

        return $this->hasMany('weddingcart\WishlistItemContribution', 'event_wishlist_item_id');
    }


    public function setWishlistItemContributionDetails($wishlistItemId , $contribution , $guestMessage)
    {
        $wishlistitemContributions = $this->wishlistItemContributions()->create([
            'user_id' => Auth::User()->id,
            'contribution_amount' => $contribution,
            'message' => $guestMessage,
            'event_wishlist_item_id' => $wishlistItemId
        ]);
        return $wishlistitemContributions;
    }


}
