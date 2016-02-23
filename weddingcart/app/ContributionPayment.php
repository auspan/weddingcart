<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class ContributionPayment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contribution_payments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['paymentMode','transactionId','paymentAmount', 'wishlist_item_contribution_id', 'created_by', 'updated_by'];


    //Relationship
    public function wishlistitemContribution(){

    	return $this->belongsTo('weddingcart\WishlistItemContribution')
    }
}
