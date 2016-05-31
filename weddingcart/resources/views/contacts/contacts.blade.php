@extends('app')

@section('content')


    <meta name="_token" content="{{ csrf_token() }}">

    <div class="heading-block center topmargin page-section">
        <h2>Contacts</h2>
    </div>
    <div class="container clearfix">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <table id="myTable" class="table table-striped table-hover table-responsive table-condensed" cellspacing="0" width="100%">
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
                                <button id="addSelected" type="button" class="btn-add btn addSelected" aria-label="Add">Add
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1 ?>
                        @foreach($people as $person)
                            <tr id="row{{$i}}">
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
                </table>
            </div>
        </div>
    </div>
<div class="center bottommargin-lg">
    <a href="{{ url('contacts') }}" class="button button-rounded button-xlarge">Ok</a>
</div>

    
@stop