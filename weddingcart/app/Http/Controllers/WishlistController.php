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

    public function showproducts()
    {
        $user = Auth::user();
        $userEventRole = $user->userEventRoles()->first();
        $masterProductList = $this->getMasterProducts();
        $userEventWishlistItems = $userEventRole->userEventWishlistItems()->get();
        
        if($userEventWishlistItems->isEmpty())
        {
           
            $userEventWishlistItems = $this->createDefaultWishList($masterProductList, $userEventWishlistItems);
        } 
        
        return view('pages.wishlist-form', ['wishListItems'=> $userEventWishlistItems,'masterProducts'=>$masterProductList]); 
        

    }

    public function createDefaultWishList($masterProductList, $userEventWishlistItems)
    {
    foreach ($masterProductList as $masterProduct)
        {
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
        $userEventRoleId = Auth::User()->userEventRoles()->value('id');
        if(Input::get('changedImage')!="")
        {       
                
                $productImage=Input::get('changedImage');
                $destinationPath = '../public/uploads/products';
                $product_image = getImageName($productImage);
                $productImage->move($destinationPath, $product_image);

                $userEventWishlistItem = UserEventWishlistItem::create(array(
                'user_event_role_id'=> $userEventRoleId,
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
                'user_event_role_id'=> $userEventRoleId,
                'product_name'=>Input::get('productName'),
                'product_description'=>Input::get('productDescription'),
                'product_image'=>Input::get('productImage'),
                'product_price'=>Input::get('productPrice'),
                'message'=>Input::get('message')
                )); 
        }
        $id=$userEventWishlistItem['id'];
        $response = $this->getJsonObject($id , 1 , "Success" , "Item added to wishlist" , "success");   
        
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
       

        
        
       
      
        
          
