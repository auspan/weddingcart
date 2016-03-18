<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_type', 'product_name', 'product_description', 'is_active', 'product_image', 'product_price', 'parent_id', 'created_by', 'updated_by'];

    //Relationships

    public function parent(){
        return $this->belongsTo('weddingcart\Product', 'parent_id');
    }

    public function children() {
        return $this->hasMany('weddingcart\Product', 'parent_id');
    }

    public function usereventWishlistItems() {
        return $this->hasMany('weddingcart\UserEventWishlistItem');
    }
}
