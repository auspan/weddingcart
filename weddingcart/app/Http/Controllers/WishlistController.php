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
use weddingcart\Product;
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

    public function showWishlist()
    {
        $user = Auth::user();
        $userEvent = $user->userEvents()->first();
        $masterProductList = $this->getMasterProducts();
        $userEventWishlistItems = $userEvent->userEventWishlistItems()->get();
        if($userEventWishlistItems->isEmpty())
        {
            $userEventWishlistItems = $user->userEvents()->first()->createDefaultWishList($masterProductList, $userEventWishlistItems);
        } 
        
        return view('wishlist.wishlist-form', ['wishListItems'=> $userEventWishlistItems,'masterProducts'=>$masterProductList]); 
        

    }

/*    public function createDefaultWishList($masterProductList, $userEventWishlistItems)
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
    }   */


    public function getMasterProducts()
    {
        return Product::whereNotNull('parent_id')->get();
    }

    
    public function addproduct(Request $request)
    {
        $user = Auth::User();
        $userEventId = $user->userEvents()->value('id');
        $productDetails = Input::all();
        $productImage = Input::get('productImage');
        $changedImage = Input::get('changedImage');
        if($changedImage!="")
        {       
                $ProductImage = storeImage($changedImage);
            /*    $productImage=Input::get('changedImage');
                $destinationPath = '../public/uploads/products';
                $product_image = getImageName($productImage);
                $productImage->move($destinationPath, $product_image);  */
                $userEventWishlistItem = $user->userEvents()->first()->setUserEventWishlistItems($userEventId, $productDetails, $productImage);
            /*    $userEventWishlistItem = UserEventWishlistItem::create(array(
                'user_event_id'=> $userEventId,
                'product_name'=>Input::get('productName'),
                'product_description'=>Input::get('productDescription'),
                'product_image'=>$productImage,
                'product_price'=>Input::get('productPrice'),
                'message'=>Input::get('message')
                )); */
        
        }
        else
        {       
                $userEventWishlistItem = $user->userEvents()->first()->setUserEventWishlistItems($userEventId, $productDetails, $productImage);

            /*    $userEventWishlistItem = UserEventWishlistItem::create(array(
                'user_event_id'=> $userEventId,
                'product_name'=>Input::get('productName'),
                'product_description'=>Input::get('productDescription'),
                'product_image'=>Input::get('productImage'),
                'product_price'=>Input::get('productPrice'),
                'message'=>Input::get('message')
                )); */
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
        $user = Auth::User();
        $productId=Input::get('productid');
        $productDetails = Input::all();
        $findProductId=UserEventWishlistItem::find($productId);
        if($findProductId)
        {
            $updateProduct = $user->userEvents()->first()->getUpdateProduct($productId, $productDetails);
        /*    DB::table('user_event_wishlist_items')->where('id',$ProductId)->update(['product_name'=>Input::get('productName'),'product_description'=>Input::get('productDescription'),'product_image'=>Input::get('productImage'),'product_price'=>Input::get('productPrice'),'message'=>Input::get('message')]); */
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

    public function cancelproduct()
    {
        $productId = intval(Input::get('productId'));
        $productDetails=UserEventWishlistItem::find($productId)->toArray();
        return response()->json($productDetails);
    }
        
}
       

        
        
       
      
        
          
