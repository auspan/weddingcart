<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

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
    protected $fillable = ['user_event_role_id', 'wish_list_item_price', 'product_id', 'created_by', 'updated_by'];

    // Relationships

    public function userEventRole() {

        return $this->belongsTo('weddingcart\UserEventRole');
    }

    public function product() {

        return $this->belongsTo('weddingcart\Product');
    }

    public function WishlistitemContributions() {

        return $this->hasMany('weddingcart\WishlistItemContribution');
    }
    
}
