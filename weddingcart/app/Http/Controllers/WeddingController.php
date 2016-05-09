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

 /*    public function UserEvent()
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
      } */

      public function UserEvent()
      {
        $user = Auth::User();
        $eventAttribute = EventAttribute::all();
        return view('pages.weddingform', ['EventAttr'=> $eventAttribute]);
        
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
            'gab'   => $request->input('groom_about')
        ];
          $bim = $request->file('bride_image');
          $gim = $request->file('groom_image');
          if($bim!=null)
          {
            $weddingDetails['bim'] = storeImage($bim);
          }
          if($gim!=null)
          {
            $weddingDetails['gim'] = storeImage($gim);
          }
        
        return $weddingDetails;
    }
    
    public function edit($id)
    {
      $userId = $id;
      $user = Auth::User();
      $userEventDetails = $user->userEvents()->first()->userEventAttributes()->toArray();
      $userEventDetails['user_event_id'] = $user->userEvents()->value('id');
      return view('pages.editweddingform')->with($userEventDetails);
    }


   public function update($id , EditWeddingFormRequest $request)
   {
      $userEventId = intval($id);
      $weddingDetails = $this->getWeddingDetailsFromRequest($request);
      $wedding = UserEvent::where('id', $userEventId)->first();
     // $oldWeddingDetails = $wedding->userEventDetails()->pluck('id', 'attribute_code', 'attribute_value');

      $wedding->updateWeddingDetails($weddingDetails);
      
      return redirect('home');
   }

/*   public function filterUpdatedValues($weddingDetails, $oldWeddingDetails)
   {

    foreach($weddingDetails as $attributeCode => $attributeValue)
    {
      foreach ($oldWeddingDetails as $attribute_code => $attribute_value)
      {
        if()
      }
    }
  }  */

}
