<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use weddingcart\Http\Requests;
use Auth;
use DateTime;
use Illuminate\Support\Facades\Input;
use weddingcart\UserEventRole;
use weddingcart\WishlistItemContribution;
use weddingcart\UserEvent;
use weddingcart\UserEventDetail;
use weddingcart\UserEventWishlistItem;
use weddingcart\product;
use weddingcart\Http\Redirect;
class InvitesController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

      public function invites()
      {
      
        $userevent=UserEvent::all()->where('user_id',Auth::User()->id);
        
        
        foreach ($userevent as $usereventid)
        {
            $ueid=$usereventid['id'];
            break;
        }  
        

        $usereid=$ueid;
        $usereventdetails=UserEventDetail::all()->where('user_event_id',$usereid);
        foreach ($usereventdetails as $UserEventDetail) 
        {
            if($UserEventDetail['attribute_code']=='wdt')
            {
                $wed_date=$UserEventDetail['attribute_value'];
            }
            if($UserEventDetail['attribute_code']=='gnm')
            {
                $groomname=$UserEventDetail['attribute_value'];
            }
            if($UserEventDetail['attribute_code']=='bnm')
            {
                $bridename=$UserEventDetail['attribute_value'];
            }
            if($UserEventDetail['attribute_code']=='gim')
            {
                $groomimage=$UserEventDetail['attribute_value'];
            }
            if($UserEventDetail['attribute_code']=='bim')
            {
                $brideimage=$UserEventDetail['attribute_value'];
            }
        }

            $current_datetime = new DateTime();
            $wedding_datetime = new DateTime($wed_date);
            $diffrence = $current_datetime->diff($wedding_datetime);
            $day=$diffrence->d;
            $hour=$diffrence->h;
            $minute=$diffrence->i;
            $second=$diffrence->s;

        $data=array('wedding_date'=>$wed_date
                    , 'groom_name'=>$groomname
                    , 'bride_name'=>$bridename
                    , 'groom_image'=>$groomimage
                    , 'bride_image'=>$brideimage
                    , 'days'=>$day
                    , 'hours'=>$hour
                    , 'minutes'=>$minute
                    , 'seconds'=>$second);

        $UserEventRoleId=UserEventRole::all()->where('user_id',Auth::User()->id);
        foreach ($UserEventRoleId as $user_event_role_id) 
        {
          $User_Event_Role_Id=$user_event_role_id['id'];
          break;
        }
        $user_event_wishlist_items=UserEventWishlistItem::all()->where('user_event_role_id',$User_Event_Role_Id);
      return view ('pages.invites_landing',['Wishlist_Items'=>$user_event_wishlist_items])->with($data);
    }

    public function showAllWishlistProductsToGuest()
    {
        $userEventRoleId = UserEventRole::where('user_id',Auth::User()->id)->value('id');
        $UserEventWishlistItems = UserEventWishlistItem::all()->where('user_event_role_id',$userEventRoleId);
        return view('pages.wishlist_products_for_contribution',['Wishlist_Items'=>$UserEventWishlistItems]);
    }

    public function productDetails()
    {
        $product_id = intval(Input::get('id'));
        $product_details = UserEventWishlistItem::all()->where('id',$product_id);
        return response()->json($product_details);  
        //return json_encode($product_details);
        //return response()->json(['details'=>$product_details]);
    }

    public function selectedProductDetails($id)
    {
        $productId = intval($id);
        $productDetails = UserEventWishlistItem::all()->where('id',$productId);
        return view('pages.contribution',['ProductDetails'=>$productDetails]);
    }

    public function contribution($id , Request $request)
    {
        
        $productId = $id;
         WishlistItemContribution::create(array(
                'user_id' => Auth::User()->id,
                'contribution_amount' => $request->input('contributionproductPrice'),
                'message' => $request->input('contributionmessage'),
                'event_wishlist_item_id' => $productId
            ));
        
        return redirect('invites');
    }

    
}
