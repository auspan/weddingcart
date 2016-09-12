@extends('app')

@section('content')


    <meta name="_token" content="{{ csrf_token() }}">

    <div class="heading-block center topmargin page-section">
        <h2>Contacts</h2>
    </div>
    <div class="container clearfix">
        <div class="row">
            <div class=" table-striped table-hover table-responsive">
                <style>

                </style>
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
                <div style="clear:both"></div>
                <!--<table id="myTable" class="table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="hidden"></th>
                            <th>
                                <div class="checkbox-inline">
                                    <label>
                                        <input type="checkbox" id="checkAll" name="query_myTextEditBox">
                                    </label>
                                </div>
                            </th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>
                                <button id="addSelected" type="button" class="btn-add btn addSelected" aria-label="Add">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1 ?>
                        @foreach($people as $person)
                            <tr id="row{{$i}}" class="hideRow">
                                <td id="id{{$i}}" class="hidden">{{ $person['googleId'] }}</td>
                                <td scope="row"><input type="checkbox" id="checkbox-{{ $i }}" name="googleContacts"></td>
                                <td id="name{{$i}}">{{ $person['name']}}</td>
                                <td id="email{{$i}}">{{ $person['email'] }}</td>
                                <td id="phone{{$i}}">{{ $person['phone'] }}</td>
                                <td>
                                    <button id="add-{{$i}}" type="button" class="btn-add btn addRow" aria-label="Add">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                            <?php  $i++; ?>
                        @endforeach
                    </tbody>
                </table>-->
            </div>
        </div>
    </div>
<div class="center bottommargin-lg">
    <a href="{{ url('contacts') }}" class="button button-rounded button-xlarge">Ok</a>
</div>

    
@stop