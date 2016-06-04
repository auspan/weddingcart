<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contacts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','phone', 'created_by', 'updated_by'];

    //

    public function user() {

        return $this->belongsTo('weddingcart\User');
    }

}
