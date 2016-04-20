<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;
use weddingcart\Http\Requests;
use Auth;
use DateTime;
use weddingcart\UserEventRole;
use weddingcart\UserEvent;
use weddingcart\UserEventDetail;
use weddingcart\UserEventWishlistItem;
use weddingcart\product;
use weddingcart\Http\Redirect;
class InvitesController extends Controller
{
    
      public function invites()
      {
      
        $userevent=UserEvent::all()->where('user_id',90);
        
        
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

        $UserEventRoleId=UserEventRole::all()->where('user_id',90);
        foreach ($UserEventRoleId as $user_event_role_id) 
        {
          $User_Event_Role_Id=$user_event_role_id['id'];
          break;
        }
        $user_event_wishlist_items=UserEventWishlistItem::all()->where('user_event_role_id',$User_Event_Role_Id);
        
        
        $array_wishlist_items=array();
        foreach ($user_event_wishlist_items as $User_Event_Wishlist_Items)
        {
         $selected_product=Product::where('id',$User_Event_Wishlist_Items['product_id'])->first();

          $selected_product_description=$selected_product->product_description;
          $array_wishlist_items[]=$selected_product_description;
        }
       
       
      return view ('pages.invites_landing',['Wishlist_Items'=>$array_wishlist_items])->with($data);
    }
    
}
