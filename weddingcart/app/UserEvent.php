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

    public function userEventMessages() {

       return $this->hasMany('weddingcart\UserEventMessage');

    }

    public function userEventRoles() {

       return $this->hasMany('weddingcart\UserEventRole');

    }

    public function userEventAttributes()
    {
        return $this->userEventDetails()->pluck('attribute_value', 'attribute_code');
    }

    public function saveWeddingDetails($weddingDetails)
    {
        $weddingAttributes = array();
        foreach($weddingDetails as $attributeCode => $attributeValue)
        {
            $weddingAttribute = new UserEventDetail(['attribute_code' => $attributeCode, 'attribute_value' => $attributeValue, 'user_event_id' => $this->id]);
            array_push($weddingAttributes, $weddingAttribute);

        }
        $this->userEventDetails()->saveMany($weddingAttributes);
    }

    public function updateWeddingDetails($weddingDetails)
    {
        foreach($weddingDetails as $attributeCode => $attributeValue)
        {
            UserEventDetail::where('user_event_id', $this->id)->where('attribute_code', $attributeCode)->update(['attribute_value' => $attributeValue]);
        }

    }
 }
