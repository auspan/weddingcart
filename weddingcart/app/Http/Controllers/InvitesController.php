<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use weddingcart\Http\Requests;
use Auth;
use DateTime;
use Illuminate\Support\Facades\Input;
use weddingcart\UserEventRole;
use weddingcart\WishlistItemContribution;
use weddingcart\UserEvent;
use weddingcart\UserEventDetail;
use weddingcart\UserEventWishlistItem;
use weddingcart\product;
use weddingcart\Http\Redirect;
use weddingcart\Mailers\AppMailer;
use weddingcart\Http\Flash;
use Session;
class InvitesController extends Controller
{
    protected $mailer;
    protected $flash;

    public function __construct(AppMailer $mailer, Flash $flash)
    {
        $this->middleware('auth');
        $this->mailer = $mailer;
        $this->flash = $flash;
    }

      public function invites()
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

        $data=array('wedding_date'=>$wed_date
                    , 'groom_name'=>$groomname
                    , 'bride_name'=>$bridename
                    , 'groom_image'=>$groomimage
                    , 'bride_image'=>$brideimage
                    , 'days'=>$day
                    , 'hours'=>$hour
                    , 'minutes'=>$minute
                    , 'seconds'=>$second);

        
        $user_event_wishlist_items=UserEventWishlistItem::all()->where('user_event_id',$usereid);
      return view ('pages.invites_landing',['Wishlist_Items'=>$user_event_wishlist_items])->with($data);
    }

    public function contribution($id , Request $request)
    {

        $productId = intval($id);
        $contribution = $request->input('contributionproductPrice');
        $guestMessage = $request->input('contributionmessage');
        $wishlistItem = UserEventWishlistItem::find($productId);
        $wishlistItemContribution = $wishlistItem->setWishlistItemContributionDetails($productId , $contribution , $guestMessage);
        $guestContributionDetails = $this->getGuestContributionDetails($contribution , $guestMessage);
        $productDetails = array_merge($wishlistItem->toArray(), $guestContributionDetails);
        return view('pages.paymentconfirmation',['productDetails'=>$productDetails]);
    }

    public function getGuestContributionDetails($guestContribution , $guestMessage)
    {
        return array('contribution_amount' => $guestContribution, 'guest_message' => $guestMessage);   
    }

    public function sendInvite(Request $request)
    {
        $userEvent = Auth::user()->userEvents()->first();
        $userEventAttributes = $userEvent->userEventAttributes();
        $userEventAttributes['tok'] = $userEvent->token;
        // $recepientName = $request->input('toAddress');
        // $recepientEmail = Auth::user()->contacts()->where('name' , $recepientName)->value('email');
        $subject = $request->input('subject');

        $recepients = $request->input('to-recepient');
        $recepientsList = explode(",",$recepients);
        $recepientsEmail = [];
        foreach ($recepientsList as $recepient) {
            $splitRecepient = explode(":", $recepient);
            $recepientEmail = $splitRecepient[1];
            array_push($recepientsEmail, $recepientEmail);

        }
        // dd($recepientsEmail);
         // $recepient = array('rajancs5553@gmail.com','rmprajan786@gmail.com','akhleshrana016@gmail.com');
        $data = array('to' => $recepientsEmail);
        $data['weddingDetails'] = $userEventAttributes;
        $data['subject'] = $subject;
        $this->mailer->sendInviteEmail($data);
        flash()->success('Email Sent Successfully');
        return Redirect('home');
    }

    public function showInvitesPage()
    {
        $user = Auth::user();
        $people = $user->contacts()->get()->toArray();
        return view('invitations.invite', compact('people'));
    }
}
