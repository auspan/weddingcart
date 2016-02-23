<?php

namespace weddingcart;

use Illuminate\Database\Eloquent\Model;

class UserEventWishlist extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_event_wishlists';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
}
