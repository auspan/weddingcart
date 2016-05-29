<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use weddingcart\Http\Requests;
use weddingcart\contact;
use Illuminate\Support\Facades\Input;

class ContactsController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        $people = $user->contacts()->get()->toArray();
        return view('contacts.myguests', compact('people'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $newContact = new Contact([
           'name' => $request->input('guestName'),
            'email' => $request->input('guestEmail'),
            'phone' => $request->input('guestPhone')
        ]);

        $contact = $user->contacts()->save($newContact);

        return response()->json([
            'id'    => $contact->id,
            'guestName'  => $contact->name,
            'guestEmail' => $contact->email,
            'guestPhone' => $contact->phone
        ]);
    }

    public function update(Request $request)
    {
        $contact = Contact::find($request->input('guestId'));

        $contact['name'] = $request->input('guestName');
        $contact['email'] = $request->input('guestEmail');
        $contact['phone'] = $request->input('guestPhone');

        $contact->save();

        return response()->json([
            'id'    => $contact->id,
            'guestName'  => $contact->name,
            'guestEmail' => $contact->email,
            'guestPhone' => $contact->phone
        ]);
    }

    public function destroy(Request $request)
    {
        Contact::destroy($request->input('guestId'));
    }
    public function importGoogleContacts(Request $request)
    {
        if ($request->session()->has('socialToken')) {
            $googleToken = $request->session()->get('socialToken');
        }
        else
        {
            return redirect()->action('Auth\AuthController@redirectToProvider', ['provider' => 'google']);
        }

//        dd($googleToken);
        $googleClient = $this->getGoogleClient($googleToken);
        $peopleService = new \Google_Service_People($googleClient);

//        dd($peopleService);
        $contacts = $this->getContactsFromGoogle($peopleService);
        // @TODO Loop for pagination i.e. fetch page by page from google

//        @TODO Store Synchtoken with the User Details so only incremental contact details are obtained in the next call
//        $nextSyncToken = $result->getNextSyncToken();
//        var_dump($contacts);
        $people = $this->buildPeopleArray($contacts);
//        var_dump($people);
        return view('pages.contacts', compact('people'));
    }


    public function getContactsFromGoogle($peopleService)
    {
        $nextPageToken = '';
        $contacts = array();
//        dd("Token: ".$token);
        do{
            $result = $peopleService->people_connections->listPeopleConnections('people/me', [
                'pageToken' => $nextPageToken,
                'pageSize' => 300,
                'requestMask.includeField' => 'person.names,person.emailAddresses,person.phoneNumbers'
            ]);
//            dd($result);
            $nextPageToken = $result->getNextPageToken();
            $contacts = array_merge($contacts, $result->toSimpleObject()->connections);

//            var_dump($nextPageToken);
        } while($result->getNextPageToken() != null);

        return $contacts;


    }
    public function getGoogleToken(Request $request)
    {
        if ($request->session()->has('socialToken')) {
             $token = $request->session()->get('socialToken');
            return $token;
        }
        else
        {
            return redirect()->action('Auth\AuthController@redirectToProvider', ['provider' => 'google']);
        }

        return $token;
    }
    /**
     * Extracts Required Information from Google Contact Api Results
     * @param \stdClass $contacts
     * @return array
     */
    private function buildPeopleArray(Array $contacts)
    {
        $people = array();

        foreach ($contacts as $contact)
        {
            $person = array(
                'name' => array_get($contact, 'names.0.displayName'),
                'email' => array_get($contact, 'emailAddresses.0.value'),
                'phone' => array_get($contact, 'phoneNumbers.0.canonicalForm')
            );
            if($person['email']){
                array_push($people, $person);
            }
        }
        return $people;
    }

    private function getGoogleClient(String $token)
    {
        $googleClient = new \Google_Client();
        $googleClient->setClientId(env('GMAIL_CLIENT_ID'));
        $googleClient->setClientSecret(env('GMAIL_CLIENT_SECRET'));
        $googleClient->setAccessToken(['access_token' => $token, 'expires_in' => 3600]);
        $googleClient->setScopes(['https://www.googleapis.com/auth/contacts.readonly', 'https://www.googleapis.com/auth/plus.login']);
        return $googleClient;
    }

    public function savecontacts()
    {
        $userid=Auth::User()->id;
        contact::create(array(
                'Name'=>Input::get('personName'),
                'Email'=>Input::get('personEmail'),
                'Phone'=>Input::get('personPhone'),
                'user_id'=>$userid
            ));
        return 1;
    }
    //

    public function showInvitesPage()
    {
       $googleContacts = Array();

        for($i = 1; $i <55; $i++)
        {
            $contact = [
             'name' => 'John '.$i.' Doe', 'email' => 'jdoe'.$i.'@ats.com'
            ];

            array_push($googleContacts, $contact);
        }

        return response()->json($googleContacts);
    }

    public function getContacts()
    {
        $user = Auth::user();

        $contacts = $user->contacts()->get(['name', 'email'])->toArray();
        return response()->json($contacts);

    }
}
