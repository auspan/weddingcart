<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use DateTime;
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
          return redirect('login');
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
            $userevent=UserEvent::all()->where('user_id',$userid);
        
        //$user_event_id=array('usereventid',$userevent['id']);
        foreach ($userevent as $usereventid)
        {
          $userevent=UserEvent::all()->where('user_id',$userid);
        
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
         

          $data=array();
          $data=array('wedding_date'=>$wed_date, 'groom_name'=>$groomname, 'bride_name'=>$bridename, 'groom_image'=>$groomimage, 'bride_image'=>$brideimage, 'days'=>$day, 'hours'=>$hour, 'minutes'=>$minute, 'seconds'=>$second);
          
          
          return view('pages.wedding',['UserId'=>$userid])->with($data);

        }
      } 
    }

     public function UserEvent()
     {   
        if(Auth::check())
        {
         $userid=Auth::User()->id;
        }
        else
        {
          return redirect('login');
        }
    	   $user_event=array();
         $UserEvent=UserEvent::all()->where('user_id',$userid);
         foreach ($UserEvent as $Uevent) 
         {
            $user_event=$Uevent['id'];
         }
         if($user_event==null)
         {  
    	     $eventattr=EventAttribute::all();
    	     return view('pages.weddingform', ['EventAttr'=> $eventattr]);
         }
         else
         {
           return $this->wedding();
         }
      }

    public function store(Request $request)
    {
      $this->validate($request, ['wedding_date'=>'required',
            'bride_image'   =>'required',
            'groom_image'   =>'required',
            'bride_name'  =>'required',
            'groom_name'  =>'required',]);
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
    		return redirect('login');
    	}
        $user_event=array();
         $UserEvent=UserEvent::all()->where('user_id',$userid);
         foreach ($UserEvent as $Uevent) 
         {
            $user_event=$Uevent['id'];
         }
         if($user_event==null)
         {  
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

    
    //$elapsed = $interval->format('%a days %h hours %i minutes %S seconds');

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
            return $this->wedding();
        }

        else
        {
            return $this->wedding();
        }
     }

     public function edit($id)
     {
        $userId=$id;

         if(Auth::check())
         {
          $userid=Auth::User()->id;
         }
          else 
          {
              return redirect('login');
          }
          if($userId==$userid)
          { 
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
        return view('pages.editweddingform')->with($data);
        }
    }

     public function update()
     {

     }
}
