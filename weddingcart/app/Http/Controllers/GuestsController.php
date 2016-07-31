<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;

use weddingcart\Http\Requests;
use weddingcart\UserEvent;
use weddingcart\User;
use DB;
use weddingcart\UserWeddingEvent;
use weddingcart\WeddingEvent;
use weddingcart\UserEventWishlistItem;

class GuestsController extends Controller
{
    public function showWeddingPage($token)
    {
        return "It's Working. Invitation!!! " . $token;

        $userEvent = getWeddingForToken($token);
    }

    public function getWeddingForToken($token)
    {
        $wedding = UserEvent::select()->where(
            'token', $token
            )->first();

        $weddingDetails = $wedding->userEventAttributes();

        $weddingDetails['user_id'] = $wedding['user_id'];
        $weddingDetails['user_event_id'] = $wedding['id'];

        $array_wishlist_items = $wedding->userEventWishlistItems()->pluck('product_name');
        $userWeddingEvents =  DB::table('wedding_events')
            ->leftJoin('user_wedding_events', 'wedding_events.id', '=', 'user_wedding_events.wedding_event_id')
            ->select('wedding_events.id', 'wedding_events.event_name', 'wedding_events.event_image', 'user_wedding_events.venue', 'user_wedding_events.event_date')
            ->where('user_wedding_events.user_event_id',"=",$wedding['id'])->get();

        return view('guests.guestlanding',['wishlist_items'=>$array_wishlist_items , 'user_wedding_events'=>$userWeddingEvents])->with($weddingDetails->toArray());
        return $weddingDetails;
    }

    public function showWishlistToGuest($id)
    {
        $userEventWishlistItems = User::find($id)->userEvents()->first()->userEventWishlistItems()->get();

        return view('pages.wishlist_products_for_contribution',['Wishlist_Items'=>$userEventWishlistItems]);
    }

    public function getWishlistItem($id)
    {
        $itemId = intval($id);
        $wishlistItem = UserEventWishlistItem::find($id);
//        return $wishlistItem;
        return view('pages.contribution',['wishlistItem'=>$wishlistItem]);
    }

}
