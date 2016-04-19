<?php

namespace weddingcart\Http\Controllers;

use DateTime;
use Illuminate\Database\Eloquent\Collection;
use weddingcart\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use weddingcart\UserEvent;
use weddingcart\UserEventRole;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected  $userEventRole;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isHost()){
            $userEventRole = Auth::user()->userEventRoles()->first();
            $data = $userEventRole->userEvent()->first()->userEventAttributes();

            $current_datetime = new DateTime();
            $wedding_datetime = new DateTime($data['wdt']);
            $difference = $current_datetime->diff($wedding_datetime);

            $data['days']    = $difference->d;
            $data['hours']   = $difference->h;
            $data['minutes'] = $difference->i;
            $data['seconds'] = $difference->s;

            $data['bride_name'] = $this->splitname($data['bnm']);
            $data['groom_name'] = $this->splitname($data['gnm']);
            $array_wishlist_items = $userEventRole->userEventWishlistItems()->pluck('product_name');

            return view('wedding.weddingpage',['wishlist_items'=>$array_wishlist_items])->with($data->toArray());
//            return view('pages.invites_landing',['wishlist_items'=>$array_wishlist_items])->with($data->toArray());
        }
        else
        {
            return view('pages.createwedding');
        }
    }

    public function splitname(String $name){

        return str_word_count($name, 1);
    }

}
