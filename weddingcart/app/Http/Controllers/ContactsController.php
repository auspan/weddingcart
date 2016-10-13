<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use weddingcart\Http\Requests;
use weddingcart\Contact;
use Illuminate\Support\Facades\Input;

class ContactsController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $people = $user->contacts()->get()->toArray();

        return view('contacts.guestlist', compact('people'));
    }

    public function store(Request $request)
    {
        // $this->validate($request, ['newName' => 'required',
        //  'newEmail' => 'required',
        //   'newPhone' => 'required']);

        // @TODO store social_media_reference e.g. google id along with the contact
        $user = Auth::user();

        $newContact = new Contact([
            'name' => $request->input('guestName'),
            'email' => $request->input('guestEmail'),
            'phone' => str_replace('+', '00', $request->input('guestPhone'))

        ]);
        $email = $newContact->email;
        $allContactPersonsEmail = $user->contacts()->pluck('email')->toArray();
        if (in_array(strtolower($email), $allContactPersonsEmail))
        {
            return response()->json([
                'message' => "Guest Already Exits"
            ]);
        } else
        {
            $contact = $user->contacts()->save($newContact);

            return response()->json([
                'id' => $contact->id,
                'guestName' => $contact->name,
                'guestEmail' => $contact->email,
                'guestPhone' => $contact->phone
            ]);
        }
    }

    public function addMultipleContacts()
    {
        $googleContacts = Input::get('contacts');
        $user = Auth::user();
        foreach ($googleContacts as $contact)
        {
            $newContact = new Contact([
                'name' => $contact['guestName'],
                'email' => $contact['guestEmail'],
                'phone' => $contact['guestPhone']
            ]);
            $contact = $user->contacts()->save($newContact);
        }

    }

    public function deleteMultipleContacts()
    {
        $googleContacts = Input::get('contacts');
        $user = Auth::user();
        foreach ($googleContacts as $contact)
        {
            Contact::where('email', $contact)->where('user_id', $user->id)->delete();
        }
    }

    public function update(Request $request)
    {
        $contact = Contact::find($request->input('editId'));

        $contact['name'] = $request->input('editName');
        $contact['email'] = $request->input('editEmail');
        $contact['phone'] = $request->input('editPhone');

        $contact->save();

        return response()->json([
            'editId' => $contact->id,
            'editName' => $contact->name,
            'editEmail' => $contact->email,
            'editPhone' => $contact->phone
        ]);
    }

    public function destroy(Request $request)
    {
        Contact::destroy($request->input('guestId'));
    }

    public function importGoogleContacts(Request $request)
    {

        if ($request->session()->has('socialToken'))
        {
            $googleToken = $request->session()->get('socialToken');
        } else
        {
            return redirect()->action('Auth\AuthController@redirectToProvider', ['provider' => 'google']);
        }


        // $googleToken = $request->session()->get('socialToken');
        // dd($googleToken);

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
//        dd($people);
        return view('contacts.contacts', compact('people'));
    }


    public function getContactsFromGoogle($peopleService)
    {
        $nextPageToken = '';
        $contacts = array();
//        dd("Token: ".$token);
        do
        {
            $result = $peopleService->people_connections->listPeopleConnections('people/me', [
                'pageToken' => $nextPageToken,
                'pageSize' => 300,
                'requestMask.includeField' => 'person.names,person.emailAddresses,person.phoneNumbers'
            ]);
            // dd($result);
            $nextPageToken = $result->getNextPageToken();
            $contacts = array_merge($contacts, $result->toSimpleObject()->connections);

//            var_dump($nextPageToken);
        } while ($result->getNextPageToken() != null);

        // dd($contacts);
        return $contacts;
    }

    public function getGoogleToken(Request $request)
    {
        if ($request->session()->has('socialToken'))
        {
            $token = $request->session()->get('socialToken');

            return $token;
        } else
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
        $user = Auth::user();
        $existingContacts = $user->contacts()->pluck('email')->toArray();
        $people = array();
        foreach ($contacts as $contact)
        {
            $person = array(
                'googleId' => substr(array_get($contact, 'resourceName'), 7),
                'name' => array_get($contact, 'names.0.displayName'),
                'email' => array_get($contact, 'emailAddresses.0.value'),
                'phone' => array_get($contact, 'phoneNumbers.0.canonicalForm')
            );
            if (in_array($person['email'], $existingContacts) || empty($person['name']))
            {
                continue;
            } else
            {
                array_push($people, $person);
            }
        }

        return array_sort($people, function ($value)
        {
            return $value['name'];
        });
//        return array_sort_recursive($people);
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
        $userid = Auth::User()->id;
        contact::create(array(
            'Name' => Input::get('personName'),
            'Email' => Input::get('personEmail'),
            'Phone' => Input::get('personPhone'),
            'user_id' => $userid
        ));

        return 1;
    }

    //

    public function showInvitesPage()
    {
        $googleContacts = Array();

        for ($i = 1; $i < 55; $i++)
        {
            $contact = [
                'name' => 'John ' . $i . ' Doe', 'email' => 'jdoe' . $i . '@ats.com'
            ];

            array_push($googleContacts, $contact);
        }

        return response()->json($googleContacts);
    }

    public function getContacts(Request $request)
    {

        $query = $request->input('name');
        $user = Auth::user();
        $contacts = $user->contacts()->where('name', 'LIKE', "%$query%")->get(['name', 'email'])->toArray();

        return response()->json($contacts);

    }
}
