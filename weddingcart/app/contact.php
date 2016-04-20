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
    protected $fillable = ['Name','Email','Phone', 'Created_by', 'Updated_by'];

    //

    public function user() {

        return $this->belongsTo('weddingcart\User');
    }

}
