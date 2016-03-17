<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DateTime;
use weddingcart\UserEventRole;
use weddingcart\UserEvent;
use weddingcart\UserEventDetail;
use weddingcart\UserEventWishlistItem;
use weddingcart\product;
use weddingcart\Http\Requests;
use weddingcart\Http\Redirect;
use weddingcart\Http\Controllers\Controller;

class WishlistController extends Controller
{
    public function wishlist()
    {	
    	if(Auth::check())
      {
         $userid=Auth::User()->id;
      }
        else
        {
            return view('errors.503');
        }

        $user_event=array();
         $UserEvent=UserEvent::all()->where('user_id',$userid);
         foreach ($UserEvent as $Uevent) 
         {
            $user_event=$Uevent['id'];
         }
         if($user_event==null)
         {
         return view('pages.temp');  
         }

         else
         {
          $userrole=UserEventRole::all()->where('user_id',$userid);

        foreach ($userrole as $UserRole)
        {
            $userroleid=$UserRole['id'];
            break;
        }
        
        $user_event_wishlist_items=UserEventWishlistItem::all()->where('user_event_role_id',$userroleid);
        //$selected_product_id=$request->input('product1');
        
        $array_wishlist_items=array();
        foreach ($user_event_wishlist_items as $User_Event_Wishlist_Items)
        {
         $selected_product=Product::where('id',$User_Event_Wishlist_Items['product_id'])->first();

          $selected_product_description=$selected_product->product_description;
          $array_wishlist_items[]=$selected_product_description;
        }
       // $selected_product=Product::where('id',$selected_product_id)->first();
        //$selected_product_description=$selected_product->product_description;
         return view ('pages.wishlist',['Wishlist_Items'=>$array_wishlist_items]);
        }
    }

        //return view('pages.wishlist');

       public function invites()
    {
      
        $userevent=UserEvent::all()->where('user_id',50);
        
        //$user_event_id=array('usereventid',$userevent['id']);
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

        $data=array('wedding_date'=>$wed_date, 'groom_name'=>$groomname, 'bride_name'=>$bridename, 'groom_image'=>$groomimage, 'bride_image'=>$brideimage, 'days'=>$day, 'hours'=>$hour, 'minutes'=>$minute, 'seconds'=>$second);

        $UserEventRoleId=UserEventRole::all()->where('user_id',50);
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
    

    public function create()
    {
    	 if(Auth::check())
         {
         $userid=Auth::User()->id;
        }
        else
        {
            return view('errors.503');
        }
        $products=Product::whereNotNull('parent_id')->get();
        

    	return view('pages.createwishlist', ['Products'=> $products]);
    }

    public function makewishlist()
    {
     if(Auth::check())
         {
         $userid=Auth::User()->id;
        }
        else
        {
            return view('errors.503');
        }
        $user_event=array();
         $UserEvent=UserEvent::all()->where('user_id',$userid);
         foreach ($UserEvent as $Uevent) 
         {
            $user_event=$Uevent['id'];
         }
         if($user_event==null)
         {
         return view('pages.temp');  
         }

         else
         {
        $products=Product::whereNotNull('parent_id')->get();
        

      return view('pages.makewishlist', ['Products'=> $products]); 
    }
  }

    public function store_product_into_wishlist(Request $request)
    {
        $userrole=UserEventRole::all()->where('user_id',Auth::User()->id);

        foreach ($userrole as $UserRole)
        {
            $userroleid=$UserRole['id'];
            break;
        }
        $count=0;
        $product_id=$request->input('productid');
        
        $products=UserEventWishlistItem::all()->where('user_event_role_id',$userroleid)->pluck('product_id');

        foreach ($products as $PID) {
            if($product_id==$PID)
            {
                $count++;
            }
        }
        
        if($count==0)
        {
        UserEventWishlistItem::create(array(
                'user_event_role_id'=> $userroleid,
                'product_id'=> $product_id,
                ));
        return Redirect('/makewishlist')->with('message','Item Added Succesfully');
    }
    else
    {
        return Redirect('/makewishlist')->with('message','Item Already Exist');
    }
    }

    public function showwishlist()
    {

    }

    public function store(Request $request)
    {
    	if(Auth::check())
        {
         $userid=Auth::User()->id;
        }
        else
        {
            abort('503');
        }

        $user_event=array();
         $UserEvent=UserEvent::all()->where('user_id',$userid);
         foreach ($UserEvent as $Uevent) 
         {
            $user_event=$Uevent['id'];
         }
         if($user_event==null)
          {
            return view ('pages.temp');
          }
        else
        {
        $userrole=UserEventRole::all()->where('user_id',$userid);

        foreach ($userrole as $UserRole)
        {
            $userroleid=$UserRole['id'];
            break;
        }
         $products=array($request->input('product1'),$request->input('product2'),$request->input('product3'),$request->input('product4'),$request->input('product5'),$request->input('product6'),$request->input('product7'),$request->input('product8'),$request->input('product9'),$request->input('product10'),$request->input('product11'));

         foreach ($products as $productid)
          {
            if($productid!='Select')
            {
                UserEventWishlistItem::create(array(
                'user_event_role_id'=> $userroleid,
                'product_id'=> $productid,
                ));
            }
          }
        

        
        $user_event_wishlist_items=UserEventWishlistItem::all()->where('user_event_role_id',$userroleid);
        
        $array_wishlist_items=array();
        foreach ($user_event_wishlist_items as $User_Event_Wishlist_Items)
        {
         $selected_product=Product::where('id',$User_Event_Wishlist_Items['product_id'])->first();

          $selected_product_description=$selected_product->product_description;
          $array_wishlist_items[]=$selected_product_description;

          
        }
         return view ('pages.wishlist',['Wishlist_Items'=>$array_wishlist_items]);
       
      
        
           }
        }
    }
