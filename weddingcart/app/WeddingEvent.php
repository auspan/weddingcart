<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class WeddingEvent extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'wedding_events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_event_id','wedding_event','venue', 'event_date', 'created_by', 'updated_by'];

    public function userEvent() {

        return $this->belongsTo('weddingcart\UserEvent');
    
    }
}
