@extends('app')

@section('content')

    <meta name="_token" content="{{ csrf_token() }}">
    <div class="heading-block center topmargin page-section">
        <h2>Invitation</h2>
    </div>

    <section id="content" class="sectionmar">
        <div class="container clearfix content-wrap">
            <div class="row">
                <div class="col-xs-6 multigrid">
                    <div class="table-striped table-hover table-responsive">
                    <table id="guestsTable" class="table">
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
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($people as $person)
                            <tr>
                                <td class="hidden">{{ $person['id'] }}</td>
                                <td scope="row"><input type="checkbox" class="selectRow" name="query_myTextEditBox"></td>
                                <td>{{ $person['name']}}</td>
                                <td>{{ $person['email'] }}</td>
                                <td></td>
                                <td>
                                    <button  id="addContactForMail" data-toggle="tooltip" title="Add contact to send invitation" data-placement="bottom" type="button" class="btn-add btn addContactForEmail" aria-label="Add">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </button>
                                </td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                </div>
                <div class="col-xs-6">
            {!! Form::open(['url'=>'/sendinvite', 'class'=>'form-horizontal nobottommargin', 'method'=>'post']) !!}
                <div class="form-group">
                    <label for="toAddress" class="control-label col-sm-2">To: </label>
                    <div class="col-sm-10">
                        <!-- <div class="form-control" id="to-address">
                        </div> -->
                        <!-- <input type="text" class="form-control invite-form" id="to-address" name="to"> -->
                        <input type="hidden" id="to-recepient" name="to-recepient" value="">
                        <div id="recepient" style="display:inline-block;position:relative;min-width:468px;height:30px;border:1px solid gray"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="control-label col-sm-2">Subject: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control invite-form" id="subject" name="subject">
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="control-label col-sm-2">Message: </label>
                    <div class="col-sm-10">
                        <textarea id="invitation-message" class="form-control  invite-form" rows="5" name="invitaionMessage"></textarea>
                    </div>
                </div>
                <div class="center bottommargin-lg">
                    {!! Form::button('Send', ['class'=>'button button-rounded button-xlarge', 'type'=>'submit'] ) !!}
                </div>
                {!! Form::close() !!}
                </div>
        </div>
    </section>

@stop
