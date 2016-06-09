@extends('app')

@section('content')

    <meta name="_token" content="{{ csrf_token() }}">
    <div class="heading-block center topmargin page-section">
        <h2>Guest List</h2>
    </div>
    <div class="container clearfix">
        <div class="row">
            {{-- @include('contacts.addManualContacts') --}}
        </div>
    </div>
<div class="center bottommargin-lg">
{{--    <a href="{{ url('contacts') }}" class="button button-rounded button-xlarge">Import Google Contacts</a>--}}
</div>

@stop