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
    protected $fillable = ['event_name','event_image','created_by', 'updated_by'];

    public function userWeddingEvents() {

       return $this->hasMany('weddingcart\UserWeddingEvent');

    }
}
