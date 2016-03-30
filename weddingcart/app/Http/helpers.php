<?php
use Illuminate\Support\Str;
//namespace weddingcart\Http\Controllers;
//use Auth;
//use weddingcart\UserEvent;

/*function checkevent()
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
        
         
      }*/

    function ImageName($image_name)
    {

    return Str::lower(
        pathinfo($image_name->getClientOriginalName(), PATHINFO_FILENAME)
        .'-'
        .uniqid()
        .'.'
        .$image_name->getClientOriginalExtension()
        );

    }


?>