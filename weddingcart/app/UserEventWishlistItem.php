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
    protected $fillable = ['user_event_role_id', 'product_price', 'product_id', 'created_by', 'updated_by','product_name','product_description','product_image','message'];

    // Relationships

    public function userEventRole() {

        return $this->belongsTo('weddingcart\UserEventRole');
    }

    public function product() {

        return $this->belongsTo('weddingcart\Product');
    }

    public function wishlistItemContributions() {

        return $this->hasMany('weddingcart\WishlistItemContribution');
    }
    
}
