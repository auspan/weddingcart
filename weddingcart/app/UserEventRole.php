<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class UserEventRole extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_event_roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['role', 'user_id', 'user_event_id', 'created_by', 'updated_by'];

    // Relationships

    public function userEvent()
    {
        return $this->belongsTo('weddingcart\UserEvent');
    }

    public function user()
    {
        return $this->belongsTo('weddingcart\User');
    }

    
}
