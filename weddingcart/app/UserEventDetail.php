<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class UserEventDetail extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_event_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['attribute_code', 'attribute_value', 'user_event_id', 'created_by', 'updated_by'];

    // Relationships

    public function userEvent() {

        return $this->belongsTo('weddingcart\UserEvent');
    
    }

}
