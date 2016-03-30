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

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function wishlist()
    {	
    	
         $user_event=array();
         $UserEvent=UserEvent::all()->where('user_id',Auth::User()->id);
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
          $userrole=UserEventRole::all()->where('user_id',Auth::User()->id);

        foreach ($userrole as $UserRole)
        {
            $userroleid=$UserRole['id'];
            break;
        }

        
        $user_event_wishlist_items=UserEventWishlistItem::all()->where('user_event_role_id',$userroleid);
          $wishlist_items=array();
        foreach ($user_event_wishlist_items as $User_Event_Wishlist_Items)
        {
            $selected_product=Product::where('id',$User_Event_Wishlist_Items['product_id'])->first();

            $wishlist_items[]=$selected_product->product_description;
         }

         return view ('pages.wishlist',['Wishlist_Items'=>$wishlist_items]);
        }
    }

    
    public function create()
    {
    	 
        $products=Product::whereNotNull('parent_id')->get();
        

    	return view('pages.createwishlist', ['Products'=> $products]);
    }

    public function makewishlist()
    {
     
        $user_event=array();
         $UserEvent=UserEvent::all()->where('user_id',Auth::User()->id);
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
        

      return view('pages.wishlist_form', ['Products'=> $products]); 
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
        $product_id=$request->input('productId');
        $product_price=$request->input('productPrice');
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
                'wish_list_item_price'=>$product_price,
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
    	
        $user_event=array();
         $UserEvent=UserEvent::all()->where('user_id',Auth::User()->id);
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
        $userrole=UserEventRole::all()->where('user_id',Auth::User()->id);

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
