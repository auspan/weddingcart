@extends('app')

@section('content')


    <meta name="_token" content="{{ csrf_token() }}">

    <div class="heading-block center topmargin page-section">
        <h2>Contacts</h2>
    </div>
    <div class="container clearfix">
        <div class="row">
            <div class=" table-striped table-hover table-responsive">
                <ul id="mygooglecontacts" style="list-style: none;float: left;">
                    <?php $i=1 ?>
                    @foreach($people as $person)

                    <li googleId="{{$person['googleId']}}" class="google-contact" googleName="{{$person['name']}}" googlePhone="{{$person['phone']}}" googleEmail="{{$person['email']}}" onclick="AddContactFromGoogle('{{$person['googleId']}}')">
                        <div>
                            <div style="border-bottom: 1px solid white">
                                <span class=""><input type="checkbox" name="googleContacts"/></span><span style="margin-left: 10px">{{ $person['name']}}</span>
                            </div>
                            <div>
                               <div><span class="fa fa-phone icon"></span><span class="iconDesc">{{ $person['phone'] }}</span></div>
                                <div><span class="fa fa-envelope icon"></span><span class="iconDesc">{{ $person['email'] }}</span></div>
                            </div>
                        </div>
                    </li>
                            <?php  $i++; ?>
                        @endforeach
                </ul>
                <div class="clear"></div>
                
            </div>
        </div>
    </div>
<div class="center bottommargin-lg">
    <a href="{{ url('contacts') }}" class="button button-rounded button-xlarge">Ok</a>
</div>

    
@stop