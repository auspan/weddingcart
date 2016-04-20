<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DateTime;
use DB;
use weddingcart\UserEventRole;
use weddingcart\UserEvent;
use weddingcart\UserEventDetail;
use weddingcart\UserEventWishlistItem;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use weddingcart\product;
use weddingcart\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use weddingcart\Http\Controllers\Controller;

class WishlistController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function showproducts()
    {
        $storeProduct=array();
        $userrole=UserEventRole::all()->where('user_id',Auth::User()->id);

            foreach ($userrole as $UserRole)
            {
                $userroleid=$UserRole['id'];
                break;
            }

        $user_event=array();
        $wishlistdata=array();
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

        $userEventWishlistData=UserEventWishlistItem::all()->where('user_event_role_id',$userroleid);
            foreach ($userEventWishlistData as $data) {
                $wishlistdata=$data['user_event_role_id'];
                break;
            }
            $products=Product::whereNotNull('parent_id')->get();
            
            if($wishlistdata!=null)
            {
                $x=0;
                $storeProduct=$userEventWishlistData;
                return view('pages.wishlist-form', ['Products'=> $storeProduct,'MasterProducts'=>$products],compact('x')); 
            }
            else
            {
             $x=1;
            $products=Product::whereNotNull('parent_id')->get();
            $storeProduct=$products;

            return view('pages.wishlist-form', ['Products'=> $storeProduct],compact('x')); 
            }
         } 
    }

    public function addproduct(Request $request)
    {
        
            $userrole=UserEventRole::all()->where('user_id',Auth::User()->id);
            foreach ($userrole as $UserRole)
            {
                $userroleid=$UserRole['id'];
                break;
            }
            $result=array();
            /*$count=$request->input('countervalue');
            var_dump($count);
            if($request->input('productImage'.$count)!=null)
            {
                    $productImage=Input::file('productImage'.$count);
                    $destinationPath = '../public/uploads/products';
                    $product_image = ImageName($productImage);
                    $productImage->move($destinationPath, $product_image);

            $userEventWishlistItem = UserEventWishlistItem::create(array(
                    'user_event_role_id'=> $userroleid,
                    'product_name'=>Input::get('productName'),
                    'product_description'=>Input::get('productDescription'),
                    'product_image'=>$productImage,
                    'product_price'=>Input::get('productPrice')
                    )); 
            
            }
            else
            {*/
                $userEventWishlistItem = UserEventWishlistItem::create(array(
                    'user_event_role_id'=> $userroleid,
                    'product_name'=>Input::get('productName'),
                    'product_description'=>Input::get('productDescription'),
                    'product_image'=>Input::get('productImage'),
                    'product_price'=>Input::get('productPrice')
                    )); 
          //  }
         $id=$userEventWishlistItem['id'];
         $result=[1,$id];
       return $result;
   }

    public function editproduct()
    {

    }

    public function updateproduct()
    {
        $ProductId=Input::get('productid');
        $productid=UserEventWishlistItem::find($ProductId);

        if($productid)
        {

            DB::table('user_event_wishlist_items')->where('id',$ProductId)->update(['product_name'=>Input::get('productName'),'product_description'=>Input::get('productDescription'),'product_image'=>Input::get('productImage'),'product_price'=>Input::get('productPrice')]);
            return 1;
        }
        else
        {
            return 0;
        }
    }

    public function removeproduct()
    {
        $ProductId=Input::get('productid');
        $productid=UserEventWishlistItem::find($ProductId);
        if($productid)
        {
            $productid->delete();
            return 1;
        } 
        else
        {
            return 0;
        }  

    }        
}
       

        
        
       
      
        
          
