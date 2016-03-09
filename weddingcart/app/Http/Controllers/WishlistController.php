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
        foreach ($UserEventRoleId as $user_event_role_id) {
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
       
        // return view ('pages.invites_landing',['Wishlist_Items'=>$array_wishlist_items]);
        
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
    }
