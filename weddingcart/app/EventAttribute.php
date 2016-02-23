<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class EventAttribute extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'event_attributes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['event_id', 'attribute_code', 'attribute_description', 'created_by', 'updated_by'];

    // Relationships

    public function event()
    {
        return $this->belongsTo('weddingcart\Event');
    }
}
