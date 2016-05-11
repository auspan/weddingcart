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
use Illuminate\Http\Response;

class WishlistController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

 
/*    public function showproducts()
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
    }   */

    public function showproducts()
    {
        $user = Auth::user();
        $userEventRole = $user->userEventRoles()->first();
        $masterProductList = $this->getMasterProducts();
        $userEventWishlistItems = $userEventRole->userEventWishlistItems()->get();
        
        if($userEventWishlistItems->isEmpty())
        {
           
            $userEventWishlistItems = $this->createDefaultWishList($masterProductList, $userEventWishlistItems);
            // Populate userEventWishlistItems with masterProductList
           // return view('pages.wishlist-form', ['wishListItems'=> $masterProductList, 'masterProducts'=>$masterProductList],compact('x')); 
        } 
        
           return view('pages.wishlist-form', ['wishListItems'=> $userEventWishlistItems,'masterProducts'=>$masterProductList]); 
        

    }

    public function createDefaultWishList($masterProductList, $userEventWishlistItems)
    {
        foreach ($masterProductList as $masterProduct) {
            
            $userEventWishlistItem = new UserEventWishlistItem([
                'id'=> 0,
                'product_name' => $masterProduct['product_name'],
                'product_description' => $masterProduct['product_description'],
                'product_price' => $masterProduct['product_price'],
                'product_image' => $masterProduct['product_image'],
                'message' => $masterProduct['message']
                ]);

            $userEventWishlistItems->push($userEventWishlistItem);

        }

        return $userEventWishlistItems;
    }


    public function getMasterProducts()
    {
        return Product::whereNotNull('parent_id')->get();
    }

    
    public function addproduct(Request $request)
    {
        
            //dd($request);
            $userrole=UserEventRole::all()->where('user_id',Auth::User()->id);
            foreach ($userrole as $UserRole)
            {
                $userroleid=$UserRole['id'];
                break;
            }
            $result=array();
            
            if(Input::get('changedImage')!="")
            {       
                    
                    $productImage=Input::get('changedImage');
                    $destinationPath = '../public/uploads/products';
                    $product_image = getImageName($productImage);
                    $productImage->move($destinationPath, $product_image);

                    $userEventWishlistItem = UserEventWishlistItem::create(array(
                    'user_event_role_id'=> $userroleid,
                    'product_name'=>Input::get('productName'),
                    'product_description'=>Input::get('productDescription'),
                    'product_image'=>$productImage,
                    'product_price'=>Input::get('productPrice'),
                    'message'=>Input::get('message')
                    )); 
            
            }
            else
            {
                    $userEventWishlistItem = UserEventWishlistItem::create(array(
                    'user_event_role_id'=> $userroleid,
                    'product_name'=>Input::get('productName'),
                    'product_description'=>Input::get('productDescription'),
                    'product_image'=>Input::get('productImage'),
                    'product_price'=>Input::get('productPrice'),
                    'message'=>Input::get('message')
                    )); 
            }
            $id=$userEventWishlistItem['id'];
            $result=[1,$id];
            $response = $this->getJsonObject($id , 1 , "Success" , "Item added to widhlist" , "success");   
            
            return response()->json($response);
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
        DB::table('user_event_wishlist_items')->where('id',$ProductId)->update(['product_name'=>Input::get('productName'),'product_description'=>Input::get('productDescription'),'product_image'=>Input::get('productImage'),'product_price'=>Input::get('productPrice'),'message'=>Input::get('message')]);
            $response = $this->getJsonObject(null , 1 , "Success" , "Item updated successfully" , "success");
            return response()->json($response);
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
//        flash()->success('Success!', 'Item removed from Wishlist');
        if($productid)
        {
            $productid->delete();
            $response = $this->getJsonObject(null , 1 , "Success" , "Item removed from wishlist" , "success");   
            return response()->json($response);
        }
        else
        {
            return 0;
        }  

    }

    public function getJsonObject($id , $status , $title , $message, $level)
    {
        if($id != "null")
        {
        $passJsonObject = ['id' => $id,'status' => $status,'title' => $title,'message' => $message,'level' => $level
                           ];
        return $passJsonObject;
        }
        else
        {
        $passJsonObject = ['status' => $status,'title' => $title,'message' => $message,'level' => $level
                           ];
        }
    }
        
}
       

        
        
       
      
        
          
