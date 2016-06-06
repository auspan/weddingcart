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
            $userEvent = Auth::user()->userEvents()->first();
            $userEventAttributes = $userEvent->userEventAttributes();

            $array_wishlist_items = $userEvent->userEventWishlistItems()->pluck('product_name');
            return view('wedding.weddingpage',['wishlist_items'=>$array_wishlist_items])->with($userEventAttributes->toArray());
        }
        else
        {
            return view('pages.createwedding');
        }
    }

}
