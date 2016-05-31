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
        $userId = $id;
        $user = Auth::User();
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
        $filtredWeddingDetails = array_diff($weddingDetails, $oldWeddingDetails);
        $wedding->updateWeddingDetails($filtredWeddingDetails);

        return redirect('home');
    }

    public function filterUpdatedValues($weddingDetails, $oldWeddingDetails)
    {

        /*    foreach($weddingDetails as $attributeCode => $attributeValue)
            {
              foreach ($oldWeddingDetails as $attribute_code => $attribute_value)
              {
                if($a)
              }
            } */
    }

}
