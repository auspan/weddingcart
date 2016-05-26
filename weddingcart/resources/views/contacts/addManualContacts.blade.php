<div class="col-md-7 multiGrid">
                <table id="guestsTable" class="table table-striped table-hover table-responsive">
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
                                <button id="addRow" type="button" class="btn-add btn" aria-label="Add">
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
            </div>