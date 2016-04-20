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
 }
