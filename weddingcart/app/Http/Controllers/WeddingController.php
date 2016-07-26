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
use weddingcart\WeddingEvent;
use weddingcart\UserEvent;
use weddingcart\User;
use weddingcart\UserEventDetail;
use weddingcart\UserEventRole;

class WeddingController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $eventAttribute = EventAttribute::all();

        return view('wedding.weddingform', ['EventAttr' => $eventAttribute]);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(WeddingFormRequest $request)
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
            'wdt' => $request->input('wedding_date'),
            'bnm' => $request->input('bride_name'),
            'gnm' => $request->input('groom_name'),
            'bab' => $request->input('bride_about'),
            'gab' => $request->input('groom_about')
        ];
        $bim = $request->file('bride_image');
        $gim = $request->file('groom_image');
        if ($bim != null)
        {
            $weddingDetails['bim'] = storeImage($bim);
        }
        if ($gim != null)
        {
            $weddingDetails['gim'] = storeImage($gim);
        }
        return $weddingDetails;
    }

    public function edit($id)
    {
        // $userId = $id;
        $user = User::find($id);
        $userEventDetails = $user->userEvents()->first()->userEventAttributes()->toArray();
        $userEventDetails['user_event_id'] = $user->userEvents()->value('id');

        return view('wedding.editweddingform')->with($userEventDetails);
    }


    public function update($id, EditWeddingFormRequest $request)
    {
        $userEventId = intval($id);
        $weddingDetails = $this->getWeddingDetailsFromRequest($request);
        $wedding = UserEvent::where('id', $userEventId)->first();
        $oldWeddingDetails = $wedding->userEventDetails()->pluck('attribute_value', 'attribute_code')->toArray();
        // dd($weddingDetails);
        $filtredWeddingDetails = array_diff($weddingDetails, $oldWeddingDetails);
        $wedding->updateWeddingDetails($filtredWeddingDetails);

        return redirect('home');
    }

    public function createWeddingEvent()
    {
        $user = Auth::User();
        $userEvent = $user->userEvents()->first();
        $masterEvents=WeddingEvent::all();
        $userWeddingEvents =  WeddingEvent::leftJoin('user_wedding_events', 'wedding_events.id', '=', 'user_wedding_events.wedding_event_id')
            ->select('wedding_events.id', 'wedding_events.event_name', 'wedding_events.event_image', 'user_wedding_events.id as user_wedding_event_id', 'user_wedding_events.venue', 'user_wedding_events.event_date')
            ->where('user_wedding_events.user_event_id',"=",$userEvent->id)->get();
           // dd($userWeddingEvents);
        if($userWeddingEvents->isEmpty())
        {
            $userWeddingEvents =  WeddingEvent::all();
            foreach ($userWeddingEvents as $userWeddingEvent) {
                $userWeddingEvent['venue'] = null;
                $userWeddingEvent['event_date'] = null;
            }
            
            // return view('wedding.master_wedding_events',['MasterEvent' => $masterEvents]);
            // dd($userWeddingEvents);
            // $userWeddingEvents = $user->userEvents()->first()->createDefaultEvent($masterEvents, $userWeddingEvents);
        }

        return view('wedding.user_wedding_events',['UserWeddingEvents' => $userWeddingEvents , 'MasterEvents' => $masterEvents]);
        
    }

    public function addMasterEvents()
    {
        $user = Auth::User();
        $userEventId = $user->userEvents()->value('id');
        $eventDetails = Input::all();
        $userWeddingEvents = $user->userEvents()->first()->setUserWeddingEvents($userEventId, $eventDetails);
        //$id=$userWeddingEvents['id'];
        $response = ['status' => 1,'title' => 'Success','message' => 'Event Added Successfully','level' => 'success'];
        return response()->json($response);
    }


}
