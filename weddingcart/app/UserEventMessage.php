<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class UserEventMessage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_event_messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['text', 'userevent_id', 'user_id', 'created_by', 'updated_by'];

    // Relationships

    public function userEvent() {

        return $this->belongsTo('weddingcart\UserEvent');
    
    }

}
