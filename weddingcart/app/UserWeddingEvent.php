<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class UserWeddingEvent extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_wedding_events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_event_id','wedding_event_id','venue', 'event_date', 'created_by', 'updated_by'];

    public function userEvent() {

        return $this->belongsTo('weddingcart\UserEvent');
    
    }

    public function weddingEvent() {

        return $this->belongsTo('weddingcart\WeddingEvent');
    
    }
}
