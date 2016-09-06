<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['event_id' , 'user_id' , 'created_by' , 'updated_by'];

    public static function boot()
    {
        parent::boot();

        static::creating(function($userEvent){
           $userEvent->token =str_random(30);
        });
    }

    // Relationships

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {

        return $this->belongsTo('weddingcart\User');
    }

    public function event() {

       return $this->belongsTo('weddingcart\Event');

    }

    public function userEventDetails() {

       return $this->hasMany('weddingcart\UserEventDetail');

    }

    public function userWeddingEvents() {

       return $this->hasMany('weddingcart\UserWeddingEvent');

    }

    public function userEventMessages() {

       return $this->hasMany('weddingcart\UserEventMessage');

    }

    public function userEventRoles() {

       return $this->hasMany('weddingcart\UserEventRole');

    }

    public function userEventWishlistItems()
    {
        return $this->hasMany('weddingcart\UserEventWishlistItem');
    }

    public function userEventAttributes()
    {
        $userEventAttributes =  $this->userEventDetails()->pluck('attribute_value', 'attribute_code');
        if(!$userEventAttributes->has('bim'))
        {
            $userEventAttributes['bim'] = "favatar.png";
        }
        if(!$userEventAttributes->has('gim'))
        {
            $userEventAttributes['gim'] = "mavatar.png";
        }

        $userEventAttributes['bride_name'] = splitname($userEventAttributes['bnm']);
        $userEventAttributes['groom_name'] = splitname($userEventAttributes['gnm']);

        return $userEventAttributes;
    }

    public function saveWeddingDetails($weddingDetails)
    {
//        $weddingDetails['tok'] = str_random(20);
        $weddingAttributes = array();
        foreach($weddingDetails as $attributeCode => $attributeValue)
        {
            $weddingAttribute = new UserEventDetail(['attribute_code' => $attributeCode, 'attribute_value' => $attributeValue, 'user_event_id' => $this->id]);
            array_push($weddingAttributes, $weddingAttribute);

        }
        $this->userEventDetails()->saveMany($weddingAttributes);
//        dd($weddingAttributes);
    }

    public function updateWeddingDetails($weddingDetails)
    {

        foreach($weddingDetails as $attributeCode => $attributeValue)
        {
            UserEventDetail::updateOrCreate(
                ['user_event_id' => $this->id, 'attribute_code' => $attributeCode], 
                ['attribute_code' => $attributeCode, 'attribute_value' => $attributeValue]);
        }

    }

    public function getProductDetails($productId)
    {
        return $this->userEventWishlistItems()->select('id' , 'product_name' , 'product_description' , 'product_image' , 'product_price' , 'message')->where('id',$productId)->first()->toArray();
    }

    public function createDefaultWishList($masterProductList, $userEventWishlistItems)
    {
        foreach ($masterProductList as $masterProduct)
        {
        $userEventWishlistItem = new UserEventWishlistItem([
            'id'=> 0,
            'product_name' => $masterProduct['product_name'],
            'product_description' => $masterProduct['product_description'],
            'product_price' => $masterProduct['product_price'],
            'product_image' => $masterProduct['product_image'],
            'message' => $masterProduct['message']
            ]);

        $userEventWishlistItems->push($userEventWishlistItem);

        }
        return $userEventWishlistItems;
    }

    public function setUserEventWishlistItems($userEventId, $productDetails, $productImage)
    {
        return $this->userEventWishlistItems()->create([
                'user_event_id'=> $userEventId,
                'product_name'=>$productDetails['productName'],
                'product_description'=>$productDetails['productDescription'],
                'product_image'=>$productImage,
                'product_price'=>$productDetails['productPrice'],
                'message'=>$productDetails['message']
                ]);
    }

    public function getUpdateProduct($productId, $productDetails)
    {
        return $this->UserEventWishlistItems()->where('id',$productId)->update(['product_name'=>$productDetails['productName'],
            'product_description'=>$productDetails['productDescription'],
            'product_image'=>$productDetails['productImage'],
            'product_price'=>$productDetails['productPrice'],
            'message'=>$productDetails['message']]);
    }

    public function updateUserWeddingEvent($userWeddingEventId, $userWeddingEventDetails)
    {
        return $this->userWeddingEvents()->where('id',$userWeddingEventId)->update(['venue'=>$userWeddingEventDetails['eventVenue']]);
            
    }


    public function setUserWeddingEvents($userEventId, $eventDetails)
    {
        return $this->userWeddingEvents()->create([
                'user_event_id'=> $this->id,
                'wedding_event_id'=>$eventDetails['eventId'],
                'venue'=>$eventDetails['eventVenue']
                ]);
    }

    public function createDefaultEvent($masterEvents, $userWeddingEvents)
    {
        foreach ($masterEvents as $masterEvent)
        {
        $userWeddingEvents = new UserWeddingEvent([
            'id'=> 0,
            'user_event_id'=>55,
            'wedding_event_id'=>2,
            'event_name' => $masterEvent['event_name'],
            'event_image' => $masterEvent['event_image'],
            'venue' => null,
            'event_date' => ''
            ]);

        $userWeddingEvents->push($userWeddingEvents);

        }
        return $userWeddingEvents;
    }

    
 }
