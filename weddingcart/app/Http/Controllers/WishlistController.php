<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use weddingcart\UserEventRole;
use weddingcart\UserEventWishlistItem;
use weddingcart\product;
use weddingcart\Http\Requests;
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
        //return view('pages.wishlist');
    

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
              /* $products=UserEventWishlistItem::all()->where('user_event_role_id',$userroleid);
               foreach($products as $product)
               {

                if($productid==$product['product_id'])
                  break;
               }*/
                UserEventWishlistItem::create(array(
                'user_event_role_id'=> $userroleid,
                'product_id'=> $productid,
                ));
            }
          }
        

    	 /*$userrole=UserEventRole::all()->where('user_id',$userid);

        foreach ($userrole as $UserRole)
        {
            $userroleid=$UserRole['id'];
            break;
        }*/
        
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
       
      
    	 /* $products=array('a'=>$request->input('product1'),'b'=>$request->input('product2'),'c'=>$request->input('product3'),'d'=>$request->input('product4'),'e'=>$request->input('product5'),'f'=>$request->input('product6'),'g'=>$request->input('product7'),'h'=>$request->input('product8'),'i'=>$request->input('product9'),'j'=>$request->input('product10'),'k'=>$request->input('product11'));
          
          $i=97;
          $saveproduct=array();
          foreach ($products as $product)
          {
             $keys=chr($i);
             $value=echo $product;    // error in echo
            if( $value !='Select')
            {
                $saveproduct=array_add($saveproduct,$keys,$value);
            }
            $i++;
          }*/
        

         /* $products=array($request->input('product1'),$request->input('product2'),$request->input('product3'),$request->input('product4'),$request->input('product5'),$request->input('product6'),$request->input('product7'),$request->input('product8'),$request->input('product9'),$request->input('product10'),$request->input('product11'));
          //$i=0;
          $saveproduct=array();
          foreach ($products as $product)
          {
           if( $product['0'] !='Select')
            {
                $saveproduct=array_add($saveproduct,$value);
            }
            //$i++;
          }
          //return view('pages.wishlist',compact('keys'));
          return view('pages.wishlist',['product'=>$saveproduct]);
      }*/

           /* if($p!='Select')
            {
                $pid=Product::all()->where('product_description',$p);
                foreach ($pid as $productid)
                 {
                UserEventWishlistItem::create(array(
                //'user_event_role_id'=> $UserRole,
                'product_id'=> $productid['id'],
                ));
                 }
                //$saveproduct=array_add($saveproduct,'$i',$prdct['$i'])
            
             }*/
           }
    }
