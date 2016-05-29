@extends('app')

@section('content')

    <meta name="_token" content="{{ csrf_token() }}">
    <div class="heading-block center topmargin page-section">
        <h2>Invitation</h2>
    </div>

    <section id="content" class="sectionmar">
        <div class="container clearfix content-wrap">
            <form class="form-horizontal" action="">
                <div id="prefetch" class="form-group">
                    <label for="toAddress" class="control-label col-sm-2">To: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control typeahead" id="to-address" name="toAddress">
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="control-label col-sm-2">Subject: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="control-label col-sm-2">Message: </label>
                    <div class="col-sm-10">
                        <textarea id="invitation-message" class="form-control" rows="5" name="invitaionMessage"></textarea>
                    </div>
                </div>
                <div class="center bottommargin-lg">
                    <a href="{{ url('sendinvite') }}" class="button button-rounded button-xlarge">Send</a>
                </div>
            </form>
        </div>
    </section>

@stop
