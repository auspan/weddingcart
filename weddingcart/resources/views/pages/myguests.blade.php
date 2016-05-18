@extends('app')

@section('content')


    <meta name="_token" content="{{ csrf_token() }}">

    <div class="heading-block center topmargin page-section">
        <h2>Contacts</h2>
    </div>
    <div class="container clearfix">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <table id="myTable" class="table table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                            <th class="hidden"></th>
                            <th></th>
                            <th>
                                <input type="text" name="newName" id="newName">
                            </th>
                            <th>
                                <input type="text" name="newEmail" id="newEmail">
                            </th>
                            <th>
                                <input type="text" name="newPhone" id="newPhone">
                            </th>
                            <th>
                                <button id="addRow" type="button" class="btn btn-default btn-danger" aria-label="Add">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </button>
                            </th>
                            <th></th>
                        </tr>
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
                                <td>{{ $person['phone'] }}</td>
                                <td>
                                    <button class="editRow" type="button" class="btn btn-default" aria-label="Edit">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                <td>
                                    <button class="deleteRow" type="button" class="btn btn-default" aria-label="Delete">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<div class="center bottommargin-lg">
{{--    <a href="{{ url('contacts') }}" class="button button-rounded button-xlarge">Import Google Contacts</a>--}}
</div>

@stop