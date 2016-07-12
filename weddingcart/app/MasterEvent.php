<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class MasterEvent extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'master_events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['event_name','event_image','created_by', 'updated_by'];
}
