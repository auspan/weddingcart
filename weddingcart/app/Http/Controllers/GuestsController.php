<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;

use weddingcart\Http\Requests;
use weddingcart\UserEventDetail;
use weddingcart\User;

class GuestsController extends Controller
{
    public function showWeddingPage($token)
    {
        return "It's Working. Invitation!!! " . $token;

        $userEvent = getWeddingForToken($token);
    }

    public function getWeddingForToken($token)
    {
        $weddingToken = UserEventDetail::select()->where([
            ['attribute_code', 'tok'],
            ['attribute_value', $token]
        ])->first();

        $wedding = $weddingToken->userEvent()->first();

        $weddingDetails = $wedding->userEventAttributes();

        $weddingDetails['bride_name'] = splitname($weddingDetails['bnm']);
        $weddingDetails['groom_name'] = splitname($weddingDetails['gnm']);
        $weddingDetails['user_id'] = $wedding['user_id'];


        $array_wishlist_items = $wedding->userEventWishlistItems()->pluck('product_name');

        return view('guests.guestlanding',['wishlist_items'=>$array_wishlist_items])->with($weddingDetails->toArray());
        return $weddingDetails;
    }

    public function showAllWishlistProductsToGuest($id)
    {
        $UserEventWishlistItems = User::find($id)->userEvents()->first()->userEventWishlistItems()->get();

        //$userEventId = UserEvent::where('user_id',Auth::User()->id)->value('id');
        //$UserEventWishlistItems = UserEventWishlistItem::all()->where('user_event_id',$userEventId);

        return view('pages.wishlist_products_for_contribution',['Wishlist_Items'=>$UserEventWishlistItems]);
    }

}
