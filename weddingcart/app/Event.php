<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['event_name', 'created_by', 'updated_by'];

    //

    public function eventAttributes()
    {
        return $this->hasMany('weddingcart\EventAttribute');
    }
}
