<?php

namespace weddingcart\Http\Controllers;

use weddingcart\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use weddingcart\UserEvent;
use weddingcart\UserEventRole;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
         {
         $userid=Auth::User()->id;
        }
        else
        {
            return view('errors.503');
        }
        /*$count=0;
        $userevent=UserEvent::all()->where('user_id',$userid);
        foreach ($userevent as $usereventid) {
            $ueid=$usereventid['id'];
            $count++;
        }
        if($count>0)
        {
            $disable=0;
        }*/
        $userrole=UserEventRole::all()->where('user_id',$userid);
        
        return view('home',['roleid'=>$userrole]);
    }
}
