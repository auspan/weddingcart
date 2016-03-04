<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use weddingcart\Http\Requests;
use weddingcart\Http\Controllers\Controller;
use weddingcart\EventAttribute;
use weddingcart\UserEvent;
use weddingcart\User;
use weddingcart\UserEventDetail;
use weddingcart\UserEventRole;

class WeddingController extends Controller
{

	public function wedding()
    {
        if(Auth::check())
         {
         $userid=Auth::User()->id;
        }
        else
        {
            return view('errors.503');
        }

        $userevent=UserEvent::all()->where('user_id',$userid);
        
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


        $data=array();
        $data=array('wedding_date'=>$wed_date, 'groom_name'=>$groomname, 'bride_name'=>$bridename, 'groom_image'=>$groomimage, 'bride_image'=>$brideimage);
        
        return view('pages.wedding')->with($data);

    
    }

     public function UserEvent()
    {
    	 /*$eventid = EventAttribute::all();
    	 foreach ($eventid as $eid) {
    	 	$event_id=$eid['event_id'];
    	 }
    	 
    	 $userid=20;
    	 UserEvent::create(array(
                'event_id'=>$event_id,
                'user_id'=>$userid,
                
            ));
    	 $userevent=UserEvent::all();*/
    	 $eventattr=EventAttribute::all();
    	 return view('pages.weddingform', ['EventAttr'=> $eventattr]);
    }

    public function store(Request $request)
    {
    	$eventid = EventAttribute::all();
    	 foreach ($eventid as $eid) 
         {
    	 	$event_id=$eid['event_id'];
    	 }
    	 if(Auth::check())
    	 {
    	 $userid=Auth::User()->id;
    	}
    	else
    	{
    		return view('errors.503');
    	}
    	 $userEvent = UserEvent::create(array(
                'event_id'=>$event_id,
                'user_id'=>$userid,
          ));
    	 $weddingdate = $request->input('wedding_date');
        $groomname = $request->input('groom_name');
        $bridename = $request->input('bride_name');
        $groomimage=Input::file('groom_image');
        $brideimage=Input::file('bride_image');
        $wedcode = $request->input('wed_date');
        $groomcode = $request->input('groom');
        $bridecode = $request->input('bride');
        $groomimagecode=$request->input('groom_img');
        $brideimagecode=$request->input('bride_img');


        $destinationPath = '../public/uploads/';
        $groom_image = Str::lower(
        pathinfo($groomimage->getClientOriginalName(), PATHINFO_FILENAME)
        .'-'
        .uniqid()
        .'.'
        .$groomimage->getClientOriginalExtension()
        );

        $bride_image = Str::lower(
        pathinfo($brideimage->getClientOriginalName(), PATHINFO_FILENAME)
        .'-'
        .uniqid()
        .'.'
        .$brideimage->getClientOriginalExtension()
        );

        $groomimage->move($destinationPath, $groom_image);
        $brideimage->move($destinationPath, $bride_image);
       // $weddinarray=array();
        //$weddinarray=array($weddingdate,$groomname,$bridename);
      
       
            $count=0;
            while($count<5)
            {
                if($count==0)
                {   
                     UserEventDetail::create(array(
                    'attribute_code'=>$wedcode,
                    'attribute_value'=>$weddingdate,
                    'user_event_id'=>$userEvent['id'],
                    ));
                }
                if($count==1)
                {
                     UserEventDetail::create(array(
                    'attribute_code'=>$groomcode,
                    'attribute_value'=>$groomname,
                    'user_event_id'=>$userEvent['id'],
                    ));
                }
                if($count==2)
                {
                     UserEventDetail::create(array(
                    'attribute_code'=>$bridecode,
                    'attribute_value'=>$bridename,
                    'user_event_id'=>$userEvent['id'],
                    ));
                 }
                 if($count==3)
                {
                     UserEventDetail::create(array(
                    'attribute_code'=>$groomimagecode,
                    'attribute_value'=>$groom_image,
                    'user_event_id'=>$userEvent['id'],
                    ));
                 }
                 if($count==4)
                {
                     UserEventDetail::create(array(
                    'attribute_code'=>$brideimagecode,
                    'attribute_value'=>$bride_image,
                    'user_event_id'=>$userEvent['id'],
                    ));
                 }
                 $count++;
            }
           UserEventRole::create(array(
                'user_id'=> $userid,
                'role'=> 1,
                'user_event_id'=> $userEvent['id'],
                ));
           /* $data = array('wedding_date'=>'$weddingdate','groom_name' => $groomname,
                  'bride_name' => $bridename);
            //$userevent=UserEvent::all();
            return view('pages.wedding')->with($data);*/

            return $this->wedding();
     }

     public function gather(Request $request)
     {
            }
}
