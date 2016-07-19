<?php

namespace weddingcart\Http\Controllers;

use DateTime;
use Illuminate\Database\Eloquent\Collection;
use weddingcart\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
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

            $userWeddingEvents =  DB::table('wedding_events')
            ->leftJoin('user_wedding_events', 'wedding_events.id', '=', 'user_wedding_events.wedding_event_id')
            ->select('wedding_events.id', 'wedding_events.event_name', 'wedding_events.event_image', 'user_wedding_events.venue', 'user_wedding_events.event_date')
            ->where('user_wedding_events.user_event_id',"=",$userEvent->id)->get();

            // $userWeddingEvents = SELECT t1.id,t1.event_name, t1.event_image, t2.venue, t2.event_date FROM `wedding_events` as t1 LEFT OUTER JOIN `user_wedding_events` as t2 ON `t1`.id = `t2`.wedding_event_id 
            // dd($userWeddingEvents[0]);
            return view('wedding.weddingpage',['wishlist_items'=>$array_wishlist_items, 'user_wedding_events'=>$userWeddingEvents])->with($userEventAttributes->toArray());
        }
        else
        {
            return view('pages.createwedding');
        }
    }

}
