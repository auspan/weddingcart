<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DateTime;
use weddingcart\UserEventRole;
use weddingcart\UserEvent;
use weddingcart\UserEventDetail;
use weddingcart\UserEventWishlistItem;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
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

 /*   public function wishlist()
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
    }   */

    
    public function create()
    {
    	 
        $products=Product::whereNotNull('parent_id')->get();
        

    	return view('pages.createwishlist', ['Products'=> $products]);
    }

    public function makewishlist()
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
                $storeProduct=$userEventWishlistData;
                return view('pages.userwishlist', ['Products'=> $storeProduct,'MasterProducts'=>$products]); 
            }
            else
            {
        $products=Product::whereNotNull('parent_id')->get();
        $storeProduct=$products;

      return view('pages.wishlist_form', ['Products'=> $storeProduct]); 
            }
    }
  }

 /*   public function store_product_into_wishlist(Request $request)
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
       
        
    }   */

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
            
            $count=1;
            //$finalValue=$request->input('totalProduct');
            //var_dump($finalValue);
            $temp=20;

            while($count!=$temp)
            {

                
                
                if($request->input('productName'.$count)!=null && $request->input('hiddenProductValue'.$count)==0)
                {
                    if(Input::file('productImage'.$count)!=null)
                    {
                    $productImage=Input::file('productImage'.$count);
                    $destinationPath = '../public/uploads/products';
                    $product_image = ImageName($productImage);
                    $productImage->move($destinationPath, $product_image);

                    UserEventWishlistItem::create(array(
                    'user_event_role_id'=> $userroleid,
                    'product_name'=>$request->input('productName'.$count),
                    'product_description'=> $request->input('productDescription'.$count),
                    'product_image'=>$product_image,
                    'product_price'=>$request->input('productPrice'.$count)
                    )); 
                    }

                    else
                    {
                        UserEventWishlistItem::create(array(
                    'user_event_role_id'=> $userroleid,
                    'product_name'=>$request->input('productName'.$count),
                    'product_description'=> $request->input('productDescription'.$count),
                    'product_image'=>$request->input('imgname'.$count),
                    'product_price'=>$request->input('productPrice'.$count)
                    )); 
                    }
                }
                    $count++;
            }
        }

                    return $this->makewishlist();
    }

    public function deleteproduct(Request $request)
    {
        $productid=UserEventWishlistItem::find($request->input('id'));
        if($productid)
        {
            $productid->delete();
            return $this->makewishlist();
        }
    }

    public function edit($id)
    {

        
        $product=UserEventWishlistItem::findOrFail($id);
        
        return view('pages.editproduct',compact('product'));
    }

    public function update(Request $request)
    {

    }
}
       

        
        
       
      
        
          
