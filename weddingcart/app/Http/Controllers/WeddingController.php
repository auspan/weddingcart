<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use DateTime;
use weddingcart\Http\Requests\WeddingFormRequest;
use weddingcart\Http\Requests\EditWeddingFormRequest;
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

  public function __construct()
    {
        $this->middleware('auth');
    }

	public function wedding()
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
            $userevent=UserEvent::all()->where('user_id',Auth::User()->id);
        
        //$user_event_id=array('usereventid',$userevent['id']);
        foreach ($userevent as $usereventid)
        {
          $userevent=UserEvent::all()->where('user_id',Auth::User()->id);
        
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
          
          
          return view('pages.wedding',['UserId'=>Auth::User()->id])->with($data);

        }
      } 
    }

     public function UserEvent()
     {   
       
    	   $user_event=array();
         $UserEvent=UserEvent::all()->where('user_id',Auth::User()->id);
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

    public function store(WeddingFormRequest $request)
    {
//        $user = Auth::user();


      $eventid = EventAttribute::all();
    	 foreach ($eventid as $eid) 
         {
    	 	$event_id=$eid['event_id'];
    	 }
    	 
        $user_event=array();
         $UserEvent=UserEvent::all()->where('user_id',Auth::User()->id);
         foreach ($UserEvent as $Uevent) 
         {
            $user_event=$Uevent['id'];
         }
         if($user_event==null)
         {  
    	 $userEvent = UserEvent::create(array(
                'event_id'=>$event_id,
                'user_id'=>Auth::User()->id,
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
        $groom_image = storeImage($groomimage);  // helper function call

        $bride_image = storeImage($brideimage);  // helper function call

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
                'user_id'=> Auth::User()->id,
                'role'=> 1,
                'user_event_id'=> $userEvent['id'],
                ));
            return redirect('home');
        }

        else
        {
            return redirect('home');
        }
     }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(Request $request)
    {
        $user = Auth::user();
        $weddingDetails = $this->getWeddingDetailsFromRequest($request);
        $wedding = $user->createWedding();
        $wedding->saveWeddingDetails($weddingDetails);

        return redirect('home');

    }

    public function getWeddingDetailsFromRequest(Request $request)
    {
        $weddingDetails = [
            'wdt'   => $request->input('wedding_date'),
            'bnm'   => $request->input('bride_name'),
            'gnm'   => $request->input('groom_name'),
            'bab'   => $request->input('bride_about'),
            'gab'   => $request->input('groom_about'),
            'bim'   => storeImage($request->file('bride_image')),
            'gim'   => storeImage($request->file('groom_image'))
        ];

        return $weddingDetails;
    }
    
    public function edit($id)
    {
      $userId = $id;
      $user = Auth::User();
      $userEventDetails = $user->userEvents()->first()->userEventAttributes()->toArray();
      $userEventDetails['user_event_id'] = $user->userEvents()->value('id');
      //dd($userEventDetails);
      return view('pages.editweddingform')->with($userEventDetails);
    }

    

     public function update($id, EditWeddingFormRequest $request)
     {
      
        $userEventId = intval($id);
        $userEventDetailId=UserEventDetail::all()->where('user_event_id',$userEventId)->pluck('id');

        
        $weddingdate = $request->input('wedding_date');
        $groomname = $request->input('groom_name');
        $bridename = $request->input('bride_name');
        $brideimg = $request->input('brideImage');
        $groomimg = $request->input('groomImage');
        $groomimage = Input::file('groom_image');
        $brideimage = Input::file('bride_image');
        $aboutbride = $request->input('bride_about');
        $aboutgroom = $request->input('groom_about');

        DB::table('user_event_details')->where('id',$userEventDetailId[0])->update(['attribute_value'=>$weddingdate]);
        DB::table('user_event_details')->where('id',$userEventDetailId[1])->update(['attribute_value'=>$groomname]);
        DB::table('user_event_details')->where('id',$userEventDetailId[2])->update(['attribute_value'=>$bridename]);
        DB::table('user_event_details')->where('id',$userEventDetailId[3])->update(['attribute_value'=>$aboutbride]);
        DB::table('user_event_details')->where('id',$userEventDetailId[4])->update(['attribute_value'=>$aboutgroom]);
        if(Input::file('groom_image')!=null)
        {
          $destinationPath = '../public/uploads/';
          $groom_image = getImageName($groomimage);
          $groomimage->move($destinationPath, $groom_image);
          DB::table('user_event_details')->where('id',$userEventDetailId[5])->update(['attribute_value'=>$groom_image]); 
        }
        else
        {
          DB::table('user_event_details')->where('id',$userEventDetailId[5])->update(['attribute_value'=>$groomimg]); 
        }
        if(Input::file('bride_image')!=null)
        {
          $destinationPath = '../public/uploads/';
          $bride_image = getImageName($brideimage);
          $brideimage->move($destinationPath, $bride_image);
          DB::table('user_event_details')->where('id',$userEventDetailId[6])->update(['attribute_value'=>$bride_image]); 
        }
        else
        {
          DB::table('user_event_details')->where('id',$userEventDetailId[6])->update(['attribute_value'=>$brideimg]); 
        }
        
        
        return redirect('home');


        
     }
}
