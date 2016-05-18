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
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1 ?>
                        @foreach($people as $person)
                            <tr>
                                <td scope="row"><input type="checkbox" id="checkbox{{ $i }}" name="query_myTextEditBox"></td>
                                <td id="name{{$i}}">{{ $person['name']}}</td>
                                <td id="email{{$i}}">{{ $person['email'] }}</td>
                                <td id="phone{{$i}}">{{ $person['phone'] }}</td>
                            </tr>
                            <?php  $i++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<div class="center bottommargin-lg">
{{--    <a href="{{ url('contacts') }}" class="button button-rounded button-xlarge">Import Google Contacts</a>--}}
</div>

    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
            });
        });
    </script>
@stop