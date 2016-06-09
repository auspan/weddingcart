<form class="form-inline" id="add-guest-form">
    <div class="table-responsive">
        <table class="table table-bordered">
        <tr>
            <th class="hidden"></th>
            <th></th>
            <th>
                <label class="control-label" for="guestName">Name: </label>
                <input class="form-control" type="text" name="guestName" id="guestName" placeholder="Name">
            </th>
            <th>
                <label class="control-label" for="guestEmail">Email: </label>
                <input class="form-control" type="text" name="guestEmail" id="guestEmail" placeholder="Email">
            </th>
            <th>
                <label class="control-label" for="guestPhone">Phone: </label>
                <input class="form-control" type="text" name="guestPhone" id="guestPhone" placeholder="Phone">
            </th>
            <th>
                <button  id="addRow" type="submit" class="btn-add btn" aria-label="Add">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </button>
            </th>
            <th>
                <a href="{{ url('googlecontacts') }}">
                    <i class="icon-gplus"></i>
                </a>
                {{--<button type="button" class="btn btn-default" aria-label="Google">--}}
                {{--</button>--}}
            </th>
            <th></th>
        </tr>
        </table>
    </div>
</form>
<form id="update-guest-form">
    <table id="guestsTable" class="table table-striped table-hover table-responsive">
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
                <td>{{ $person['phone'] }}</td>
                <td>
                    <button class="editRow btn btn-default" type="button" aria-label="Edit">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                <td>
                    <button class="deleteRow btn btn-default" type="button" class="btn btn-default" aria-label="Delete">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</form>
