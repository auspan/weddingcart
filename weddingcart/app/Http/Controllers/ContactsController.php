<?php

namespace weddingcart\Http\Controllers;

use Illuminate\Http\Request;

use weddingcart\Http\Requests;

class ContactsController extends Controller
{

    public function getGoogleContacts(Request $request)
    {
        $token1 = $request->session()->get('_token');
        if ($request->session()->has('socialToken')) {
            $token = $request->session()->get('socialToken');
//            dd($token." : "."$token1");
        }
        else
        {
            return redirect('/social/auth/redirect/google');
        }
        $googleClient = $this->getGoogleClient($token);
        $peopleService = new \Google_Service_People($googleClient);
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

        // @TODO Loop for pagination i.e. fetch page by page from google

//        @TODO Store Synchtoken with the User Details so only incremental contact details are obtained in the next call
        $nextSyncToken = $result->getNextSyncToken();
//        var_dump($contacts);
        $people = $this->buildPeopleArray($contacts);
//        var_dump($people);
        return view('pages.contacts', compact('people'));
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
    //
}
